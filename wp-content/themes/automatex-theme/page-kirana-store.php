<?php
/**
 * Template Name: Kirana Store Management Software
 * Description: AI-Powered Kirana Store Management Software Page Template
 */

get_header();
?>

<div class="kirana-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="kirana-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(16, 185, 129, 0.18) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-store me-2"></i> Best AI-Powered Kirana Store Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.7rem;">
                        Smart Cloud POS & ERP Solution <br>
                        <span style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Modern Kirana Stores</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Running a Kirana store requires fast billing, accurate inventory management, supplier coordination, customer engagement, and efficient accounting.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Kirana Store Management Software is an AI-powered cloud ERP and POS solution designed specifically for Kirana stores, provision shops, neighborhood grocery stores, mini marts, and multi-branch retail businesses to automate daily operations while improving productivity and profitability.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" id="btn-hero-kirana-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-kirana-features" style="background: rgba(255,255,255,0.05); color: #10b981; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(16, 185, 129, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="kirana-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cloud-Kirana.png" alt="AutomateX.ai Kirana Store Management Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(16, 185, 129, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(16, 185, 129, 0.15)); max-height: 500px; object-fit: contain;">
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
                    <span style="color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;" class="d-block mb-2">Modernize Your Kirana Business</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">
                        Complete Control Over Your <span style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Provision & Kirana Store</span>
                    </h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our all-in-one platform combines intelligent POS billing, inventory management, CRM, accounting, supplier management, warehouse control, and omnichannel commerce into one centralized dashboard, giving you complete control over your entire retail business.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Cut billing queues down to seconds, manage digital customer Khata credit accounts, track Loose vs Packaged stock items, and launch online delivery for your neighborhood customers seamlessly.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-tachometer-alt text-emerald mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Sub-3 Sec Billing</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Laser barcode scanning & weigh-scale POS.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-book text-emerald mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Digital Udhar / Khata</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Track customer credit limits & WhatsApp balance alerts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h4 class="mb-4" style="color: #fff; font-weight: 700; font-size: 1.3rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">Core Kirana Retail Pillars</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-barcode"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Barcode & Weight Scale Integration</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Scan manufacturer barcodes or connect digital scales for loose grains, pulses, and spices.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Stock Expiry & Reorder Warnings</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Real-time inventory alerts when items drop below safety levels or approach expiration dates.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">WhatsApp Billing & Offers</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Send green digital receipts, payment reminders, and monthly festive discount offers on WhatsApp.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.15); color: #10b981; flex-shrink: 0;">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Offline-to-Cloud Auto Sync</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Never lose a sale during internet outages; billing continues locally and syncs automatically.</p>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Complete Feature Suite for <span style="color: #10b981;">Indian Kirana Stores</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">AutomateX.ai simplifies item search, supplier ordering, customer credit accounting, and GST compliance.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI POS Billing & GST Invoicing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Lightning-fast checkout with multi-tax GST invoices, hold cart items, credit billing, and thermal printer support.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Pre-loaded Kirana product library, barcode sticker generation, and real-time FMCG item tracking.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Udhar Khata</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Customer points programs, digital credit ledgers, automated WhatsApp payment reminders, and customer discounts.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouse</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage central storage and multiple Kirana branch counters from a single centralized dashboard.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & PO Control</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Automate vendor purchase orders, wholesale market inward goods, supplier ledgers, and payment tracking.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Campaigns & Billing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Deliver paperless bills and promotional festival offers directly to your customers' WhatsApp.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-shopping-basket"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store Integration</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Launch your online Kirana app for neighborhood delivery with automated inventory sync.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Retail Reports & Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time reporting on daily sales, gross margins, fast-selling FMCG items, and profit statements.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Payment Support</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Accept UPI dynamic QR codes, credit/debit cards, mobile wallets, cash, and digital Khata.</p>
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
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Why Choose AutomateX.ai for Kirana Stores?</h2>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;" class="mb-4">Designed specifically for Indian Kirana retailers to solve daily pain points like high peak counter crowds, manual credit notebook tracking, and stock shortages.</p>
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
                                <i class="fas fa-chart-line mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Real-Time Stock Alerts</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time inventory tracking with automated stock alerts and reorder recommendations.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-sitemap mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Multi-Store Management</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Centralized management for multiple Kirana stores and warehouses.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-file-invoice-dollar mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">GST Accounting & Reports</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Integrated accounting with GST-ready invoices and financial statement dashboards.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-gift mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Loyalty & Promotions</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Customer loyalty programs, memberships, discounts, and personalized promotions.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.2);">
                                <i class="fas fa-cloud-upload-alt mb-2 d-block" style="color: #10b981; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Cloud & Offline POS</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time sync between online and offline store operations with automatic cloud backup.</p>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Perfect For All Provision & Kirana Formats</h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">AutomateX.ai is built to empower businesses of all sizes across the Kirana retail segment.</p>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-store text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Kirana Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-boxes text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Provision Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-basket text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Grocery Shops</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-cart text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Mini Marts</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-leaf text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Daily Essentials Retailers</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-building text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Neighborhood Supermarkets</h6>
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
                        <i class="fas fa-truck text-emerald fs-2 mb-3 d-block" style="color: #10b981;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Wholesale Grocery</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA SECTION -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(5, 150, 105, 0.25) 100%); border-top: 1px solid rgba(16, 185, 129, 0.3);">
        <div class="container py-4 text-center">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem; margin-bottom: 16px;">Grow Your Kirana Business with AutomateX.ai</h2>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Whether you own a single Kirana store or manage multiple retail outlets, AutomateX.ai Kirana Store Management Software helps you automate billing, organize inventory, strengthen customer relationships, and streamline every business operation from one intelligent cloud platform.
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 16px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                    <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo Today
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
