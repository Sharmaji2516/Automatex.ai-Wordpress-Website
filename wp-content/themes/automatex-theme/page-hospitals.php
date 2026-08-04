<?php
/**
 * Template Name: Hospital & Healthcare ERP Software
 * Description: AI-Powered Hospital & Healthcare Management ERP Software Template
 */

get_header(); ?>

<div class="hospital-erp-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="hospital-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(225, 29, 72, 0.18) 0%, rgba(6, 8, 20, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(225, 29, 72, 0.15); color: #f43f5e; border: 1px solid rgba(225, 29, 72, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-hospital-symbol me-2"></i> #1 AI Hospital & Healthcare ERP in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.7rem;">
                        Best AI-Powered Hospital ERP <br>
                        <span style="background: linear-gradient(135deg, #f43f5e 0%, #a855f7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Software in India</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing a modern hospital requires seamless coordination between patient care, electronic medical records (EMR/EHR), billing, pharmacy, diagnostics, staff, and administration. AutomateX.ai Hospital ERP Software is an AI-powered cloud solution built specifically for hospitals, clinics, and healthcare networks.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        Our all-in-one platform integrates patient management, EMR/EHR, billing, pharmacy, laboratory management, OT scheduling, inventory, HR, accounting, and hospital analytics into one centralized dashboard.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" id="btn-hero-hosp-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo
                        </button>
                        <a href="#key-features" class="btn btn-lg" id="btn-hero-hosp-features" style="background: rgba(255,255,255,0.05); color: #f43f5e; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(225, 29, 72, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Hospital Modules
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="hospital-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ai_dashboard.png" alt="AutomateX.ai Hospital ERP Software dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(225, 29, 72, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(225, 29, 72, 0.15)); max-height: 500px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. KEY FEATURES GRID -->
    <section class="py-5" id="key-features" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <span style="color: #f43f5e; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Integrated Clinical & Operational Modules</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Key Features of AutomateX.ai <span style="color: #f43f5e;">Hospital ERP</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 15px auto 0; font-size: 1.05rem;">Empower doctors, nurses, administrative staff, and management with AI-assisted clinical tools and real-time operational insights.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-user-injured"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">AI Patient Registration & OP/IP</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Streamline OPD token management, IPD admissions, bed allocation, discharge summaries, and patient UHID tracking.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">Electronic Medical Records (EMR/EHR)</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Digital prescriptions, clinical history, diagnostic test attachments, allergy alerts, and ICD-10 coding support.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">Smart Hospital Billing & TPA Insurance</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Automated IPD/OPD invoice generation, TPA cashless claim processing, corporate packages, and GST compliance.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">Pharmacy & Medical Inventory</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Batch-wise drug tracking, expiry date alerts, automated reorder levels, narcotic drug logs, and bedside issue notes.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">Laboratory & Diagnostics (LIS/RIS)</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Pathology sample barcode tracking, analyzer machine integration, Radiology DICOM/PACS attachments, and online reports.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">Doctor & Appointment Roster</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Online patient appointment booking, doctor shift rosters, consultation fee management, and tele-consultation support.</p>
                    </div>
                </div>

                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">OT & Ward Management</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Operation theatre scheduling, surgical team checklists, ICU/CCU bed tracking, and nurse ward management.</p>
                    </div>
                </div>

                <!-- Feature 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">Integrated Accounting & Financials</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">General ledger, doctor payout management, TPA receivables, vendor payables, and financial P&L reporting.</p>
                    </div>
                </div>

                <!-- Feature 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <div style="width: 48px; height: 48px; background: rgba(225, 29, 72, 0.15); color: #f43f5e; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 16px;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 style="color: #fff; font-weight: 700;">AI Healthcare Reports & Analytics</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Bed occupancy rates, average length of stay (ALOS), department revenue insights, and clinical outcome metrics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHY CHOOSE AUTOMATEX.AI -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <span style="color: #f43f5e; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Clinical Excellence</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Leading Hospitals Choose <span style="color: #f43f5e;">AutomateX.ai</span></h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-clock text-rose fs-1 mb-3 d-block" style="color: #f43f5e;"></i>
                        <h6 style="color: #fff; font-weight: 700;">Faster Patient Discharge</h6>
                        <p style="color: #94a3b8; font-size: 0.86rem; margin-bottom: 0;">Automate billing and clearance steps to cut patient discharge wait times by 60%.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-shield-virus text-rose fs-1 mb-3 d-block" style="color: #f43f5e;"></i>
                        <h6 style="color: #fff; font-weight: 700;">HIPAA & ABDM Compliant</h6>
                        <p style="color: #94a3b8; font-size: 0.86rem; margin-bottom: 0;">Secure health data encryption, Ayushman Bharat Digital Mission (ABDM) sandbox compliance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-boxes text-rose fs-1 mb-3 d-block" style="color: #f43f5e;"></i>
                        <h6 style="color: #fff; font-weight: 700;">Zero Medicine Leakage</h6>
                        <p style="color: #94a3b8; font-size: 0.86rem; margin-bottom: 0;">Real-time inventory tracking stops drug pilferage and stock-outs in central pharmacies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100 text-center" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-network-wired text-rose fs-1 mb-3 d-block" style="color: #f43f5e;"></i>
                        <h6 style="color: #fff; font-weight: 700;">Multi-Branch Governance</h6>
                        <p style="color: #94a3b8; font-size: 0.86rem; margin-bottom: 0;">Connect multi-specialty hospitals, satellite clinics, and diagnostic labs under 1 platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PERFECT FOR CATEGORIES -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <span style="color: #f43f5e; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;" class="d-block mb-2">Tailored Healthcare Solutions</span>
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Perfect For Healthcare Facilities</h2>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-hospital text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Multi-Specialty Hospitals</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-building-circle-check text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Private Hospitals</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-landmark-flag text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Government Hospitals</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-clinic-medical text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Clinics & Medical Centers</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-user-nurse text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Nursing Homes</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-vial text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Diagnostic Labs</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-heart-pulse text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Healthcare Groups</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(225, 29, 72, 0.2);">
                        <i class="fas fa-sitemap text-rose fs-4" style="color: #f43f5e;"></i>
                        <span style="color: #fff; font-weight: 700;">Multi-Branch Networks</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA SECTION -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(225, 29, 72, 0.15) 0%, rgba(168, 85, 247, 0.25) 100%); border-top: 1px solid rgba(225, 29, 72, 0.3);">
        <div class="container py-4 text-center">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem; margin-bottom: 16px;">Transform Your Healthcare Operations Today</h2>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Whether you operate a single clinic or manage a network of hospitals, AutomateX.ai Hospital ERP Software helps you automate patient management, billing, pharmacy, diagnostics, inventory, accounting, and hospital administration from one intelligent cloud platform.
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#demoModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 16px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none;">
                    <i class="fas fa-calendar-check me-2"></i> Schedule Your Free Demo Today
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
