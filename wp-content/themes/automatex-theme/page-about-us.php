<?php
/**
 * Template Name: About Us Page
 * Slug: about-us
 */

get_header(); ?>

<!-- Main Wrapper with Obsidian Dark Theme & Futuristic Styling -->
<div class="about-us-wrapper" style="background-color: #030712; color: #f8fafc; font-family: 'Outfit', sans-serif; overflow-x: hidden; position: relative;">

    <!-- 3D Neon Gradients & Particles Background Grid -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;900&display=swap');
        
        .about-us-wrapper {
            font-family: 'Outfit', sans-serif !important;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(255, 153, 0, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(59, 130, 246, 0.05) 0%, transparent 40%),
                radial-gradient(rgba(255, 255, 255, 0.015) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 30px 30px;
        }

        /* Hero Badges */
        .tech-badge {
            background: rgba(255, 153, 0, 0.06);
            border: 1px solid rgba(255, 153, 0, 0.25);
            color: #ff9900;
            border-radius: 30px;
            padding: 6px 16px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 15px rgba(255, 153, 0, 0.1);
        }

        /* Glassmorphism Cards */
        .glass-card {
            background: rgba(15, 23, 42, 0.45) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px) !important;
            border: 1px solid rgba(255, 255, 255, 0.06) !important;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3) !important;
            border-radius: 24px !important;
            padding: 40px !important;
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
            position: relative;
            overflow: hidden;
        }
        .glass-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(135deg, rgba(255, 153, 0, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }
        .glass-card:hover {
            border-color: rgba(255, 153, 0, 0.3) !important;
            box-shadow: 0 30px 60px rgba(255, 153, 0, 0.12) !important;
            transform: translateY(-8px) !important;
        }
        .glass-card:hover::before {
            opacity: 1;
        }

        /* Dynamic Floating Animation */
        @keyframes customFloat {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(0.5deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .custom-float {
            animation: customFloat 6s ease-in-out infinite;
        }

        /* Pulse Glow Animation */
        @keyframes pulseGlow {
            0% { filter: drop-shadow(0 0 10px rgba(255, 153, 0, 0.1)); }
            50% { filter: drop-shadow(0 0 25px rgba(255, 153, 0, 0.35)); }
            100% { filter: drop-shadow(0 0 10px rgba(255, 153, 0, 0.1)); }
        }
        .pulse-glow {
            animation: pulseGlow 4s ease-in-out infinite;
        }

        /* Glowing Neon Indicator Dot */
        .glow-dot {
            width: 8px;
            height: 8px;
            background-color: #ff9900;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 10px #ff9900, 0 0 20px #ff9900;
            animation: dotPulse 2s infinite;
        }
        @keyframes dotPulse {
            0% { transform: scale(0.9); opacity: 0.6; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(0.9); opacity: 0.6; }
        }

        /* Scanning Laser Line Effect */
        @keyframes scanTrigger {
            0% { top: 0%; opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { top: 100%; opacity: 0; }
        }
        .scanner-frame {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
        }
        .scanner-beam {
            position: absolute;
            left: 0; width: 100%; height: 3px;
            background: linear-gradient(to right, transparent, #ff9900, #ff5500, #ff9900, transparent);
            box-shadow: 0 0 15px #ff9900;
            animation: scanTrigger 4.5s linear infinite;
            z-index: 10;
        }

        /* Force strong tags to be bright orange instead of dark theme default styles */
        .about-us-wrapper strong {
            color: #ff9900 !important;
            font-weight: 800 !important;
        }

        /* Linear Text Gradients */
        .gradient-orange {
            background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-blue {
            background: linear-gradient(135deg, #3b82f6 0%, #00f2fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Industries served badges styles */
        .industry-badge {
            background: rgba(15, 23, 42, 0.6);
            color: #e2e8f0;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 30px;
            padding: 10px 22px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        .industry-badge:hover {
            border-color: #ff9900;
            color: #ff9900;
            box-shadow: 0 0 15px rgba(255, 153, 0, 0.25);
            transform: translateY(-3px);
        }

        /* Buttons styles */
        .btn-gradient-orange {
            background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%);
            color: #fff !important;
            font-weight: 700;
            border-radius: 12px;
            padding: 16px 36px;
            box-shadow: 0 10px 25px rgba(255, 153, 0, 0.3);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-gradient-orange:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 153, 0, 0.45);
        }
    </style>

    <!-- 1. HERO SECTION -->
    <section class="web-hero py-5" style="position: relative; padding-top: 120px; padding-bottom: 120px; border-bottom: 1px solid rgba(255,255,255,0.06);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="tech-badge">
                        <span class="glow-dot"></span> Transforming Enterprises
                    </span>
                    <h1 class="display-3 font-weight-extrabold text-white mt-2" style="font-weight: 900; line-height: 1.2; font-size: 3.5rem; letter-spacing: -1px;">
                        Transforming Businesses Through<br>
                        <span class="gradient-orange">Smart Technology & Digital Innovation</span>
                    </h1>
                    <p class="lead mt-4" style="color: #cbd5e1; font-size: 1.2rem; line-height: 1.8; font-weight: 400; max-width: 650px;">
                        At AutomateX.ai, we help businesses embrace digital transformation with intelligent software solutions, automation technologies, and result-driven digital services. Our goal is to simplify complex business operations through innovative ERP systems, CRM platforms, and AI-powered automation.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start gap-3 mt-5">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-gradient-orange btn-lg">
                            <i class="fas fa-rocket me-2"></i> Experience Digital Transformation
                        </button>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="scanner-frame custom-float">
                        <div class="scanner-beam"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ai_dashboard.png" alt="AI ERP Systems Dashboard" class="img-fluid pulse-glow" style="border-radius: 24px; border: 1px solid rgba(255, 153, 0, 0.25); box-shadow: 0 25px 60px rgba(0,0,0,0.75);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. WHO WE ARE -->
    <section class="py-5" style="background: #050914; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center order-2 order-lg-1">
                    <div class="scanner-frame custom-float" style="animation-delay: -3s;">
                        <div class="scanner-beam"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ai_robot.png" alt="Futuristic AI Robot Assistant" class="img-fluid pulse-glow" style="border-radius: 24px; border: 1px solid rgba(59, 130, 246, 0.25); box-shadow: 0 25px 60px rgba(0,0,0,0.75);">
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <span class="tech-badge" style="background: rgba(59, 130, 246, 0.06); border-color: rgba(59, 130, 246, 0.25); color: #3b82f6;">
                        <span class="glow-dot" style="background-color: #3b82f6; box-shadow: 0 0 10px #3b82f6;"></span> Who We Are
                    </span>
                    <h2 class="text-white fw-bold mb-4" style="font-size: 2.5rem; letter-spacing: -0.5px;">Who <span class="gradient-orange">We Are</span></h2>
                    <p style="color: #cbd5e1; font-size: 1.15rem; line-height: 1.8; margin-bottom: 24px;">
                        AutomateX.ai is a technology-driven company focused on delivering modern business solutions that combine innovation, automation, and user-friendly design.
                    </p>
                    <p style="color: #cbd5e1; font-size: 1.15rem; line-height: 1.8; margin-bottom: 24px;">
                        We specialize in developing software that helps organizations streamline operations, improve productivity, and make data-driven decisions. Whether it's building a custom ERP system, developing an eCommerce platform, creating CRM software, or implementing AI-powered automation, our team works closely with clients to deliver practical solutions that create measurable business value.
                    </p>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8; margin-bottom: 0;">
                        From startups and growing businesses to large enterprises, we build scalable technology that improves efficiency, strengthens customer relationships, and supports long-term business growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. VISION & MISSION -->
    <section class="py-5" style="background: #030712; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="glass-card h-100">
                        <div class="mb-4" style="font-size: 3rem; color: #3b82f6; filter: drop-shadow(0 0 10px rgba(59, 130, 246, 0.4));"><i class="fas fa-eye"></i></div>
                        <h3 class="text-white fw-bold mb-3" style="font-size: 1.8rem;">Our Vision</h3>
                        <p style="color: #cbd5e1; font-size: 1.15rem; line-height: 1.8; margin-bottom: 0;">
                            To become one of India's most trusted technology partners by empowering businesses with intelligent digital solutions that simplify operations, improve efficiency, and drive sustainable growth.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="glass-card h-100">
                        <div class="mb-4" style="font-size: 3rem; color: #10b981; filter: drop-shadow(0 0 10px rgba(16, 185, 129, 0.4));"><i class="fas fa-rocket"></i></div>
                        <h3 class="text-white fw-bold mb-3" style="font-size: 1.8rem;">Our Mission</h3>
                        <p style="color: #cbd5e1; font-size: 1.15rem; line-height: 1.8; margin-bottom: 0;">
                            Our mission is to help organizations automate business processes, strengthen customer relationships, and accelerate digital transformation through innovative software development, cloud technologies, artificial intelligence, and performance-driven digital marketing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. COMMITMENT TO INNOVATION -->
    <section class="py-5" style="background: #050914; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5 text-center">
            <h2 class="text-white fw-bold mb-3" style="font-size: 2.5rem; letter-spacing: -0.5px;">Our Commitment to <span class="gradient-orange">Innovation</span></h2>
            <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 750px; margin: 0 auto 60px; line-height: 1.8;">
                Innovation is at the heart of everything we build. Our team continuously adopts modern technologies, AI capabilities, cloud platforms, and automation tools to create smarter business solutions that improve operational performance.
            </p>
            
            <div class="row g-4 text-start">
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2rem;"><i class="fas fa-cogs"></i></div>
                        <h5 class="text-white fw-bold mb-2">Automate Repetitive Processes</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Reduce manual effort, speed up workflows, and minimize errors through automated routines.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2rem;"><i class="fas fa-tachometer-alt"></i></div>
                        <h5 class="text-white fw-bold mb-2">Improve Operational Efficiency</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Boost productivity, streamline daily tasks, and maximize resource utilization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2rem;"><i class="fas fa-database"></i></div>
                        <h5 class="text-white fw-bold mb-2">Centralize Business Information</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Access crucial information instantly from one unified database across departments.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2rem;"><i class="fas fa-users"></i></div>
                        <h5 class="text-white fw-bold mb-2">Strengthen Customer Management</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Consolidate CRM operations to build long-term relationships and retention.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2rem;"><i class="fas fa-wallet"></i></div>
                        <h5 class="text-white fw-bold mb-2">Simplify Financial Operations</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Track invoices, billing details, stock levels, and accounting parameters easily.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2rem;"><i class="fas fa-chart-bar"></i></div>
                        <h5 class="text-white fw-bold mb-2">Real-Time Business Intelligence</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Make strategic decisions powered by analytics and live reporting indicators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. WHY CHOOSE AUTOMATEX.AI -->
    <section class="py-5" style="background: #030712; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5 text-center">
            <h2 class="text-white fw-bold mb-5" style="font-size: 2.5rem; letter-spacing: -0.5px;">Why Choose <span class="gradient-orange">AutomateX.ai</span>?</h2>
            
            <div class="row g-4 text-start">
                <div class="col-md-6">
                    <div class="glass-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="me-4 text-primary animate-pulse" style="font-size: 2.2rem; filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.4));"><i class="fas fa-user-tie"></i></div>
                            <div>
                                <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Experienced Technology Professionals</h5>
                                <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.7; margin-bottom: 0;">Our developers, designers, marketers, and consultants bring expertise across software development, cloud computing, AI integration, and business automation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="glass-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="me-4 text-primary animate-pulse" style="font-size: 2.2rem; filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.4));"><i class="fas fa-sliders-h"></i></div>
                            <div>
                                <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Customized Business Solutions</h5>
                                <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.7; margin-bottom: 0;">Every organization operates differently. We develop tailored solutions that align with your workflows, objectives, and future growth plans.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="glass-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="me-4 text-primary animate-pulse" style="font-size: 2.2rem; filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.4));"><i class="fas fa-chart-line"></i></div>
                            <div>
                                <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Scalable & Future-Ready Technology</h5>
                                <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.7; margin-bottom: 0;">Our systems are designed to grow with your business while remaining secure, flexible, and easy to manage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="glass-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="me-4 text-primary animate-pulse" style="font-size: 2.2rem; filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.4));"><i class="fas fa-headset"></i></div>
                            <div>
                                <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Reliable & Continuous Support</h5>
                                <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.7; margin-bottom: 0;">We provide continuous technical support, maintenance, upgrades, and consultation to ensure your systems continue performing efficiently.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. THE MEANING BEHIND THE NAME -->
    <section class="py-5" style="background: #050914; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5 text-center">
            <div class="row align-items-center g-5 text-start">
                <div class="col-lg-7">
                    <div class="glass-card" style="background: linear-gradient(135deg, rgba(255, 153, 0, 0.06) 0%, rgba(59, 130, 246, 0.06) 100%) !important;">
                        <h3 class="text-white fw-bold mb-3" style="font-size: 2rem;">The Meaning Behind <span class="gradient-orange">AutomateX.ai</span></h3>
                        <p style="color: #cbd5e1; font-size: 1.2rem; line-height: 1.8; margin-bottom: 0;">
                            The name <strong>AutomateX.ai</strong> reflects our commitment to combining <strong>Automation</strong>, <strong>Technology</strong>, and <strong>Artificial Intelligence (AI)</strong> to simplify modern business operations. Our objective is to reduce manual effort, increase operational efficiency, and help organizations make smarter decisions through intelligent automation.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="scanner-frame custom-float" style="animation-delay: -1.5s;">
                        <div class="scanner-beam"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ai_chatbot.png" alt="AI Chatbot Virtual Agent" class="img-fluid pulse-glow" style="border-radius: 24px; border: 1px solid rgba(255, 153, 0, 0.25); box-shadow: 0 25px 60px rgba(0,0,0,0.75);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. OUR CORE SERVICES -->
    <section class="py-5" style="background: #030712; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-white fw-bold" style="font-size: 2.5rem; letter-spacing: -0.5px;">Our Core <span class="gradient-orange">Services</span></h2>
                <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 600px; margin: 10px auto 0; line-height: 1.7;">We provide a comprehensive range of business technology solutions.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Enterprise Software</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Custom ERP, CRM, HRMS, Inventory Management, Billing, Accounting, and Business Management Systems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">AI Solutions</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">AI-powered automation, intelligent chatbots, workflow automation, predictive analytics, and AI-assisted business tools.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Website Development</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Corporate websites, eCommerce platforms, custom web applications, SaaS solutions, and responsive web design.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Mobile App Development</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Android, iOS, Flutter, and cross-platform mobile application development.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Digital Marketing</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Search Engine Optimization (SEO), Google Ads, Social Media Marketing, Performance Marketing, and Online Reputation Management.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card h-100" style="padding: 30px !important;">
                        <h5 class="text-white fw-bold mb-2" style="font-size: 1.25rem;">Cloud & Automation</h5>
                        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0;">Cloud deployment, API integrations, workflow automation, third-party software integration, and business process optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. INDUSTRIES WE SERVE -->
    <section class="py-5" style="background: #050914; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5 text-center">
            <h2 class="text-white fw-bold mb-5" style="font-size: 2.5rem; letter-spacing: -0.5px;">Industries <span class="gradient-orange">We Serve</span></h2>
            
            <div class="d-flex flex-wrap justify-content-center gap-3" style="max-width: 950px; margin: 0 auto;">
                <?php 
                $industries = [
                    "Information Technology", "Retail & eCommerce", "Healthcare", "Education", 
                    "Manufacturing", "Finance & Banking", "Logistics & Supply Chain", "Hospitality", 
                    "Travel & Tourism", "Real Estate", "Professional Services", "SaaS Companies", 
                    "Startups", "Corporate Enterprises"
                ];
                foreach ($industries as $ind) {
                    echo '<span class="industry-badge">' . $ind . '</span>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 9. OUR CORE VALUES -->
    <section class="py-5" style="background: #030712; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5 text-center">
            <h2 class="text-white fw-bold mb-5" style="font-size: 2.5rem; letter-spacing: -0.5px;">Our Core <span class="gradient-orange">Values</span></h2>
            
            <div class="row g-4 text-start">
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card h-100 text-center" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2.5rem;"><i class="fas fa-lightbulb"></i></div>
                        <h5 class="text-white fw-bold mb-2">Innovation</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">We continuously explore new technologies to deliver smarter and more efficient business solutions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card h-100 text-center" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2.5rem;"><i class="fas fa-award"></i></div>
                        <h5 class="text-white fw-bold mb-2">Quality</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Every project is developed with a strong focus on performance, reliability, scalability, and user experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card h-100 text-center" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2.5rem;"><i class="fas fa-handshake"></i></div>
                        <h5 class="text-white fw-bold mb-2">Transparency</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">We believe in honest communication, clear project management, and long-term client relationships.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card h-100 text-center" style="padding: 30px !important;">
                        <div class="mb-3 text-warning" style="font-size: 2.5rem;"><i class="fas fa-trophy"></i></div>
                        <h5 class="text-white fw-bold mb-2">Customer Success</h5>
                        <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Our success is measured by the growth and achievements of the businesses we work with.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CALL TO ACTION (CTA) -->
    <section class="py-5" style="background: radial-gradient(circle at 50% 100%, rgba(255, 153, 0, 0.15) 0%, rgba(6, 8, 20, 1) 70%);">
        <div class="container py-5 text-center">
            <h2 class="text-white fw-bold mb-3" style="font-size: 2.5rem; letter-spacing: -0.5px;">Let's Build the Future Together</h2>
            <p style="color: #cbd5e1; font-size: 1.20rem; max-width: 750px; margin: 0 auto 40px; line-height: 1.8;">
                Whether you're planning to launch a new digital product, automate your business processes, develop enterprise software, or expand your online presence, AutomateX.ai is ready to help.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-gradient-orange btn-lg">
                    <i class="fas fa-phone-alt me-2"></i> Contact Us for Free Consultation
                </button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
