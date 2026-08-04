<?php
/**
 * Template Name: Supermarket Management Software
 * Description: AI-Powered Supermarket Management Software Page Template
 */

get_header();
?>

<div class="supermarket-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="supermarket-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(6, 182, 212, 0.18) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(6, 182, 212, 0.15); color: #06b6d4; border: 1px solid rgba(6, 182, 212, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-shopping-cart me-2"></i> Best AI Supermarket ERP & POS in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.7rem;">
                        Best AI-Powered Supermarket <br>
                        <span style="background: linear-gradient(135deg, #06b6d4 0%, #0284c7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Management Software in India</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Smart Cloud POS & ERP Solution for Supermarkets & Retail Chains. Streamline billing, inventory control, multi-counter checkouts, supplier orders, and omnichannel sales from one intelligent dashboard.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Supermarket Management Software is an AI-powered cloud solution built specifically for supermarkets, hypermarkets, retail chains, wholesale stores, and multi-branch networks to accelerate daily operations and maximize profitability.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" id="btn-hero-supermarket-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-supermarket-features" style="background: rgba(255,255,255,0.05); color: #06b6d4; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(6, 182, 212, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="supermarket-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Cloud-Supermarket.png" alt="AutomateX.ai Supermarket Management Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(6, 182, 212, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(6, 182, 212, 0.15)); max-height: 500px; object-fit: contain;">
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
                    <span style="color: #06b6d4; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;" class="d-block mb-2">Centralized Supermarket ERP</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">
                        Complete Operational Command Over <span style="background: linear-gradient(135deg, #06b6d4 0%, #0284c7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Your Supermarket Chain</span>
                    </h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a supermarket involves much more than billing. From inventory control and supplier management to customer loyalty, accounting, warehouse operations, and online sales, every process should work together seamlessly.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Our all-in-one platform integrates intelligent POS billing, inventory management, CRM, accounting, warehouse management, omnichannel commerce, and business analytics into one centralized dashboard.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-layer-group mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Multi-Counter POS</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Simultaneous high-speed checkout lanes with cart holding.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-warehouse mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Smart Replenishment</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Automated PO generation based on sales velocity & stock thresholds.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.25);">
                        <h4 class="mb-4" style="color: #fff; font-weight: 700; font-size: 1.3rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px;">Core Supermarket Retail Capabilities</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; flex-shrink: 0;">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">High-Speed Multi-Counter Checkout</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Scan barcodes, weigh produce, calculate GST discounts, and accept payments in seconds.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; flex-shrink: 0;">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Real-Time Inventory & Batch Expiry Tracking</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">FIFO inventory movement alerts for perishable groceries and FMCG goods.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">WhatsApp Digital Receipts & Marketing</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Automate green billing receipts and send targeted weekend promotional campaigns.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; flex-shrink: 0;">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <div>
                                    <h6 style="color: #fff; font-weight: 700; margin-bottom: 4px;">Multi-Store & Franchise Management</h6>
                                    <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 0;">Centralized stock control across multiple supermarkets, warehouses, and franchise outlets.</p>
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
                <span style="color: #06b6d4; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Key Features</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Complete Enterprise Suite for <span style="color: #06b6d4;">Supermarkets</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">Empower your supermarket counters, manage thousands of SKUs, and accelerate business growth.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI POS Billing & GST Invoices</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Multi-counter billing POS with GST-compliant invoicing, hold cart features, and weighing scale compatibility.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Instant barcode tag generation, rack location mapping, and real-time stock level monitoring.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer CRM & Loyalty</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Multi-tiered loyalty points, customer memberships, pre-paid wallets, and targeted promotional discounts.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouse Sync</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage multiple supermarket branches, central distribution centers, and stock transfers effortlessly.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Supplier & Purchase Orders</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Automate vendor purchase order creation, goods receipt notes (GRN), and vendor ledger accounting.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Campaigns & Billing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send paperless invoices, promotional campaign messages, and exclusive deal links directly on WhatsApp.</p>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-shopping-basket"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Store & Omnichannel</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrated web and mobile ordering portal for instant home delivery with central inventory sync.</p>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Business Reports & Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Real-time reporting on daily sales, gross margins, fast-selling SKUs, peak checkout hours, and stock loss.</p>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Secure Multi-Payment Support</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Accept UPI dynamic QR codes, credit/debit cards, mobile wallets, cash, and store vouchers seamlessly.</p>
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
                    <span style="color: #06b6d4; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">The AutomateX Advantage</span>
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Why Choose AutomateX.ai for Supermarkets?</h2>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;" class="mb-4">Designed specifically for Indian supermarket operators, hypermarkets, and retail chains to eliminate billing queues, prevent inventory leakage, and grow profit margins.</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #06b6d4 0%, #0284c7 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: none;">
                        Get Started Today <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-bolt mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Multi-Counter POS</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">High-speed billing with barcode scanning & weigh-scale integration across multiple counters.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-chart-line mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Intelligent Replenishment</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Real-time inventory tracking with automated stock alerts and reorder recommendations.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-network-wired mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Chain & Franchise Control</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Centralized management for multiple supermarkets, warehouses, and franchise outlets.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-file-invoice-dollar mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">GST Accounting & Reports</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Integrated accounting with GST-ready invoices, GSTR filings, and comprehensive reports.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-gift mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Loyalty & Marketing</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Customer loyalty programs, memberships, discounts, and personalized marketing campaigns.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                                <i class="fas fa-cloud-upload-alt mb-2 d-block" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                <h6 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Cloud & Offline Auto Sync</h6>
                                <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Seamless synchronization between online and offline supermarket operations with automatic cloud backup.</p>
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
                <span style="color: #06b6d4; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Tailored Solutions</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Perfect For All Supermarket Formats</h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">AutomateX.ai is built to empower businesses of all sizes across the supermarket & hypermarket retail sector.</p>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-cart text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Supermarkets</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-building text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Hypermarkets</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-store-alt text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Grocery Chains</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shopping-bag text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Retail Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-truck text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Wholesale Markets</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-boxes text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Departmental Stores</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-network-wired text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Multi-Branch Chains</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-4 text-center rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-sitemap text-cyan fs-2 mb-3 d-block" style="color: #06b6d4;"></i>
                        <h6 style="color: #fff; font-weight: 700; margin-bottom: 0;">Franchise Networks</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA SECTION -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(2, 132, 199, 0.25) 100%); border-top: 1px solid rgba(6, 182, 212, 0.3);">
        <div class="container py-4 text-center">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem; margin-bottom: 16px;">Grow Your Supermarket Business with AutomateX.ai</h2>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Whether you operate a neighborhood supermarket or manage multiple retail branches, AutomateX.ai Supermarket Management Software helps you automate billing, organize inventory, strengthen customer relationships, and streamline operations from one intelligent cloud platform.
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 16px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                    <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo Today
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
