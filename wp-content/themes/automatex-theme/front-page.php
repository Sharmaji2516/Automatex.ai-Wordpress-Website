<?php
/**
 * The template for displaying the home page
 */

get_header(); ?>

<div class="premium-home-body">

    <!-- 1. HERO BANNER -->
    <section class="premium-hero">
        <div class="hero-glow-blob"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="hero-badge gsap-hero-item">
                        <i class="fas fa-magic me-1"></i> Powered by Advanced AI • Boost Conversions & Drive Sales Instantly
                    </span>
                    <h1 class="hero-title mt-4 gsap-hero-item">
                        AutomateX AI ChatBot That Supports Customers &<br><span>Increases Sales 24/7.</span>
                    </h1>
                    <p class="hero-subtitle mt-3 mx-auto mx-lg-0 gsap-hero-item">
                        Transform your website into an intelligent sales and customer support platform with AutomateX AI ChatBot. Train your AI assistant using your website, product catalog, FAQs, and business documents. Within minutes, your chatbot is ready to answer questions, recommend products, capture leads, and boost conversions automatically.
                    </p>
                    <div class="hero-ctas mt-4 justify-content-center justify-content-lg-start gsap-hero-item">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-hero-primary">
                            <i class="fas fa-rocket me-2"></i> Start Free Trial
                        </button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-hero-secondary">
                            <i class="fas fa-calendar-check me-2"></i> Book Free Demo
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- 5-Second Auto-Changing Banner Carousel Slider -->
                    <div id="heroBannerCarousel" class="carousel slide carousel-fade hero-banner-slider mt-4 mt-lg-0 shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="5000">
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>

                        <!-- Carousel Items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-restaurant.jpg" class="d-block w-100 img-fluid rounded-4" alt="AutomateX AI Chatbot Assistant">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-ocr-retail.jpg" class="d-block w-100 img-fluid rounded-4" alt="AI Customer Service Bot">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-stock-loss.jpg" class="d-block w-100 img-fluid rounded-4" alt="Conversational AI Assistant">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-manufacturing.jpg" class="d-block w-100 img-fluid rounded-4" alt="AI Product Recommendations">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-boutique.jpg" class="d-block w-100 img-fluid rounded-4" alt="Omnichannel AI Support">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
        </div>
    </section>

    <!-- 2. INFINITE BRAND MARQUEE -->
    <section class="brand-marquee-sec py-4">
        <div class="marquee-container">
            <div class="marquee-track">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c1.jpg" alt="Client 1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c2.png" alt="Client 2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c3.png" alt="Client 3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c4.jpg" alt="Client 4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c5.jpg" alt="Client 5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c6.jpg" alt="Client 6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c7.jpg" alt="Client 7">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c8.jpg" alt="Client 8">
                <!-- Loop duplicates -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c1.jpg" alt="Client 1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c2.png" alt="Client 2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c3.png" alt="Client 3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c4.jpg" alt="Client 4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c5.jpg" alt="Client 5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c6.jpg" alt="Client 6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c7.jpg" alt="Client 7">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c8.jpg" alt="Client 8">
            </div>
        </div>
    </section>

    <!-- 3. SMART SOLUTIONS GRID -->
    <section id="solutions" class="solutions-grid-sec py-5">
        <div class="container text-center py-3">
            <h2 class="section-title">AutomateX AI Chatbot <span>Solutions</span></h2>
            <p class="section-desc">Automate customer support, generate leads, answer queries instantly, and boost sales with 24/7 AI assistance.</p>
            
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#trialModal" data-bs-toggle="modal" class="category-card card-gradient-orange">
                        <div class="category-icon"><i class="fa-solid fa-headset"></i></div>
                        <h3>AI Support</h3>
                        <p>24/7 Instant Answers</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#trialModal" data-bs-toggle="modal" class="category-card card-gradient-blue">
                        <div class="category-icon"><i class="fa-solid fa-brain"></i></div>
                        <h3>Smart Learning</h3>
                        <p>Web & Docs Training</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#trialModal" data-bs-toggle="modal" class="category-card card-gradient-green">
                        <div class="category-icon"><i class="fa-solid fa-comments"></i></div>
                        <h3>Omnichannel</h3>
                        <p>WhatsApp & Social</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#trialModal" data-bs-toggle="modal" class="category-card card-gradient-purple">
                        <div class="category-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h3>AI Advisor</h3>
                        <p>Smart Product Sync</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#trialModal" data-bs-toggle="modal" class="category-card card-gradient-cyan">
                        <div class="category-icon"><i class="fa-solid fa-chart-line"></i></div>
                        <h3>Sales Assistant</h3>
                        <p>Lead Qualification</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#trialModal" data-bs-toggle="modal" class="category-card card-gradient-red">
                        <div class="category-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                        <h3>ERP Integration</h3>
                        <p>Real-Time Sync</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE AUTOMATEX AI CHATBOT -->
    <section class="ai-erp-advantages-sec py-5" style="background-color:#fff;">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose AutomateX <span>AI ChatBot?</span></h2>
                <p class="section-desc mt-2">Intelligent, context-aware AI customer assistance engineered to drive business growth and customer satisfaction.</p>
            </div>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #e06930;">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">🤖 AI-Powered Customer Support</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Provide instant responses to customer queries 24 hours a day without increasing support staff. Deliver personalized, accurate answers around the clock.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #3b82f6;">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">⚡ Deploy Within Minutes</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Simply add your website URL and AutomateX automatically builds your AI knowledge base. No complex coding or lengthy setup required.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #10b981;">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">💬 Omnichannel Communication</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Support customers across your website, WhatsApp, Facebook Messenger, Instagram, Live Chat, and custom web widgets from a single platform.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #fbc145;">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">🧠 Smart AI Learning</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Train your chatbot using website pages, product catalogs, FAQs, PDFs, company policies, and support documentation for context-aware responses.</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #8b5cf6;">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">🛒 AI Product Recommendations</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Increase online store conversions by recommending relevant products based on real-time customer interests and purchase intent.</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #06b6d4;">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">📈 AI Sales Assistant</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Guide visitors through the buying journey, qualify prospects interactively, and convert more traffic into paying customers automatically.</p>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #ef4444;">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">🛍️ Recover Abandoned Carts</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Intelligently detect exiting visitors and trigger targeted discounts, answer objections, and recover lost sales opportunities automatically.</p>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #4576ba;">
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">🤝 Human Agent Handover</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">When complex queries require human expertise, AutomateX seamlessly escalates chats to live agents without losing conversation history.</p>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="text-align:left; padding: 30px; border-radius: 10px; height:100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="icon-wrap mb-3" style="font-size: 40px; color: #291fbc;">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #333;">📊 AI Analytics Dashboard</h3>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Monitor total conversations, customer satisfaction, lead capture rates, popular questions, and revenue generated with real-time AI insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  services section start here -->
    <section class="services-sec">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="heading-wrap">
                        <span class="text-primary fw-bold mb-2 d-block">AI Chatbot Features</span>
                        <h2>Visual AI Flow Builder & <span>Capabilities</span></h2>
                        <p>Build no-code chatbot conversations, capture qualified leads, and recommend products in real time.</p>
                     </div>
                     <div class="row">
                         <div class="col-md-4 col-sm-6">
                             <div class="services-box">
                                 <div class="ser-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sol1.png" alt="Smart Knowledge Training">
                                 </div>
                                 <h3>Smart Knowledge Training</h3>
                                 <p>Train your AI chatbot using Website URLs, PDF Documents, Word Files, FAQs, Help Centers, and custom CRM databases within minutes.</p>
                                 <a href="#trialModal" data-bs-toggle="modal">Learn More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-6">
                             <div class="services-box">
                                 <div class="ser-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sol2.png" alt="Visual AI Flow Builder">
                                 </div>
                                 <h3>Visual AI Flow Builder</h3>
                                 <p>Build chatbot conversations without coding. Features include Drag & Drop Builder, Welcome Messages, Lead Capture Forms, and Appointment Booking.</p>
                                 <a href="#trialModal" data-bs-toggle="modal">Learn More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-6">
                             <div class="services-box">
                                 <div class="ser-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sol3.png" alt="AI Recommendation Engine">
                                 </div>
                                 <h3>AI Product Recommendation Engine</h3>
                                 <p>AutomateX intelligently understands customer needs and recommends relevant products in real time for Ecommerce, Fashion, Electronics, and B2B.</p>
                                 <a href="#trialModal" data-bs-toggle="modal">Learn More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-6">
                             <div class="services-box">
                                 <div class="ser-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sol4.png" alt="Recover Abandoned Carts">
                                 </div>
                                 <h3>Recover Abandoned Carts</h3>
                                 <p>Detect visitors about to leave and automatically offer discounts, recommend alternative products, answer final objections, and boost sales revenue.</p>
                                 <a href="#trialModal" data-bs-toggle="modal">Learn More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-6">
                             <div class="services-box">
                                 <div class="ser-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sol5.png" alt="Human Handover">
                                 </div>
                                 <h3>Human Handover</h3>
                                 <p>When conversations require human expertise, AutomateX seamlessly transfers chats to live support agents without losing chat history.</p>
                                 <a href="#trialModal" data-bs-toggle="modal">Learn More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-6">
                             <div class="services-box">
                                 <div class="ser-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sol6.png" alt="ERP AI Chatbot Integration">
                                 </div>
                                 <h3>ERP AI Chatbot Integration</h3>
                                 <p>Connect with ERP systems to provide real-time order tracking, invoice details, inventory status, shipping updates, and account information directly in chat.</p>
                                 <a href="#trialModal" data-bs-toggle="modal">Learn More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    <!-- services section end here -->

    <!-- 4. HOW AUTOMATEX WORKS -->
    <section class="automations-sec py-5">
        <div class="container py-3">
            <h2 class="section-title text-center">How AutomateX AI Chatbot <span>Works</span></h2>
            <p class="section-desc text-center">Deploy your intelligent AI assistant in 3 simple steps.</p>
            
            <div class="row g-4 mt-4 justify-content-center">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="swipe-card text-center p-4">
                        <span class="card-badge ai mb-3 d-inline-block">Step 1</span>
                        <h3 class="mb-3">Train Your AI</h3>
                        <p>Upload your website URL, product catalogs, FAQs, and business documents. AutomateX automatically builds your AI knowledge base within minutes.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="swipe-card text-center p-4">
                        <span class="card-badge ocr mb-3 d-inline-block">Step 2</span>
                        <h3 class="mb-3">Launch Your Chatbot</h3>
                        <p>Deploy the chatbot on your website with a single line of script or connect it with WhatsApp, Messenger, and Instagram in just a few clicks.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="swipe-card text-center p-4">
                        <span class="card-badge cloud mb-3 d-inline-block">Step 3</span>
                        <h3 class="mb-3">Grow Your Business</h3>
                        <p>Answer customer questions instantly 24/7, capture qualified leads, recommend products automatically, and boost your monthly sales revenue.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. LIVE STATISTICS COUNTERS -->
    <section class="stats-sec py-5">
        <div class="container py-2">
            <div class="row g-4">
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>1,000+</h3>
                        <p>Active Businesses</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>10M+</h3>
                        <p>AI Conversations</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>99.9%</h3>
                        <p>Response Accuracy</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>24/7</h3>
                        <p>Instant Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SMART INDUSTRY AI CHATBOT SOLUTIONS -->
    <section class="solving-business-sec py-5" style="background: #060814; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
       <div class="container py-3">
           <div class="text-center mb-5">
              <h2 class="section-title" style="color: #ffffff; font-weight: 800; font-size: 2.3rem;">AI ChatBot Solutions for <span style="color: #38bdf8;">Every Industry</span></h2>
              <p class="section-desc mt-2 mx-auto" style="color: #94a3b8; max-width: 750px; font-size: 1.05rem; line-height: 1.7;">
                 AutomateX AI ChatBot provides 24/7 intelligent assistance, lead qualification, and customer support tailored for any business domain.
              </p>
           </div>
           
           <div class="row g-4 justify-content-center">
               <!-- 1. Ecommerce -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(56, 189, 248, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(56, 189, 248, 0.15); color: #38bdf8; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-shopping-cart"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Ecommerce & Online Stores</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Recommend products, recover abandoned carts, track orders, and boost checkout conversions.</p>
                   </div>
               </div>

               <!-- 2. Retail Stores -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(255, 153, 0, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(255, 153, 0, 0.15); color: #ff9900; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-store"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Retail Stores & Chains</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Answer inventory inquiries, store locations, working hours, and promotional discount offers.</p>
                   </div>
               </div>

               <!-- 3. Healthcare -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(16, 185, 129, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(16, 185, 129, 0.15); color: #10b981; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-user-md"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Healthcare & Clinics</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Book doctor appointments, share department info, log patient queries, and answer FAQs 24/7.</p>
                   </div>
               </div>

               <!-- 4. Manufacturing -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(168, 85, 247, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(168, 85, 247, 0.15); color: #a855f7; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-industry"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Manufacturing & B2B</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Handle wholesale inquiries, quotation requests, product spec sheets, and supplier FAQs.</p>
                   </div>
               </div>

               <!-- 5. Education -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(236, 72, 153, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(236, 72, 153, 0.15); color: #ec4899; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-graduation-cap"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Education & Academies</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Assist prospective students, automate admission inquiries, course details, and fee structures.</p>
                   </div>
               </div>

               <!-- 6. Hospitality & Hotels -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(245, 158, 11, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-hotel"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Hospitality & Hotels</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Instant room booking assistance, concierge services, local guides, and amenity details.</p>
                   </div>
               </div>

               <!-- 7. Real Estate -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(14, 165, 233, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(14, 165, 233, 0.15); color: #0ea5e9; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-building"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">Real Estate & Property</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Qualify buyers, showcase property listings, capture contact details, and schedule site visits.</p>
                   </div>
               </div>

               <!-- 8. Finance & SaaS -->
               <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="industry-ai-card p-4 rounded-4" style="background: rgba(15, 23, 42, 0.9); border: 1px solid rgba(99, 102, 241, 0.25); box-shadow: 0 10px 25px rgba(0,0,0,0.4); text-align: center; height: 100%; transition: all 0.3s ease;">
                       <div class="icon-box mb-3 mx-auto" style="width: 55px; height: 55px; background: rgba(99, 102, 241, 0.15); color: #6366f1; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                           <i class="fas fa-laptop-code"></i>
                       </div>
                       <h4 style="color: #ffffff; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px;">SaaS & IT Services</h4>
                       <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">Offer instant technical documentation assistance, pricing model guidance, and feature support.</p>
                   </div>
               </div>
           </div>
       </div>
    </section>

    <!-- AI CHATBOT ASSISTANT SECTION -->
    <section class="ai-chatbot-banner-sec py-5" style="background: linear-gradient(180deg, #fafafa, #ffffff); padding-top: 60px; padding-bottom: 60px; border-top: 1px solid rgba(0,0,0,0.03);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="ai-banner-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-aibot.jpg" alt="AI Chatbot Assistant" style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 12px 36px rgba(0,0,0,0.12);" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ai-banner-content" style="padding-left: 20px;">
                        <span class="text-primary fw-bold mb-2 d-block" style="text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Customer Experience Automation</span>
                        <h2 style="font-weight: 800; color: #1e293b; font-size: 2.3rem; line-height: 1.3; margin-bottom: 20px;">AI Bot: 24/7 Smart Customer Support</h2>
                        <p style="color: #64748b; font-size: 1.05rem; line-height: 1.8; margin-bottom: 25px;">
                            Elevate your customer relations with an intelligent chatbot trained directly on your business dataset. Our AI Chatbot Assistant handles common queries, pre-qualifies leads, and logs support issues instantly.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box me-3" style="width: 45px; height: 45px; background: rgba(13, 110, 253, 0.1); color: #0d6efd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;"><i class="fas fa-headset"></i></div>
                                    <div>
                                        <h5 style="margin: 0; font-weight: 700; color: #334155; font-size: 1.05rem;">24/7 Support</h5>
                                        <span style="font-size: 0.85rem; color: #64748b;">Instant help at any hour</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box me-3" style="width: 45px; height: 45px; background: rgba(13, 110, 253, 0.1); color: #0d6efd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;"><i class="fas fa-bolt"></i></div>
                                    <div>
                                        <h5 style="margin: 0; font-weight: 700; color: #334155; font-size: 1.05rem;">Instant Replies</h5>
                                        <span style="font-size: 0.85rem; color: #64748b;">Zero waiting times for users</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box me-3" style="width: 45px; height: 45px; background: rgba(13, 110, 253, 0.1); color: #0d6efd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;"><i class="fas fa-user-check"></i></div>
                                    <div>
                                        <h5 style="margin: 0; font-weight: 700; color: #334155; font-size: 1.05rem;">Lead Capture</h5>
                                        <span style="font-size: 0.85rem; color: #64748b;">Qualify leads automatically</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box me-3" style="width: 45px; height: 45px; background: rgba(13, 110, 253, 0.1); color: #0d6efd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;"><i class="fab fa-whatsapp"></i></div>
                                    <div>
                                        <h5 style="margin: 0; font-weight: 700; color: #334155; font-size: 1.05rem;">WhatsApp Sync</h5>
                                        <span style="font-size: 0.85rem; color: #64748b;">Sync chatbot answers to mobile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="document.getElementById('chatbot-fab').click();" class="btn btn-primary" style="padding: 12px 30px; border-radius: 8px; font-weight: 600; box-shadow: 0 4px 14px rgba(13, 110, 253, 0.4);">
                            <i class="fas fa-comment-dots me-2"></i> Launch AI Assistant
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. INTEGRATION PARTNERS -->
    <section class="integrations-sec py-5">
        <div class="container py-3">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Integration <span>Partners</span></h2>
                    <p class="section-desc">We connect smoothly with all leading e-commerce, logistics, and billing platforms to streamline your operations.</p>
                </div>
            </div>
            
            <!-- Desktop Tabs and Grid (Visible on large screens) -->
            <div class="d-none d-lg-block">
                <div class="desktop-integration-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="integration-tabs" id="desktopIntNav">
                                <button class="int-pill-btn active" onclick="switchIntTab('payment')"><i class="fa-solid fa-credit-card me-2"></i> Payment Solutions</button>
                                <button class="int-pill-btn" onclick="switchIntTab('shipping')"><i class="fa-solid fa-truck-fast me-2"></i> Shipping & Logistics</button>
                                <button class="int-pill-btn" onclick="switchIntTab('ecommerce')"><i class="fa-solid fa-cart-shopping me-2"></i> E-commerce Platforms</button>
                                <button class="int-pill-btn" onclick="switchIntTab('business')"><i class="fa-solid fa-briefcase me-2"></i> Business Apps</button>
                                <button class="int-pill-btn" onclick="switchIntTab('communication')"><i class="fa-solid fa-comments me-2"></i> Marketing & Chats</button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="integration-content-wrapper" id="desktopIntGrid">
                                <!-- Payment Group -->
                                <div class="int-group active" id="int-payment">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paytm.webp" alt="Paytm"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/razorpay.webp" alt="Razorpay"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phonepe.webp" alt="PhonePe"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinelabs.webp" alt="Pine Labs"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tally.webp" alt="Tally"></div>
                                    </div>
                                </div>
                                
                                <!-- Shipping Group -->
                                <div class="int-group" id="int-shipping">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shiprocket.webp" alt="Shiprocket"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-invoice.webp" alt="E-Invoice"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eway-bill.webp" alt="E-Way Bill"></div>
                                    </div>
                                </div>
                                
                                <!-- E-commerce Group -->
                                <div class="int-group" id="int-ecommerce">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify.webp" alt="Shopify"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/woocommerce.webp" alt="WooCommerce"></div>
                                    </div>
                                </div>
                                
                                <!-- Business Group -->
                                <div class="int-group" id="int-business">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paytm.webp" alt="Paytm"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/razorpay.webp" alt="Razorpay"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phonepe.webp" alt="PhonePe"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinelabs.webp" alt="Pine Labs"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tally.webp" alt="Tally"></div>
                                    </div>
                                </div>
                                
                                <!-- Communication Group -->
                                <div class="int-group" id="int-communication">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/interakt.webp" alt="Interakt"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/msg91.webp" alt="MSG91"></div>
                                        <div class="int-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twilio.webp" alt="Twilio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Scrolling Marquee (Visible on mobile/tablet screens) -->
            <div class="d-lg-none">
                <div class="brand-marquee-sec py-2 border-0 bg-transparent">
                    <div class="marquee-container">
                        <div class="mobile-int-marquee-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paytm.webp" alt="Paytm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/razorpay.webp" alt="Razorpay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phonepe.webp" alt="PhonePe">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinelabs.webp" alt="Pine Labs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tally.webp" alt="Tally">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shiprocket.webp" alt="Shiprocket">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-invoice.webp" alt="E-Invoice">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eway-bill.webp" alt="E-Way Bill">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify.webp" alt="Shopify">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/woocommerce.webp" alt="WooCommerce">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interakt.webp" alt="Interakt">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/msg91.webp" alt="MSG91">
                            <!-- Duplicates -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paytm.webp" alt="Paytm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/razorpay.webp" alt="Razorpay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phonepe.webp" alt="PhonePe">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinelabs.webp" alt="Pine Labs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tally.webp" alt="Tally">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shiprocket.webp" alt="Shiprocket">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-invoice.webp" alt="E-Invoice">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eway-bill.webp" alt="E-Way Bill">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify.webp" alt="Shopify">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/woocommerce.webp" alt="WooCommerce">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interakt.webp" alt="Interakt">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/msg91.webp" alt="MSG91">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CLIENT TESTIMONIALS -->
    <section class="testimonials-sec py-5">
        <div class="container py-3">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Client <span>Success</span></h2>
                    <p class="section-desc">Hear directly from the business owners who scaled their production and retail stores with us.</p>
                </div>
            </div>
            
            <div class="row g-4 d-none d-lg-flex">
                <div class="col-lg-4">
                    <div class="testimonial-card-new">
                        <div class="stars-rating mb-3">★★★★★</div>
                        <p class="testimonial-quote-new">"With Automatex.ai ERP, we've streamlined our entire textile production cycle—from order to export. Real-time tracking and automated billing have cut manual work drastically. It's truly transformed how we manage operations."</p>
                        <div class="author-info-new mt-4">
                            <span class="name d-block">Akshat Mittal</span>
                            <span class="role text-muted">PP International</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card-new">
                        <div class="stars-rating mb-3">★★★★★</div>
                        <p class="testimonial-quote-new">"Automatex.ai ERP has simplified our handloom trading and export operations. Order management, stock tracking, and billing are all handled seamlessly in one system. We've reduced paperwork and improved accuracy."</p>
                        <div class="author-info-new mt-4">
                            <span class="name d-block">Raman Aneja</span>
                            <span class="role text-muted">Great Eastern Exports</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card-new">
                        <div class="stars-rating mb-3">★★★★★</div>
                        <p class="testimonial-quote-new">"Automatex.ai ERP has made managing our snacks vending business effortless. From tracking machine sales to managing stock refills, everything is centralized, accurate, and incredibly helpful."</p>
                        <div class="author-info-new mt-4">
                            <span class="name d-block">Snaxsmart</span>
                            <span class="role text-muted">Vending Solutions</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile view testimonial touch list -->
            <div class="d-lg-none">
                <div class="testimonial-card-new">
                    <div class="stars-rating mb-3">★★★★★</div>
                    <p class="testimonial-quote-new">"With Automatex.ai ERP, we've streamlined our entire textile production cycle—from order to export. Real-time tracking and automated billing have cut manual work drastically."</p>
                    <div class="author-info-new mt-4">
                        <span class="name d-block">Akshat Mittal</span>
                        <span class="role text-muted">PP International</span>
                    </div>
                </div>
                <div class="testimonial-card-new mt-3">
                    <div class="stars-rating mb-3">★★★★★</div>
                    <p class="testimonial-quote-new">"Automatex.ai ERP has simplified our handloom trading and export operations. We've reduced paperwork, improved accuracy, and sped up deliveries."</p>
                    <div class="author-info-new mt-4">
                        <span class="name d-block">Raman Aneja</span>
                        <span class="role text-muted">Great Eastern Exports</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ACTIVE ON SOCIALS -->
    <section class="socials-sec py-5">
        <div class="container text-center py-2">
            <h2 class="section-title">Active on <span>Socials</span></h2>
            <p class="section-desc">Follow @Automatex.ai for tech updates, product features, and business growth tips.</p>
            
            <div class="row g-3 mt-4 justify-content-center">
                <div class="col-md-4 col-6">
                    <div class="insta-post-new">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_post1.png" alt="AI POS Mockup">
                        <div class="insta-overlay-new"><i class="fab fa-instagram"></i></div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="insta-post-new">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_post2.png" alt="AI Inventory Mockup">
                        <div class="insta-overlay-new"><i class="fab fa-instagram"></i></div>
                    </div>
                </div>
                <div class="col-md-4 col-6 d-none d-md-block">
                    <div class="insta-post-new">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_post3.png" alt="B2B ERP Dashboard">
                        <div class="insta-overlay-new"><i class="fab fa-instagram"></i></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5">
                <a href="https://instagram.com/Automatex.ai" target="_blank" class="btn-insta-premium">
                    <i class="fab fa-instagram"></i> Follow @Automatex.ai
                </a>
            </div>
        </div>
    </section>

</div>

<!-- Interactive Switching Script for Integration Partners -->
<script>
function switchIntTab(tabName) {
    const buttons = document.querySelectorAll('#desktopIntNav .int-pill-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    const clickedBtn = Array.from(buttons).find(btn => btn.getAttribute('onclick').includes(tabName));
    if (clickedBtn) {
        clickedBtn.classList.add('active');
    }

    const groups = document.querySelectorAll('#desktopIntGrid .int-group');
    groups.forEach(group => group.classList.remove('active'));

    const targetGroup = document.getElementById('int-' + tabName);
    if (targetGroup) {
        targetGroup.classList.add('active');
    }
}
</script>

<?php get_footer(); ?>
