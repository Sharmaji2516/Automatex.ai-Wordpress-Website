<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load WordPress
require_once __DIR__ . '/wp-load.php';

echo "<h2>WordPress Mail Test</h2>";

// Capture mail failure details
add_action('wp_mail_failed', function($wp_error) {
    echo "<p style='color:red;'><strong>Mail failed event captured:</strong><br>";
    echo "Code: " . htmlspecialchars($wp_error->get_error_code()) . "<br>";
    echo "Message: " . htmlspecialchars($wp_error->get_error_message()) . "<br>";
    echo "Data: <pre>" . print_r($wp_error->get_error_data(), true) . "</pre>";
    echo "</p>";
});

$to = "gautamalik1@gmail.com,pragatimodi10@gmail.com,webdev.digifysoft@gmail.com";
$subject = "AutomateX.ai Lead Mail Test - Live Server";
$body = "This is a diagnostic test email to verify mail delivery from the AutomateX.ai live server.";
$headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    'From: Automatex.ai Website <support-noreply@automatexai.co.in>'
);

echo "<p>Attempting to send mail to: <strong>" . htmlspecialchars($to) . "</strong>...</p>";

$result = wp_mail($to, $subject, $body, $headers);

if ($result) {
    echo "<p style='color:green; font-weight:bold;'>✔ wp_mail() returned TRUE (Accepted for delivery).</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>✘ wp_mail() returned FALSE (Delivery failed).</p>";
}
