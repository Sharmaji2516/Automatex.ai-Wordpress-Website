<?php
/**
 * Template Name: Stationery Store Page
 * Slug: stationery-store
 */

get_header(); ?>

<div class="stationery-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="stationery-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(16, 185, 129, 0.12) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-pen me-2"></i> Best AI-Powered Stationery Store Management Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Smart Cloud POS & ERP Solution <br>
                        <span style="background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Stationery Retail Businesses</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a stationery store requires more than just billing. From inventory management and supplier coordination to customer engagement and online sales, every business process should work together seamlessly.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Stationery Store Management Software is an AI-powered cloud ERP and POS solution designed specifically for stationery retailers, office supply stores, school supply shops, and multi-branch businesses.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-stationery-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-stationery-features" style="background: rgba(255,255,255,0.05); color: #34d399; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(16, 185, 129, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="stationery-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cloud-Stationery-Management.png" alt="AutomateX.ai Stationery Store Management Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(16, 185, 129, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(16, 185, 129, 0.15));">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. PLATFORM OVERVIEW -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">All-in-One <span style="background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Stationery ERP</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our intelligent platform combines POS billing, inventory control, CRM, accounting, warehouse management, and omnichannel selling into one centralized dashboard, helping you improve efficiency, reduce manual work, and grow your business with confidence.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Ensure accurate tracking of thousands of small items, automate reorders for fast-moving school and office products, and print custom tags effortlessly.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700; color: #34d399 !important;">Full Operational Control:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-md-6 col-6"><i class="fas fa-cash-register text-success me-2"></i> POS & GST Billing</div>
                            <div class="col-md-6 col-6"><i class="fas fa-boxes text-success me-2"></i> Smart Stock & Barcodes</div>
                            <div class="col-md-6 col-6"><i class="fas fa-users text-success me-2"></i> Customer CRM & Loyalty</div>
                            <div class="col-md-6 col-6"><i class="fas fa-truck text-success me-2"></i> Supplier & Purchases</div>
                            <div class="col-md-6 col-6"><i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Messaging</div>
                            <div class="col-md-6 col-6"><i class="fas fa-globe text-success me-2"></i> Online & Offline Sync</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KEY FEATURES SECTION -->
    <section class="py-5" id="features-section" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Key <span style="color: #10b981;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai stationery software streamlines operations and powers high-growth retail & distribution channels.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">POS Billing & GST Invoicing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Fast and accurate billing with GST-compliant invoices. Generate instant print receipts, handle splits, customize discounts, and accept diverse digital payment modes seamlessly.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Track your entire inventory including stationery, art supplies, and accessories. Scan barcodes during checkout, and automatically update item stock quantities.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouses</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Centralize operations across multiple branch locations, gift shops, and warehouses. Effortlessly request stock transfers and track absolute quantities from a single login.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Loyalty</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Maintain a centralized client list, trace purchase behaviors, manage points, and design seasonal discount campaigns for schools or business partners.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & Purchase Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage purchase orders, register vendor lists, track credit balances, and generate supplier invoicing histories in a single, connected accounting workflow.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Bills & Campaigns</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send digital bills instantly to customers via WhatsApp. Promote school lists, office supplies, and holiday discounts directly to reader databases.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store & Omnichannel</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrate and sync physical inventory with Shopify, WooCommerce, or custom sites. Avoid overselling and handle online orders from a single portal.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Reports & Business Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time AI dashboards illustrating stock levels, high-margin materials, slow-moving items, and comprehensive multi-store sales trends.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #34d399; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Secure Multi-Payment</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Supports UPI, credit/debit cards, net banking, and split payments. Integrated ledger balances track customer credits in real time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Choose <span style="color: #10b981;">AutomateX.ai?</span></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="row g-3">
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Fast and accurate billing with GST-compliant invoices</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Real-time inventory tracking for stationery, office supplies, and school products</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Automated stock alerts and intelligent reorder suggestions</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Centralized customer database with purchase history and loyalty rewards</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Integrated accounting with real-time financial reporting</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Online and offline inventory synchronization</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> AI-powered dashboards for smarter business decisions</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Secure cloud platform with automatic backup and multi-user access</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PERFECT FOR SECTION -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h3 style="color: #fff; font-weight: 800; font-size: 2rem;">Ideal <span style="color: #10b981;">For</span></h3>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <?php
                $stationery_sectors = [
                    "Stationery Stores", "Office Supply Retailers", "School & College Supply Shops",
                    "Book & Stationery Stores", "Gift & Office Product Stores", "Multi-Branch Retail Chains",
                    "Wholesale Stationery Distributors", "Educational Supply Businesses"
                ];
                foreach ($stationery_sectors as $sector) {
                    echo '
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.2); color: #cbd5e1; font-weight: 600; font-size: 0.95rem;">
                            <i class="fas fa-star text-warning me-2"></i> ' . $sector . '
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 6. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(16, 185, 129, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Grow Your Stationery Business with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Whether you manage a single stationery shop or a chain of retail outlets, AutomateX.ai Stationery Store Management Software helps you simplify billing, organize inventory, strengthen customer relationships, and manage your complete business from one intelligent cloud platform. Increase operational efficiency, improve customer service, and expand your business with AI-powered retail automation.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-stationery-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
