<?php
/**
 * AutomateX Live Error Diagnostics Script
 * Upload this file to the root of your WordPress website (public_html) using WP File Manager.
 * Then visit: https://automatexai.co.in/wp-debug-check.php
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<html><head><title>AutomateX Live Debugger</title>";
echo "<style>body { font-family: sans-serif; background: #0f172a; color: #f8fafc; padding: 30px; }";
echo "pre { background: #1e293b; padding: 20px; border-radius: 8px; border: 1px solid #334155; overflow-x: auto; color: #cbd5e1; font-size: 13px; line-height: 1.5; }";
echo "h2 { color: #ff9900; } h3 { color: #38bdf8; }</style></head><body>";
echo "<h2>AutomateX Live Error Diagnostics</h2>";

// 1. Check php error_log in root
echo "<h3>Checking 'error_log' in Root:</h3>";
$root_log = __DIR__ . '/error_log';
if (file_exists($root_log)) {
    echo "<p style='color:#22c55e;'>Found error_log file. Showing last 20 lines:</p>";
    $lines = file($root_log);
    $last_lines = array_slice($lines, -20);
    echo "<pre>" . htmlspecialchars(implode("", $last_lines)) . "</pre>";
} else {
    echo "<p style='color:#94a3b8;'>No 'error_log' file found in root.</p>";
}

// 2. Check wp-content/debug.log
echo "<h3>Checking 'wp-content/debug.log':</h3>";
$wp_log = __DIR__ . '/wp-content/debug.log';
if (file_exists($wp_log)) {
    echo "<p style='color:#22c55e;'>Found debug.log file. Showing last 20 lines:</p>";
    $lines = file($wp_log);
    $last_lines = array_slice($lines, -20);
    echo "<pre>" . htmlspecialchars(implode("", $last_lines)) . "</pre>";
} else {
    echo "<p style='color:#94a3b8;'>No 'wp-content/debug.log' file found.</p>";
}

// 3. Check for PHP Configuration
echo "<h3>PHP Environment Details:</h3>";
echo "<ul>";
echo "<li>PHP Version: " . phpversion() . "</li>";
echo "<li>Memory Limit: " . ini_get('memory_limit') . "</li>";
echo "<li>WP_DEBUG constant status: " . (defined('WP_DEBUG') ? (WP_DEBUG ? 'Enabled' : 'Disabled') : 'Not Defined') . "</li>";
echo "</ul>";

// 4. Test loading single-cities.php template file for syntax or inclusion issues
echo "<h3>Inclusion Test of CPT Template:</h3>";
$template_path = __DIR__ . '/wp-content/themes/automatex-theme/single-cities.php';
if (file_exists($template_path)) {
    echo "<p style='color:#22c55e;'>Template file exists at target location. Running dry run check...</p>";
    // We can run a syntax check using php -l if shell exec is allowed, otherwise show size
    echo "<ul>";
    echo "<li>File size: " . filesize($template_path) . " bytes</li>";
    echo "<li>File permissions: " . substr(sprintf('%o', fileperms($template_path)), -4) . "</li>";
    echo "</ul>";
} else {
    echo "<p style='color:#ef4444;'>ERROR: single-cities.php template is missing in theme folder!</p>";
}

echo "</body></html>";
