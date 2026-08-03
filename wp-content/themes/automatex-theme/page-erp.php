<?php
/**
 * Template Name: ERP Software Page
 * Slug: erp
 */

get_header(); ?>

<div class="erp-services-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="erp-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.15) 0%, rgba(6, 8, 20, 1) 70%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(255, 153, 0, 0.15); color: #ff9900; border: 1px solid rgba(255, 153, 0, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-network-wired me-2"></i> India's Smart AI-Powered Cloud ERP
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Intelligent Cloud ERP <br>
                        <span style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Modern Enterprises</span>
                    </h1>
                    <h2 class="h5 text-slate-300 mt-3" style="color: #cbd5e1; font-weight: 500; line-height: 1.6;">
                        Manage Sales, Inventory, Accounting & Business Operations from One Intelligent Platform
                    </h2>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Running a growing business requires more than spreadsheets and disconnected software. AutomateX.ai ERP is an advanced cloud-based Enterprise Resource Planning (ERP) solution that centralizes every critical business function into one secure platform.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        From billing and inventory to CRM, accounting, purchasing, and analytics, our ERP software helps businesses improve efficiency, automate routine tasks, and make faster, data-driven decisions. Whether you operate a retail store, wholesale business, manufacturing unit, or multi-location enterprise, AutomateX.ai ERP provides the flexibility and scalability needed for sustainable growth.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule a Free Demo
                        </button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" style="background: rgba(255,255,255,0.05); color: #a855f7; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(168, 85, 247, 0.3);">
                            <i class="fas fa-stream me-2"></i> Explore ERP Features
                        </button>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="web-hero-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(168, 85, 247, 0.35); backdrop-filter: blur(12px); box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
                        <div class="stat-badge mb-3 d-inline-block px-3 py-1 rounded-pill" style="background: rgba(16, 185, 129, 0.15); color: #10b981; font-weight: 700; font-size: 0.85rem;">
                            <i class="fas fa-robot me-1"></i> AI-Powered Operations
                        </div>
                        <h3 style="color: #fff; font-weight: 800; font-size: 1.6rem;">Enterprise Resource Planning</h3>
                        <p style="color: #94a3b8; font-size: 0.95rem; margin-bottom: 20px;">Multi-Store • Integrated Accounts • Warehouse Management</p>
                        
                        <div class="row g-3 text-start">
                            <div class="col-12">
                                <div class="p-3 mb-2 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span style="color: #cbd5e1; font-size: 0.9rem;">Operational Efficiency Growth</span>
                                        <span style="color: #10b981; font-weight: 700;">+40% Average</span>
                                    </div>
                                    <div class="progress" style="height: 6px; background: rgba(255,255,255,0.1);">
                                        <div class="progress-bar bg-success" style="width: 88%;"></div>
                                    </div>
                                </div>
                                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span style="color: #cbd5e1; font-size: 0.9rem;">Database Security & Uptime</span>
                                        <span style="color: #a855f7; font-weight: 700;">99.99%</span>
                                    </div>
                                    <div class="progress" style="height: 6px; background: rgba(255,255,255,0.1);">
                                        <div class="progress-bar" style="width: 99.9%; background-color: #a855f7;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-outline-light w-100 mt-4" style="border-radius: 8px; font-weight: 600; transition: 0.3s;">
                            Request Enterprise Trial
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. WHY ERP / OPERATIONS OVERVIEW -->
    <section class="py-5" style="background: #090d1f;">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Why Businesses Need <span style="color: #6366f1;">an ERP System</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing separate software for billing, inventory, accounting, CRM, and reporting often creates duplicate work and inaccurate data.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai ERP eliminates these challenges by bringing every business process together under one integrated platform. Manage every department, from inventory levels and warehouses to sales, tax returns, and client relationships, from a centralized dashboard.
                    </p>
                    
                    <h5 class="text-white mt-4" style="font-weight: 700;"><i class="fas fa-boxes text-info me-2"></i> Intelligent Inventory Control</h5>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Track inventory in real time across stores, warehouses, and distribution centers. Features include live stock monitoring, variants, batch/expiry tracking, stock transfers, and automated reorder alerts to reduce stockouts.</p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.25);">
                        <h4 class="mb-3 text-info" style="font-weight: 700;">Unified Business Ecosystem:</h4>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 1rem;">
                            <li><i class="fas fa-check-circle text-success me-2"></i> <strong>POS Billing:</strong> Unified high-speed retail checkout</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> <strong>CRM & Customer Loyalty:</strong> Retain shoppers and trace lifecycle value</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> <strong>Accounting & GST Compliance:</strong> Automated logs and tax returns filings</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> <strong>Supplier Management:</strong> Purchase orders & automated GRN logs</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> <strong>Multi-Store Dashboard:</strong> Centralized branches and stock transfers control</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> <strong>eCommerce Sync:</strong> Connect Shopify, WooCommerce, or Magento stores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. ALL IN ONE ERP MODULES -->
    <section class="py-5" style="background: #060814; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">All-in-One ERP for <span style="color: #ff9900;">Complete Business Control</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Centralize operations, improve employee productivity, and ensure error-free data tracking across all departments.</p>
            </div>
            
            <div class="row g-4 justify-content-center text-center">
                <?php
                $erp_modules = [
                    "Inventory Management" => "fa-cubes",
                    "Billing & Invoicing" => "fa-file-invoice-dollar",
                    "Customer Relationship Management" => "fa-users-cog",
                    "Accounting & Finance" => "fa-calculator",
                    "Multi-Store Management" => "fa-store-alt",
                    "Purchase & Procurement" => "fa-shopping-cart",
                    "Business Analytics" => "fa-chart-pie",
                    "Warehouse Management" => "fa-warehouse",
                    "Online & Offline Sales" => "fa-globe",
                    "Employee & HR Management" => "fa-id-card-alt"
                ];
                foreach ($erp_modules as $name => $icon) {
                    echo '
                    <div class="col-lg-2-4 col-md-4 col-sm-6">
                        <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05); transition: all 0.2s;">
                            <i class="fas ' . $icon . ' mb-3 text-info" style="font-size: 1.8rem; color: #6366f1 !important;"></i>
                            <h6 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin: 0; line-height: 1.4;">' . $name . '</h6>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 4. DETAILED ERP FEATURES GRID -->
    <section class="py-5" style="background: #090d1f; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Powerful <span style="color: #6366f1;">ERP Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">We build ERP modules that simplify complex operations while improving efficiency and compliance.</p>
            </div>
            
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white mb-2" style="font-weight: 700;"><i class="fas fa-tasks text-info me-2"></i> Product Management</h5>
                        <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Maintain a centralized product database with categories, variants (size, color, model), SKUs, barcode configurations, images, and bulk Excel imports.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white mb-2" style="font-weight: 700;"><i class="fas fa-boxes text-info me-2"></i> Advanced Inventory</h5>
                        <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Gain real-time visibility across warehouses, monitor product batches, check expiry lists, handle stock transfers, and set reorder alerts.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white mb-2" style="font-weight: 700;"><i class="fas fa-file-invoice text-info me-2"></i> Billing & GST Compliance</h5>
                        <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Generate invoices with automatic tax calculations, e-invoicing verification, and e-way bill generation to ensure compliance with GST laws.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white mb-2" style="font-weight: 700;"><i class="fas fa-calculator text-info me-2"></i> Integrated Accounting</h5>
                        <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Synchronize transaction records instantly to ledgers, calculate balance sheets, track business expenses, and output P&L statements automatically.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white mb-2" style="font-weight: 700;"><i class="fas fa-weight text-info me-2"></i> Weighing Scale & Barcode</h5>
                        <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Integrate barcode scanners and weight scales directly at billing checkouts to read item weight and automate pricing calculations.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white mb-2" style="font-weight: 700;"><i class="fas fa-user-shield text-info me-2"></i> Access Controls & Alerts</h5>
                        <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Restrict data with role-based permissions, monitor audit login tracks, and receive notifications via Email, SMS, or WhatsApp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. MULTI-STORE & WAREHOUSE SYSTEM -->
    <section class="py-5" style="background: #060814; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="text-white" style="font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Manage Multiple Outlets from <span style="color: #6366f1;">One Dashboard</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Centralize command over your warehouses, supplier procurement paths, and sales pipelines. Standardize catalog prices across outlets and transfer stock smoothly.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.8;">
                        Our built-in **Warehouse Management System (WMS)** allows warehouse-wise inventory tracking, stock movements routing, batch configurations, bin allocations, and goods inward/outward (GRN) verification.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.25);">
                        <h5 class="text-info mb-3" style="font-weight: 700;"><i class="fas fa-network-wired me-2"></i> Supply Chain Modules:</h5>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.95rem;">
                            <li><i class="fas fa-check text-info me-3"></i> <strong>Procurement System:</strong> Purchase requests, PO generation & vendor details</li>
                            <li><i class="fas fa-check text-info me-3"></i> <strong>Sales Pipelines:</strong> Sales quotes, orders, delivery challans & invoices</li>
                            <li><i class="fas fa-check text-info me-3"></i> <strong>WMS Tracking:</strong> Batch management, bin locations & warehouse transfers</li>
                            <li><i class="fas fa-check text-info me-3"></i> <strong>Third-Party Links:</strong> Razorpay, Stripe, Tally, Shopify, and Delhivery/Shiprocket</li>
                            <li><i class="fas fa-check text-info me-3"></i> <strong>HRMS Integration:</strong> Synchronize attendance records and employee payrolls</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. ERP IMPLEMENTATION PROCESS -->
    <section class="py-5" style="background: #090d1f; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Our ERP <span style="color: #ff9900;">Implementation Process</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">We follow a structured methodology to ensure a smooth transition with minimal operational disruption.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #6366f1;">
                        <span class="text-info font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #6366f1 !important;">Step 1</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">Requirement Analysis</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">We audit your current operational workflows, pain points, and growth targets before configuration.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #6366f1;">
                        <span class="text-info font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #6366f1 !important;">Step 2</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">Solution Planning</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">We outline modules to activate, map API integrations, and detail role permissions structures.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #6366f1;">
                        <span class="text-info font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #6366f1 !important;">Step 3</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">Customization & Dev</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">Our developers build custom database schemas, configure workflows, and test API endpoints.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #6366f1;">
                        <span class="text-info font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #6366f1 !important;">Step 4</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">Data Migration</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">We securely transfer customer lists, item catalogs, ledgers history, and vendor directories.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #ff9900;">
                        <span class="text-warning font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #ff9900 !important;">Step 5</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">Testing & QA</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">Every flow undergoes rigorous load testing, integration sanity audits, and UI responsiveness checks.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #ff9900;">
                        <span class="text-warning font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #ff9900 !important;">Step 6</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">User Training</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">We conduct hands-on training sessions and deliver detailed user documentation to your staff.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border-left: 4px solid #ff9900;">
                        <span class="text-warning font-weight-bold" style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #ff9900 !important;">Step 7</span>
                        <h5 class="text-white mt-1 mb-2" style="font-weight: 700; font-size: 1.05rem;">Go Live & Support</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">We deploy the system to live hosting, monitor performance, and provide post-deployment updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INDUSTRIES & TECHNOLOGIES -->
    <section class="py-5" style="background: #060814; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-stretch g-4">
                <!-- Left: Industries -->
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 class="text-white mb-4" style="font-weight: 800;"><i class="fas fa-industry text-info me-2"></i> Industries We Serve</h4>
                        <div class="d-flex flex-wrap gap-2">
                            <?php
                            $industries = ["Retail & Supermarkets", "Wholesale & Distribution", "Manufacturing", "Healthcare & Pharma", "Education & Institutions", "Hospitality & Restaurants", "Logistics & Supply Chain", "Finance & Professional Services", "E-Commerce Businesses", "Multi-Branch Enterprises"];
                            foreach ($industries as $ind) {
                                echo '<span class="px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.04); color: #cbd5e1; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">' . $ind . '</span>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Right: Technologies -->
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 class="text-white mb-4" style="font-weight: 800;"><i class="fas fa-laptop-code text-info me-2"></i> Technologies Powering Our ERP</h4>
                        <div class="row g-3" style="font-size: 0.85rem; color: #94a3b8;">
                            <div class="col-6">
                                <h6 class="text-white mb-1" style="font-weight: 700;">Front-End</h6>
                                <span>React.js, Next.js, Bootstrap, Tailwind CSS</span>
                            </div>
                            <div class="col-6">
                                <h6 class="text-white mb-1" style="font-weight: 700;">Back-End</h6>
                                <span>Node.js, Laravel, Python, Java</span>
                            </div>
                            <div class="col-6">
                                <h6 class="text-white mb-1" style="font-weight: 700;">Databases</h6>
                                <span>MySQL, PostgreSQL, MongoDB, Firebase</span>
                            </div>
                            <div class="col-6">
                                <h6 class="text-white mb-1" style="font-weight: 700;">Cloud Infrastructure</h6>
                                <span>Secure Hosting, SSL Encryption, Auto Backups</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Choose <span style="color: #ff9900;">AutomateX.ai ERP?</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">We combine technical expertise with practical business understanding to deliver reliable solutions.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-cogs text-warning mb-3" style="font-size: 2rem;"></i>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Customized Solution</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.5; margin: 0;">We customize ERP modules, reporting sheets, and dashboards based specifically on your requirements.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-cloud-upload-alt text-warning mb-3" style="font-size: 2rem;"></i>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Cloud Architecture</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.5; margin: 0;">Our cloud-first approach guarantees secure access, automatic software patches, and business continuity.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-brain mb-3" style="font-size: 2rem; color: #ff9900;"></i>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Intelligent Automation</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.5; margin: 0;">Automate repetitive accounting processes, approvals, and reporting tasks with AI assistance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-headset text-warning mb-3" style="font-size: 2rem;"></i>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Post-Launch Support</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.5; margin: 0;">Get security updates, cloud database maintenance, feature upgrades, and troubleshooting assistance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ SECTION -->
    <section class="py-5" style="background: #060814; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="color: #ff9900;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Common questions about our Enterprise Resource Planning software.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <?php
                        $faqs = [
                            [
                                "q" => "What is ERP software?",
                                "a" => "ERP (Enterprise Resource Planning) software integrates core business functions such as sales, inventory, accounting, purchasing, customer management, and reporting into a single centralized platform."
                            ],
                            [
                                "q" => "Which businesses can use AutomateX.ai ERP?",
                                "a" => "Our ERP solution is suitable for startups, SMEs, manufacturers, retailers, wholesalers, distributors, healthcare providers, educational institutions, logistics companies, and large enterprises."
                            ],
                            [
                                "q" => "Can the ERP software be customized?",
                                "a" => "Yes. Every business has different operational requirements, and our ERP platform can be customized with modules, workflows, reports, and integrations based on your needs."
                            ],
                            [
                                "q" => "Is the ERP cloud-based?",
                                "a" => "Yes. AutomateX.ai ERP is a secure cloud-based platform that allows you to access your business data anytime and from any location with an active internet connection."
                            ],
                            [
                                "q" => "Can I manage multiple branches?",
                                "a" => "Absolutely. Our ERP enables centralized management of multiple branches, warehouses, stores, and business locations through one dashboard."
                            ],
                            [
                                "q" => "Does the ERP support GST and accounting?",
                                "a" => "Yes. The system includes GST-compliant billing, accounting, financial reporting, tax management, e-invoicing, and other compliance features."
                            ],
                            [
                                "q" => "Is my business data secure?",
                                "a" => "Yes. We implement enterprise-grade security measures, including encrypted cloud storage, secure authentication, automated backups, role-based permissions, and regular security updates."
                            ],
                            [
                                "q" => "Do you provide implementation and training?",
                                "a" => "Yes. We manage the complete ERP implementation process, including installation, customization, data migration, employee training, deployment, and post-launch support."
                            ]
                        ];

                        foreach ($faqs as $i => $faq) {
                            $target = "collapse" . $i;
                            $heading = "heading" . $i;
                            $collapsedClass = ($i === 0) ? "" : "collapsed";
                            $showClass = ($i === 0) ? "show" : "";
                            
                            echo '
                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden" style="background: rgba(15, 23, 42, 0.9);">
                                <h2 class="accordion-header" id="' . $heading . '">
                                    <button class="accordion-button ' . $collapsedClass . ' text-white bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#' . $target . '" aria-expanded="' . ($i === 0 ? "true" : "false") . '" aria-controls="' . $target . '" style="font-weight: 700;">
                                        ' . $faq["q"] . '
                                    </button>
                                </h2>
                                <div id="' . $target . '" class="accordion-collapse collapse ' . $showClass . '" aria-labelledby="' . $heading . '" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-slate-300" style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
                                        ' . $faq["a"] . '
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CTA SECTION -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(99, 102, 241, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Ready to Digitally Transform Your Business?</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Modern businesses require intelligent solutions that improve efficiency, simplify operations, and support continuous growth. Discover how AutomateX.ai ERP can streamline your workflows.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                <i class="fas fa-paper-plane me-2"></i> Schedule Your Free ERP Consultation Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
