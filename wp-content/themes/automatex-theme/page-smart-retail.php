<?php
/**
 * Template Name: Smart Retail Software Page
 * Slug: smart-retail
 */

get_header(); ?>

<div class="smart-retail-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="retail-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(6, 182, 212, 0.15) 0%, rgba(6, 8, 20, 1) 70%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(6, 182, 212, 0.15); color: #06b6d4; border: 1px solid rgba(6, 182, 212, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-store me-2"></i> Best AI-Powered Smart Retail Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Transform Traditional Stores <br>
                        <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Into Intelligent Retail Experiences</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        The future of retail is driven by automation, artificial intelligence, and connected shopping experiences. AutomateX.ai Smart Retail Solution empowers retailers with AI-powered technologies that simplify operations, reduce checkout time, improve customer engagement, and optimize store performance.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        Whether you operate a supermarket, fashion outlet, grocery store, electronics showroom, or retail chain, our smart retail platform helps you create a seamless shopping journey for every customer.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-retail-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Book Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-retail-features" style="background: rgba(255,255,255,0.05); color: #00f2fe; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(6, 182, 212, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Smart Retail Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="retail-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/smart-retail.webp" alt="AutomateX.ai Smart Retail Dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(6, 182, 212, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(6, 182, 212, 0.15));">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. NEXT-GEN INTRO -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Next-Generation <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Retail Starts Here</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Today's shoppers expect speed, convenience, and personalized experiences. Traditional retail systems often struggle to meet these expectations.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai combines AI, cloud technology, and intelligent automation to create a connected retail ecosystem where customers enjoy frictionless shopping while businesses gain complete operational control.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.25);">
                        <h4 class="mb-3 text-info" style="font-weight: 700;">Future-proof your store:</h4>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 1rem;">
                            <li><i class="fas fa-bolt text-info me-3"></i> Enable self-service shopping and smart checkouts</li>
                            <li><i class="fas fa-brain text-info me-3"></i> Use computer vision for product recognition</li>
                            <li><i class="fas fa-chart-line text-info me-3"></i> Gain real-time heatmaps and footfall analytics</li>
                            <li><i class="fas fa-sync text-info me-3"></i> Maintain a single source of inventory truth</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. RETAIL CHALLENGES WE SOLVE -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Retail Challenges <span style="color: #00f2fe;">We Solve</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Growing retailers face multiple operational challenges that affect customer satisfaction and profitability. Our Smart Retail platform addresses these challenges through intelligent automation.</p>
            </div>

            <div class="row g-4">
                <!-- Challenge 1 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 12px;"><i class="fas fa-users-slash text-danger me-2"></i> Long Billing Queues</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Manual billing counters often create delays, leading to high drop-offs and reduced customer satisfaction during peak hours.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Enable self-checkout, mobile billing, and AI-assisted payment systems to speed up every transaction.</p>
                        </div>
                    </div>
                </div>
                <!-- Challenge 2 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 12px;"><i class="fas fa-eye-slash text-danger me-2"></i> Limited Store Insights</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Without real-time analytics, retailers struggle to understand customer movement, popular store zones, and overall layout efficiency.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">AI-powered dashboards provide detailed insights into customer traffic, purchasing patterns, and store performance.</p>
                        </div>
                    </div>
                </div>
                <!-- Challenge 3 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 12px;"><i class="fas fa-times-circle text-danger me-2"></i> Inventory & Billing Errors</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Disconnected billing and inventory systems lead to stock mismatches, manual reconciliation errors, and operational inefficiencies.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Synchronize billing, inventory, POS, and ERP into one intelligent, cloud-based retail platform.</p>
                        </div>
                    </div>
                </div>
                <!-- Challenge 4 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 12px;"><i class="fas fa-store-slash text-danger me-2"></i> Inconsistent Shopping Experience</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Customers expect a seamless experience whether shopping online or in-store, but fragmented platforms fail to link customer profiles.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Create a unified omnichannel retail experience with synchronized inventory, payments, loyalty programs, and customer data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KEY FEATURES SECTION -->
    <section class="py-5" id="features-section" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Smart Retail <span style="color: #00f2fe;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai delivers an advanced suite of intelligent retail technologies designed for modern businesses.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Smart Shopping Carts</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Enhance in-store shopping with carts featuring automatic product scanning, live cart value display, self-service billing, integrated loyalty points, and multiple digital payment options.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Product Recognition</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Reduce billing errors through computer-vision and barcode SKU matching that automatically identifies items, updates checkout systems, and synchronizes warehouse inventory.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Self-Checkout Solutions</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Give customers the freedom to complete purchases independently via user-friendly self-checkout counters, contactless digital payments, and automated digital receipts.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Retail Analytics</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Transform store data into business intelligence. Analyze shopper flow, hourly footfall, product performance, heatmaps, and peak traffic intervals to make smarter decisions.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Connected Smart POS</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Manage billing, inventory, and customer databases through one connected platform featuring GST compliance, CRM integration, sales tracking, and live stock updates.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Store Automation</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Integrate smart mirrors, virtual try-ons, AI security cameras, automated weighing scales, interactive kioskes, QR code checkouts, and real-time alerts to modernize the physical store.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SMART WEIGHT SCALE, POS & KIOSK DETAIL -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-stretch g-4">
                <!-- Weighing Scale -->
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 15px;"><i class="fas fa-balance-scale text-info me-2"></i> Smart Weight Scales</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 15px;">Simplify the billing process with weighing systems that automatically identify products and calculate prices with precision.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.88rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Automatic Weight Detection</li>
                            <li><i class="fas fa-check text-info me-2"></i> Instant Price Calculation</li>
                            <li><i class="fas fa-check text-info me-2"></i> Product Recognition</li>
                            <li><i class="fas fa-check text-info me-2"></i> Real-time POS Synchronization</li>
                        </ul>
                    </div>
                </div>
                <!-- Smart POS System -->
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 15px;"><i class="fas fa-cash-register text-info me-2"></i> Connected POS System</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 15px;">Manage every retail operation from a single intelligent dashboard. Every transaction updates your database records instantly.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.88rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Synchronized Billing & CRM</li>
                            <li><i class="fas fa-check text-info me-2"></i> Live Inventory & Stock Alerts</li>
                            <li><i class="fas fa-check text-info me-2"></i> Accounting & GST Compliance</li>
                            <li><i class="fas fa-check text-info me-2"></i> Online Order Integrations</li>
                        </ul>
                    </div>
                </div>
                <!-- Self-Service Kiosks -->
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.2);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 15px;"><i class="fas fa-tv text-info me-2"></i> Self-Service Kiosks</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 15px;">Empower customers to complete purchases independently while reducing waiting time and staff workload.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.88rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Self-service Scan & Bill</li>
                            <li><i class="fas fa-check text-info me-2"></i> Contactless Card/UPI Payments</li>
                            <li><i class="fas fa-check text-info me-2"></i> Digital Receipt & Invoicing</li>
                            <li><i class="fas fa-check text-info me-2"></i> Instant Loyalty Point Redemption</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TRAFFIC INTELLIGENCE, HEATMAPS & SECURITY -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">AI Store <span style="color: #00f2fe;">Analytics & Surveillance</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Optimize store layouts and secure operations using computer-vision and sensors.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;"><i class="fas fa-route text-warning me-2"></i> Store Traffic Analytics</h4>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-bottom: 12px;">Understand how customers move throughout your store using AI-powered tracking technology.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #94a3b8; font-size: 0.85rem;">
                            <li>Daily Footfall & Conversion Rates</li>
                            <li>Peak Shopping Hours & Heat Intervals</li>
                            <li>Average Customer Shopping Duration</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;"><i class="fas fa-fire text-warning me-2"></i> AI Heatmap Analysis</h4>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-bottom: 12px;">Visualize customer density inside your store with interactive heatmaps to optimize layouts.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #94a3b8; font-size: 0.85rem;">
                            <li>Identify High-Traffic & Hot Zones</li>
                            <li>Detect Low-Engagement Shelves</li>
                            <li>Minimize Cash Counter Queue Congestion</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.35);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;"><i class="fas fa-video text-warning me-2"></i> AI Camera Surveillance</h4>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-bottom: 12px;">Improve retail security and operational efficiency with intelligent video analytics.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #94a3b8; font-size: 0.85rem;">
                            <li>Customer Counting & Attendance Logs</li>
                            <li>Suspicious Activity & Shrinkage Detection</li>
                            <li>Real-Time Store Occupancy Alerts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TRY-ON, OMNICHANNEL & PAYMENTS -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.25);">
                        <h4 class="text-white mb-3" style="font-weight: 700;"><i class="fas fa-tshirt text-info me-2"></i> Virtual Try-On & Smart Mirrors</h4>
                        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
                            Enhance the in-store shopping experience through immersive digital technology that improves purchase confidence.
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.9rem;">
                            <li><i class="fas fa-check-circle text-success me-2"></i> Virtually Try on Apparel & Shoes</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Preview Eyewear & Cosmetics</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Interactive Style Comparisons</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Automated Product Recommendations</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 class="text-white mb-3" style="font-weight: 700;"><i class="fas fa-sync text-info me-2"></i> Live Inventory & Omnichannel Sync</h4>
                        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
                            Maintain accurate stock levels across physical stores, eCommerce sites, mobile apps, and marketplaces in real-time.
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.9rem;">
                            <li><i class="fas fa-sync-alt text-info me-2"></i> Auto-update Stock after Sales/Returns</li>
                            <li><i class="fas fa-sync-alt text-info me-2"></i> Cross-Store & Warehouse Stock Visibility</li>
                            <li><i class="fas fa-sync-alt text-info me-2"></i> Flexible Unified Payments (UPI, Cards, Wallets, Points)</li>
                            <li><i class="fas fa-sync-alt text-info me-2"></i> Single database for customer loyalty points</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. REAL-TIME REPORTS SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Intelligent <span style="color: #00f2fe;">Business Reports</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Access real-time reports through one centralized dashboard to monitor business performance.</p>
            </div>

            <div class="row g-4">
                <!-- Sales Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-file-invoice-dollar text-info me-2"></i> Sales Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Daily Revenue Logs</li>
                            <li>Product Sales Performance</li>
                            <li>Cash & Digital Collection</li>
                            <li>Store-wise Performance</li>
                        </ul>
                    </div>
                </div>
                <!-- Inventory Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-boxes text-info me-2"></i> Inventory Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Stock Availability Logs</li>
                            <li>Low-Stock Reorder Alerts</li>
                            <li>Product Movement Index</li>
                            <li>Warehouse Dispatch Logs</li>
                        </ul>
                    </div>
                </div>
                <!-- Customer Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-users text-info me-2"></i> Customer Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>New & Repeat Customers</li>
                            <li>Loyalty Point Usage</li>
                            <li>Customer Spending Trends</li>
                            <li>Average Order Value (AOV)</li>
                        </ul>
                    </div>
                </div>
                <!-- Operational Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-tasks text-info me-2"></i> Operational Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Footfall & Heatmap Analytics</li>
                            <li>Checkout Counter Speed</li>
                            <li>Queue Congestion Index</li>
                            <li>Employee Productivity Logs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. SECURITY & DATA SAFETY -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Enterprise-Grade <span style="color: #00f2fe;">Data Security</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Protect your transaction and customer logs with advanced security protocols. Your business information remains secure, confidential, and always accessible to authorized users.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        AutomateX.ai integrates SSL data encryption, secure cloud architectures, automatic backups, and role-based permissions to ensure compliance and data privacy.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(6, 182, 212, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700;">Security features include:</h5>
                        <div class="row g-2 text-start">
                            <div class="col-md-6"><i class="fas fa-lock text-success me-2"></i> SSL Data Encryption</div>
                            <div class="col-md-6"><i class="fas fa-user-shield text-success me-2"></i> Role-Based Access</div>
                            <div class="col-md-6"><i class="fas fa-key text-success me-2"></i> Two-Factor Auth (2FA)</div>
                            <div class="col-md-6"><i class="fas fa-cloud-upload-alt text-success me-2"></i> Auto Cloud Backups</div>
                            <div class="col-md-6"><i class="fas fa-history text-success me-2"></i> Detailed Audit Logs</div>
                            <div class="col-md-6"><i class="fas fa-file-contract text-success me-2"></i> Disaster Recovery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. INDUSTRIES & BENEFITS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Industries We <span style="color: #00f2fe;">Serve</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $retail_industries = [
                            "Retail & Supermarkets", "Grocery & FMCG", "Fashion & Apparel",
                            "Electronics & Mobile Stores", "Pharmacy & Healthcare", "Home & Lifestyle",
                            "Jewelry & Luxury Retail", "Departmental Stores"
                        ];
                        foreach ($retail_industries as $ind) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-info me-2"></i> ' . $ind . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Business <span style="color: #10b981;">Benefits</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $retail_benefits = [
                            "Reduce Checkout Time", "Improve Customer Satisfaction", "Increase Sales Opportunities",
                            "Strengthen Customer Loyalty", "Reduce Billing Errors", "Optimize Inventory Level",
                            "Improve Employee Output", "Lower Operational Costs", "Smarter Business Decisions"
                        ];
                        foreach ($retail_benefits as $ben) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> ' . $ben . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. IMPLEMENTATION PROCESS -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Our Deployment <span style="color: #00f2fe;">& Implementation Process</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">We ensure every Smart Retail deployment is smooth, efficient, and tailored to your business.</p>
            </div>

            <div class="row g-4 text-center">
                <!-- Step 1 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">1</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Assessment</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Analyze store operations, inventory workflow, and customer setups.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">2</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Configuration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Customize products, pricing structures, user roles, and billing rules.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">3</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Data Migration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Securely import products, stock counts, suppliers, and customer lists.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">4</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Integration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Connect the platform with POS systems, ERP software, and CRM.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center mt-3 justify-content-center">
                <!-- Step 5 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">5</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Testing & QA</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Verify accurate billing calculations, stock syncs, and security logs.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">6</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Staff Training</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Hands-on training sessions to get your team confident from day one.</p>
                    </div>
                </div>
                <!-- Step 7 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid #00f2fe;">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(6, 182, 212, 0.15); font-size: 1.1rem; font-weight: 800;">7</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Go Live & Care</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Launch, monitor store operations, and deliver updates & support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. FAQ SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="color: #00f2fe;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Common questions about AutomateX.ai Smart Retail Solutions.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqRetailAccordion">
                        <?php
                        $retail_faqs = [
                            [
                                "q" => "What is Smart Retail Software?",
                                "a" => "Smart Retail Software is an AI-powered solution that combines billing, inventory management, customer engagement, analytics, and store automation into one centralized platform to improve retail operations."
                            ],
                            [
                                "q" => "Is AutomateX.ai suitable for small retail businesses?",
                                "a" => "Yes. Our platform is designed for businesses of all sizes, from local retail stores and supermarkets to nationwide franchise chains and enterprise organizations."
                            ],
                            [
                                "q" => "Can I manage multiple stores?",
                                "a" => "Absolutely. AutomateX.ai supports centralized management of multiple stores, warehouses, and sales channels through a single cloud dashboard."
                            ],
                            [
                                "q" => "Does the software support self-checkout?",
                                "a" => "Yes. Customers can enjoy faster checkouts with self-checkout kiosks, mobile QR code scanning, and contactless digital payment options."
                            ],
                            [
                                "q" => "Can it integrate with my existing POS and ERP?",
                                "a" => "Yes. AutomateX.ai integrates seamlessly with POS systems, ERP software, accounting platforms, payment gateways, and eCommerce websites."
                            ],
                            [
                                "q" => "Is my business data secure?",
                                "a" => "Yes. We use enterprise-grade cloud security, SSL encrypted communication, role-based access, and automatic backups to protect your business information."
                            ],
                            [
                                "q" => "Do you provide implementation and support?",
                                "a" => "Yes. We offer complete configuration, data migration support, user onboarding, staff training, and long-term technical assistance."
                            ]
                        ];

                        foreach ($retail_faqs as $i => $faq) {
                            $target = "retailcollapse" . $i;
                            $heading = "retailheading" . $i;
                            $collapsedClass = ($i === 0) ? "" : "collapsed";
                            $showClass = ($i === 0) ? "show" : "";
                            
                            echo '
                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden" style="background: rgba(15, 23, 42, 0.95);">
                                <h2 class="accordion-header" id="' . $heading . '">
                                    <button class="accordion-button ' . $collapsedClass . ' text-white bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#' . $target . '" aria-expanded="' . ($i === 0 ? "true" : "false") . '" aria-controls="' . $target . '" style="font-weight: 700;">
                                        ' . $faq["q"] . '
                                    </button>
                                </h2>
                                <div id="' . $target . '" class="accordion-collapse collapse ' . $showClass . '" aria-labelledby="' . $heading . '" data-bs-parent="#faqRetailAccordion">
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

    <!-- 13. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(6, 182, 212, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Build the Future of Retail with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Retail is evolving rapidly, and businesses need intelligent technology to stay competitive. Schedule a demo to modernize your retail store today.
            </p>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="p-3 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <h6 class="text-info mb-3" style="font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Why Businesses Trust AutomateX.ai</h6>
                        <div class="row g-2 text-start text-md-center">
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Smart Checkout</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Heatmap Analysis</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Vision Recognition</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Omnichannel Sync</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Connected POS & ERP</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> 24/7 Dedicated Support</div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-retail-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Smart Retail Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
