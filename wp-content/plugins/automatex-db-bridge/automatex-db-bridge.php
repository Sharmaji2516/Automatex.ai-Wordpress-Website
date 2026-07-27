<?php
/**
 * Plugin Name: AutomateX DB Lead Bridge
 * Plugin URI: https://automatex.ai/
 * Description: Custom database bridge plugin to sync AutomateX lead forms (Contact and Trial modal) and WhatsApp triggers to the ERP lead database.
 * Version: 1.0.0
 * Author: Digify Soft Solutions
 * Author URI: https://digifysoft.com/
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Class to handle database connections and insertions
class AutomateX_DB_Bridge {

    public function __construct() {
        // Handle admin-post form submission for Contact Us page
        add_action( 'admin_post_nopriv_automatex_contact_form', array( $this, 'handle_contact_form_submission' ) );
        add_action( 'admin_post_automatex_contact_form', array( $this, 'handle_contact_form_submission' ) );

        // Handle AJAX submission for Trial modal form
        add_action( 'wp_ajax_nopriv_automatex_submit_lead', array( $this, 'handle_trial_form_ajax' ) );
        add_action( 'wp_ajax_automatex_submit_lead', array( $this, 'handle_trial_form_ajax' ) );

        // Register custom WP REST API endpoint for WhatsApp leads
        add_action( 'rest_api_init', array( $this, 'register_rest_routes' ) );

        // Seed 72 Cities CPT automatically on init
        add_action( 'init', array( $this, 'seed_72_cities' ), 20 );
    }

    /**
     * Programmatically seed and publish all 72 City CPT posts
     */
    public function seed_72_cities() {
        if ( ! post_type_exists( 'cities' ) ) {
            return;
        }

        // Only run seeder check once if not already seeded
        if ( get_option( 'automatex_72_cities_seeded_v1' ) ) {
            return;
        }

        $all_cities = array(
            "Mumbai", "Delhi", "Bengaluru", "Hyderabad", "Chennai", "Kolkata", "Pune", "Ahmedabad", 
            "Jaipur", "Surat", "Lucknow", "Kanpur", "Nagpur", "Indore", "Thane", "Bhopal", 
            "Visakhapatnam", "Pimpri-Chinchwad", "Patna", "Vadodara", "Ghaziabad", "Ludhiana", "Agra", "Nashik", 
            "Faridabad", "Meerut", "Rajkot", "Kalyan-Dombivli", "Vasai-Virar", "Varanasi", "Srinagar", "Aurangabad", 
            "Dhanbad", "Amritsar", "Navi Mumbai", "Prayagraj", "Ranchi", "Howrah", "Coimbatore", "Jabalpur", 
            "Gwalior", "Vijayawada", "Jodhpur", "Madurai", "Raipur", "Kota", "Guwahati", "Chandigarh", 
            "Solapur", "Hubballi-Dharwad", "Bareilly", "Moradabad", "Mysore", "Gurgaon", "Aligarh", "Jalandhar", 
            "Tiruchirappalli", "Bhubaneswar", "Salem", "Mira-Bhayandar", "Warangal", "Thiruvananthapuram", "Bhiwandi", "Saharanpur", 
            "Guntur", "Amravati", "Bikaner", "Noida", "Jamshedpur", "Bhilai", "Cuttack", "Firozabad"
        );

        foreach ( $all_cities as $city_title ) {
            $slug = sanitize_title( $city_title );
            
            // Check if post already exists
            $existing = get_page_by_path( $slug, OBJECT, 'cities' );
            if ( ! $existing ) {
                $post_id = wp_insert_post( array(
                    'post_title'   => $city_title,
                    'post_name'    => $slug,
                    'post_type'    => 'cities',
                    'post_status'  => 'publish',
                    'post_content' => sprintf( 'Top ERP & POS Billing Software in %s for Manufacturing and Retail businesses.', $city_title )
                ) );

                if ( $post_id && ! is_wp_error( $post_id ) ) {
                    // Update default dynamic ACF metadata for city
                    update_post_meta( $post_id, 'hero_badge', '#No.1 ERP Solution in ' . $city_title );
                    update_post_meta( $post_id, 'hero_description', sprintf( '%s is a rapidly growing business hub. Automatex.ai ERP provides cloud automation for manufacturing, retail, POS billing, GST accounting, and inventory from one unified dashboard.', $city_title ) );
                }
            }
        }

        update_option( 'automatex_72_cities_seeded_v1', 1 );
    }

    /**
     * Establish database connection.
     * Flexibly checks if external database credentials are defined in wp-config.php,
     * otherwise falls back to standard WordPress mysqli database connection.
     */
    private function get_db_connection() {
        // Check if custom ERP database constants are defined
        if ( defined( 'AUTOMATEX_DB_HOST' ) && defined( 'AUTOMATEX_DB_USER' ) && defined( 'AUTOMATEX_DB_PASSWORD' ) && defined( 'AUTOMATEX_DB_NAME' ) ) {
            $conn = @new mysqli( AUTOMATEX_DB_HOST, AUTOMATEX_DB_USER, AUTOMATEX_DB_PASSWORD, AUTOMATEX_DB_NAME );
            if ( ! $conn->connect_error ) {
                return $conn;
            }
        }

        // Fallback to WordPress main database connection credentials
        $conn = @new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
        if ( $conn->connect_error ) {
            return false;
        }
        return $conn;
    }

    /**
     * Get target email addresses for lead notifications
     */
    private function get_notification_recipient() {
        if ( defined( 'SMTP_TO_EMAIL' ) ) {
            return SMTP_TO_EMAIL;
        }
        return "gautamalik1@gmail.com,pragatimodi10@gmail.com,webdev.digifysoft@gmail.com";
    }

    /**
     * Process lead insertions in MySQL database
     */
    private function save_lead( $name, $email, $mobile, $location, $industry, $state, $firm, $remark, $coords, $is_staging = false ) {
        $conn = $this->get_db_connection();
        $reference = 'LD-PENDING';

        // Prepare staging flag if needed
        $remark_db = $remark;
        if ( $coords !== '' ) {
            $remark_db .= "\n[Coordinates: " . $coords . "]";
        }
        if ( $is_staging ) {
            $remark_db .= "\n[Staging - WordPress]";
        }

        if ( $conn ) {
            // Escape values
            $name_esc = mysqli_real_escape_string( $conn, trim( $name ) );
            $email_esc = mysqli_real_escape_string( $conn, trim( $email ) );
            $mobile_esc = mysqli_real_escape_string( $conn, trim( $mobile ) );
            $location_esc = mysqli_real_escape_string( $conn, trim( $location ) );
            $industry_esc = mysqli_real_escape_string( $conn, trim( $industry ) );
            $state_esc = mysqli_real_escape_string( $conn, trim( $state ) );
            $firm_esc = mysqli_real_escape_string( $conn, trim( $firm ) );
            $remark_esc = mysqli_real_escape_string( $conn, trim( $remark_db ) );
            $whatsapp_esc = $mobile_esc;
            $tdate = date( 'Y-m-d' );

            // Start transaction
            mysqli_begin_transaction( $conn );

            try {
                // 1. Insert into sf_lead_master
                $insert_lead_sql = "INSERT INTO sf_lead_master 
                    (partyid, email, number, whatsappnumber, party_city, industry, party_state, firm, intial_remark, status, tdate)
                    VALUES
                    ('$name_esc', '$email_esc', '$mobile_esc', '$whatsapp_esc', '$location_esc', '$industry_esc', '$state_esc', '$firm_esc', '$remark_esc', 7, '$tdate')";
                
                if ( mysqli_query( $conn, $insert_lead_sql ) ) {
                    $last_id = mysqli_insert_id( $conn );
                    $reference = "LD" . str_pad( $last_id, 3, "0", STR_PAD_LEFT );

                    // Update reference
                    mysqli_query( $conn, "UPDATE sf_lead_master SET reference='$reference' WHERE lid='$last_id'" );

                    // 2. Insert into website_contact_enquiries
                    $insert_web_sql = "INSERT INTO website_contact_enquiries 
                        (name, email, mobile, whatsapp, location, industry, state, firm, remark, created_at)
                        VALUES 
                        ('$name_esc', '$email_esc', '$mobile_esc', '$whatsapp_esc', '$location_esc', '$industry_esc', '$state_esc', '$firm_esc', '$remark_esc', NOW())";
                    
                    mysqli_query( $conn, $insert_web_sql );

                    // 3. Insert into sf_status_history
                    $insert_history_sql = "INSERT INTO sf_status_history 
                        (party_id, status_id, trans_type, trans_no)
                        VALUES
                        ('$name_esc', '7', 'add_lead', '$reference')";
                    
                    mysqli_query( $conn, $insert_history_sql );

                    // Commit transaction
                    mysqli_commit( $conn );
                } else {
                    throw new Exception( mysqli_error( $conn ) );
                }
            } catch ( Exception $e ) {
                mysqli_rollback( $conn );
                // Fallback reference on db error
                $reference = 'LD-DB-ERROR';
            }
            mysqli_close( $conn );
        }

        return $reference;
    }

    /**
     * Handle standard Contact Form submission (POST redirected through admin-post.php)
     */
    public function handle_contact_form_submission() {
        // Check nonce / validation if required, but match original custom form fields
        $name     = sanitize_text_field( $_POST['name'] ?? '' );
        $email    = sanitize_email( $_POST['email'] ?? '' );
        $mobile   = sanitize_text_field( $_POST['mobile'] ?? '' );
        $location = sanitize_text_field( $_POST['location'] ?? '' );
        $industry = sanitize_text_field( $_POST['industry'] ?? '' );
        $whatsapp = sanitize_text_field( $_POST['whatsapp'] ?? $mobile );
        $state    = sanitize_text_field( $_POST['state'] ?? '' );
        $firm     = sanitize_text_field( $_POST['firm'] ?? '' );
        $remark   = sanitize_textarea_field( $_POST['remark'] ?? '' );
        $coords   = sanitize_text_field( $_POST['coords'] ?? '' );

        if ( empty( $name ) || empty( $mobile ) ) {
            wp_safe_redirect( add_query_arg( 'success', '0', wp_get_referer() ) );
            exit;
        }

        // Save lead
        $reference = $this->save_lead( $name, $email, $mobile, $location, $industry, $state, $firm, $remark, $coords, true );

        // Send Email
        $to = $this->get_notification_recipient();
        $subject = "[WordPress Contact Page] Lead from " . $name;
        
        $body  = "You have received a new lead from the WordPress Contact Us Page:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Industry: $industry\n";
        $body .= "Contact: $mobile\n";
        $body .= "Firm: $firm\n";
        if ( ! empty( $location ) ) {
            $body .= "Location: $location\n";
        }
        if ( ! empty( $coords ) ) {
            $body .= "Coordinates: $coords\n";
        }
        $body .= "\nMessage:\n$remark\n";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Automatex.ai Website <support-noreply@Automatex.ai.com>'
        );

        wp_mail( $to, $subject, $body, $headers );

        // Redirect back to referring page with success code and reference ID
        wp_safe_redirect( add_query_arg( array( 'success' => '1', 'ref' => $reference ), wp_get_referer() ) );
        exit;
    }

    /**
     * Handle Trial Form AJAX submission from modal
     */
    public function handle_trial_form_ajax() {
        $name     = sanitize_text_field( $_POST['name'] ?? '' );
        $email    = sanitize_email( $_POST['email'] ?? '' );
        $company  = sanitize_text_field( $_POST['company'] ?? '' );
        $industry = sanitize_text_field( $_POST['industry'] ?? '' );
        $firm     = sanitize_text_field( $_POST['firm'] ?? '' );
        $contact  = sanitize_text_field( $_POST['contact'] ?? '' );
        $location = sanitize_text_field( $_POST['location'] ?? '' );
        $message  = sanitize_textarea_field( $_POST['message'] ?? '' );

        if ( empty( $name ) || empty( $contact ) || empty( $email ) ) {
            wp_send_json_error( array( 'message' => 'Required fields are missing.' ) );
        }

        // Save lead
        $reference = $this->save_lead( $name, $email, $contact, $location, $industry, '', $firm, $message, '', true );

        // Send Email
        $to = $this->get_notification_recipient();
        $subject = "[WordPress Trial Modal] Lead from " . $name;
        
        $body  = "You have received a new trial request lead from the WordPress website:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Company: $company\n";
        $body .= "Industry: $industry\n";
        $body .= "Firm: $firm\n";
        $body .= "Contact: $contact\n";
        $body .= "Location: $location\n";
        $body .= "\nMessage:\n$message\n";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Automatex.ai Website <support-noreply@Automatex.ai.com>'
        );

        wp_mail( $to, $subject, $body, $headers );

        wp_send_json_success( array( 'message' => 'Lead saved successfully.', 'ref' => $reference ) );
    }

    /**
     * Register Custom WordPress REST API routes
     */
    public function register_rest_routes() {
        register_rest_route( 'automatex/v1', '/whatsapp-lead', array(
            'methods'  => 'POST',
            'callback' => array( $this, 'handle_whatsapp_lead' ),
            'permission_callback' => '__return_true' // Public API endpoint matching the original send_whatsapp_lead.php
        ) );
    }

    /**
     * Process WhatsApp lead and trigger WhatsApp API broadcast
     */
    public function handle_whatsapp_lead( WP_REST_Request $request ) {
        $params = $request->get_json_params();
        if ( empty( $params ) ) {
            $params = $_POST;
        }

        $lead_name = sanitize_text_field( $params['lead_name'] ?? '' );
        $phone     = sanitize_text_field( $params['phone'] ?? '' );
        $message   = sanitize_textarea_field( $params['message'] ?? '' );
        $source    = 'WhatsApp Icon';

        if ( empty( $lead_name ) || empty( $phone ) ) {
            return new WP_REST_Response( array( 'status' => 'error', 'msg' => 'Missing required fields.' ), 400 );
        }

        // 1. Insert lead in MySQL (leads_master table)
        $conn = $this->get_db_connection();
        $insert = false;

        if ( $conn ) {
            $lead_name_esc = mysqli_real_escape_string( $conn, $lead_name );
            $phone_esc = mysqli_real_escape_string( $conn, $phone );
            $message_esc = mysqli_real_escape_string( $conn, $message );
            $source_esc = mysqli_real_escape_string( $conn, $source );

            // Check if leads_master exists or create if needed
            $insert_sql = "INSERT INTO leads_master (lead_name, phone, message, source, created_at)
                           VALUES ('$lead_name_esc', '$phone_esc', '$message_esc', '$source_esc', NOW())";
            
            $insert = mysqli_query( $conn, $insert_sql );
            mysqli_close( $conn );
        }

        if ( $insert || ! $conn ) {
            // 2. Call WhatsApp Broadcast API Gateway
            $api_url = "https://wa20.nuke.co.in/v5/api/index.php/addbroadcast";
            $token   = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NjA3MDY0NDYsImRhdGEiOnsidXNlcm5hbWUiOiJEaWdpZnlfc29mdCIsIm5hbWUiOiJEaWdpZnlfc29mdCJ9fQ.lbhITMYPzs0RvDRf-YhqbJ5r63rFUPnInfTnIG_T998";

            $payload = array(
                "broadcast_service" => "whatsApp_credits",
                "broadcast_name"    => "Website Lead - " . $lead_name,
                "template_id"       => "Automatex.ai",
                "contacts"          => preg_replace( '/\D/', '', $phone )
            );

            $response = wp_remote_post( $api_url, array(
                'headers' => array(
                    'Authorization' => $token,
                    'Content-Type'  => 'application/json'
                ),
                'body'    => json_encode( $payload ),
                'timeout' => 15
            ) );

            $api_response_body = '';
            if ( ! is_wp_error( $response ) ) {
                $api_response_body = json_decode( wp_remote_retrieve_body( $response ), true );
            }

            return new WP_REST_Response( array(
                'status'       => 'success',
                'msg'          => 'Lead saved and WhatsApp API triggered.',
                'api_response' => $api_response_body
            ), 200 );
        }

        return new WP_REST_Response( array( 'status' => 'error', 'msg' => 'Failed to insert lead database record.' ), 500 );
    }
}

new AutomateX_DB_Bridge();
