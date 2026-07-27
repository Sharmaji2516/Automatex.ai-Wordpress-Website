<?php
/**
 * AutomateX PHP Execution Error Diagnoser
 * Upload this file to the root of your WordPress website (public_html) using WP File Manager.
 * Then visit: https://automatexai.co.in/wp-debug-check.php
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Enable WP Debug constants before WordPress loads
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', false);

echo "<html><head><title>AutomateX Live Debugger</title>";
echo "<style>body { font-family: sans-serif; background: #0f172a; color: #f8fafc; padding: 30px; }";
echo "pre { background: #1e293b; padding: 20px; border-radius: 8px; border: 1px solid #334155; overflow-x: auto; color: #cbd5e1; font-size: 13px; line-height: 1.5; }";
echo "h2 { color: #ff9900; } h3 { color: #38bdf8; }</style></head><body>";
echo "<h2>AutomateX Live Error Diagnostics (Sandbox Bootstrapper)</h2>";

if (file_exists(__DIR__ . '/wp-load.php')) {
    require_once(__DIR__ . '/wp-load.php');
} else {
    die("<p style='color:red;'>wp-load.php not found. Make sure this is in the WordPress root directory.</p>");
}

echo "<h3>Simulating Page Render for 'cities/amritsar-2/'...</h3>";

// Set query vars for the target post
set_query_var('city_slug', 'amritsar-2');

// Execute the single-cities.php template inside a try-catch to see if there is a fatal error
try {
    $template = get_template_directory() . '/single-cities.php';
    if (file_exists($template)) {
        // Output buffering to prevent template HTML from flooding the response if it succeeds
        ob_start();
        include $template;
        ob_end_clean();
        echo "<h3 style='color:green;'>Success: No fatal PHP errors detected during template dry run!</h3>";
        echo "<p>This means the template ran successfully without throwing exceptions under simulated conditions.</p>";
    } else {
        echo "<h3 style='color:red;'>Error: Template single-cities.php not found in theme!</h3>";
    }
} catch (Throwable $e) {
    echo "<h3 style='color:red;'>FATAL ERROR DETECTED:</h3>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . "</p>";
    echo "<p><strong>Line:</strong> " . htmlspecialchars($e->getLine()) . "</p>";
    echo "<p><strong>Trace:</strong></p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}

echo "</body></html>";
