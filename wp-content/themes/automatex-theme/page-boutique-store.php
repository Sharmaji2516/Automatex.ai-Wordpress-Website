<?php
/**
 * Template Name: Boutique Store Page
 * Slug: boutique-store
 */

get_header(); ?>

<div class="boutique-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="boutique-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(168, 85, 247, 0.12) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(168, 85, 247, 0.15); color: #a855f7; border: 1px solid rgba(168, 85, 247, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-scissors me-2"></i> Best AI-Powered Boutique Management Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Smart Cloud POS & ERP Solution <br>
                        <span style="background: linear-gradient(135deg, #a855f7 0%, #ec4899 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">For Fashion Boutiques</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a fashion boutique requires much more than simple billing. From inventory tracking and customer relationships to online selling and business analytics, every operation should work together seamlessly.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Boutique Management Software is an AI-powered cloud platform built specifically for boutiques, garment stores, designer studios, and fashion retailers.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-boutique-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-boutique-features" style="background: rgba(255,255,255,0.05); color: #a855f7; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(168, 85, 247, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="boutique-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boutique-store.png" alt="AutomateX.ai Boutique Management dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(168, 85, 247, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(168, 85, 247, 0.15));">
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
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">All-in-One <span style="background: linear-gradient(135deg, #a855f7 0%, #ec4899 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Boutique ERP</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our all-in-one solution combines POS billing, inventory management, CRM, accounting, and omnichannel selling into one intelligent system, helping boutique owners increase sales, improve customer experiences, and simplify day-to-day operations.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Empower your team with clean barcode prints, automated variant mappings, and multi-channel order synchronization from a unified portal.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(168, 85, 247, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700; color: #a855f7 !important;">Full Operational Control:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-md-6 col-6"><i class="fas fa-cash-register text-success me-2"></i> POS & GST Billing</div>
                            <div class="col-md-6 col-6"><i class="fas fa-boxes text-success me-2"></i> Smart Variant Inventory</div>
                            <div class="col-md-6 col-6"><i class="fas fa-users text-success me-2"></i> Customer CRM</div>
                            <div class="col-md-6 col-6"><i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Messaging</div>
                            <div class="col-md-6 col-6"><i class="fas fa-sync text-success me-2"></i> Omnichannel Sync</div>
                            <div class="col-md-6 col-6"><i class="fas fa-calculator text-success me-2"></i> Integrated Accounting</div>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Key <span style="color: #a855f7;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai boutique software simplifies stock management and helps deliver modern client experiences.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">POS Billing & GST Invoicing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">AI-based POS billing designed for retail fashion. Generate instant GST tax calculations, manage custom tailoring advances, split receipts, and store invoices.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Product Variant Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Easy management of catalog by variant parameters. Track inventory and price matrices dynamically based on sizes, colors, designer brands, fabric, and styles.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(168, 85, 247, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Automated inventory replenishment logs. Scan tag barcodes during checkout, auto-reduce counts, trigger alerts for low material stock levels, and organize catalogs.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Store & Warehouses</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Track stock transfers between warehouses and multiple display rooms. Access real-time counts across branches, and manage regional retail franchise permissions.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Campaigns & Billing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send digital invoices directly to clients via WhatsApp. Run promotional discount notifications and tailoring updates to keep your customers engaged.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(168, 85, 247, 0.35);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online + Offline Sync</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Synchronize your physical boutique database with your e-commerce platforms. Prevent overselling by updating listings dynamically when a sale is finalized.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Choose <span style="color: #a855f7;">AutomateX.ai?</span></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="row g-3">
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Faster checkout with intelligent POS billing</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Real-time inventory tracking across all locations</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Easy garment management by size, color, and collection</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Integrated accounting with GST-ready invoicing</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Customer segmentation for personalized marketing</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Automated stock replenishment for fast-selling items</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Powerful business insights through AI-driven reports</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Mobile-friendly cloud platform with enterprise security</div>
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
                <h3 style="color: #fff; font-weight: 800; font-size: 2rem;">Perfect <span style="color: #a855f7;">For</span></h3>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <?php
                $boutique_sectors = [
                    "Fashion Boutiques", "Garment Stores", "Ethnic Wear Showrooms",
                    "Designer Studios", "Kids Wear Stores", "Multi-Brand Apparel Stores",
                    "Clothing Retail Chains", "Fashion Franchise Businesses"
                ];
                foreach ($boutique_sectors as $sector) {
                    echo '
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(168, 85, 247, 0.2); color: #cbd5e1; font-weight: 600; font-size: 0.95rem;">
                            <i class="fas fa-star text-warning me-2"></i> ' . $sector . '
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 6. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(168, 85, 247, 0.3); animate-delay: 0.3s;">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Grow Your Boutique with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Increase operational efficiency, deliver better shopping experiences, and scale your fashion business with confidence.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-boutique-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
