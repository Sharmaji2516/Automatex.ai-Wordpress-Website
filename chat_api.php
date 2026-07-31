<?php
/**
 * AutomateX Chatbot API Handler
 * Integrates with Google Gemini or Groq APIs depending on key format.
 */
header('Content-Type: application/json');

// Retrieve JSON input
$input = json_decode(file_get_contents('php://input'), true);
$messages = isset($input['messages']) ? $input['messages'] : [];

if (empty($messages)) {
    echo json_encode(['response' => "Hello! How can I help you today?"]);
    exit;
}

// Load WordPress context to access constants defined in wp-config.php
$wp_load_path = __DIR__ . '/wp-load.php';
if (file_exists($wp_load_path)) {
    require_once $wp_load_path;
}

$api_key = defined('GROQ_API_KEY') ? GROQ_API_KEY : (defined('GEMINI_API_KEY') ? GEMINI_API_KEY : '');

// If no API Key is provided, use a smart rule-based responder for local testing
if (empty($api_key)) {
    $last_query = end($messages)['content'];
    $last_query_lower = strtolower($last_query);
    
    $response = "I am the AutomateX.ai AI Assistant. To enable fully dynamic AI responses on the live site, please define the Groq API Key or Gemini API Key constant in your `wp-config.php` file.";
    
    if (strpos($last_query_lower, 'what is') !== false || strpos($last_query_lower, 'automatex') !== false || strpos($last_query_lower, 'about') !== false) {
        $response = "AutomateX.ai is a leading provider of high-performance cloud ERP systems, custom CRM software, POS billing software, and custom web design and digital marketing services in India.";
    } elseif (strpos($last_query_lower, 'services') !== false || strpos($last_query_lower, 'features') !== false) {
        $response = "We offer the following key services:\n- **Custom ERP Software Development**\n- **Custom CRM Software Development**\n- **E-Commerce Website Development**\n- **Responsive Web Design**\n- **Search Engine Optimization (SEO)**\n- **Social Media Optimization (SMO)**\n\nHow can I help you with any of these?";
    } elseif (strpos($last_query_lower, 'contact') !== false || strpos($last_query_lower, 'support') !== false || strpos($last_query_lower, 'demo') !== false) {
        $response = "You can contact our support team at [ACTION:CONTACT] or request a live demonstration of our platform at [ACTION:DEMO].";
    }
    
    echo json_encode(['response' => $response]);
    exit;
}

// System prompt to define chatbot persona and behavior
$system_instruction = "You are the AutomateX.ai AI Assistant, a friendly and professional representative of AutomateX.ai (a brand of Digify Soft Solutions). "
    . "We develop cloud ERP, Custom CRM, custom billing software, and responsive web/e-commerce development. "
    . "Always promote AutomateX.ai services. Keep answers concise (under 3-4 sentences). "
    . "If the user wants to contact support or register, suggest they use the buttons or links. "
    . "Use [ACTION:CONTACT] when they want to contact us, and [ACTION:DEMO] when they want to request a demo.";

// 1. ROUTE TO GROQ (If key starts with 'gsk_')
if (strpos($api_key, 'gsk_') === 0) {
    $url = "https://api.groq.com/openai/v1/chat/completions";
    $headers = [
        'Authorization: Bearer ' . $api_key,
        'Content-Type: application/json'
    ];

    $payload_messages = [
        ['role' => 'system', 'content' => $system_instruction]
    ];

    foreach ($messages as $msg) {
        $role = ($msg['role'] === 'assistant') ? 'assistant' : 'user';
        $payload_messages[] = [
            'role' => $role,
            'content' => $msg['content']
        ];
    }

    $payload = [
        'model' => 'llama-3.1-8b-instant', // Extremely fast Llama 3.1 model on Groq
        'messages' => $payload_messages,
        'temperature' => 0.7,
        'max_tokens' => 800
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response_raw = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_status === 200) {
        $res_json = json_decode($response_raw, true);
        $text_response = $res_json['choices'][0]['message']['content'] ?? '';
        if (!empty($text_response)) {
            echo json_encode(['response' => trim($text_response)]);
            exit;
        }
    }
} 
// 2. ROUTE TO GOOGLE GEMINI (Default)
else {
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . urlencode($api_key);
    $gemini_contents = [];

    foreach ($messages as $msg) {
        $role = ($msg['role'] === 'assistant') ? 'model' : 'user';
        $gemini_contents[] = [
            'role' => $role,
            'parts' => [['text' => $msg['content']]]
        ];
    }

    $payload = [
        'contents' => $gemini_contents,
        'systemInstruction' => [
            'parts' => [['text' => $system_instruction]]
        ],
        'generationConfig' => [
            'temperature' => 0.7,
            'maxOutputTokens' => 800
        ]
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response_raw = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_status === 200) {
        $res_json = json_decode($response_raw, true);
        $text_response = $res_json['candidates'][0]['content']['parts'][0]['text'] ?? '';
        if (!empty($text_response)) {
            echo json_encode(['response' => trim($text_response)]);
            exit;
        }
    }
}

// Fallback error response
echo json_encode(['response' => "I'm sorry, I encountered an error communicating with my AI brain. Please try again or contact support at [ACTION:CONTACT]."]);
