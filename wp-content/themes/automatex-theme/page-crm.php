<?php
/**
 * Template Name: Retail CRM Software Page
 * Slug: crm
 */

get_header(); ?>

<div class="retail-crm-wrapper" style="background-color: #060814; color: #f8fafc; font-family: 'Inter', system-ui, -apple-system, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="crm-hero py-5" style="position: relative; padding-top: 80px; padding-bottom: 80px; background: radial-gradient(circle at 50% 0%, rgba(249, 115, 22, 0.15) 0%, rgba(6, 8, 20, 1) 70%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2" style="background: rgba(249, 115, 22, 0.15); color: #f97316; border: 1px solid rgba(249, 115, 22, 0.3); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <i class="fas fa-users-cog me-2"></i> Best Cloud CRM Software for Retail Businesses in India
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2" style="font-weight: 800; line-height: 1.25; font-size: 2.8rem;">
                        Build Stronger Customer <br>
                        <span style="background: linear-gradient(135deg, #f97316 0%, #ff8c00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Relationships with AI-Powered CRM</span>
                    </h1>
                    <p class="lead text-slate-300 mt-4" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        In today's competitive retail landscape, understanding your customers is the key to sustainable growth. AutomateX.ai Cloud CRM helps retailers manage customer interactions, strengthen loyalty, automate engagement, and increase repeat sales through one intelligent cloud platform.
                    </p>
                    <p class="text-slate-300 mt-2" style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        Whether you operate a single retail outlet or a multi-store business, our CRM solution centralizes customer information, marketing campaigns, sales insights, and loyalty programs to help you deliver exceptional customer experiences.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-hero-crm-demo" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-alt me-2"></i> Book Your Free CRM Demo
                        </button>
                        <a href="#features-section" class="btn btn-lg" id="btn-hero-crm-features" style="background: rgba(255,255,255,0.05); color: #f97316; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(249, 115, 22, 0.3); text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-search me-2"></i> Explore CRM Features
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="crm-hero-image-wrapper" style="position: relative; transition: transform 0.3s ease;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crm.webp" alt="AutomateX.ai CRM Dashboard" class="img-fluid rounded-4" style="border: 1px solid rgba(249, 115, 22, 0.35); box-shadow: 0 20px 40px rgba(0,0,0,0.5); filter: drop-shadow(0px 10px 30px rgba(249, 115, 22, 0.15));">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SMARTER CRM OVERVIEW -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px;">Smarter Customer <span style="background: linear-gradient(135deg, #f97316 0%, #ff8c00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Relationship Management</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Successful retail businesses focus on long-term customer relationships—not just one-time sales. At AutomateX.ai, we empower your business to look beyond single transactions and unlock client lifetime value through automation.
                    </p>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8;">
                        Everything you need to attract, convert, and engage customers is managed from one centralized, secure dashboard.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(249, 115, 22, 0.25);">
                        <h4 class="mb-3 text-warning" style="font-weight: 700;">AutomateX.ai helps businesses:</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <ul class="list-unstyled d-flex flex-column gap-3 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 1rem;">
                                    <li><i class="fas fa-check text-warning me-2"></i> Build customer loyalty</li>
                                    <li><i class="fas fa-check text-warning me-2"></i> Increase repeat purchases</li>
                                    <li><i class="fas fa-check text-warning me-2"></i> Personalize customer communication</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled d-flex flex-column gap-3 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 1rem;">
                                    <li><i class="fas fa-check text-warning me-2"></i> Improve customer retention</li>
                                    <li><i class="fas fa-check text-warning me-2"></i> Understand buying behaviour</li>
                                    <li><i class="fas fa-check text-warning me-2"></i> Automate marketing campaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. RETAIL CHALLENGES WE HELP SOLVE -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Retail Challenges <span style="color: #f97316;">We Help Solve</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">Retail businesses often struggle with disconnected customer data, inconsistent engagement, and limited visibility into customer behaviour. Our CRM platform eliminates these challenges through intelligent automation.</p>
            </div>
            
            <div class="row g-4">
                <!-- Challenge 1 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease;">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 12px;"><i class="fas fa-exclamation-triangle text-danger me-2"></i> Scattered Customer Information</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Managing customer records across spreadsheets or multiple software platforms creates confusion, duplicates records, and causes team communication breakdown.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Store every customer profile, purchase history, and interaction in one secure cloud database.</p>
                        </div>
                    </div>
                </div>
                <!-- Challenge 2 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease;">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 12px;"><i class="fas fa-user-slash text-danger me-2"></i> Losing Valuable Customers</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Without proper follow-up, inactive customers often stop purchasing. Tracking customer inactivity manually is nearly impossible in high-volume retail environments.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Automatically identify inactive customers and launch personalized campaigns to bring them back.</p>
                        </div>
                    </div>
                </div>
                <!-- Challenge 3 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease;">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 12px;"><i class="fas fa-percentage text-danger me-2"></i> Low Customer Retention</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Generic marketing campaigns rarely create long-term loyalty. Customers expect personalized rewards that align with their distinct shopping patterns and interests.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Deliver personalized offers, loyalty rewards, and targeted promotions based on customer preferences.</p>
                        </div>
                    </div>
                </div>
                <!-- Challenge 4 -->
                <div class="col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease;">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 12px;"><i class="fas fa-hourglass-half text-danger me-2"></i> Manual Customer Communication</h4>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">Sending greetings, reminders, and promotional messages manually consumes valuable time and increases operational overhead.</p>
                        <div class="p-3 rounded-3" style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2);">
                            <strong style="color: #10b981; font-size: 0.9rem;"><i class="fas fa-check-circle me-1"></i> Our Solution</strong>
                            <p style="color: #cbd5e1; font-size: 0.88rem; margin: 5px 0 0 0;">Automate customer communication using AI-powered workflows and scheduled campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. INTELLIGENT CRM DASHBOARD & ANALYTICS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(249, 115, 22, 0.25);">
                        <h3 class="text-white mb-4" style="font-weight: 800;"><i class="fas fa-tachometer-alt text-warning me-2"></i> Intelligent CRM Dashboard</h3>
                        <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.7;">
                            Gain complete visibility into your customer relationships through a centralized dashboard that displays real-time business insights. Monitor customer activity, sales performance, loyalty programs, and engagement metrics—all from one place.
                        </p>
                        <div class="row g-2 mt-3">
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> Total Customer Database</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> New Registrations</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> Active & Inactive Status</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> VIP Customer Overview</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> Loyalty Performance</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> Customer Purchase Trends</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> Repeat Customer Revenue</div>
                            <div class="col-6"><i class="fas fa-check text-success me-2"></i> Pending Follow-Ups</div>
                        </div>
                        <p class="mt-3 mb-0" style="color: #94a3b8; font-size: 0.9rem; font-style: italic;">Make faster decisions with live customer intelligence.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Advanced Customer <span style="color: #f97316;">Analytics</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Understand your customers better with AI-driven analytics that transform data into actionable insights.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        Analyze shopping parameters like Customer Purchase Frequency, Average Order Value (AOV), Customer Lifetime Value (CLV), buying behaviour, seasonal trends, repeat purchase rate, and product affinity to create targeted campaigns and improve customer retention.
                    </p>
                    <div class="p-3 rounded-3 mt-4" style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.05);">
                        <strong style="color: #fff; font-size: 0.95rem;"><i class="fas fa-chart-bar text-warning me-2"></i> Smart Customer Segmentation</strong>
                        <p style="color: #cbd5e1; font-size: 0.88rem; margin-top: 5px; margin-bottom: 0;">
                            AutomateX.ai automatically organizes customers into meaningful segments: <strong>New Customers, Regular Buyers, VIP Customers, High-Value Customers, At-Risk Customers,</strong> and <strong>Inactive Customers.</strong> Run highly targeted campaigns that maximize ROI.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. POWERFUL CRM FEATURES SECTION -->
    <section class="py-5" id="features-section" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Powerful <span style="color: #ff9900;">CRM Features</span></h2>
                <p style="color: #94a3b8; max-width: 800px; margin: 0 auto; font-size: 1.05rem;">AutomateX.ai provides a complete suite of customer relationship management tools built specifically for retailers.</p>
            </div>
            
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(249, 115, 22, 0.15); color: #f97316; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Centralized Database</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Maintain complete customer records in one place including customer profiles, contact details, purchase history, product preferences, loyalty status, billing logs, and customer notes.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(249, 115, 22, 0.15); color: #f97316; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">AI Customer Insights</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Transform customer data into business intelligence. Analyze shopping behaviour, purchase frequency, spending patterns, product preferences, and customer lifetime value.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(249, 115, 22, 0.15); color: #f97316; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">VIP Customer Identification</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Recognize your most valuable customers automatically. Track high-spending customers, frequent buyers, and repeat purchasers to reward them with exclusive benefits.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(249, 115, 22, 0.15); color: #f97316; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-undo-alt"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Customer Recovery</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Win back inactive customers automatically. Identify customers who haven't visited recently and launch personalized discounts, exclusive coupons, and reminder messages.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(249, 115, 22, 0.15); color: #f97316; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Personalized Engagement</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Create meaningful relationships. Automate custom templates and workflows for birthdays, anniversaries, festival greetings, membership renewals, and reward notifications.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(249, 115, 22, 0.15); color: #f97316; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Smart Coupon & Offer Tool</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Increase repeat business with custom coupons, cashback offers, referral programs, loyalty tier discounts, and membership benefits. Track redemption through detailed analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. INTEGRATIONS & MULTI-CHANNEL -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Seamless POS, ERP & <span style="color: #00f2fe;">Marketing Integrations</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Keep your entire retail ecosystem synced with real-time API integrations.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #f97316;">
                        <h5 style="color: #f97316; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">POS Integration</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Connect directly with billing systems for automatic transaction records, real-time purchase updates, instant loyalty point changes, and faster checkout experiences.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #3b82f6;">
                        <h5 style="color: #3b82f6; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Accounting & ERP Sync</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Synchronize customer transactions, outstanding payments, credit balances, sales invoices, GST reports, and financial accounts automatically with zero duplicate entry.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #10b981;">
                        <h5 style="color: #10b981; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Marketing Automation</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Engage customers at the right time. Launch automated email campaigns, SMS promotions, WhatsApp updates, push notifications, and seasonal templates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #a855f7;">
                        <h5 style="color: #a855f7; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Multi-Store Management</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Manage customers across physical stores from a centralized CRM. Share customer records, loyalty points, and purchase history across all retail locations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #ec4899;">
                        <h5 style="color: #ec4899; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">Omnichannel Support</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Connect online and offline customer journeys. Track interactions across brick-and-mortar outlets, e-commerce stores, mobile apps, and social media channels.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border-left: 4px solid #00f2fe;">
                        <h5 style="color: #00f2fe; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">AI-Powered Reports</h5>
                        <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Generate reports in real-time. Export analytics for new customer growth, repeat purchases, campaign ROI, coupon usage, and store wise performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. SMART MEMBERSHIP & LOYALTY -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(249, 115, 22, 0.25);">
                        <h4 class="text-white mb-3" style="font-weight: 700;"><i class="fas fa-id-card text-warning me-2"></i> Smart Membership Management</h4>
                        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
                            Strengthen long-term customer relationships with flexible membership programs designed to reward loyal shoppers and encourage repeat purchases.
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.9rem;">
                            <li><i class="fas fa-check-circle text-success me-2"></i> Silver, Gold & Platinum Memberships</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Annual & Custom Membership Plans</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Digital Membership Cards</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Membership Renewal Reminders</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Exclusive Member Discounts & Benefits</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 class="text-white mb-3" style="font-weight: 700;"><i class="fas fa-gift text-warning me-2"></i> Reward Points & Loyalty Programs</h4>
                        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
                            Encourage repeat business with an intelligent rewards system that motivates customers to shop more often.
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.9rem;">
                            <li><i class="fas fa-star text-warning me-2"></i> Reward Point Collection & Point Expiry Rules</li>
                            <li><i class="fas fa-star text-warning me-2"></i> Flexible Redemption at POS & Online Checkouts</li>
                            <li><i class="fas fa-star text-warning me-2"></i> Referral Rewards, Bonus Points, and Cashback Programs</li>
                            <li><i class="fas fa-star text-warning me-2"></i> Purchase-based Rewards & Target Milestone Points</li>
                            <li><i class="fas fa-star text-warning me-2"></i> Detailed Customer Reward Ledger Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. LEAD & SUPPORT & RECOMMENDATIONS -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-funnel-dollar text-warning me-2"></i> Lead Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Convert potential buyers into loyal customers with an organized system.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Automatic Lead Capture</li>
                            <li><i class="fas fa-check text-info me-2"></i> Intelligent Lead Assignment</li>
                            <li><i class="fas fa-check text-info me-2"></i> Follow-Up Scheduling & Alerts</li>
                            <li><i class="fas fa-check text-info me-2"></i> Opportunity & Conversion Reports</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-headset text-warning me-2"></i> Support Management</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Provide exceptional customer service through an integrated support module.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li><i class="fas fa-check text-info me-2"></i> Query & Ticket Tracking</li>
                            <li><i class="fas fa-check text-info me-2"></i> Complaint Resolution Workflows</li>
                            <li><i class="fas fa-check text-info me-2"></i> Return & Exchange Requests</li>
                            <li><i class="fas fa-check text-info me-2"></i> Customer Satisfaction Feedback</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.95); border: 1px solid rgba(249, 115, 22, 0.35);">
                        <h4 style="color: #fff; font-weight: 700; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-magic text-warning me-2"></i> AI Recommendations</h4>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">AutomateX.ai analyzes behavior to deliver recommendations that improve engagement.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.85rem;">
                            <li><i class="fas fa-check text-warning me-2"></i> Cross-selling & Upselling</li>
                            <li><i class="fas fa-check text-warning me-2"></i> Purchase Prediction Analytics</li>
                            <li><i class="fas fa-check text-warning me-2"></i> High-Value Client Flags</li>
                            <li><i class="fas fa-check text-warning me-2"></i> Customer Churn Risk Warnings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. SECURITY & DATA PRIVACY -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h3 style="color: #fff; font-weight: 800; font-size: 2rem; margin-bottom: 20px;">Enterprise-Grade <span style="color: #f97316;">Data Security</span></h3>
                    <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8;">
                        Protect your customer information with advanced cloud security. Your customer data remains protected, confidential, and always accessible to authorized users.
                    </p>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
                        AutomateX.ai employs strict data safety and privacy rules, compliance protocols, and database isolation levels to secure business analytics from unauthorized access.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <h5 class="mb-3 text-warning" style="font-weight: 700;">Security features include:</h5>
                        <div class="row g-2 text-start">
                            <div class="col-md-6"><i class="fas fa-lock text-success me-2"></i> SSL/TLS Encryption</div>
                            <div class="col-md-6"><i class="fas fa-user-shield text-success me-2"></i> Role-Based User Access</div>
                            <div class="col-md-6"><i class="fas fa-key text-success me-2"></i> Two-Factor Auth (OTP)</div>
                            <div class="col-md-6"><i class="fas fa-cloud-upload-alt text-success me-2"></i> Secure Cloud Backups</div>
                            <div class="col-md-6"><i class="fas fa-history text-success me-2"></i> Detailed Audit Logs</div>
                            <div class="col-md-6"><i class="fas fa-file-contract text-success me-2"></i> Permission Control</div>
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
                        $crm_industries = [
                            "Retail & Supermarkets", "Fashion & Apparel", "Electronics Stores",
                            "Grocery Chains", "Restaurants & Cafés", "Healthcare & Pharmacy",
                            "Beauty & Wellness", "Jewelry Stores", "Furniture & Home Decor",
                            "E-Commerce Businesses", "Automobile Dealerships", "Professional Services"
                        ];
                        foreach ($crm_industries as $ind) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-info me-2"></i> ' . $ind . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;">Business <span style="color: #f97316;">Benefits</span></h3>
                    <div class="row g-2 text-start">
                        <?php
                        $crm_benefits = [
                            "Higher Customer Retention", "Increased Repeat Purchases", "Personalized Experiences",
                            "Faster Customer Support", "Better Sales Conversion", "Improved Marketing ROI",
                            "Centralized Customer Info", "Real-Time Business Insights", "Enhanced Customer Loyalty",
                            "Reduced Manual Work"
                        ];
                        foreach ($crm_benefits as $ben) {
                            echo '<div class="col-md-6 col-6" style="color: #cbd5e1; font-size: 0.95rem;"><i class="fas fa-check text-warning me-2"></i> ' . $ben . '</div>';
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
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Our CRM <span style="color: #ff9900;">Implementation Process</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">We follow a structured deployment process to ensure your CRM is ready for immediate business use.</p>
            </div>

            <div class="row g-4 text-center">
                <!-- Step 1 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-warning d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 153, 0, 0.15); font-size: 1.1rem; font-weight: 800;">1</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Business Consultation</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Analyze customer management processes and CRM requirements.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(0, 242, 254, 0.15); font-size: 1.1rem; font-weight: 800;">2</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">CRM Configuration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Customize fields, loyalty rules, user permissions, and workflows.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-success d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); font-size: 1.1rem; font-weight: 800;">3</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Data Migration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Securely import existing customer records and loyalty logs.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-purple d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(168, 85, 247, 0.15); color: #a855f7; font-size: 1.1rem; font-weight: 800;">4</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">System Integration</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Connect POS, ERP, payments, WhatsApp, and email platforms.</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4 text-center mt-3 justify-content-center">
                <!-- Step 5 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-warning d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 153, 0, 0.15); font-size: 1.1rem; font-weight: 800;">5</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Testing & QA</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Verify data accuracy, automation flows, and loyalty rules.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="mx-auto mb-2 text-info d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(0, 242, 254, 0.15); font-size: 1.1rem; font-weight: 800;">6</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">User Training</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Provide practical training sessions for staff and managers.</p>
                    </div>
                </div>
                <!-- Step 7 -->
                <div class="col-md-3">
                    <div class="p-3 rounded-4 h-100" style="background: rgba(15, 23, 42, 0.85); border: 1px solid #ff9900;">
                        <div class="mx-auto mb-2 text-warning d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 153, 0, 0.15); font-size: 1.1rem; font-weight: 800;">7</div>
                        <h5 style="color: #fff; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px;">Go Live & Care</h5>
                        <p style="color: #cbd5e1; font-size: 0.8rem; margin: 0;">Continuous updates, monitoring, support, and enhancements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. DEDICATED CUSTOMER SUCCESS & BEST PRACTICES -->
    <section class="py-5" style="background: #090d1f; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;"><i class="fas fa-thumbs-up text-warning me-2"></i> Best Practices for CRM Success</h3>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-start px-0 mb-0" style="color: #cbd5e1; font-size: 0.95rem;">
                        <li><i class="fas fa-check text-success me-2"></i> Keep customer profiles updated in real-time</li>
                        <li><i class="fas fa-check text-success me-2"></i> Segment customers regularly based on CLV</li>
                        <li><i class="fas fa-check text-success me-2"></i> Automate follow-up messages for inactive users</li>
                        <li><i class="fas fa-check text-success me-2"></i> Reward loyal shoppers consistently with points</li>
                        <li><i class="fas fa-check text-success me-2"></i> Review analytical dashboards and engagement metrics</li>
                        <li><i class="fas fa-check text-success me-2"></i> Collect and analyze feedback and suggestions</li>
                        <li><i class="fas fa-check text-success me-2"></i> Personalize email, SMS, and WhatsApp marketing campaigns</li>
                        <li><i class="fas fa-check text-success me-2"></i> Monitor customer satisfaction scores (NPS/ratings)</li>
                        <li><i class="fas fa-check text-success me-2"></i> Integrate CRM with POS and ERP systems</li>
                        <li><i class="fas fa-check text-success me-2"></i> Use AI recommendations to cross-sell and upsell</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.8rem;"><i class="fas fa-handshake text-info me-2"></i> Dedicated Customer Success</h3>
                    <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.7;">
                        Our commitment extends beyond software implementation. AutomateX.ai provides comprehensive support to ensure long-term CRM success.
                    </p>
                    <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div style="color: #cbd5e1; font-size: 0.9rem;"><i class="fas fa-check text-info me-2"></i> CRM Setup & Config</div>
                                <div class="mt-2" style="color: #cbd5e1; font-size: 0.9rem;"><i class="fas fa-check text-info me-2"></i> Data Migration Help</div>
                                <div class="mt-2" style="color: #cbd5e1; font-size: 0.9rem;"><i class="fas fa-check text-info me-2"></i> Staff Training Sessions</div>
                            </div>
                            <div class="col-md-6">
                                <div style="color: #cbd5e1; font-size: 0.9rem;"><i class="fas fa-check text-info me-2"></i> Technical Assistance</div>
                                <div class="mt-2" style="color: #cbd5e1; font-size: 0.9rem;"><i class="fas fa-check text-info me-2"></i> Security Monitoring</div>
                                <div class="mt-2" style="color: #cbd5e1; font-size: 0.9rem;"><i class="fas fa-check text-info me-2"></i> Ongoing Consultation</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 13. FAQ SECTION -->
    <section class="py-5" style="background: #060814; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="color: #ff9900;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 1.05rem;">Common questions about AutomateX.ai Retail Cloud CRM.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqCrmAccordion">
                        <?php
                        $crm_faqs = [
                            [
                                "q" => "What is a cloud-based CRM?",
                                "a" => "A cloud-based CRM is an online customer relationship management system that helps businesses store customer data, track interactions, automate communication, and manage sales from any location."
                            ],
                            [
                                "q" => "Can AutomateX.ai CRM support multiple stores?",
                                "a" => "Yes. Our CRM allows businesses to manage customer information, loyalty programs, and marketing campaigns across multiple stores from one centralized dashboard."
                            ],
                            [
                                "q" => "Does the CRM integrate with POS and ERP systems?",
                                "a" => "Absolutely. AutomateX.ai integrates seamlessly with POS software, ERP platforms, accounting solutions, eCommerce websites, and payment gateways."
                            ],
                            [
                                "q" => "Can I automate customer communication?",
                                "a" => "Yes. You can automate emails, SMS, WhatsApp messages, loyalty notifications, birthday wishes, promotional offers, and follow-up reminders using automated workflows."
                            ],
                            [
                                "q" => "Is customer data secure?",
                                "a" => "Yes. We use enterprise-grade security including SSL encryption, secure cloud hosting, role-based access, automatic backups, and advanced authentication to protect your business data."
                            ],
                            [
                                "q" => "Can small businesses use AutomateX.ai CRM?",
                                "a" => "Yes. Our CRM is scalable and suitable for startups, retail stores, wholesalers, eCommerce businesses, franchises, and enterprise organizations."
                            ],
                            [
                                "q" => "Do you provide onboarding and training?",
                                "a" => "Yes. Every implementation includes setup, data migration, user training, documentation, and ongoing technical support."
                            ]
                        ];

                        foreach ($crm_faqs as $i => $faq) {
                            $target = "crmcollapse" . $i;
                            $heading = "crmheading" . $i;
                            $collapsedClass = ($i === 0) ? "" : "collapsed";
                            $showClass = ($i === 0) ? "show" : "";
                            
                            echo '
                            <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden" style="background: rgba(15, 23, 42, 0.95);">
                                <h2 class="accordion-header" id="' . $heading . '">
                                    <button class="accordion-button ' . $collapsedClass . ' text-white bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#' . $target . '" aria-expanded="' . ($i === 0 ? "true" : "false") . '" aria-controls="' . $target . '" style="font-weight: 700;">
                                        ' . $faq["q"] . '
                                    </button>
                                </h2>
                                <div id="' . $target . '" class="accordion-collapse collapse ' . $showClass . '" aria-labelledby="' . $heading . '" data-bs-parent="#faqCrmAccordion">
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

    <!-- 14. CTA STRIP -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #0d1527 0%, #1e293b 100%); border-top: 1px solid rgba(249, 115, 22, 0.3);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; margin-bottom: 15px;">Transform Customer Relationships with AutomateX.ai</h2>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 25px auto; font-size: 1.05rem;">
                AutomateX.ai Cloud CRM helps retailers attract new customers, retain existing ones, and deliver personalized shopping experiences through intelligent automation.
            </p>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="p-3 rounded-4" style="background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(255,255,255,0.05);">
                        <h6 class="text-warning mb-3" style="font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Why Businesses Trust AutomateX.ai</h6>
                        <div class="row g-2 text-start text-md-center">
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> AI-Powered Analytics</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Loyalty Points Module</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Smart Segmentation</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> POS & ERP Integration</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Marketing Automation</div>
                            <div class="col-md-4 col-6" style="color: #cbd5e1;"><i class="fas fa-check text-success me-2"></i> Cloud Infrastructure</div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" id="btn-footer-crm-consultation" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 800; border-radius: 30px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: all 0.3s ease;">
                <i class="fas fa-rocket me-2"></i> Schedule Your Free CRM Consultation Today
            </button>
        </div>
    </section>

</div>

<?php get_footer(); ?>
