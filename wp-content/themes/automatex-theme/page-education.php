<?php
/**
 * Template Name: School ERP Page
 * Slug: education
 */

get_header(); ?>

<div class="school-erp-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="school-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.15) 0%, rgba(6, 8, 20, 1) 70%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(99, 102, 241, 0.15); color: #6366f1; border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-graduation-cap me-2"></i> Best School ERP Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Simplify School Administration <br>
                        <span style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">With an Intelligent Cloud ERP</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Educational institutions today require more than traditional management systems. From admissions and attendance to examinations, fee collection, communication, and academic reporting, every process should be connected through one secure platform.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai School ERP Software is an AI-powered cloud solution designed to help schools, colleges, universities, coaching institutes, and educational organizations automate daily operations while improving communication among administrators, teachers, students, and parents.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-school-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Book Your Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-school-features" style="background: rgba(255,255,255,0.05); color: #6366f1; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(99, 102, 241, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore School ERP Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="school-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/school.png" alt="AutomateX.ai School ERP Admin dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(99, 102, 241, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(99, 102, 241, 0.15));">
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
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">One Platform for <span style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Complete School Management</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        AutomateX.ai centralizes every academic and administrative activity into a single dashboard, eliminating paperwork and improving operational efficiency.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        Manage admissions, fees, timetables, examinations, library logs, and transport routing from one connected cloud database, keeping campus staff synchronized.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700;">Complete Campus Control:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-md-6 col-6"><i class="fas fa-user-graduate text-success me-2"></i> Student Admissions</div>
                            <div class="col-md-6 col-6"><i class="fas fa-calendar-check text-success me-2"></i> Attendance Systems</div>
                            <div class="col-md-6 col-6"><i class="fas fa-file-invoice-dollar text-success me-2"></i> Fee Collection</div>
                            <div class="col-md-6 col-6"><i class="fas fa-clipboard-list text-success me-2"></i> Exams & Report Cards</div>
                            <div class="col-md-6 col-6"><i class="fas fa-chalkboard-teacher text-success me-2"></i> Teacher Allocations</div>
                            <div class="col-md-6 col-6"><i class="fas fa-bus text-success me-2"></i> Transport Tracking</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CHALLENGES WE SOLVE -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Challenges Educational Institutions <span style="color: #6366f1;">Face</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Schools often rely on multiple disconnected systems, making administration difficult. AutomateX.ai simplifies these challenges through intelligent automation and cloud technology.</p>
            </div>

            <div class="row g-4">
                <!-- Challenge 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-clipboard-user"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Manual Attendance</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Logging sheets consumes class time. We provide biometric, RFID, and QR-based attendance tracking.</p>
                    </div>
                </div>
                <!-- Challenge 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-hourglass-half"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Delayed Fee Tracking</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Chasing parents for checks and dues is slow. We generate automated SMS reminders and online portal checkout links.</p>
                    </div>
                </div>
                <!-- Challenge 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-comment-slash"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Poor Communication</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Parents stay in the dark on schedules and marks. Our dedicated app connects teachers and guardians instantly.</p>
                    </div>
                </div>
                <!-- Challenge 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-calendar-times"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Timetable Conflicts</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Planning teacher shifts and lab routines manually creates overlaps. We build error-free automated rosters.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KEY FEATURES SECTION -->
    <section class="py-5" id="features-section" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">School ERP <span style="color: #6366f1;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai delivers an advanced suite of academic management technologies designed for modern institutions.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Online Admission Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Digitize your admission pipeline. Enable parents to upload files, track application verifications, pay processing deposits, and verify registrations.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Digital Fee Collection</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Configure complex fee classes, installments, scholarships, and automatic penalty rules. Support UPI, debit/credit cards, and net banking with digital receipt creation.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.25);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Parent & Teacher Portal</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Dedicated logins for parents to check schedules, homework cards, attendance logs, and report card sheets. Connect teachers and parents with SMS/WhatsApp alerts.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Exam & Result Processing</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Plan schedules, input subject-wise markings, calculate GPAs or CGPAs, and publish automated report card sheets securely to the parent portal.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-bus-alt"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Transport & Route tracking</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Allocate bus routes, manage vehicle and driver profiles, integrate real-time GPS coordinates, track pupil schedules, and collect route-specific transit fees.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.35);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-university"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Multi-Campus Administration</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Centralized dashboards to oversee student registrations, teacher structures, fee collection performance, and academic ratings across multiple institutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. ADDITIONAL MODULES (LIBRARY, HOSTEL, INVENTORY) -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-stretch g-4">
                <!-- Library -->
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 15px;"><i class="fas fa-book-open text-info me-2"></i> Smart Library</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 15px;">Digitize book tracking, simplify catalog searches, issues, returns, reservations, and penalty calculations using barcode scans.</p>
                    </div>
                </div>
                <!-- Hostel -->
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 15px;"><i class="fas fa-hotel text-info me-2"></i> Hostel Administration</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 15px;">Manage room allocations, student records, hostel attendance sheets, visitor check-ins, mess structures, and room-rent billing.</p>
                    </div>
                </div>
                <!-- Inventory -->
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.2);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 15px;"><i class="fas fa-dolly-flatbed text-info me-2"></i> Assets & Inventory</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 15px;">Track laboratory equipment, classroom sets, sports materials, computers/IT assets, and stationery with reorder notifications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. ANALYTICS & INSIGHTS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">AI-Powered Academic <span style="color: #6366f1;">Insights</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai leverages Artificial Intelligence to improve educational administration and student progress reports.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700;"><i class="fas fa-brain text-warning me-2"></i> Progress Forecasting</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Analyze class marks and assignment performance patterns to isolate and support students requiring special help.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700;"><i class="fas fa-user-minus text-warning me-2"></i> Attendance Analytics</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Monitor student and teacher absent rates, identify chronic late-coming trends, and alert parent profiles automatically.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.35);">
                        <h5 class="text-white" style="font-weight: 700;"><i class="fas fa-chart-line text-warning me-2"></i> Revenue & Fee Insights</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Assess collections versus pending fee balances, forecast monthly revenue receipts, and audit scholarship disbursements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. SECURITY & DATA SAFETY -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Institutional <span style="color: #6366f1;">Data Security</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Protect student records and confidential reports with advanced cloud security protocols. 
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        AutomateX.ai integrates SSL encryption, secure hosting configurations, role-based access, automatic cloud backups, audit logs, and two-factor authentication to ensure privacy.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(99, 102, 241, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700;">Security features include:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.95rem;">
                            <div class="col-md-6"><i class="fas fa-lock text-success me-2"></i> SSL/TLS Encryption</div>
                            <div class="col-md-6"><i class="fas fa-user-shield text-success me-2"></i> Role-Based access</div>
                            <div class="col-md-6"><i class="fas fa-key text-success me-2"></i> Two-Factor Auth (2FA)</div>
                            <div class="col-md-6"><i class="fas fa-cloud-upload-alt text-success me-2"></i> Secure Cloud Backups</div>
                            <div class="col-md-6"><i class="fas fa-history text-success me-2"></i> Complete Audit Logs</div>
                            <div class="col-md-6"><i class="fas fa-file-contract text-success me-2"></i> Disaster Recovery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. INDUSTRIES & BENEFITS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Institutions We <span style="color: #6366f1;">Serve</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $school_industries = [
                            "Public & Private Schools", "CBSE & ICSE Schools", "State Board Institutions",
                            "International Schools", "Colleges & Universities", "Coaching Institutes",
                            "Training Centers", "Vocational Institutes", "Educational Trusts"
                        ];
                        foreach ($school_industries as $ind) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-info me-2"></i> ' . $ind . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Operational <span style="color: #10b981;">Benefits</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $school_benefits = [
                            "Paperless Administration", "Faster Admission Process", "Better Parent Engagement",
                            "Accurate Attendance Tracking", "Simplified Fee Collection", "Improved Teacher Output",
                            "Centralized Student Records", "Smarter Academic Planning", "Secure Cloud Access",
                            "Scalable Multi-Campus Management"
                        ];
                        foreach ($school_benefits as $ben) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> ' . $ben . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. DEPLOYMENT PROCESS -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Our Implementation <span style="color: #6366f1;">Process</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">We follow a structured deployment methodology to ensure a smooth transition to a digital campus.</p>
            </div>

            <div class="row g-4 text-center justify-content-center">
                <!-- Step 1 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">1</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Assessment</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Understand your academic structures, timetables, and rules.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">2</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Configuration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Customize classes, user roles, fee codes, exam structures, and policies.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">3</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Data Migration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Import student listings, staff data, fee schedules, and historic grades safely.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center mt-3 justify-content-center">
                <!-- Step 4 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">4</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">System Integration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Connect biometric gates, payment platforms, bulk messaging, and portals.</p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">5</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Testing & QA</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Verify calculations, automatic reminders, report generations, and logins.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">6</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Staff Training</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Conduct training sessions for teachers, accountants, and administration staff.</p>
                    </div>
                </div>
                <!-- Step 7 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid #6366f1;">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(99, 102, 241, 0.15); font-size: 1.1rem; font-weight: 800;">7</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Go Live & Care</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Launch, monitor operations, and deliver updates & ongoing technical support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. FAQ SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="color: #6366f1;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Common questions about AutomateX.ai School ERP Software solutions.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqSchoolAccordion">
                        <?php
                        $school_faqs = [
                            [
                                "q" => "What is a cloud-based School ERP?",
                                "a" => "A cloud-based School ERP is an online education management platform that allows schools to manage admissions, attendance, academics, examinations, communication, and finances from any location through a secure internet connection."
                            ],
                            [
                                "q" => "Is AutomateX.ai suitable for small schools?",
                                "a" => "Yes. Our School ERP is designed for schools of every size—from small private institutions to multi-campus educational organizations."
                            ],
                            [
                                "q" => "Can parents access information using mobile devices?",
                                "a" => "Yes. Parents can securely access attendance records, fee status, examination results, homework, and school announcements through our dedicated parent portal and mobile application."
                            ],
                            [
                                "q" => "Does the ERP support online admissions?",
                                "a" => "Absolutely. Institutions can manage the complete admission process digitally, including online applications, document verification, and enrollment."
                            ],
                            [
                                "q" => "Can multiple campuses be managed through one ERP?",
                                "a" => "Yes. Administrators can monitor multiple schools, branches, or campuses from one centralized dashboard while maintaining branch-level access controls."
                            ],
                            [
                                "q" => "Is student information secure?",
                                "a" => "Yes. We use enterprise-grade encryption, role-based access, secure cloud infrastructure, automatic backups, and regular security updates to protect all institutional data."
                            ],
                            [
                                "q" => "Do you provide implementation and training?",
                                "a" => "Yes. Every deployment includes configuration, data migration, staff training, onboarding, software updates, and ongoing technical support."
                            ]
                        ];

                        foreach ($school_faqs as $i => $faq) {
                            $target = "schoolcollapse" . $i;
                            $heading = "schoolheading" . $i;
                            $collapsedClass = ($i === 0) ? "" : "collapsed";
                            $showClass = ($i === 0) ? "show" : "";
                            
                            echo '
                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden" style="background: rgba(15, 23, 42, 0.95);">
                                <h2 class="accordion-header" id="' . $heading . '">
                                    <button class="accordion-button ' . $collapsedClass . ' text-white bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#' . $target . '" aria-expanded="' . ($i === 0 ? "true" : "false") . '" aria-controls="' . $target . '" style="font-weight: 700;">
                                        ' . $faq["q"] . '
                                    </button>
                                </h2>
                                <div id="' . $target . '" class="accordion-collapse collapse ' . $showClass . '" aria-labelledby="' . $heading . '" data-bs-parent="#faqSchoolAccordion">
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

    <!-- 11. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(99, 102, 241, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Empower Modern Education with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Education is evolving, and institutions need intelligent technology to stay ahead. Schedule a free demo to streamline school administration and classroom collaboration.
            </p>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="p-3 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <h6 class="text-info mb-3" style="font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Why Institutions Trust AutomateX.ai</h6>
                        <div class="row g-2 text-start text-md-center">
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Online Admissions</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Digital Fee Collections</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Smart Timetables</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Parent & Student Apps</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> AI Academic Progress</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Multi-Campus Control</div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-school-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free School ERP Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
