<?php
/**
 * Template Name: Lead Management Page
 * Slug: lead-management
 */

get_header(); ?>

<div class="lead-management-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="lead-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(59, 130, 246, 0.15) 0%, rgba(6, 8, 20, 1) 70%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(59, 130, 246, 0.15); color: #3b82f6; border: 1px solid rgba(59, 130, 246, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-funnel-dollar me-2"></i> Best AI-Powered Lead Management Software in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Convert Every Lead <br>
                        <span style="background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Into a Business Opportunity</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Generating leads is only the beginning. The real success comes from converting those leads into paying customers through timely communication, efficient follow-ups, and a streamlined sales process.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        AutomateX.ai Lead Management Software is an AI-powered cloud platform designed to help businesses capture, organize, nurture, and convert leads from multiple channels—all from one centralized dashboard. Whether you're a startup, SME, enterprise, or growing sales team, our solution helps you shorten your sales cycle.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-lead-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-check me-2"></i> Book a Free Demo
                        </button>
                        <a href="#pipeline-section" class="btn btn-lg" id="btn-hero-lead-features" style="background: rgba(255,255,255,0.05); color: #3b82f6; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(59, 130, 246, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="lead-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lead.webp" alt="AutomateX.ai Lead Management CRM" class="img-fluid rounded-4" style="border: 1px solid rgba(59, 130, 246, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(59, 130, 246, 0.15));">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ONE PLATFORM SALES JOURNEY -->
    <section class="py-5" id="pipeline-section" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">One Platform for Your <span style="background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Entire Sales Journey</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        AutomateX.ai eliminates the need for multiple disconnected tools by managing every stage of your sales process within a single platform. 
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8;">
                        From lead generation to billing, every department stays connected with real-time updates throughout the customer journey, ensuring speed, accuracy, and operational efficiency.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(59, 130, 246, 0.25);">
                        <h4 class="mb-4 text-info" style="font-weight: 700;">Complete Sales Workflow:</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2 text-center" style="font-size: 0.9rem; font-weight: 700; color: #fff;">
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">Lead Gen</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">Qualification</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">Quotation</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">Purchase Order</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">Sales Order</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">GST Billing</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">Payment Track</span>
                            <span class="d-flex align-items-center"><i class="fas fa-arrow-right text-info"></i></span>
                            <span class="px-3 py-2 rounded-3" style="background: rgba(59, 130, 246, 0.15); border: 1px solid rgba(59, 130, 246, 0.3);">CRM Sync</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. COMMON SALES CHALLENGES WE SOLVE -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Common Sales Challenges <span style="color: #3b82f6;">We Solve</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Many organizations struggle to manage growing sales pipelines efficiently. AutomateX.ai solves these problems using intelligent automation and AI-driven workflows.</p>
            </div>

            <div class="row g-4">
                <!-- Challenge 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-folder-minus"></i></div>
                        <h5 class="text-white" style="font-weight: 700;">Lost or Forgotten Leads</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Leads stored in notebooks or spreadsheets are easily forgotten. We capture every lead automatically.</p>
                    </div>
                </div>
                <!-- Challenge 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-history"></i></div>
                        <h5 class="text-white" style="font-weight: 700;">Slow Response Times</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Prospects drop off quickly when reps delay call-backs. We distribute leads instantly to reduce response times.</p>
                    </div>
                </div>
                <!-- Challenge 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-calendar-times"></i></div>
                        <h5 class="text-white" style="font-weight: 700;">Missed Follow-Ups</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Without automated reminders, follow-ups slip through. We schedule custom notifications for every pipeline stage.</p>
                    </div>
                </div>
                <!-- Challenge 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="text-danger mb-3" style="font-size: 1.8rem;"><i class="fas fa-file-excel"></i></div>
                        <h5 class="text-white" style="font-weight: 700;">Manual Quotations</h5>
                        <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin-top: 10px; margin-bottom: 0;">Preparing quotations manually increases calculation errors. We generate professional PDFs in seconds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. LEAD CAPTURE & DISTRIBUTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-stretch g-5">
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(59, 130, 246, 0.25);">
                        <h4 class="text-white mb-3" style="font-weight: 700;"><i class="fas fa-filter text-info me-2"></i> Capture Leads from Every Source</h4>
                        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">
                            Customers contact businesses through multiple channels every day. Our platform automatically captures and logs every enquiry without manual data entry.
                        </p>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-6"><i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Business</div>
                            <div class="col-6"><i class="fas fa-globe text-info me-2"></i> Company Website</div>
                            <div class="col-6"><i class="fas fa-clipboard-list text-warning me-2"></i> Contact Forms</div>
                            <div class="col-6"><i class="fab fa-facebook text-primary me-2"></i> Facebook & Instagram</div>
                            <div class="col-6"><i class="fab fa-google text-danger me-2"></i> Google Ads</div>
                            <div class="col-6"><i class="fab fa-linkedin text-primary me-2"></i> LinkedIn Ads</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(59, 130, 246, 0.25);">
                        <h4 class="text-white mb-3" style="font-weight: 700;"><i class="fas fa-user-tag text-info me-2"></i> Smart Lead Distribution</h4>
                        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">
                            Assign the right lead to the right salesperson instantly. AutomateX.ai automatically distributes incoming leads based on business rules to reduce response time.
                        </p>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.9rem;">
                            <div class="col-6"><i class="fas fa-map-marker-alt text-danger me-2"></i> Sales Territory</div>
                            <div class="col-6"><i class="fas fa-building text-warning me-2"></i> Department</div>
                            <div class="col-6"><i class="fas fa-boxes text-info me-2"></i> Product Category</div>
                            <div class="col-6"><i class="fas fa-clock text-success me-2"></i> Rep Availability</div>
                            <div class="col-6"><i class="fas fa-star text-warning me-2"></i> Lead Priority</div>
                            <div class="col-6"><i class="fas fa-cogs text-info me-2"></i> Custom Logic Rules</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PIPELINE & COLLABORATION & QUOTES -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-stream text-warning me-2"></i> Intelligent Sales Pipeline</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Track every lead visually from enquiry to successful conversion through structured stages.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li><i class="fas fa-check text-info me-2"></i> New Lead & Contacted</li>
                            <li><i class="fas fa-check text-info me-2"></i> Qualified & Proposal Sent</li>
                            <li><i class="fas fa-check text-info me-2"></i> Negotiation & Purchase Order</li>
                            <li><i class="fas fa-check text-info me-2"></i> Invoice Generated & Closed Won</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-users text-warning me-2"></i> Live Team Collaboration</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Sales, support, managers, and billing teams work together through one connected platform.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Shared Lead Information Cards</li>
                            <li><i class="fas fa-check text-info me-2"></i> Live Status Updates & Internal Notes</li>
                            <li><i class="fas fa-check text-info me-2"></i> Task Assignment & Activity Timeline</li>
                            <li><i class="fas fa-check text-info me-2"></i> Quotation PDF & File Sharing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-file-invoice text-warning me-2"></i> Quotation Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Create and manage professional quotations directly from your lead dashboard.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Product Pricing, Taxes & Discounts</li>
                            <li><i class="fas fa-check text-info me-2"></i> Customize Terms & Conditions</li>
                            <li><i class="fas fa-check text-info me-2"></i> Share via WhatsApp, Email & PDF</li>
                            <li><i class="fas fa-check text-info me-2"></i> Autolink to Customer CRM Database</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. AI ASSISTANT, SCORING & INTEGRATIONS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">AI Assistant & <span style="color: #3b82f6;">Lead Qualification</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Engage prospects and qualify leads automatically with AI sales engines.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #3b82f6;">
                        <h5 style="color: #3b82f6; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">AI Sales Assistant</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Never let a prospect wait. Engages instantly, qualifies leads, schedules demos, shares pricing brochures, and manages FAQs 24/7.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #6366f1;">
                        <h5 style="color: #6366f1; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Intelligent Lead Scoring</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Evaluate buying intent. Automatically categorizes leads into Hot, Warm, Cold, and returning profiles to help your team prioritize.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #10b981;">
                        <h5 style="color: #10b981; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">WhatsApp CRM Integration</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Send cataloges, chat histories, payment updates, and reminders directly linked to the customer's CRM profile.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #a855f7;">
                        <h5 style="color: #a855f7; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Auto-Follow Ups</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Consistent follow-up reminders, task schedules, and alerts. Keep pending follow-ups pinned to the agent dashboard.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #ec4899;">
                        <h5 style="color: #ec4899; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">AI Sales Forecasting</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Predict future sales based on historical logs, seasonal demand variations, and team productivity trends.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #00f2fe;">
                        <h5 style="color: #00f2fe; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Approval Workflows</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Configurable approval settings for quotes, PO verification, discounts, and invoices, accessible on mobile and desktop.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CRM ERP ACCOUNTING INTEGRATION -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Connected ERP, Billing & <span style="color: #3b82f6;">Accounting Sync</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Speed up your sales cycle by eliminating duplicate manual data entry.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        Once a quotation is accepted, AutomateX.ai automatically generates purchase orders, allocates inventory, creates GST-compliant invoices, and logs ledger details inside your ERP and accounting systems.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(59, 130, 246, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700;">Seamless integrations include:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.95rem;">
                            <div class="col-6"><i class="fas fa-check-circle text-success me-2"></i> Custom ERP Modules</div>
                            <div class="col-6"><i class="fas fa-check-circle text-success me-2"></i> Inventory Synchronization</div>
                            <div class="col-6"><i class="fas fa-check-circle text-success me-2"></i> Billing & GST Invoices</div>
                            <div class="col-6"><i class="fas fa-check-circle text-success me-2"></i> POS & Billing Systems</div>
                            <div class="col-6"><i class="fas fa-check-circle text-success me-2"></i> Payment Gateways</div>
                            <div class="col-6"><i class="fas fa-check-circle text-success me-2"></i> WhatsApp FPM API</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. REAL-TIME REPORTS SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Intelligent Sales & <span style="color: #3b82f6;">Performance Reports</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Access real-time reports through one centralized dashboard to monitor sales operations.</p>
            </div>

            <div class="row g-4">
                <!-- Lead Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-filter text-info me-2"></i> Lead Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>New Enquiries</li>
                            <li>Lead Sources & Mediums</li>
                            <li>Response Time Index</li>
                            <li>Pipeline Conversion Rates</li>
                        </ul>
                    </div>
                </div>
                <!-- Sales Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-file-invoice-dollar text-info me-2"></i> Sales Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Revenue Analysis</li>
                            <li>Sales Pipeline Value</li>
                            <li>Quotation Success Rate</li>
                            <li>Monthly Sales Trends</li>
                        </ul>
                    </div>
                </div>
                <!-- Team Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-users-cog text-info me-2"></i> Team Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Calls Made & Recordings</li>
                            <li>Meetings & Site Visits</li>
                            <li>Follow-Ups Completed</li>
                            <li>Individual Targets Achieved</li>
                        </ul>
                    </div>
                </div>
                <!-- Customer Reports -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="text-white" style="font-weight: 700; font-size: 1.05rem;"><i class="fas fa-id-card text-info me-2"></i> Customer Reports</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0 mt-3" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li>Customer Activity Timeline</li>
                            <li>Purchase Logs & History</li>
                            <li>Repeat Purchase Index</li>
                            <li>Customer Lifetime Value</li>
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
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Enterprise-Grade <span style="color: #3b82f6;">Data Security</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Protect your sales data and customer records with advanced cloud security protocols. Your business data remains secure, confidential, and always accessible to authorized users.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        AutomateX.ai integrates SSL encryption, secure cloud infrastructure, role-based user access control, automatic database backups, two-factor authentication, and disaster recovery.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(59, 130, 246, 0.25);">
                        <h5 class="mb-3 text-info" style="font-weight: 700;">Security features include:</h5>
                        <div class="row g-2 text-start" style="color: #cbd5e1; font-size: 0.95rem;">
                            <div class="col-md-6"><i class="fas fa-lock text-success me-2"></i> SSL/TLS Encryption</div>
                            <div class="col-md-6"><i class="fas fa-user-shield text-success me-2"></i> Role-Based Access</div>
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

    <!-- 10. INDUSTRIES & BENEFITS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Industries We <span style="color: #3b82f6;">Serve</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $lead_industries = [
                            "IT & Software Companies", "Manufacturing Businesses", "Healthcare Providers",
                            "Real Estate Agencies", "Educational Institutions", "Financial Services",
                            "Retail & Wholesale", "Logistics Companies", "Construction Businesses",
                            "Automobile Dealerships", "Digital Marketing Agencies", "Professional Service Firms"
                        ];
                        foreach ($lead_industries as $ind) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-info me-2"></i> ' . $ind . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Business <span style="color: #10b981;">Benefits</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $lead_benefits = [
                            "Faster Lead Response", "Higher Conversion Rates", "Better Team Collaboration",
                            "Improved Customer Experience", "Reduced Manual Work", "Increased Sales Productivity",
                            "Accurate Business Reporting", "Smarter Decision Making", "Lower Operational Costs",
                            "Scalable Sales Management"
                        ];
                        foreach ($lead_benefits as $ben) {
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Our Deployment <span style="color: #3b82f6;">& Implementation Process</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">We ensure every lead management software deployment is smooth, secure, and tailored to your business.</p>
            </div>

            <div class="row g-4 text-center">
                <!-- Step 1 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">1</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Analysis</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Analyze your existing sales process, workflows, and business objectives.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">2</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Configuration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Configure lead stages, workflows, permissions, and automation rules.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">3</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Data Migration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Import leads, customer records, quotations, and historical data securely.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">4</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Integration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Connect third-party WhatsApp APIs, ERP, CRM, and payment gateways.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center mt-3 justify-content-center">
                <!-- Step 5 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">5</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Testing & QA</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Verify data sync speed, automatic assignments, reports, and security logs.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">6</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">User Training</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Provide complete onboarding and training for your sales reps and managers.</p>
                    </div>
                </div>
                <!-- Step 7 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid #3b82f6;">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); font-size: 1.1rem; font-weight: 800;">7</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Go Live & Support</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Deployment, continuous feature updates, and technical assistance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. FAQ SECTION -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="color: #3b82f6;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Common questions about AutomateX.ai Lead Management CRM Solutions.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqLeadAccordion">
                        <?php
                        $lead_faqs = [
                            [
                                "q" => "What is Lead Management Software?",
                                "a" => "Lead Management Software helps businesses capture, organize, track, nurture, and convert leads into customers through one centralized platform."
                            ],
                            [
                                "q" => "Can AutomateX.ai capture leads from multiple channels?",
                                "a" => "Yes. Our platform automatically captures leads from WhatsApp, websites, phone calls, email campaigns, social media, referral sources, and other digital channels."
                            ],
                            [
                                "q" => "Does the software support automated follow-ups?",
                                "a" => "Absolutely. Automated reminders, task scheduling, email campaigns, WhatsApp messages, and dashboard alerts ensure no opportunity is missed."
                            ],
                            [
                                "q" => "Can it integrate with ERP and CRM systems?",
                                "a" => "Yes. AutomateX.ai integrates with ERP platforms, CRM software, accounting systems, POS solutions, payment gateways, and business communication tools."
                            ],
                            [
                                "q" => "Is my business data secure?",
                                "a" => "Yes. We use enterprise-grade cloud security, SSL encrypted communication, role-based permissions, automatic backups, and secure authentication to protect your information."
                            ],
                            [
                                "q" => "Is the software suitable for small businesses?",
                                "a" => "Yes. Our solution is designed for startups, SMEs, growing businesses, and large enterprises looking to improve their sales operations."
                            ],
                            [
                                "q" => "Do you provide implementation and support?",
                                "a" => "Yes. Every deployment includes consultation, configuration, data migration, user training, and ongoing technical support."
                            ]
                        ];

                        foreach ($lead_faqs as $i => $faq) {
                            $target = "leadcollapse" . $i;
                            $heading = "leadheading" . $i;
                            $collapsedClass = ($i === 0) ? "" : "collapsed";
                            $showClass = ($i === 0) ? "show" : "";
                            
                            echo '
                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden" style="background: rgba(15, 23, 42, 0.95);">
                                <h2 class="accordion-header" id="' . $heading . '">
                                    <button class="accordion-button ' . $collapsedClass . ' text-white bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#' . $target . '" aria-expanded="' . ($i === 0 ? "true" : "false") . '" aria-controls="' . $target . '" style="font-weight: 700;">
                                        ' . $faq["q"] . '
                                    </button>
                                </h2>
                                <div id="' . $target . '" class="accordion-collapse collapse ' . $showClass . '" aria-labelledby="' . $heading . '" data-bs-parent="#faqLeadAccordion">
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
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(59, 130, 246, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Transform Your Sales Process with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                Modern sales require speed, automation, and complete visibility. Schedule a demo to simplify lead management and close more deals with intelligent automation.
            </p>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="p-3 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <h6 class="text-info mb-3" style="font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Why Businesses Trust AutomateX.ai</h6>
                        <div class="row g-2 text-start text-md-center">
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> AI Assistant</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Automated Distribution</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Quotation PDF Gen</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> WhatsApp CRM Link</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Sales Forecasting</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> 24/7 Ongoing Care</div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-lead-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free Lead Management Demo Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
