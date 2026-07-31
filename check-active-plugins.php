<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load WordPress
require_once __DIR__ . '/wp-load.php';

echo "<h2>AutomateX Live Diagnostics</h2>";

// Check if plugin is active
$active_plugins = get_option('active_plugins');
echo "<h3>Active Plugins:</h3><ul>";
$bridge_active = false;
foreach ($active_plugins as $plugin) {
    echo "<li>" . htmlspecialchars($plugin) . "</li>";
    if (strpos($plugin, 'automatex-db-bridge') !== false) {
        $bridge_active = true;
    }
}
echo "</ul>";

if ($bridge_active) {
    echo "<p style='color:green; font-weight:bold;'>✔ AutomateX DB Bridge plugin is active.</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>✘ AutomateX DB Bridge plugin is NOT active.</p>";
}

// Check SMTP Constants
echo "<h3>SMTP Constants check:</h3>";
$smtp_constants = ['SMTP_HOST', 'SMTP_USER', 'SMTP_PORT', 'SMTP_PASSWORD', 'SMTP_TO_EMAIL', 'SMTP_SECURE', 'SMTP_FROM'];
foreach ($smtp_constants as $const) {
    if (defined($const)) {
        echo "<p>✔ Constant <strong>{$const}</strong> is defined (Value hidden for security).</p>";
    } else {
        echo "<p style='color:orange;'>✘ Constant <strong>{$const}</strong> is NOT defined.</p>";
    }
}

// Test Native PHP mail()
echo "<h3>Native PHP mail() Test:</h3>";
$to = "gautamalik1@gmail.com,pragatimodi10@gmail.com,webdev.digifysoft@gmail.com";
$subject = "AutomateX PHP mail() test";
$message = "Test message from native PHP mail().";
$headers = "From: support-noreply@automatexai.co.in\r\n";

$php_mail_result = @mail($to, $subject, $message, $headers);
if ($php_mail_result) {
    echo "<p style='color:green; font-weight:bold;'>✔ Native PHP mail() returned TRUE.</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>✘ Native PHP mail() returned FALSE (Disabled/blocked by server PHP settings).</p>";
}
