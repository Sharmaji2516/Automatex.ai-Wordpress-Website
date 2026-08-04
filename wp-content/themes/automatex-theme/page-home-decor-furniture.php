<?php
/**
 * Template Name: Home Decor & Furniture Page
 * Slug: home-decor-furniture
 */

get_header(); ?>

<div class="homedecor-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="homedecor-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(245, 158, 11, 0.12) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(245, 158, 11, 0.15); color: #fde047; border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-couch me-2"></i> Best AI-Powered Furniture & Home Décor Store Management Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Smart Cloud POS & ERP Solution <br>
                        <span style="background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Furniture & Home Décor Retailers</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a furniture or home décor business requires more than just billing. From handling large inventories and warehouse operations to customer management and online sales, every process needs to work together efficiently.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Furniture & Home Décor Management Software is an AI-powered cloud ERP and POS solution designed specifically for furniture showrooms, home décor retailers, interior furnishing stores, and multi-branch businesses.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-homedecor-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-homedecor-features" style="background: rgba(255,255,255,0.05); color: #fde047; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(245, 158, 11, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="homedecor-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Software-Home-Decor.png" alt="AutomateX.ai Furniture & Home Décor Management Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(245, 158, 11, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(245, 158, 11, 0.15));">
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
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">All-in-One <span style="background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Furniture & Home Décor ERP</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our all-in-one platform combines POS billing, inventory management, CRM, accounting, warehouse management, supplier tracking, and omnichannel selling into one centralized dashboard, helping you streamline operations, improve customer experiences, and maximize profitability.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Track dimensional variants by wood material, size, finish, and upholstery details while easily managing bulky warehouse transfers across branch networks.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(245, 158, 11, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700; color: #fde047 !important;">Full Operational Control:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-md-6 col-6"><i class="fas fa-cash-register text-success me-2"></i> POS & GST Billing</div>
                            <div class="col-md-6 col-6"><i class="fas fa-boxes text-success me-2"></i> Furniture Inventory</div>
                            <div class="col-md-6 col-6"><i class="fas fa-warehouse text-success me-2"></i> Multi-Warehouse Sync</div>
                            <div class="col-md-6 col-6"><i class="fas fa-users text-success me-2"></i> Customer CRM & Loyalty</div>
                            <div class="col-md-6 col-6"><i class="fas fa-truck text-success me-2"></i> Supplier & PO Tracking</div>
                            <div class="col-md-6 col-6"><i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Messaging</div>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Key <span style="color: #f59e0b;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai software maps large-scale stock processes and optimizes freight supplier coordinate flows.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">POS & GST-Compliant Invoicing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Generate instant GST-compliant tax invoices. Process diverse digital transactions, split checks, print custom transaction tags, and manage customer credit balances.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Track raw wood logs, design sets, sofa sets, or decor vases. Automatically sync item catalogs with supplier specifications, tracking units and pricing.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(245, 158, 11, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Warehouse & Multi-Store Control</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Direct multi-branch inventory movements from a single portal. Verify stocks across warehouses, display showrooms, and regional retail outlets in real time.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(245, 158, 11, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Loyalty</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Map historical customer purchase habits. Retain corporate clients, interior design partners, and regular buyers with customized reward systems.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & Purchase Orders</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Track vendor catalogs, draft purchase orders, register supplier invoices, trace payment due dates, and monitor lead times for bulky freight shipments.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Bills & Notifications</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send dynamic receipts and payment links directly to WhatsApp. Share transit schedules, delivery updates, and promotional layout catalogs in one click.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store & Omnichannel Sync</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Seamlessly synchronize inventory levels between your brick-and-mortar storefronts and online stores (Shopify, WooCommerce, custom) to prevent double-selling.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Accounting & Financials</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage overhead store ledgers, track furniture installment details (EMIs), file GST inputs, and trace cost margins dynamically across inventories.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(245, 158, 11, 0.35);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); color: #fde047; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Business Reports & Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">AI dashboards mapping wood and material cost trends, peak sales hours, customer preferences, slow-moving items, and multi-location balances.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Choose <span style="color: #f59e0b;">AutomateX.ai?</span></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="row g-3">
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Fast billing with support for cash, UPI, cards, wallets, and digital payments</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Real-time inventory tracking across showrooms, warehouses, and online stores</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Manage furniture variants by size, material, finish, color, and design</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Integrated accounting with GST-ready reports and financial dashboards</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Intelligent stock movement and automatic reorder recommendations</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Centralized customer database with purchase history and loyalty rewards</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> AI-powered business insights for smarter inventory and sales planning</div>
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
                <h3 style="color: #fff; font-weight: 800; font-size: 2rem;">Ideal <span style="color: #f59e0b;">For</span></h3>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <?php
                $homedecor_sectors = [
                    "Furniture Showrooms", "Home Décor Stores", "Interior Design Retailers",
                    "Office Furniture Dealers", "Mattress & Sofa Stores", "Modular Furniture Businesses",
                    "Home Furnishing Retail Chains", "Multi-Branch Furniture Enterprises"
                ];
                foreach ($homedecor_sectors as $sector) {
                    echo '
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600; font-size: 0.95rem;">
                            <i class="fas fa-star text-warning me-2"></i> ' . $sector . '
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 6. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(245, 158, 11, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Grow Your Furniture Business with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Whether you operate a single furniture showroom or manage multiple retail locations, AutomateX.ai Furniture & Home Décor Management Software helps you simplify billing, organize inventory, manage customer relationships, and control every aspect of your business from one intelligent cloud platform. Improve operational efficiency, reduce manual work, and grow your business with AI-powered retail automation.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-homedecor-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
