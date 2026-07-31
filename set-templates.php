<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load WordPress
require_once __DIR__ . '/wp-load.php';

echo "<h2>WordPress Page Template Setter</h2>";

$slugs_to_templates = [
    'modern-responsive-website-design' => 'page-modern-responsive-website-design.php',
    'responsive-website-design' => 'page-responsive-website-design.php',
    'e-commerce-website-development' => 'page-e-commerce-website-development.php',
    'ecommerce-website-development' => 'page-ecommerce-website-development.php',
    'off-page-seo-services' => 'page-off-page-seo-services.php',
    'technical-seo-services' => 'page-technical-seo-services.php'
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
