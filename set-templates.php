<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load WordPress
require_once __DIR__ . '/wp-load.php';

echo "<h2>WordPress Page Template Setter</h2>";

$slugs_to_templates = [
    'search-engine-optimization' => 'page-search-engine-optimization.php',
    'seo' => 'page-seo.php',
    'digital-marketing-services' => 'page-digital-marketing-services.php',
    'social-media-optimization' => 'page-social-media-optimization.php',
    'on-page-seo-services' => 'page-on-page-seo-services.php',
    'off-page-seo-services' => 'page-off-page-seo-services.php',
    'technical-seo-services' => 'page-technical-seo-services.php',
    'modern-responsive-website-design' => 'page-modern-responsive-website-design.php',
    'responsive-website-design' => 'page-responsive-website-design.php',
    'e-commerce-website-development' => 'page-e-commerce-website-development.php',
    'ecommerce-website-development' => 'page-ecommerce-website-development.php',
    'custom-crm-solutions' => 'page-custom-crm-solutions.php',
    'crm-software-development' => 'page-crm-software-development.php',
    'web-development-services' => 'page-web-development-services.php',
    'android-application' => 'page-android-application.php',
    'pos' => 'page-pos.php',
    'erp' => 'page-erp.php',
    'accounting' => 'page-accounting.php',
    'inventory' => 'page-inventory.php',
    'omnichannel' => 'page-omnichannel.php',
    'crm' => 'page-crm.php',
    'smart-retail' => 'page-smart-retail.php',
    'lead-management' => 'page-lead-management.php',
    'payroll' => 'page-payroll.php',
    'education' => 'page-education.php',
    'schools-educational-institutions' => 'page-schools-educational-institutions.php',
    'employee-background-verification' => 'page-employee-background-verification.php',
    'hospitals' => 'page-hospitals.php',
    'hospital' => 'page-hospital.php',
    'ai-chatbot-for-customer-support' => 'page-ai-chatbot-for-customer-support.php',
    'manufacturing-chatbot' => 'page-manufacturing-chatbot.php',
    'sales-chatbot' => 'page-sales-chatbot.php',
    'billing-chatbot' => 'page-billing-chatbot.php',
    'healthcare-chatbot' => 'page-healthcare-chatbot.php',
    'enterprise-chatbot' => 'page-enterprise-chatbot.php',
    'education-chatbot' => 'page-education-chatbot.php',
    'book-store' => 'page-book-store.php',
    'bridal-store' => 'page-bridal-store.php',
    'boutique-store' => 'page-boutique-store.php',
    'readymade-garment' => 'page-readymade-garment.php',
    'footwear-store' => 'page-footwear-store.php',
    'stationery-store' => 'page-stationery-store.php',
    'cosmetic-store' => 'page-cosmetic-store.php',
    'home-decor-furniture' => 'page-home-decor-furniture.php',
    'imitation-jewellery' => 'page-imitation-jewellery.php',
    'india-temple' => 'page-india-temple.php',
    'convenience-store' => 'page-convenience-store.php',
    'departmental-hypermarket-store' => 'page-departmental-hypermarket-store.php',
    'fruits-vegetable-shop' => 'page-fruits-vegetable-shop.php',
    'grocery-store' => 'page-grocery-store.php',
    'kirana-store' => 'page-kirana-store.php',
    'supermarket' => 'page-supermarket.php',
    'gift-toy-sports-shop' => 'page-gift-toy-sports-shop.php',
    'hardware-shopping-store' => 'page-hardware-shopping-store.php',
    'retaile-store' => 'page-retaile-store.php',
    'ai-manufactoring' => 'page-ai-manufactoring.php',
    'ai-manufacturing' => 'page-ai-manufacturing.php',
    'textile' => 'page-textile.php',
    'textile-manufacturing' => 'page-textile.php',
    'pharma' => 'page-pharma.php',
    'consumer-goods' => 'page-consumer-goods.php',
    'garments' => 'page-garments.php',
    'electronics-smartphones' => 'page-electronics-smartphones.php',
    'electronics' => 'page-electronics-smartphones.php',
    'industrial-products' => 'page-industrial-products.php',
    'trading' => 'page-trading.php',
    'trading-overview' => 'page-trading-overview.php',
    'after-sale-service' => 'page-after-sale-service.php',
    'after-sales-service' => 'page-after-sales-service.php',
    'about-us' => 'page-about-us.php'
];

foreach ($slugs_to_templates as $slug => $template) {
    $page = get_page_by_path($slug);
    
    if ($page) {
        $old_template = get_post_meta($page->ID, '_wp_page_template', true);
        update_post_meta($page->ID, '_wp_page_template', $template);
        echo "<p style='color:green;'><strong>Success:</strong> Page <em>'{$page->post_title}'</em> (Slug: <strong>{$slug}</strong>) template updated from <code>{$old_template}</code> to <code>{$template}</code>.</p>";
    } else {
        $post_id = wp_insert_post([
            'post_title' => ucwords(str_replace('-', ' ', $slug)),
            'post_name' => $slug,
            'post_status' => 'publish',
            'post_type' => 'page',
            'meta_input' => [
                '_wp_page_template' => $template
            ]
        ]);
        if ($post_id && !is_wp_error($post_id)) {
            echo "<p style='color:blue;'><strong>Success:</strong> Page <em>'{$slug}'</em> did not exist. Created a new page with ID: <strong>{$post_id}</strong> and template: <code>{$template}</code>.</p>";
        } else {
            echo "<p style='color:red;'><strong>Error:</strong> Page Slug <strong>{$slug}</strong> does not exist and could not be created.</p>";
        }
    }
}

echo "<h3>All operations completed. Please delete this script (set-templates.php) when done.</h3>";

