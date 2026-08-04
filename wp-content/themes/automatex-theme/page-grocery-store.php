<?php
/**
 * Template Name: Grocery Store Management Software
 * Description: AI-Powered Grocery Store Management Software Page Template
 */

get_header();
?>

<div class="grocery-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="grocery-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(16, 185, 129, 0.18) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-shopping-basket me-2"></i> Best AI-Powered Grocery Store Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.7rem;">
                        Smart Cloud POS & ERP Solution <br>
                        <span style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Grocery & Supermarket Businesses</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Running a grocery store requires speed, accuracy, and efficient inventory management. From barcode billing and stock tracking to customer loyalty, accounting, supplier management, and online sales, every process should work together seamlessly.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Grocery Store Management Software is an AI-powered cloud ERP and POS solution built specifically for grocery stores, supermarkets, mini marts, retail chains, and wholesale businesses to automate daily operations, improve efficiency, and maximize profitability.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" id="btn-hero-grocery-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-grocery-features" style="background: rgba(255,255,255,0.05); color: #10b981; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(16, 185, 129, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="grocery-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cloud-Grocery.png" alt="AutomateX.ai Grocery Store Management Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(16, 185, 129, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(16, 185, 129, 0.15)); max-height: 500px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. OVERVIEW SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;" class="d-block mb-2">Centralized Grocery Automation</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">
                        Complete Control Over Your <span style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Grocery Business</span>
                    </h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our all-in-one platform integrates intelligent POS billing, inventory management, CRM, accounting, warehouse management, supplier control, and omnichannel commerce into one centralized dashboard.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Accelerate high-volume billing counter queues, manage thousands of FMCG SKUs, track expiry dates, and connect your physical grocery store to an online ordering mobile app effortlessly.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-bolt text-emerald mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">High-Speed POS</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Barcode & weigh-scale instant checkout under 3 seconds.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-boxes text-emerald mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Real-Time Stock Alerts</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Automated replenishment and batch expiry tracking.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h4 class="mb-4" style="color: #fff; font-weight: 700; font-size: 1.3rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">Core Grocery Management Pillars</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-barcode"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Barcode & Weigh-Scale Integration</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Supports high-speed laser barcode scanners, price-embedded barcodes, and digital weight scales.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-truck-loading"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Supplier & Purchase Order Control</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Automate vendor purchase orders, inward goods verification, payment ledgers, and return management.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">WhatsApp Billing & Promotions</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Send instant digital invoices, deal alerts, discount coupons, and re-order links on WhatsApp.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Omnichannel E-Commerce Integration</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Sync physical store inventory with your online grocery ordering web & mobile apps in real-time.</p>
                                </div>
                            </div>
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
                <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Key Features</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Everything Needed to Run a <span style="color: #10b981;">Modern Grocery Store</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">Supercharge your retail counters, streamline warehouse replenishment, and boost customer repeat visits.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI POS Billing & GST Invoicing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">High-speed billing counter POS with multi-tax GST support, holding carts, credit bills, and thermal receipt printing.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage thousands of packaged goods, generate custom barcode labels, and get automated stock reorder warnings.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouse</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Centralized stock control across multiple grocery branches, central warehouses, and inter-store stock transfers.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Loyalty</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Reward repeat shoppers with loyalty points, monthly membership schemes, pre-paid wallets, and special discounts.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & Purchase Orders</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Streamline distributor purchases, PO creation, vendor ledger balances, and inward shipment verification.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Campaigns & Receipts</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send green digital receipts, promotional weekend festival offers, and personalized product updates directly on WhatsApp.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store & Omnichannel</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrated web and mobile ordering portal for neighborhood home delivery with live inventory synchronization.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Business Reports & Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time dashboards analyzing daily turnover, high-margin FMCG items, peak checkout hours, and shrinkage.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Payment Support</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Accept UPI dynamic QR, credit/debit cards, digital wallets, store credit (Khata), and cash seamlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">The AutomateX Advantage</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Why Choose AutomateX.ai for Grocery Stores?</h2>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;" class="mb-4">Designed specifically for Indian grocery retailers and supermarkets to handle fast queues, massive stock catalogs, and multi-channel fulfillment.</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: none;">
                        Get Started Today <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-tachometer-alt mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">High-Speed Checkout</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">High-speed billing with barcode scanning & weighing scale integration in under 3 seconds.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-chart-pie mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Real-Time Stock Monitoring</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time inventory tracking with automated stock alerts and auto-replenishment POs.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-sitemap mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Multi-Store Chain Control</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Centralized management for multiple grocery stores, warehouses, and retail outlets.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-file-invoice-dollar mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">GST Accounting & Reports</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Integrated accounting with GST-ready invoices, GSTR returns, and financial reports.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-gift mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Loyalty & Memberships</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Customer loyalty programs, pre-paid wallets, discounts, and festive campaigns.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-cloud-upload-alt mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Cloud & Offline POS Sync</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Continue billing offline when internet is down; auto-sync to cloud when online.</p>
                            </div>
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
                <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Tailored Solutions</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Perfect For All Grocery Formats</h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">AutomateX.ai is built to empower businesses of all sizes across the grocery & FMCG retail sector.</p>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-basket text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Grocery Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-cart text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Supermarkets</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-store-alt text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Mini Marts</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-store text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Convenience Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-boxes text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">General Merchandise</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-truck text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Wholesale Grocery</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-network-wired text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Multi-Branch Chains</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-apple-alt text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Daily Essentials Retailers</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA SECTION -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(5, 150, 105, 0.25) 100%); border-top: 1px solid rgba(16, 185, 129, 0.3);">
        <div class="container py-4 text-center">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem; margin-bottom: 16px;">Grow Your Grocery Business with AutomateX.ai</h2>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Whether you operate a neighborhood grocery store or manage multiple supermarket branches, AutomateX.ai Grocery Store Management Software helps you automate billing, organize inventory, manage customer relationships, and streamline operations from one intelligent cloud platform.
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 16px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                    <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo Today
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
