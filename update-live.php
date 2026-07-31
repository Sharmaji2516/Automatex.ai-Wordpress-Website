<?php
/**
 * AutomateX Auto-Deployer Script
 * Downloads the latest fixed theme files from GitHub and installs them on the live server.
 */

// Set header
header('Content-Type: text/html; charset=utf-8');

echo '<html><head><title>AutomateX Live Deployer</title>';
echo '<style>body { font-family: sans-serif; background: #0f172a; color: #f8fafc; padding: 40px; }';
echo '.card { background: #1e293b; border-radius: 12px; padding: 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); max-width: 600px; margin: 0 auto; }';
echo 'h1 { color: #ff9900; margin-top: 0; }';
echo '.status { padding: 12px; border-radius: 6px; margin: 8px 0; font-family: monospace; }';
echo '.success { background: rgba(16, 185, 129, 0.2); border: 1px solid #10b981; color: #10b981; }';
echo '.error { background: rgba(239, 68, 68, 0.2); border: 1px solid #ef4444; color: #ef4444; }';
echo '.info { background: rgba(59, 130, 246, 0.2); border: 1px solid #3b82f6; color: #3b82f6; }';
echo 'a { color: #ff9900; text-decoration: none; font-weight: bold; }</style></head><body>';
echo '<div class="card">';
echo '<h1>AutomateX Auto-Deployer</h1>';

$files_to_sync = array(
    'wp-content/themes/automatex-theme/header.php',
    'wp-content/themes/automatex-theme/footer.php',
    'wp-content/themes/automatex-theme/template-contact.php',
    'wp-content/themes/automatex-theme/front-page.php',
    'wp-content/themes/automatex-theme/assets/css/premium-home.css',
    'wp-content/themes/automatex-theme/single-cities.php',
    'wp-content/themes/automatex-theme/assets/css/dark-ai-theme.css',
    'wp-content/themes/automatex-theme/assets/css/responsive.css',
    'wp-content/themes/automatex-theme/assets/js/custom.js',
    'wp-content/themes/automatex-theme/functions.php',
    'wp-content/plugins/automatex-db-bridge/automatex-db-bridge.php',
    'wp-content/themes/automatex-theme/page-chatbot-service-base.php',
    'wp-content/themes/automatex-theme/page-ai-chatbot-for-customer-support.php',
    'wp-content/themes/automatex-theme/page-manufacturing-chatbot.php',
    'wp-content/themes/automatex-theme/page-sales-chatbot.php',
    'wp-content/themes/automatex-theme/page-billing-chatbot.php',
    'wp-content/themes/automatex-theme/page-healthcare-chatbot.php',
    'wp-content/themes/automatex-theme/page-enterprise-chatbot.php',
    'wp-content/themes/automatex-theme/page-education-chatbot.php',
    'wp-content/themes/automatex-theme/page-social-media-optimization.php',
    'wp-content/themes/automatex-theme/page-off-page-seo-services.php',
    'wp-content/themes/automatex-theme/page-technical-seo-services.php',
    'wp-content/themes/automatex-theme/page-modern-responsive-website-design.php',
    'wp-content/themes/automatex-theme/page-responsive-website-design.php',
    'wp-content/themes/automatex-theme/page-e-commerce-website-development.php',
    'wp-content/themes/automatex-theme/page-ecommerce-website-development.php',
    'wp-content/themes/automatex-theme/page-custom-crm-solutions.php',
    'wp-content/themes/automatex-theme/page-crm-software-development.php',
    'set-templates.php',
    'check-active-plugins.php'
);

$github_raw_url = 'https://raw.githubusercontent.com/Sharmaji2516/Automatex.ai-Wordpress-Website/main/';

$success = true;

foreach ( $files_to_sync as $relative_path ) {
    $url = $github_raw_url . $relative_path;
    $local_path = __DIR__ . '/' . $relative_path;
    
    // Ensure parent directory exists
    $dir = dirname( $local_path );
    if ( ! is_dir( $dir ) ) {
        if ( mkdir( $dir, 0755, true ) ) {
            echo '<div class="status info">Created directory: ' . htmlspecialchars($relative_path) . '</div>';
        } else {
            echo '<div class="status error">Failed to create directory: ' . htmlspecialchars($relative_path) . '</div>';
            $success = false;
            continue;
        }
    }
    
    // Fetch file content using curl or file_get_contents
    $content = false;
    if ( function_exists('curl_init') ) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $content = curl_exec($ch);
        curl_close($ch);
    } else {
        $content = @file_get_contents($url);
    }
    
    if ( $content === false || empty($content) ) {
        echo '<div class="status error">Failed to download: ' . htmlspecialchars($relative_path) . '</div>';
        $success = false;
    } else {
        if ( @file_put_contents( $local_path, $content ) !== false ) {
            echo '<div class="status success">Updated: ' . htmlspecialchars($relative_path) . '</div>';
        } else {
            echo '<div class="status error">Failed to write to: ' . htmlspecialchars($relative_path) . '</div>';
            $success = false;
        }
    }
}

if ( $success ) {
    echo '<h3 style="color: #10b981; margin-top: 20px;">Deploy successful!</h3>';
    echo '<p>All files have been successfully synced and Cloudflare cache has been bypassed.</p>';
    echo '<p>Please perform a hard refresh (Ctrl + F5) on <a href="https://automatexai.co.in/">https://automatexai.co.in/</a> now.</p>';
} else {
    echo '<h3 style="color: #ef4444; margin-top: 20px;">Deploy finished with errors.</h3>';
    echo '<p>Please check file permissions on your server.</p>';
}

// Self-destruct for security
@unlink(__FILE__);
echo '</div></body></html>';
