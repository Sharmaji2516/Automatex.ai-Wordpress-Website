<?php
/**
 * Template Name: AI Retail Store Management Software
 * Description: AI-Powered Retail ERP Software Page Template
 */

get_header();
?>

<div class="retail-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="retail-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.18) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(99, 102, 241, 0.15); color: #6366f1; border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-microchip me-2"></i> #1 AI-Powered Retail ERP Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.7rem;">
                        Best AI-Powered Retail ERP <br>
                        <span style="background: linear-gradient(135deg, #6366f1 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Software in India</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Smart Cloud POS & ERP Solution for Modern Retail Businesses. Complete control over billing, inventory, customer relationships, accounting, and multi-branch store operations.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Retail ERP Software is an AI-powered cloud solution engineered for retailers of all sizes—supermarkets, grocery stores, hardware shops, gift stores, apparel showrooms, pharmacies, electronics stores, and multi-branch retail chains.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" id="btn-hero-retail-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-retail-features" style="background: rgba(255,255,255,0.05); color: #6366f1; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(99, 102, 241, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="retail-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retail-store.png" alt="AutomateX.ai AI Retail Store ERP Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(99, 102, 241, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(99, 102, 241, 0.15)); max-height: 500px; object-fit: contain;">
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
                    <span style="color: #6366f1; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;" class="d-block mb-2">Centralized AI Retail Automation</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">
                        Manage Every Aspect of Your <span style="background: linear-gradient(135deg, #6366f1 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Retail Business</span>
                    </h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a retail business requires complete control over billing, inventory, customer relationships, accounting, and multiple store locations.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Our all-in-one platform combines AI-powered POS billing, inventory management, CRM, accounting, warehouse management, omnichannel commerce, and business intelligence into one centralized dashboard, enabling retailers to manage every aspect of their business from anywhere.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-brain mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">AI Predictive Insights</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Automated demand forecasting and stock replenishment.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-network-wired mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Omnichannel Sync</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time inventory sync between offline POS and web/mobile apps.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.25);">
                        <h4 class="mb-4" style="color: #fff; font-weight: 700; font-size: 1.3rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">Core AI Retail ERP Pillars</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.15); color: #6366f1; flex-shrink: 0;">
                                    <i class="fas fa-cash-register"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">AI POS Billing & GST Compliance</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">High-speed billing counter POS with barcode scanning, GST invoicing, hold cart features, and multi-unit support.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.15); color: #6366f1; flex-shrink: 0;">
                                    <i class="fas fa-sitemap"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Multi-Store & Chain Control</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Centralized stock control across multiple retail outlets, central warehouses, and franchise networks.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.15); color: #6366f1; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">WhatsApp Marketing & Digital Invoicing</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Send green digital receipts, personalized offers, and automated re-engagement messages via WhatsApp.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.15); color: #6366f1; flex-shrink: 0;">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Predictive Analytics & Reports</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">AI-powered dashboards for sales forecasting, inventory planning, gross margin analysis, and profit tracking.</p>
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
                <span style="color: #6366f1; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Key Features</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Complete Enterprise Suite for <span style="color: #6366f1;">Modern Retailers</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">Streamline daily retail operations, reduce costs, and scale your business effortlessly.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI POS Billing & GST Invoicing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">High-speed billing counter POS with multi-tax GST support, barcode scanning, holding carts, and thermal printer integration.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Warehouse</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time inventory monitoring across godowns and stores with automated reorder warnings and batch expiry tracking.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store Retail Control</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage multiple retail outlets, central warehouses, and inter-branch stock transfers from one cloud dashboard.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Loyalty</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Customer points programs, pre-paid wallets, discount cards, and automated birthday/festive promotional triggers.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & Purchase Orders</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Automate vendor purchase order creation, goods receipt notes (GRN), vendor ledgers, and return management.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Billing & Marketing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send green digital bills and automated promotional campaign messages directly to customers' WhatsApp.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store & Omnichannel</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrated web and mobile ordering portal with real-time stock sync across physical counters and e-commerce.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Reports & Predictive Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time dashboards analyzing daily turnover, fast-selling SKUs, peak checkout hours, and shrinkage.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Secure Multi-Payment Support</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Accept UPI dynamic QR codes, credit/debit cards, mobile wallets, cash, and digital store credit seamlessly.</p>
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
                    <span style="color: #6366f1; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">The AutomateX Advantage</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Why Choose AutomateX.ai Retail ERP?</h2>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;" class="mb-4">Designed specifically for Indian retail businesses to automate high-speed billing, eliminate stockouts, manage multi-location stores, and maximize profitability.</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #6366f1 0%, #3b82f6 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: none;">
                        Get Started Today <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-bolt mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">High-Speed Billing</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">High-speed billing with barcode scanning and intelligent POS automation.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-chart-line mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Real-Time Inventory Alerts</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time inventory monitoring with automated stock alerts and AI-powered replenishment.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-sitemap mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Centralized Multi-Store</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Centralized management of multiple stores, warehouses, and franchise locations.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-file-invoice-dollar mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">GST Accounting & Compliance</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Integrated accounting with GST-ready invoices, financial reports, and tax compliance.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-gift mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Loyalty & Marketing</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Customer loyalty programs, memberships, personalized offers, and promotional campaigns.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <i class="fas fa-cloud-upload-alt mb-2 d-block" style="color: #6366f1; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Cloud & Offline Auto Sync</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Seamless synchronization between online and offline retail operations with auto cloud backup.</p>
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
                <span style="color: #6366f1; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Tailored Solutions</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Perfect For All Retail Sectors</h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">AutomateX.ai is built to empower businesses of all sizes across every retail segment.</p>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-cart text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Supermarkets & Grocery</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-boxes text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Departmental Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-wrench text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Hardware & Building Materials</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-tshirt text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Fashion & Garments</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-gift text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Gift & Toy Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-mobile-alt text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Electronics & Mobile Shops</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-magic text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Cosmetic & Beauty Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-network-wired text-indigo fs-2 mb-3 d-block" style="color: #6366f1;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Multi-Branch Retail Chains</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA SECTION -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(99, 102, 241, 0.15) 0%, rgba(59, 130, 246, 0.25) 100%); border-top: 1px solid rgba(99, 102, 241, 0.3);">
        <div class="container py-4 text-center">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem; margin-bottom: 16px;">Grow Your Retail Business with AutomateX.ai</h2>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Whether you operate a single retail outlet or manage a nationwide chain of stores, AutomateX.ai Retail ERP Software helps you automate billing, optimize inventory, strengthen customer relationships, simplify accounting, and manage every retail operation from one intelligent cloud platform.
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 16px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                    <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo Today
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
