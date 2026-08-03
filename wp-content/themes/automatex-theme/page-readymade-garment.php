<?php
/**
 * Template Name: Readymade Garment Page
 * Slug: readymade-garment
 */

get_header(); ?>

<div class="readymade-garment-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="garment-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(6, 182, 212, 0.12) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(6, 182, 212, 0.15); color: #06b6d4; border: 1px solid rgba(6, 182, 212, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-shirt me-2"></i> Best Garment Store Management Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Smart Cloud POS & ERP Solution <br>
                        <span style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Apparel Retailers</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a garment store involves much more than billing. From inventory management and customer engagement to GST compliance and multi-store operations, every process should be connected through one intelligent platform.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Garment Store Management Software is an AI-powered cloud solution built for apparel retailers, fashion stores, garment showrooms, and clothing chains to simplify business operations and accelerate growth.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-garment-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-garment-features" style="background: rgba(255,255,255,0.05); color: #06b6d4; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(6, 182, 212, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="garment-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/readymade-garment.png" alt="AutomateX.ai Garment Store dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(6, 182, 212, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(6, 182, 212, 0.15));">
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
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">All-in-One <span style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Garment ERP</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our all-in-one software integrates POS billing, inventory management, CRM, accounting, warehouse control, and omnichannel selling into a centralized dashboard, helping businesses improve efficiency, reduce manual work, and deliver a better shopping experience.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Accelerate billing counter queues while keeping real-time inventory and pricing synchronization across multiple retail locations.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700; color: #06b6d4 !important;">Full Operational Control:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-md-6 col-6"><i class="fas fa-cash-register text-success me-2"></i> POS & GST Invoicing</div>
                            <div class="col-md-6 col-6"><i class="fas fa-barcode text-success me-2"></i> Barcode Generation</div>
                            <div class="col-md-6 col-6"><i class="fas fa-tags text-success me-2"></i> Product Variant Sync</div>
                            <div class="col-md-6 col-6"><i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Campaigns</div>
                            <div class="col-md-6 col-6"><i class="fas fa-warehouse text-success me-2"></i> Multi-Warehouse Sync</div>
                            <div class="col-md-6 col-6"><i class="fas fa-sync text-success me-2"></i> Omnichannel Sales</div>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Key <span style="color: #06b6d4;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai apparel software simplifies garment categorization and builds rich client records.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI POS Billing & GST Invoices</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Faster checkout lines with intelligent POS automation. Build advance bookings for customized stitching, print GST-ready receipts, and record customer payments.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Apparel Variant Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Organized product management by variant variables. Track individual price tags and stock numbers based on sizes, colors, designer brands, fabric styles, and seasons.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Scan barcodes during billing to auto-reduce inventory counts. Track items across store shelves, auto-reorder low stock, and manage vendor purchases.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouses</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Monitor stocks, inventory, and sales performance across multiple branches and warehouses. Setup central control controls and handle transit tracking.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Alerts & Billing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Deliver receipts directly to customers via WhatsApp. Share promotional campaigns, custom loyalty discounts, and tailoring updates to build repeat sales.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.35);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online + Offline Sync</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Keep digital listings and physical showroom stocks synchronized. Automate inventory updates across your e-commerce website when a sale is finalized.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Choose <span style="color: #06b6d4;">AutomateX.ai?</span></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="row g-3">
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Faster billing with intelligent POS automation</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Real-time inventory tracking across multiple locations</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Organized product variant tracking (size, color, brand, style)</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Integrated accounting with GST-compliant invoicing</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Automated stock replenishment for fast-selling items</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Customer segmentation for personalized offers and promotions</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Powerful dashboards with AI-driven business insights</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Secure cloud platform with backups and multi-user access</div>
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
                <h3 style="color: #fff; font-weight: 800; font-size: 2rem;">Perfect <span style="color: #06b6d4;">For</span></h3>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <?php
                $garment_sectors = [
                    "Garment Stores", "Fashion Retailers", "Apparel Showrooms",
                    "Clothing Chains", "Ethnic Wear Stores", "Kids Wear Shops",
                    "Sportswear & Casual Wear Stores", "Multi-Brand Fashion Outlets"
                ];
                foreach ($garment_sectors as $sector) {
                    echo '
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(6, 182, 212, 0.2); color: #cbd5e1; font-weight: 600; font-size: 0.95rem;">
                            <i class="fas fa-star text-warning me-2"></i> ' . $sector . '
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 6. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(6, 182, 212, 0.3); animate-delay: 0.3s;">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Grow Your Apparel Business with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Increase operational efficiency, reduce errors, and grow your fashion business with AI-powered retail automation.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-garment-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
