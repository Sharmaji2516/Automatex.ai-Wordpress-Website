<?php
/**
 * Template Name: Fruits & Vegetables Store Management Software
 * Description: AI-Powered Fruits & Vegetables Store Management Software Page Template
 */

get_header();
?>

<div class="fruits-vegetables-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="fruits-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(16, 185, 129, 0.18) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-apple-alt me-2"></i> #1 Fresh Produce & Fruit Store ERP in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.7rem;">
                        Best AI-Powered Fruits & Vegetables Store <br>
                        <span style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Management Software in India</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Smart Cloud POS & ERP Solution for Fruit & Vegetable Retail Businesses. Speed up billing, automate weight-based checkout, control fresh stock wastage, and grow profitability seamlessly.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Fruits & Vegetables Store Management Software is an AI-powered cloud solution engineered for fruit shops, vegetable markets, fresh produce retailers, organic food stores, supermarkets, and multi-branch chains to simplify daily operations while reducing wastage.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" id="btn-hero-fruits-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-fruits-features" style="background: rgba(255,255,255,0.05); color: #10b981; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(16, 185, 129, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="fruits-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cloud-Fruit-Vegetables.png" alt="AutomateX.ai Fruits & Vegetables Store dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(16, 185, 129, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(16, 185, 129, 0.15)); max-height: 500px; object-fit: contain;">
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
                    <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;" class="d-block mb-2">Intelligent Produce Solution</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">
                        Automate Billing, Reduce Wastage & <span style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Streamline Operations</span>
                    </h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a fruit and vegetable store requires speed, accuracy, and real-time inventory control. From weight-based billing and stock management to customer loyalty, accounting, and online sales, every process should work together seamlessly.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Fruits & Vegetables Store Management Software combines POS billing, inventory management, CRM, accounting, supplier tracking, and omnichannel commerce into one centralized system, giving you complete control over your fresh produce business.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-tachometer-alt text-emerald mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Ultra-Fast Checkout</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Direct weighing scale integration for sub-3-second billing.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-chart-line text-emerald mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Wastage Control</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">AI stock alerts for perishable items & freshness tracking.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h4 class="mb-4" style="color: #fff; font-weight: 700; font-size: 1.3rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">Why Fresh Produce Outlets Need AutomateX.ai</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-weight"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Weight-Based POS Billing</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Seamless connection to digital weighing scales with automated price calculation & GST invoicing.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Batch & Expiry Date Management</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">First-In-First-Out (FIFO) dispatch alerts to ensure older stock sells before spoiling.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">WhatsApp Digital Receipts</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Send paperless bills directly to customers' WhatsApp with personalized offer links.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Multi-Branch & Warehouse Sync</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Centralized control over multiple fruit & vegetable stores, stock transfers, and central cold storage.</p>
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
                <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Comprehensive Features</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Powerful Tools Engineered for <span style="color: #10b981;">Fruit & Vegetable Retail</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">Our all-in-one platform combines intelligent POS billing, inventory management, CRM, accounting, supplier management, warehouse control, and omnichannel commerce.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: justify-content-center; font-size: 1.3rem;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Weighing Scale POS</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrated POS billing connected to weighing scales with GST-compliant invoicing, fast checkout, and barcode scanning.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Fresh Stock Inventory</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time inventory monitoring with automated reorder alerts, wastage tracking, and stock shrinkage detection.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Barcode & Label Generation</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Instant printing of price stickers, weight labels, barcode tags, and organic certification badges.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Loyalty</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Customer points program, pre-paid wallet memberships, personalized discounts, and purchase history tracking.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouse</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage multiple store locations, central warehouses, and wholesale dispatch from a single cloud dashboard.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & Purchase Orders</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Streamline mandi purchases, vendor payments, purchase order generation, and supplier ledger accounting.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Campaigns & Billing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send digital invoices via WhatsApp alongside promotional deals on fresh arrivals and seasonal fruits.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store Integration</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrated online ordering store for home deliveries with automatic sync between web app and POS billing.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Business Reports & Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time reports on daily sales, gross margins, fast-selling produce, peak hour trends, and wastage analytics.</p>
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
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Why Choose AutomateX.ai for Produce Businesses?</h2>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;" class="mb-4">Designed specifically for Indian fresh food businesses to solve real-world daily challenges like weight accuracy, high perishable wastage, and fast customer queues.</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: none;">
                        Get Started Today <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-bolt mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Fast Weight Billing</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Fast & accurate weight-based billing with GST-compliant invoices in under 3 seconds.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-clock mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Stock & Expiry Alerts</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time inventory monitoring with automated stock alerts and perishable item tracking.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-sitemap mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Centralized Control</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Centralized control of multiple fruit and vegetable outlets from one dashboard.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-file-invoice-dollar mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">GST Accounting</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Integrated accounting with GST-ready financial statements, profit & loss, and audit logs.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-gift mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Loyalty & Memberships</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Customer loyalty programs, pre-paid wallets, discount cards, and seasonal campaigns.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-cloud-upload-alt mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Cloud Sync</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Online and offline sync across desktop, tablet, and mobile with auto cloud backup.</p>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Perfect For All Fresh Produce Businesses</h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">AutomateX.ai is built to empower businesses of all sizes across the produce and fresh food industry.</p>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-apple-alt text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Fruit Shops</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-carrot text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Vegetable Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-leaf text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Fresh Produce Retailers</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-seedling text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Organic Food Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-basket text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Grocery & Farm Produce</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-store-alt text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Supermarkets</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-truck text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Wholesale Produce Markets</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-network-wired text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Multi-Branch Chains</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA SECTION -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(5, 150, 105, 0.25) 100%); border-top: 1px solid rgba(16, 185, 129, 0.3);">
        <div class="container py-4 text-center">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem; margin-bottom: 16px;">Grow Your Fresh Produce Business with AutomateX.ai</h2>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Whether you operate a local fruit shop or manage multiple fresh produce outlets, AutomateX.ai Fruits & Vegetables Store Management Software helps you automate billing, manage inventory, reduce wastage, and scale operations effortlessly.
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 16px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                    <i class="fas fa-calendar-check me-2"></i> Request Your Live Demo
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
