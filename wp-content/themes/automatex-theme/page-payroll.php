<?php
/**
 * Template Name: Payroll Management Page
 * Slug: payroll
 */

get_header(); ?>

<div class="payroll-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="payroll-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(16, 185, 129, 0.15) 0%, rgba(6, 8, 20, 1) 70%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-money-check-alt me-2"></i> Best Cloud Payroll Management Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Simplify Payroll, Compliance & <br>
                        <span style="background: linear-gradient(135deg, #10b981 0%, #00f2fe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Employee Salary Management</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Managing employee payroll is one of the most important responsibilities for any organization. From salary calculations and tax deductions to statutory compliance and employee benefits, payroll requires accuracy, security, and efficiency.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Payroll Management Software is a cloud-based solution designed to automate payroll processing, reduce manual work, and ensure complete compliance with Indian labor regulations. Whether you're a startup, SME, or enterprise, our platform helps HR teams process salaries faster while maintaining complete accuracy and transparency.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-payroll-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Book a Free Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-payroll-features" style="background: rgba(255,255,255,0.05); color: #10b981; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(16, 185, 129, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Payroll Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="payroll-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payroll.png" alt="AutomateX.ai Payroll HRMS dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(16, 185, 129, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(16, 185, 129, 0.15));">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. INTRO SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Smarter Payroll <span style="background: linear-gradient(135deg, #10b981 0%, #00f2fe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Starts Here</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Manual payroll management often consumes valuable HR time and increases the chances of calculation errors. 
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai simplifies payroll by combining automation, compliance, attendance integration, and employee self-service into one secure cloud-based platform. HR teams can work faster while ensuring accurate salary processing every single month.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h4 class="mb-3 text-info" style="font-weight: 700;">How We Help HR Teams:</h4>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 1rem;">
                            <li><i class="fas fa-check-circle text-success me-3"></i> Process complex salaries automatically</li>
                            <li><i class="fas fa-check-circle text-success me-3"></i> Eliminate calculation and attendance errors</li>
                            <li><i class="fas fa-check-circle text-success me-3"></i> Maintain complete Indian statutory compliance</li>
                            <li><i class="fas fa-check-circle text-success me-3"></i> Empower staff with self-service payslip downloads</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PAYROLL CHALLENGES WE SOLVE -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Payroll Challenges <span style="color: #10b981;">We Solve</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Many organizations still depend on spreadsheets or disconnected systems to manage payroll. AutomateX.ai automates these processes, helping you save time while improving accuracy.</p>
            </div>

            <div class="row g-4">
                <!-- Challenge 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-calculator"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Manual Calculations</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Complex calculations lead to mistakes. We calculate allowances, overtime, and deductions automatically.</p>
                    </div>
                </div>
                <!-- Challenge 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-gavel"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Compliance Risks</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Indian labor rules change constantly. We calculate PF, ESI, TDS, and PT automatically, ensuring you stay compliant.</p>
                    </div>
                </div>
                <!-- Challenge 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-calendar-alt"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Attendance Mismatches</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Manual log reconciliation delays disbursements. Our biometrics link directly to payroll registers.</p>
                    </div>
                </div>
                <!-- Challenge 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;">Disputes & Reimbursements</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Reclaim forms and salary queries clog HR emails. We automate approvals and payslip downloads.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KEY FEATURES SECTION -->
    <section class="py-5" id="features-section" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Intelligent Payroll <span style="color: #10b981;">Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai delivers an advanced suite of payroll tools designed for modern Indian businesses.</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Payroll Automation</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Process salary registers automatically based on attendance logs, leave balances, overtime calculations, basic structures, allowances, bonuses, and tax deductions.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Flexible Salary Structures</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Configure custom components (HRA, Conveyance, Special Allowance, Professional Tax, Incentives) for different departments, grades, or roles easily.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Statutory Compliance</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Stay audit-ready and compliant with Indian labor laws. The platform automatically calculates PF, ESI, Professional Tax (PT), LWF, TDS, and Gratuity.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Employee Self-Service (ESS)</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Empower employees with secure digital portals to view and download PDF payslips, submit tax declarations, request leaves, track reimbursements, and retrieve Form 16.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Loan & Expense Claims</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Track medical claims, travel claims, salary advances, and employee loans. Approved amounts and recoveries are automatically applied during salary runs.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Full & Final Settlement</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Simplify exit workflows. The platform automatically calculates pending days, leave encashments, gratuity, loan recoveries, and tax overrides for final settlement payouts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. ATTENDANCE, BIOMETRIC & LEAVE MANAGEMENT -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Smart Attendance & <span style="color: #10b981;">Biometric Integration</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Accurate payroll begins with accurate attendance data synchronized in real-time.</p>
            </div>

            <div class="row g-4 text-start">
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h4 class="text-white mb-3" style="font-weight: 700; font-size: 1.2rem;"><i class="fas fa-history text-info me-2"></i> Attendance Tracking</h4>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-bottom: 0;">Record daily check-ins, manage late coming and early exit guidelines, configure weekly offs and holidays, and track shifts. All records map directly to monthly salary processing registers.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h4 class="text-white mb-3" style="font-weight: 700; font-size: 1.2rem;"><i class="fas fa-fingerprint text-info me-2"></i> Device Integration</h4>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-bottom: 0;">Connect your cloud software with physical biometric hardware, face recognition devices, RFID registers, mobile GPS tracking registers, and weight scale entries to synchronize log sheets in real-time.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.35);">
                        <h4 class="text-white mb-3" style="font-weight: 700; font-size: 1.2rem;"><i class="fas fa-calendar-minus text-info me-2"></i> Leave Management System</h4>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin-bottom: 0;">Apply for casual leaves, sick leaves, earned leaves, compensatory offs, or half-days. Managers receive notifications for approval, and accepted leaves populate payroll calculations automatically.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. HRMS, ERP & BANK TRANSFER -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-stretch g-4">
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;"><i class="fas fa-network-wired text-warning me-2"></i> HRMS & ERP Sync</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">
                            Connect payroll with your HR database, expense calculators, and accounting systems. Salary payouts, tax overrides, and ledger updates synchronize instantly across all locations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;"><i class="fas fa-university text-warning me-2"></i> Bulk Salary Disbursement</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">
                            Generate secure bank-transfer sheets for bulk processing across multiple banks. Transfer salary balances with complete data privacy and retrieve payment confirmation registers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.1rem;"><i class="fas fa-mobile-alt text-warning me-2"></i> Mobile Payroll Access</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">
                            HR executives and team managers can access payroll, approve shift corrections, review pending reimbursement claims, and authorize salary registers on any smartphone or tablet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. REAL-TIME REPORTS SECTION -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Payroll Reports & <span style="color: #10b981;">Analytics</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Access real-time reports through one centralized dashboard to monitor company payroll and compliance costs.</p>
            </div>

            <div class="row g-4">
                <!-- Salary Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-file-invoice-dollar text-info me-2"></i> Payroll Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Salary Payout Register</li>
                            <li>Employee Salary Summaries</li>
                            <li>Department-Wise Payroll Costs</li>
                            <li>Monthly Overtime Expenses</li>
                        </ul>
                    </div>
                </div>
                <!-- Attendance Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-calendar-check text-info me-2"></i> Attendance Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Daily Attendance Logs</li>
                            <li>Late Arrival & Shift Reports</li>
                            <li>Leave Balance Summaries</li>
                            <li>Overtime Hours Analysis</li>
                        </ul>
                    </div>
                </div>
                <!-- Compliance Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-file-shield text-info me-2"></i> Compliance Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Provident Fund (PF) Sheets</li>
                            <li>ESI Calculation Sheets</li>
                            <li>TDS Deductions Summary</li>
                            <li>Professional Tax Registers</li>
                        </ul>
                    </div>
                </div>
                <!-- Dashboard Insights -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-chart-line text-info me-2"></i> Analytics Summary</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Total Processed Payrolls</li>
                            <li>Overtime & Bonus Outflows</li>
                            <li>Tax Deduction Audits</li>
                            <li>Pending HR Leave Requests</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. SECURITY & DATA SAFETY -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Enterprise-Level <span style="color: #10b981;">Data Security</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Payroll contains highly sensitive employee and financial information. AutomateX.ai protects your data with advanced cloud security frameworks.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        Our system integrates SSL data encryption, role-based user access controls, automatic cloud database backups, two-factor authentication, and disaster recovery.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(16, 185, 129, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700;">Security features include:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.95rem;">
                            <div class="col-md-6"><i class="fas fa-lock text-success me-2"></i> SSL/TLS Encryption</div>
                            <div class="col-md-6"><i class="fas fa-user-shield text-success me-2"></i> Role-Based Permissions</div>
                            <div class="col-md-6"><i class="fas fa-key text-success me-2"></i> Two-Factor Auth (2FA)</div>
                            <div class="col-md-6"><i class="fas fa-cloud-upload-alt text-success me-2"></i> Secure Cloud Backups</div>
                            <div class="col-md-6"><i class="fas fa-history text-success me-2"></i> Complete Audit Trails</div>
                            <div class="col-md-6"><i class="fas fa-file-contract text-success me-2"></i> Disaster Recovery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. INDUSTRIES & BENEFITS -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Industries We <span style="color: #10b981;">Serve</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $payroll_industries = [
                            "IT & Software Companies", "Manufacturing Industries", "Healthcare & Hospitals",
                            "Educational Institutions", "Retail & Supermarkets", "Hotels & Hospitality",
                            "Logistics & Transportation", "Construction Companies", "Financial Services",
                            "Professional Consulting Firms", "Government Contractors", "Service-Based Businesses"
                        ];
                        foreach ($payroll_industries as $ind) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-info me-2"></i> ' . $ind . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Business <span style="color: #10b981;">Benefits</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $payroll_benefits = [
                            "Faster Payroll Processing", "Reduced Administrative Work", "Improved Payroll Accuracy",
                            "Simplified Tax Compliance", "Better Employee Satisfaction", "Centralized Workforce Management",
                            "Secure Data Storage", "Lower Payroll Costs", "Real-Time Reporting", "Scalable HR Operations"
                        ];
                        foreach ($payroll_benefits as $ben) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-success me-2"></i> ' . $ben . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. PAYROLL PROCESSING WORKFLOW -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Our Deployment & <span style="color: #10b981;">Processing Workflow</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">We follow a streamlined payroll process that minimizes manual work and ensures accurate salary calculations.</p>
            </div>

            <div class="row g-4 text-center justify-content-center">
                <!-- Step 1 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">1</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Employee Attendance</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Attendance, leave guidelines, and shift records are collected automatically.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">2</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Salary Calculation</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Earnings, deductions, overtime, basic allowances, and bonuses are computed.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">3</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Compliance Verify</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">PF, ESI, TDS, PT, and statutory compliance deductions are processed automatically.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center mt-3 justify-content-center">
                <!-- Step 4 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">4</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Payroll Review</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">HR and finance heads check the generated salary sheet drafts.</p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">5</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Salary Disbursement</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Approved salaries are paid to employees using digital banking integrations.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-md-4 col-lg-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid #10b981;">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">6</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Payslips & Reports</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Digital payslips are generated and sent, and compliance statements are archived.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. FAQ SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="color: #10b981;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Common questions about AutomateX.ai Payroll Management Software.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqPayrollAccordion">
                        <?php
                        $payroll_faqs = [
                            [
                                "q" => "What is Payroll Management Software?",
                                "a" => "Payroll Management Software automates employee salary calculations, statutory deductions (PF, ESI, TDS, PT), attendance tracking, payslip generation, and compliance reporting through one centralized system."
                            ],
                            [
                                "q" => "Can AutomateX.ai manage payroll for multiple companies?",
                                "a" => "Yes. Our solution supports payroll processing for multiple companies, branches, and departments from a single cloud dashboard."
                            ],
                            [
                                "q" => "Does the software calculate PF, ESI, and TDS automatically?",
                                "a" => "Yes. AutomateX.ai automatically calculates statutory deductions including PF, ESI, Professional Tax, TDS, and other Indian payroll compliance guidelines."
                            ],
                            [
                                "q" => "Can employees access their payslips online?",
                                "a" => "Absolutely. Employees can securely view and download payslips, tax documents, attendance sheets, and leave files through the Employee Self-Service Portal (ESS)."
                            ],
                            [
                                "q" => "Is payroll data secure?",
                                "a" => "Yes. We use enterprise-grade SSL/TLS encryption, secure cloud hosting, role-based access rules, automatic backups, and audit logs to protect your financial databases."
                            ],
                            [
                                "q" => "Can payroll integrate with attendance and accounting systems?",
                                "a" => "Yes. AutomateX.ai seamlessly integrates with biometric attendance devices, HRMS logs, ERP databases, accounting packages, and bulk banking transfer APIs."
                            ],
                            [
                                "q" => "Do you provide implementation and training?",
                                "a" => "Yes. We provide complete setup consultation, secure data migration, HR onboarding, employee training, software updates, and dedicated technical assistance."
                            ]
                        ];

                        foreach ($payroll_faqs as $i => $faq) {
                            $target = "payrollcollapse" . $i;
                            $heading = "payrollheading" . $i;
                            $collapsedClass = ($i === 0) ? "" : "collapsed";
                            $showClass = ($i === 0) ? "show" : "";
                            
                            echo '
                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden" style="background: rgba(15, 23, 42, 0.95);">
                                <h2 class="accordion-header" id="' . $heading . '">
                                    <button class="accordion-button ' . $collapsedClass . ' text-white bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#' . $target . '" aria-expanded="' . ($i === 0 ? "true" : "false") . '" aria-controls="' . $target . '" style="font-weight: 700;">
                                        ' . $faq["q"] . '
                                    </button>
                                </h2>
                                <div id="' . $target . '" class="accordion-collapse collapse ' . $showClass . '" aria-labelledby="' . $heading . '" data-bs-parent="#faqPayrollAccordion">
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

    <!-- 12. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(16, 185, 129, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Transform Payroll with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Managing payroll doesn't have to be complicated. Schedule a demo to automate salary calculations, compliance filing, and simplify workforce operations.
            </p>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="p-3 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <h6 class="text-info mb-3" style="font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Why Businesses Trust AutomateX.ai</h6>
                        <div class="row g-2 text-start text-md-center">
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Auto Salary Run</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Indian Compliance PF/ESI</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Secure ESS Portal</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Attendance biometrics</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Bulk bank transfers</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Enterprise data shield</div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-payroll-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Payroll Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
