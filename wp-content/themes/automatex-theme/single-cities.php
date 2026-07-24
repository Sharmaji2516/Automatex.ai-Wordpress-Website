<?php
/**
 * The template for displaying single city pages (CPT: cities)
 */

get_header();

// Fetch city title and ACF fields
$city_slug = get_query_var( 'city_slug' );
if ( ! empty( $city_slug ) ) {
    // Format city slug (e.g. 'pimpri-chinchwad' -> 'Pimpri Chinchwad', 'amritsar' -> 'Amritsar')
    $city_name = ucwords( str_replace( '-', ' ', strtolower( $city_slug ) ) );
} else {
    $city_name = get_the_title();
}

if ( empty( $city_name ) || $city_name === 'Cities' ) {
    $city_name = 'Mumbai';
}

$hero_badge = ( function_exists( 'get_field' ) && get_field( 'hero_badge' ) ) ? get_field( 'hero_badge' ) : '#No.1 ERP Solution in ' . $city_name;
$hero_desc = ( function_exists( 'get_field' ) && get_field( 'hero_description' ) ) ? get_field( 'hero_description' ) : '';

if ( ! $hero_desc ) {
    $hero_desc = sprintf(
        esc_html__( '%1$s is an active business hub. In today’s fast-growing digital business world, ERP software has become the most important tool for industries and retail outlets in %1$s. Automatex.ai ERP provides smart cloud-based automation for inventory, production, billing, accounting, and payroll from one centralized dashboard.', 'automatex' ),
        $city_name
    );
}

// Manufacturing Custom Fields
$mfg_lead = function_exists( 'get_field' ) ? get_field( 'mfg_lead_text' ) : '';
if ( ! $mfg_lead ) {
    $mfg_lead = sprintf( esc_html__( 'Empowering manufacturing facilities and workshops in %s.', 'automatex' ), $city_name );
}

$mfg_spec_title = ( function_exists( 'get_field' ) && get_field( 'mfg_specialty_title' ) ) ? get_field( 'mfg_specialty_title' ) : esc_html__( 'Industrial Specialty', 'automatex' );
$mfg_spec_list_raw = function_exists( 'get_field' ) ? get_field( 'mfg_specialty_list' ) : '';
$mfg_spec_list = array();

if ( $mfg_spec_list_raw ) {
    $mfg_spec_list = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $mfg_spec_list_raw ) ) ) );
} else {
    // Default dynamic lists
    $mfg_spec_list = array(
        esc_html__( 'Production planning & scheduling', 'automatex' ),
        esc_html__( 'Raw material & inventory management', 'automatex' ),
        esc_html__( 'Bill of Materials (BOM) control', 'automatex' ),
        esc_html__( 'Quality checks & batch traceability', 'automatex' )
    );
}

// Retail Custom Fields
$retail_lead = function_exists( 'get_field' ) ? get_field( 'retail_lead_text' ) : '';
if ( ! $retail_lead ) {
    $retail_lead = sprintf( esc_html__( 'Dominating the local retail and supermarket hubs in %s.', 'automatex' ), $city_name );
}

$retail_spec_list_raw = function_exists( 'get_field' ) ? get_field( 'retail_specialty_list' ) : '';
$retail_spec_list = array();

if ( $retail_spec_list_raw ) {
    $retail_spec_list = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $retail_spec_list_raw ) ) ) );
} else {
    $retail_spec_list = array(
        esc_html__( 'High-speed POS billing with GST integration', 'automatex' ),
        esc_html__( 'Barcode generation & scanning support', 'automatex' ),
        esc_html__( 'Multi-store stock synchronization', 'automatex' ),
        esc_html__( 'Customer loyalty & discount management', 'automatex' )
    );
}

// Custom FAQs
$faqs = function_exists( 'get_field' ) ? get_field( 'faqs_repeater' ) : array();
if ( ! is_array( $faqs ) || empty( $faqs ) ) {
    // Standard city FAQs fallback
    $faqs = array(
        array(
            'question' => sprintf( esc_html__( 'What is Automatex.ai ERP software?', 'automatex' ) ),
            'answer'   => sprintf( esc_html__( 'Automatex.ai is a business management software that integrates multiple business operations in %s into one platform, including manufacturing, inventory, POS billing, accounting, and payroll.', 'automatex' ), $city_name )
        ),
        array(
            'question' => sprintf( esc_html__( 'Why do manufacturing businesses in %s need ERP software?', 'automatex' ), $city_name ),
            'answer'   => esc_html__( 'Manufacturing businesses need ERP to automate production planning, manage raw materials, check work orders, and avoid material wastage with real-time analytics.', 'automatex' )
        ),
        array(
            'question' => sprintf( esc_html__( 'Why do retail businesses in %s need POS billing ERP?', 'automatex' ), $city_name ),
            'answer'   => esc_html__( 'Retailers need POS ERP to speed up barcode billing, manage multiple outlet stocks, file GST returns, and track sales records from any mobile or desktop screen.', 'automatex' )
        ),
        array(
            'question' => esc_html__( 'Is training and support included in the setup?', 'automatex' ),
            'answer'   => esc_html__( 'Yes! Automatex.ai provides complete deployment support, data migration from previous software, and step-by-step hands-on training for your team.', 'automatex' )
        )
    );
}
?>

<style>
    .city-page-wrap {
        background-color: #060814;
        color: #ffffff;
    }
    .premium-city-hero {
        padding: 90px 0 80px !important;
        position: relative;
        background: radial-gradient(circle at 50% 20%, rgba(13, 110, 253, 0.2) 0%, rgba(6, 8, 20, 1) 75%) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .hero-btn-wrap {
        display: flex;
        flex-direction: column; gap: 20px;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
    .hero-btn-premium {
        padding: 15px 40px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        border-radius: 8px !important;
    }
    .hero-btn-outline {
        background: transparent !important;
        color: #38bdf8 !important;
        border: 2px solid #38bdf8 !important;
    }
    .hero-btn-outline:hover {
        background: #38bdf8 !important;
        color: #060814 !important;
    }
    .card-hover-effect {
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        background: #0f172a !important;
        border: 1px solid rgba(255, 255, 255, 0.12) !important;
        color: #ffffff !important;
    }
    .card-hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(13, 110, 253, 0.25) !important;
        border-color: rgba(56, 189, 248, 0.5) !important;
    }
    .section-title {
        font-weight: 800;
        color: #ffffff !important;
        margin-bottom: 15px;
    }
    .text-purple {
        color: #c084fc !important;
    }
    .border-purple {
        border-color: #a855f7 !important;
    }
    .text-city-muted {
        color: #94a3b8 !important;
    }
    .city-faq-item {
        background: #0f172a !important;
        border: 1px solid rgba(255, 255, 255, 0.12) !important;
        border-radius: 10px !important;
    }
    .city-faq-btn {
        background: #0f172a !important;
        color: #ffffff !important;
        font-weight: 700 !important;
    }
    .city-faq-btn:not(.collapsed) {
        background: #1e293b !important;
        color: #38bdf8 !important;
    }
    .city-faq-btn::after {
        filter: invert(1);
    }
    .city-faq-body {
        background: #0f172a !important;
        color: #cbd5e1 !important;
    }
    @media (min-width: 576px) {
        .hero-btn-wrap {
            flex-direction: row;
        }
    }
</style>

<div class="city-page-wrap">
<!-- City Hero Section -->
<section class="premium-city-hero text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="inner-banner-wrap animate__animated animate__fadeIn">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="letter-spacing: 2px; font-size: 0.9rem;">
                        <?php echo esc_html( $hero_badge ); ?>
                    </span>
                    <h1 class="display-4 fw-bold mb-4 text-white">Top ERP Software in Manufacturing & Retail in <span class="text-primary"><?php echo esc_html( $city_name ); ?></span></h1>
                    <p class="lead text-city-muted mb-4 px-lg-5"><?php echo esc_html( $hero_desc ); ?></p>
                    <div class="hero-btn-wrap">
                        <button type="button" class="btn btn-primary btn-lg hero-btn-premium hvr-grow" data-bs-toggle="modal" data-bs-target="#trialModal">Get Free Demo</button>
                        <a href="#features" class="btn btn-outline-primary btn-lg hero-btn-premium hero-btn-outline hvr-grow">Explore Features</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modules Grid Overview -->
<section id="features" class="modules-sec py-5" style="background: #060814;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">All-In-One Smart Business Platform in <?php echo esc_html( $city_name ); ?></h2>
            <p class="text-city-muted">Integrated modules specifically for Indian manufacturing and retail businesses</p>
        </div>
        <div class="row g-4 text-center">
            <?php 
            $modules = array(
                "Manufacturing ERP", "Retail ERP", "POS Billing Software", "Inventory Management", 
                "Warehouse Management", "GST Accounting", "CRM Software", "Payroll & HR", 
                "Cloud ERP", "AI-Powered Analytics"
            );
            foreach( $modules as $mod ) {
                echo '<div class="col-lg-3 col-md-4 col-6">
                        <div class="p-3 border rounded shadow-sm h-100 card-hover-effect">
                            <i class="bi bi-check2-circle text-primary me-2 fs-5"></i>
                            <span class="fw-bold text-white">' . esc_html( $mod ) . '</span>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Why Local Businesses Need ERP -->
<section class="needs-sec py-5" style="background: #0a0e24;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Businesses in <?php echo esc_html( $city_name ); ?> Need ERP</h2>
            <p class="text-city-muted">Overcome standard operations issues dynamically and scale</p>
        </div>
        <div class="row g-4">
            <?php 
            $challenges = array(
                array( "title" => "Inventory Mismatch", "icon" => "bi-box-seam" ),
                array( "title" => "Production Delays", "icon" => "bi-clock-history" ),
                array( "title" => "Billing Mistakes", "icon" => "bi-receipt" ),
                array( "title" => "Lack of Reporting", "icon" => "bi-bar-chart" ),
                array( "title" => "Multi-location Issues", "icon" => "bi-shop" ),
                array( "title" => "Customer Management", "icon" => "bi-people" ),
                array( "title" => "Export Compliance", "icon" => "bi-globe" ),
                array( "title" => "Material Wastage", "icon" => "bi-trash" )
            );
            foreach( $challenges as $ch ) {
                echo '<div class="col-lg-3 col-md-6">
                        <div class="p-4 text-center border rounded card-hover-effect h-100">
                            <i class="bi ' . esc_attr( $ch['icon'] ) . ' fs-1 mb-3 d-block text-purple"></i>
                            <h5 class="fw-bold text-white mb-2">' . esc_html( $ch['title'] ) . '</h5>
                            <p class="small text-city-muted mb-0">Automate operations and solve complex hurdles with centralized automation.</p>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Manufacturing Section -->
<section class="mfg-sec py-5" style="background: #060814;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Best Manufacturing ERP Software in <?php echo esc_html( $city_name ); ?></h2>
            <p class="lead text-city-muted"><?php echo esc_html( $mfg_lead ); ?></p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm h-100 border-top border-purple border-4 card-hover-effect" style="border-top-width: 4px !important;">
                    <h4 class="fw-bold mb-3 text-white"><?php echo esc_html( $mfg_spec_title ); ?></h4>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ( $mfg_spec_list as $item ) : ?>
                            <li class="mb-2 text-city-muted"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php echo esc_html( $item ); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm h-100 border-top border-purple border-4 card-hover-effect" style="border-top-width: 4px !important;">
                    <h4 class="fw-bold mb-3 text-white"><?php esc_html_e( 'Production Planning', 'automatex' ); ?></h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Schedule production orders', 'automatex' ); ?></span></li>
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Bill of Materials (BOM) functionality', 'automatex' ); ?></span></li>
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Work order management', 'automatex' ); ?></span></li>
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Monitor job progress in real-time', 'automatex' ); ?></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm h-100 border-top border-purple border-4 card-hover-effect" style="border-top-width: 4px !important;">
                    <h4 class="fw-bold mb-3 text-white"><?php esc_html_e( 'Export & Quality', 'automatex' ); ?></h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'International shipping documents', 'automatex' ); ?></span></li>
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Quality control & inspections', 'automatex' ); ?></span></li>
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Export compliance management', 'automatex' ); ?></span></li>
                        <li class="mb-2"><i class="bi bi-check-lg text-purple me-2"></i><span class="text-white"><?php esc_html_e( 'Batch traceability tracking', 'automatex' ); ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Retail Section -->
<section class="retail-sec py-5" style="background: #0a0e24;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4 text-white">Best Retail ERP Software in <?php echo esc_html( $city_name ); ?></h2>
                <p class="lead text-city-muted mb-4"><?php echo esc_html( $retail_lead ); ?></p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded card-hover-effect">
                            <h6 class="fw-bold text-white mb-2"><?php esc_html_e( 'Omnichannel Sync', 'automatex' ); ?></h6>
                            <p class="small text-city-muted mb-0"><?php esc_html_e( 'Connect offline store sales and online e-commerce stocks instantly.', 'automatex' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded card-hover-effect">
                            <h6 class="fw-bold text-white mb-2"><?php esc_html_e( 'AI analytics', 'automatex' ); ?></h6>
                            <p class="small text-city-muted mb-0"><?php esc_html_e( 'Predict demand patterns and suggest stock replenishment orders.', 'automatex' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 rounded shadow-sm border-top border-primary border-4 card-hover-effect" style="border-top-width: 4px !important;">
                    <h4 class="fw-bold mb-3 text-white"><?php esc_html_e( 'Retail & POS Features', 'automatex' ); ?></h4>
                    <div class="row g-3">
                        <?php foreach ( $retail_spec_list as $item ) : ?>
                            <div class="col-12 d-flex align-items-center">
                                <i class="bi bi-check2-circle text-primary me-2 fs-5"></i>
                                <span class="text-white fw-semibold"><?php echo esc_html( $item ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Accordion Section -->
<section class="faq-sec py-5" style="background: #060814;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions (FAQs)</h2>
            <p class="text-city-muted">Answers regarding ERP and billing deployment in <?php echo esc_html( $city_name ); ?></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion shadow-sm" id="cityFaq">
                    <?php foreach( $faqs as $i => $faq ) : 
                        $id = "faq" . $i;
                        $collapsed_class = ($i === 0) ? "" : "collapsed";
                        $show_class = ($i === 0) ? "show" : "";
                        $aria_expanded = ($i === 0) ? "true" : "false";
                    ?>
                        <div class="accordion-item city-faq-item mb-2 shadow-sm">
                            <h2 class="accordion-header" id="heading<?php echo $id; ?>">
                              <button class="accordion-button city-faq-btn <?php echo $collapsed_class; ?> fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $id; ?>">
                                <?php echo ($i+1) . '. ' . esc_html( $faq['question'] ); ?>
                              </button>
                            </h2>
                            <div id="collapse<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $show_class; ?>" aria-labelledby="heading<?php echo $id; ?>" data-bs-parent="#cityFaq">
                              <div class="accordion-body city-faq-body">
                                <?php echo esc_html( $faq['answer'] ); ?>
                              </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-warning text-center">
    <div class="container">
        <h2 class="fw-bold mb-4 text-dark">Ready to transform your <?php echo esc_html( $city_name ); ?> business?</h2>
        <p class="mb-4 lead fw-bold text-dark">Join hundreds of successful businesses in <?php echo esc_html( $city_name ); ?> using Automatex.ai ERP solutions.</p>
        <button class="btn btn-dark btn-lg px-5 py-3 fw-bold rounded-pill shadow" data-bs-toggle="modal" data-bs-target="#trialModal">
            Request Demo <i class="fas fa-arrow-right ms-2"></i>
        </button>
    </div>
</section>
</div>

<?php
get_footer();
