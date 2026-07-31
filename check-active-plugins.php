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
    echo "<p style='color:green; font-weight:bold;'>✔ AutomateX DB Bridge plugin is listed in active_plugins.</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>✘ AutomateX DB Bridge plugin is NOT active.</p>";
}

// Check class existence
if (class_exists('AutomateX_DB_Bridge')) {
    echo "<p style='color:green; font-weight:bold;'>✔ AutomateX_DB_Bridge class exists and is loaded.</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>✘ AutomateX_DB_Bridge class is NOT loaded.</p>";
}

// Test database connection
if (defined('AUTOMATEX_DB_HOST')) {
    echo "<p>Custom Database Constants: Host=" . AUTOMATEX_DB_HOST . ", User=" . AUTOMATEX_DB_USER . ", DB=" . AUTOMATEX_DB_NAME . "</p>";
    $conn = @new mysqli(AUTOMATEX_DB_HOST, AUTOMATEX_DB_USER, AUTOMATEX_DB_PASSWORD, AUTOMATEX_DB_NAME);
    if ($conn->connect_error) {
        echo "<p style='color:red; font-weight:bold;'>✘ Custom Database connection failed: " . $conn->connect_error . "</p>";
    } else {
        echo "<p style='color:green; font-weight:bold;'>✔ Custom Database connection succeeded.</p>";
        $conn->close();
    }
} else {
    echo "<p>Custom Database Constants NOT defined. Falling back to default WP database: Host=" . DB_HOST . ", User=" . DB_USER . ", DB=" . DB_NAME . "</p>";
    $conn = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        echo "<p style='color:red; font-weight:bold;'>✘ Default WP Database connection failed: " . $conn->connect_error . "</p>";
    } else {
        echo "<p style='color:green; font-weight:bold;'>✔ Default WP Database connection succeeded.</p>";
        $conn->close();
    }
}
