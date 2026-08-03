<?php
/**
 * Template Name: Bridal Store Page
 * Slug: bridal-store
 */

get_header(); ?>

<div class="bridal-store-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="bridal-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(244, 63, 94, 0.12) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(244, 63, 94, 0.15); color: #fb7185; border: 1px solid rgba(244, 63, 94, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-ring me-2"></i> Bridal Store Management Software
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Transform Your Bridal Boutique <br>
                        <span style="background: linear-gradient(135deg, #f43f5e 0%, #fb7185 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">With Smart Retail Technology</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a bridal store involves more than just selling wedding outfits. From designer collections and customer appointments to inventory, billing, and order tracking, every process needs to be accurate and efficient.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Bridal Store Management Software is an AI-powered cloud solution designed specifically for bridal boutiques, fashion retailers, ethnic wear showrooms, and wedding wear stores.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-bridal-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Book Your Free Demo Today
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-bridal-features" style="background: rgba(255,255,255,0.05); color: #fb7185; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(244, 63, 94, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="bridal-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bridal-store.png" alt="AutomateX.ai Bridal Store POS and Billing Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(244, 63, 94, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(244, 63, 94, 0.15));">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ONE PLATFORM INTRO -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">All-in-One <span style="background: linear-gradient(135deg, #f43f5e 0%, #fb7185 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Boutique Roster</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Our all-in-one platform combines POS billing, inventory management, CRM, accounting, and customer engagement into a single dashboard, helping you streamline daily operations and deliver an exceptional shopping experience.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Keep custom orders, trials, alterations, and client records perfectly synced in real time across multiple stores and branch locations.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(244, 63, 94, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700; color: #fb7185 !important;">Complete Boutique Management:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-md-6 col-6"><i class="fas fa-file-invoice-dollar text-success me-2"></i> POS & GST Billing</div>
                            <div class="col-md-6 col-6"><i class="fas fa-barcode text-success me-2"></i> Barcode Inventory</div>
                            <div class="col-md-6 col-6"><i class="fas fa-tshirt text-success me-2"></i> Designer Collections</div>
                            <div class="col-md-6 col-6"><i class="fas fa-calendar-alt text-success me-2"></i> Appointment bookings</div>
                            <div class="col-md-6 col-6"><i class="fas fa-history text-success me-2"></i> Purchase History</div>
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Key <span style="color: #fb7185;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai delivers an advanced suite of retail technologies designed for high-end boutique outlets.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(244, 63, 94, 0.15); color: #fb7185; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI-Powered POS & GST Billing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Fast and accurate billing with multiple payment options. Build quick orders, customize advance deposits, manage splits, and generate GST-compliant invoices.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(244, 63, 94, 0.15); color: #fb7185; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Inventory & Barcodes</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Intelligent stock tracking with automatic updates. Print custom tag labels with size, color, pattern attributes, and auto-detect raw stock consumption.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(244, 63, 94, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(244, 63, 94, 0.15); color: #fb7185; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Appointment & Trial Booking</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Schedule trials and designer consultations conflict-free. Record measurement sheets directly on the client's file card and track alteration deadlines.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(244, 63, 94, 0.15); color: #fb7185; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Collections & Categories</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Organize bridal wear by category, designer collections, fabric types, sizes, and colors. Support photo uploads for custom designs and pattern boards.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(244, 63, 94, 0.15); color: #fb7185; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">WhatsApp Invoice & Alerts</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Send bills, booking confirmations, trial updates, and promotional discount campaigns directly to customers via WhatsApp.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(244, 63, 94, 0.35);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(244, 63, 94, 0.15); color: #fb7185; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Analytics & CRM Reports</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Powerful analytics to monitor collection margins, sales rates, staff performance, customer retention, outstanding balances, and inventory cycles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Choose <span style="color: #fb7185;">AutomateX.ai?</span></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="row g-3">
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Fast and accurate billing with multiple payment options</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Intelligent stock tracking with automatic inventory updates</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Easy management of bridal wear by category, size, and color</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Integrated accounting and GST-compliant invoicing</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Online and offline store database synchronization</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Personalized customer engagement through CRM & WhatsApp</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Powerful analytics to monitor sales and customer trends</div>
                            <div class="col-md-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> Secure cloud platform with multi-user access & backups</div>
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
                <h3 style="color: #fff; font-weight: 800; font-size: 2rem;">Perfect <span style="color: #fb7185;">For</span></h3>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <?php
                $bridal_sectors = [
                    "Bridal Boutiques", "Designer Studios", "Wedding Wear Stores",
                    "Fashion Retailers", "Ethnic Wear Showrooms", "Multi-Brand Bridal Stores",
                    "Garment & Apparel Businesses"
                ];
                foreach ($bridal_sectors as $sector) {
                    echo '
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(244, 63, 94, 0.2); color: #cbd5e1; font-weight: 600; font-size: 1rem;">
                            <i class="fas fa-gem text-warning me-2"></i> ' . $sector . '
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 6. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(244, 63, 94, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Grow Your Bridal Business with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Manage your entire bridal retail business from one powerful cloud platform and deliver a seamless shopping experience for every customer.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-bridal-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Book Your Free Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
