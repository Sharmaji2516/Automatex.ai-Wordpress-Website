<?php
/**
 * Template Name: Chatbot Service Base Layout
 * Description: Unified Base layout template for all chatbot services pages.
 */

get_header();

// Fetch chatbot type from global or page properties.
global $chatbot_type;
if ( empty( $chatbot_type ) ) {
    // Fallback based on URL slug if not manually defined
    $request_uri = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
    $chatbot_type = basename( $request_uri );
    $chatbot_type = preg_replace( '/\.php$/i', '', $chatbot_type );
}

// Comprehensive Chatbot Config Data
$chatbot_data = [
    'customer-support-chatbot' => [
        'title' => 'AI Customer Support Chatbot',
        'badge' => 'AutomateX AI Support Assistant',
        'sub_title' => 'Instant Solutions, Zero Wait Time',
        'hero_desc' => 'Provide rapid 24/7 customer care. Train your AI assistant on custom FAQs, service documents, and articles to resolve support tickets instantly, freeing up human agents.',
        'hero_icon' => 'fa-headset',
        'stats' => [
            ['label' => 'Queries Resolved', 'value' => '85%+'],
            ['label' => 'Response Time', 'value' => '< 1s'],
            ['label' => 'Cost Reduction', 'value' => '60%+'],
            ['label' => 'Languages Supported', 'value' => '15+']
        ],
        'features' => [
            [
                'title' => 'Knowledge Base Training',
                'icon' => 'fa-brain',
                'desc' => 'Train your AI using website URLs, PDFs, DOCs, or custom sheets. It parses raw data and builds a context-aware brain in minutes.'
            ],
            [
                'title' => 'Smart Live Chat Handover',
                'icon' => 'fa-comments',
                'desc' => 'Detects complex queries and routes them to live human agents. Passes full transcripts to ensure seamless transfers.'
            ],
            [
                'title' => 'Order Tracking Sync',
                'icon' => 'fa-truck-fast',
                'desc' => 'Connects to your CRM/ERP to give real-time updates on delivery, refund statuses, and logistics tracking directly.'
            ],
            [
                'title' => 'Sentiment Detection',
                'icon' => 'fa-face-smile',
                'desc' => 'Scans incoming text for tone and user emotion. Prioritizes frustrated callers for immediate supervisor support.'
            ]
        ],
        'benefits' => [
            '24/7/365 Instant customer assistance with zero queuing.',
            'Drastically reduces support ticket volumes and agent workloads.',
            'Standardizes customer responses with completely accurate information.',
            'Fully custom dashboard tracking query volume, resolution rates, and client happiness.'
        ],
        'faqs' => [
            [
                'q' => 'How does the chatbot learn about my business?',
                'a' => 'Simply upload your PDF documents, website URLs, or FAQ pages. The AutomateX engine automatically reads, organizes, and trains the AI model on your data.'
            ],
            [
                'q' => 'Can it transfer users to a human support agent?',
                'a' => 'Yes. You can define triggers or fallback scenarios. When a user requests a human agent or the query is highly complex, it instantly alerts your staff and transfers the session.'
            ],
            [
                'q' => 'Is customer data kept secure?',
                'a' => 'Absolutely. We follow strict data-privacy guidelines, and all customer chat transcripts and training materials are encrypted both in transit and at rest.'
            ]
        ]
    ],
    'manufacturing-chatbot' => [
        'title' => 'AI Manufacturing Chatbot',
        'badge' => 'AutomateX AI Manufacturing Assistant',
        'sub_title' => 'Streamline Factory SOPs & Vendor Logistics',
        'hero_desc' => 'Optimize supply chain and vendor communications. Automate internal queries, coordinate logistics tracking, and give rapid technical answers to factory operations.',
        'hero_icon' => 'fa-industry',
        'stats' => [
            ['label' => 'SOP Lookup Time', 'value' => '-90%'],
            ['label' => 'Logistics Query Sync', 'value' => 'Real-time'],
            ['label' => 'Vendor Response', 'value' => 'Instant'],
            ['label' => 'Operations Uptime', 'value' => '99.99%']
        ],
        'features' => [
            [
                'title' => 'Operations FAQ Bot',
                'icon' => 'fa-screwdriver-wrench',
                'desc' => 'Empower plant staff to lookup technical guidelines, machinery operation manuals, and safety SOPs in real-time.'
            ],
            [
                'title' => 'Supply Chain Assistant',
                'icon' => 'fa-boxes-packing',
                'desc' => 'Interfaces with warehouse databases to verify inventory stock, raw material levels, and supply line statuses.'
            ],
            [
                'title' => 'Vendor Portal Chat',
                'icon' => 'fa-truck-field',
                'desc' => 'Automates supplier updates, coordinates container arrivals, and handles payment status questions.'
            ],
            [
                'title' => 'Plant-Wide Alert Integration',
                'icon' => 'fa-triangle-exclamation',
                'desc' => 'Configured to push crucial status shifts, emergency alerts, or scheduling reports to team channels on WhatsApp/SMS.'
            ]
        ],
        'benefits' => [
            'Improves internal productivity by speeding up technical lookups.',
            'Reduces vendor friction with automatic scheduling and logistics updates.',
            'Ensures quick compliance with safety regulations by putting manual details at workers fingertips.',
            'Connects directly to major ERP systems like SAP, Oracle, or AutomateX ERP.'
        ],
        'faqs' => [
            [
                'q' => 'Can this chatbot run inside secure intranet portals?',
                'a' => 'Yes. We support custom deployments inside private employee portals, Slack, MS Teams, or web apps with secure SSO integration.'
            ],
            [
                'q' => 'How does it fetch inventory levels?',
                'a' => 'We connect the AI assistant to your central warehouse management system (WMS) or ERP using secure API webhooks to retrieve real-time inventory.'
            ]
        ]
    ],
    'sales-chatbot' => [
        'title' => 'AI Sales Chatbot',
        'badge' => 'AutomateX AI Sales Assistant',
        'sub_title' => 'Close Deals Faster with Conversational AI',
        'hero_desc' => 'Never miss a sales opportunity. Qualify leads, handle pricing inquiries, showcase customer testimonials, and guide high-intent prospects straight to checkout.',
        'hero_icon' => 'fa-chart-line',
        'stats' => [
            ['label' => 'Lead Gen Boost', 'value' => '40%+'],
            ['label' => 'Conversion Increase', 'value' => '25%+'],
            ['label' => 'Engagement Rate', 'value' => '3x'],
            ['label' => 'ROI Attained', 'value' => '10x+']
        ],
        'features' => [
            [
                'title' => 'Instant Lead Qualification',
                'icon' => 'fa-filter-circle-dollar',
                'desc' => 'Engages website traffic, collects emails, business sizes, and requirements, identifying high-intent leads automatically.'
            ],
            [
                'title' => 'Pricing & Quote Estimator',
                'icon' => 'fa-calculator',
                'desc' => 'Gives prospects instant customized pricing estimates based on their specific inputs and tier selectors.'
            ],
            [
                'title' => 'Hot-Lead WhatsApp Routing',
                'icon' => 'fa-whatsapp',
                'desc' => 'Instantly alerts your human sales team on WhatsApp when a highly qualified prospect is active on the chatbot.'
            ],
            [
                'title' => 'Interactive Case Studies',
                'icon' => 'fa-photo-film',
                'desc' => 'Shares case studies, success stats, and product video walkthroughs based on user interest in real-time.'
            ]
        ],
        'benefits' => [
            'Captures leads 24/7, even when your sales team is offline.',
            'Qualifies web visitors so your reps spend time only on high-value leads.',
            'Reduces drop-offs by providing immediate answers to pricing and feature questions.',
            'Pushes contact details instantly to HubSpot, Salesforce, or your custom CRM.'
        ],
        'faqs' => [
            [
                'q' => 'Can the chatbot collect payments?',
                'a' => 'Yes. It can integrate with Stripe, Razorpay, or PayPal to generate custom, secure checkout links directly in the chat.'
            ],
            [
                'q' => 'How does it sync with our CRM system?',
                'a' => 'AutomateX provides built-in integrations for popular CRMs, allowing lead information to map directly to contact fields.'
            ]
        ]
    ],
    'billing-chatbot' => [
        'title' => 'AI Billing & Invoicing Chatbot',
        'badge' => 'AutomateX AI Billing Assistant',
        'sub_title' => 'Automate Bill Inquiries & Payments',
        'hero_desc' => 'Streamline billing and invoice operations. Handle billing queries, dispatch invoices, process digital payments, and provide immediate payment receipt updates directly in chat.',
        'hero_icon' => 'fa-file-invoice-dollar',
        'stats' => [
            ['label' => 'Bill Resolution Time', 'value' => '-70%'],
            ['label' => 'Auto-payment Success', 'value' => '92%'],
            ['label' => 'Overdue Reminders', 'value' => 'Automated'],
            ['label' => 'Payment Options', 'value' => 'Cards/UPI/Wallets']
        ],
        'features' => [
            [
                'title' => 'Billing FAQ Desk',
                'icon' => 'fa-receipt',
                'desc' => 'Answering questions about subscription tiers, due dates, billing periods, and tax breakdowns instantly.'
            ],
            [
                'title' => 'Instant Invoice Dispatch',
                'icon' => 'fa-paper-plane',
                'desc' => 'Allows users to download past statements, check pending balances, or request duplicate receipt copies in seconds.'
            ],
            [
                'title' => 'QR Code UPI Payments',
                'icon' => 'fa-qrcode',
                'desc' => 'Generates dynamic UPI QR codes or custom checkout links directly inside the chat wrapper for instant bill settlement.'
            ],
            [
                'title' => 'Automated Dunning Reminders',
                'icon' => 'fa-bell-concierge',
                'desc' => 'Detects unpaid invoices and sends friendly reminders via WhatsApp or SMS with easy tap-to-pay options.'
            ]
        ],
        'benefits' => [
            'Accelerates receivables and keeps payment pipelines fluid.',
            'Lowers call center load for routine payment and invoice lookups.',
            'Ensures highly secure payments complying with standard financial protocols.',
            'Provides real-time ledger updates back to your ERP/Accounting software.'
        ],
        'faqs' => [
            [
                'q' => 'Is this chatbot secure for credit card details?',
                'a' => 'Yes. The chatbot does not store sensitive card credentials. It redirects transactions securely to standard PCI-DSS compliant payment gateways.'
            ],
            [
                'q' => 'Can it generate custom GST invoices?',
                'a' => 'Yes. By fetching tax inputs and corporate registration codes from the customer, it coordinates with your accounting system to compile GST invoices.'
            ]
        ]
    ],
    'healthcare-chatbot' => [
        'title' => 'AI Healthcare Chatbot',
        'badge' => 'AutomateX AI Healthcare Assistant',
        'sub_title' => 'Patient Care & Appointment Automation',
        'hero_desc' => 'Elevate clinic and hospital operations. Securely manage appointment booking, check symptom flows, send medication alerts, and deliver diagnostic reports with absolute precision.',
        'hero_icon' => 'fa-heart-pulse',
        'stats' => [
            ['label' => 'Booking Convenience', 'value' => '24/7'],
            ['label' => 'No-show Reduction', 'value' => '45%'],
            ['label' => 'Staff Hours Saved', 'value' => '25hr/wk'],
            ['label' => 'Patient Satisfaction', 'value' => '94%']
        ],
        'features' => [
            [
                'title' => 'Appointment Scheduling',
                'icon' => 'fa-calendar-days',
                'desc' => 'Integrates with hospital calendars. Patients browse doctor schedules, pick slots, and confirm appointments in seconds.'
            ],
            [
                'title' => 'Symptom Consultation Flow',
                'icon' => 'fa-stethoscope',
                'desc' => 'Evaluates customer reports of symptoms using AI models to recommend the right department or doctor to book with.'
            ],
            [
                'title' => 'Report & Prescription Lookup',
                'icon' => 'fa-file-medical',
                'desc' => 'Enables patients to securely view lab reports, download PDF results, and check doctor prescription instructions.'
            ],
            [
                'title' => 'Dosage Notifications',
                'icon' => 'fa-pills',
                'desc' => 'Sends automated reminders to patients on WhatsApp/SMS regarding follow-ups, pills, and lifestyle guidance.'
            ]
        ],
        'benefits' => [
            'Reduces receptionist load by fully automating the booking loop.',
            'Limits patient wait-times at clinics through streamlined scheduling.',
            'Optimizes clinic schedules, minimizing cancelled slots and no-shows.',
            'Ensures patient confidentiality using enterprise encryption standards.'
        ],
        'faqs' => [
            [
                'q' => 'Is the chatbot HIPAA compliant?',
                'a' => 'Yes, our enterprise deployments use private database shards and full encryption to satisfy HIPAA and medical information compliance.'
            ],
            [
                'q' => 'Can it handle critical medical emergencies?',
                'a' => 'No. The chatbot is programmed to immediately recognize emergency keywords and instruct the patient to contact emergency services (e.g. 112/108).'
            ]
        ]
    ],
    'enterprise-chatbot' => [
        'title' => 'AI Enterprise Chatbot',
        'badge' => 'AutomateX AI Enterprise Assistant',
        'sub_title' => 'Unify Internal HR, IT Support & Knowledge',
        'hero_desc' => 'Maximize workforce productivity. Build an intelligent internal assistant that unifies employee onboarding, FAQ databases, holiday requests, and IT helpdesk tracking in a single portal.',
        'hero_icon' => 'fa-building',
        'stats' => [
            ['label' => 'IT Ticket Deflection', 'value' => '50%+'],
            ['label' => 'HR Response Time', 'value' => 'Instant'],
            ['label' => 'Onboarding Speed', 'value' => '+35%'],
            ['label' => 'Employee Retention', 'value' => 'High']
        ],
        'features' => [
            [
                'title' => 'Universal Knowledge Search',
                'icon' => 'fa-network-wired',
                'desc' => 'Crawls files across Google Drive, Notion, Confluence, and internal wikis to resolve employee questions immediately.'
            ],
            [
                'title' => 'Automated HR Support',
                'icon' => 'fa-user-tie',
                'desc' => 'Handles queries on leave policies, payslip retrieval, insurance structures, and allows employees to log holiday leaves.'
            ],
            [
                'title' => 'IT Helpdesk Integration',
                'icon' => 'fa-laptop-code',
                'desc' => 'Helps staff log tickets, check ticket status, and resolve common issues like password resets or hardware requests.'
            ],
            [
                'title' => 'New Joiner Onboarding',
                'icon' => 'fa-clipboard-question',
                'desc' => 'Guides new employees through documentation checklist, department intros, and setup tutorials step-by-step.'
            ]
        ],
        'benefits' => [
            'Empowers team members to resolve IT and policy questions without waiting.',
            'Frees HR and IT departments to handle complex operations instead of repeating advice.',
            'Accelerates new hire productivity with conversational manuals.',
            'Integrates with Slack, MS Teams, and private enterprise intranets.'
        ],
        'faqs' => [
            [
                'q' => 'Can the chatbot integrate with our active directory?',
                'a' => 'Yes. We support single sign-on (SSO) protocols, Active Directory (AD), and Okta authentication to confirm employee permissions.'
            ],
            [
                'q' => 'Can we control access to specific documents?',
                'a' => 'Yes. The engine respects user roles and directory permissions, showing answers only from files the employee is authorized to view.'
            ]
        ]
    ],
    'education-chatbot' => [
        'title' => 'AI Education & Campus Chatbot',
        'badge' => 'AutomateX AI Education Assistant',
        'sub_title' => 'Simplify Student Admission & Campus FAQ',
        'hero_desc' => 'Transform student engagement. Walk applicants through course registrations, answer syllabus and fee FAQs, coordinate class timetables, and drive campus communication.',
        'hero_icon' => 'fa-graduation-cap',
        'stats' => [
            ['label' => 'Admission Support', 'value' => '24/7'],
            ['label' => 'Application Volume', 'value' => '+30%'],
            ['label' => 'Timetable Lookup', 'value' => 'Instant'],
            ['label' => 'Student Net promoter', 'value' => '9.2/10']
        ],
        'features' => [
            [
                'title' => 'Admissions & Enrollment',
                'icon' => 'fa-user-graduate',
                'desc' => 'Answers queries about course fees, eligibility rules, key registration dates, and checks application statuses.'
            ],
            [
                'title' => 'Student Information Portal',
                'icon' => 'fa-book-open-reader',
                'desc' => 'Allows registered students to ask for exam schedules, class locations, and download lecture syllabus resources.'
            ],
            [
                'title' => 'Hostel & Facility Guide',
                'icon' => 'fa-hotel',
                'desc' => 'Resolves campus accommodation, dining hours, sports center schedules, and library book availability FAQs.'
            ],
            [
                'title' => 'Broadcasting Exam Updates',
                'icon' => 'fa-bullhorn',
                'desc' => 'Sends vital announcements, holiday alerts, and card reports to parents and students via integrated WhatsApp alerts.'
            ]
        ],
        'benefits' => [
            'Increases application volume by answering student questions instantly.',
            'Saves admission staff thousands of hours spent on basic repetitive calls.',
            'Keeps students informed about schedules, results, and campus updates.',
            'Fully cloud-based, integrating seamlessly with student databases.'
        ],
        'faqs' => [
            [
                'q' => 'Can the chatbot help students submit documents?',
                'a' => 'Yes, applicants can upload image snapshots or PDF credentials directly through the chat interface for admission verification.'
            ],
            [
                'q' => 'Does it support regional language queries?',
                'a' => 'Yes, the chatbot leverages advanced LLM translation, enabling students to interact in English, Hindi, and other regional languages.'
            ]
        ]
    ]
];

// Fallback to customer support chatbot if slug is invalid
$data = isset( $chatbot_data[$chatbot_type] ) ? $chatbot_data[$chatbot_type] : $chatbot_data['customer-support-chatbot'];
?>

<div class="chatbot-service-wrapper" style="background-color: #060913; color: #f8fafc; font-family: 'Raleway', system-ui, sans-serif; overflow-x: hidden;">

    <!-- 1. HERO SECTION -->
    <section class="chatbot-hero py-5" style="position: relative; padding-top: 100px; padding-bottom: 100px; background: radial-gradient(circle at 50% 0%, rgba(0, 242, 254, 0.12) 0%, rgba(6, 9, 19, 1) 75%); border-bottom: 1px solid rgba(255,255,255,0.06);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge mb-3 px-3 py-2 animate__animated animate__fadeInDown" style="background: rgba(0, 242, 254, 0.15); color: #00f2fe; border: 1px solid rgba(0, 242, 254, 0.35); border-radius: 30px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="fas <?php echo esc_attr( $data['hero_icon'] ); ?>"></i> <?php echo esc_html( $data['badge'] ); ?>
                    </span>
                    <h1 class="display-4 font-weight-extrabold text-white mt-2 animate__animated animate__fadeInLeft" style="font-weight: 800; line-height: 1.2; font-size: 2.8rem;">
                        <?php echo esc_html( $data['title'] ); ?> <br>
                        <span style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;"><?php echo esc_html( $data['sub_title'] ); ?></span>
                    </h1>
                    <p class="lead mt-4 animate__animated animate__fadeInUp" style="color: #cbd5e1; font-size: 1.15rem; line-height: 1.8; max-width: 650px;">
                        <?php echo esc_html( $data['hero_desc'] ); ?>
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 32px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.4); border: none; transition: transform 0.2s ease;">
                            <i class="fas fa-rocket me-2"></i> Get Free Proposal
                        </button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" style="background: rgba(255,255,255,0.05); color: #00f2fe; font-weight: 700; border-radius: 10px; padding: 14px 32px; border: 1px solid rgba(0, 242, 254, 0.35); transition: background-color 0.2s ease;">
                            <i class="fas fa-phone-alt me-2"></i> Book Free Demo
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-5 text-center">
                    <div class="chatbot-hero-card p-4 rounded-4 animate__animated animate__zoomIn" style="background: rgba(14, 22, 40, 0.85); border: 1px solid rgba(0, 242, 254, 0.25); backdrop-filter: blur(12px); box-shadow: 0 20px 45px rgba(0,0,0,0.6); position: relative;">
                        <div class="hero-card-glow" style="position: absolute; top: -10%; left: -10%; right: -10%; bottom: -10%; background: radial-gradient(circle, rgba(0, 242, 254, 0.15) 0%, transparent 60%); z-index: -1; pointer-events: none;"></div>
                        <div class="stat-badge mb-3 d-inline-block px-3 py-1 rounded-pill" style="background: rgba(0, 242, 254, 0.1); color: #00f2fe; font-weight: 700; font-size: 0.85rem; border: 1px solid rgba(0, 242, 254, 0.2);">
                            <i class="fas fa-chart-line me-1"></i> Efficiency Metrics
                        </div>
                        <h3 style="color: #fff; font-weight: 800; font-size: 1.5rem; margin-bottom: 20px;">AI Performance Dashboard</h3>
                        
                        <div class="row g-3 text-start">
                            <?php foreach ( $data['stats'] as $stat ) : ?>
                                <div class="col-6">
                                    <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); transition: border-color 0.3s ease;">
                                        <div style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800; font-size: 1.6rem;"><?php echo esc_html( $stat['value'] ); ?></div>
                                        <div style="color: #94a3b8; font-size: 0.85rem; font-weight: 600;"><?php echo esc_html( $stat['label'] ); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-outline-light w-100 mt-4" style="border-radius: 8px; font-weight: 700; border-color: rgba(255,255,255,0.2); transition: all 0.2s ease;">
                            Start Free Trial
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. CORE FEATURES GRID -->
    <section class="py-5" style="background: #060913;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem; position: relative;">Core <span style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">Capabilities & Features</span></h2>
                <p style="color: #94a3b8; max-width: 750px; margin: 10px auto 0 auto; font-size: 1.05rem; font-weight: 500;">Intelligent functionalities engineered to integrate with your existing workflow, automate lookups, and support growth.</p>
            </div>

            <div class="row g-4">
                <?php foreach ( $data['features'] as $feat ) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 rounded-4 h-100" style="background: rgba(14, 22, 40, 0.85); border: 1px solid rgba(0, 242, 254, 0.15); box-shadow: 0 4px 20px rgba(0,0,0,0.5); transition: all 0.3s ease;">
                            <div class="icon-wrap mb-3" style="width: 50px; height: 50px; background: rgba(0, 242, 254, 0.15); color: #00f2fe; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; border: 1px solid rgba(0, 242, 254, 0.25);">
                                <i class="fas <?php echo esc_attr( $feat['icon'] ); ?>"></i>
                            </div>
                            <h3 style="color: #fff; font-weight: 700; font-size: 1.25rem; margin-bottom: 12px;"><?php echo esc_html( $feat['title'] ); ?></h3>
                            <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.7; margin-bottom: 0;">
                                <?php echo esc_html( $feat['desc'] ); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. KEY BENEFITS & WHY CHOOSE SECTION -->
    <section class="py-5" style="background: rgba(14, 22, 40, 0.4); border-top: 1px solid rgba(255,255,255,0.04); border-bottom: 1px solid rgba(255,255,255,0.04);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="mb-4" style="color: #fff; font-weight: 800; font-size: 2.2rem;">Why Deploy Our <br><span style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">AI Solution?</span></h2>
                    <p style="color: #cbd5e1; line-height: 1.8; font-size: 1.05rem;">
                        Our solutions are built using industry-grade large language models (LLMs) trained specifically for target industries. The engine leverages vector embeddings to ensure precise answers, fast queries, and absolute brand safety.
                    </p>
                    
                    <ul class="mt-4 p-0" style="list-style: none;">
                        <?php foreach ( $data['benefits'] as $benefit ) : ?>
                            <li class="d-flex align-items-start mb-3" style="gap: 12px;">
                                <div style="color: #10b981; font-size: 1.2rem; margin-top: -2px;"><i class="fas fa-circle-check"></i></div>
                                <span style="color: #cbd5e1; font-size: 0.95rem; font-weight: 500;"><?php echo esc_html( $benefit ); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(14, 22, 40, 0.85); border: 1px solid rgba(0, 242, 254, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
                        <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.5rem;"><i class="fas fa-bolt me-2" style="color: #00f2fe;"></i> Instant Deployment Lifecycle</h3>
                        
                        <div class="steps-flow" style="display: flex; flex-direction: column; gap: 24px;">
                            <div class="step-item d-flex gap-3">
                                <div class="step-num" style="width: 32px; height: 32px; border-radius: 50%; background: #00f2fe; color: #060913; font-weight: 800; display: flex; align-items: center; justify-content: center;">1</div>
                                <div>
                                    <h5 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Sync Database / Docs</h5>
                                    <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Upload training documents, databases, links, or sync product inventory sheets.</p>
                                </div>
                            </div>
                            <div class="step-item d-flex gap-3">
                                <div class="step-num" style="width: 32px; height: 32px; border-radius: 50%; background: #3b82f6; color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center;">2</div>
                                <div>
                                    <h5 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">AI Auto-Training</h5>
                                    <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">The AutomateX LLM parses data inputs and trains a custom secure agent within minutes.</p>
                                </div>
                            </div>
                            <div class="step-item d-flex gap-3">
                                <div class="step-num" style="width: 32px; height: 32px; border-radius: 50%; background: #ff9900; color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center;">3</div>
                                <div>
                                    <h5 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Go Live</h5>
                                    <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;">Embed the chat widget on your site, hook up WhatsApp APIs, and start serving visitors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="py-5" style="background: #060913;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">Frequently Asked <span style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">Questions</span></h2>
                <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0 auto; font-size: 1rem; font-weight: 500;">Everything you need to know about our chatbot solutions, setup processes, and data integrations.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="chatbotFaqAccordion">
                        <?php foreach ( $data['faqs'] as $index => $faq ) : ?>
                            <div class="accordion-item mb-3" style="background: rgba(14, 22, 40, 0.85); border: 1px solid rgba(0, 242, 254, 0.15); border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                                <h3 class="accordion-header" id="heading-<?php echo $index; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $index; ?>" style="background: transparent; color: #fff; border: none; box-shadow: none; font-weight: 700; padding: 20px; font-size: 1rem;">
                                        <i class="far fa-question-circle me-2" style="color: #00f2fe;"></i> <?php echo esc_html( $faq['q'] ); ?>
                                    </button>
                                </h3>
                                <div id="collapse-<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $index; ?>" data-bs-parent="#chatbotFaqAccordion">
                                    <div class="accordion-body" style="padding: 0 20px 20px 20px; color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; border-top: 1px solid rgba(255,255,255,0.05);">
                                        <?php echo esc_html( $faq['a'] ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. BOTTOM CTA SECTION -->
    <section class="py-5 text-center" style="background: radial-gradient(circle, rgba(0, 242, 254, 0.1) 0%, rgba(6, 9, 19, 1) 80%); border-top: 1px solid rgba(255,255,255,0.06);">
        <div class="container py-3">
            <h2 style="color: #fff; font-weight: 800; font-size: 2.3rem;">Ready to Automate Your Operations?</h2>
            <p style="color: #94a3b8; max-width: 600px; margin: 15px auto 30px auto; font-size: 1.05rem; font-weight: 500;">Contact our team of experts today. We will set up a custom workspace, feed your data inputs, and launch your private AI chatbot demo.</p>
            <div class="d-flex justify-content-center gap-3">
                <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal" class="btn btn-lg" style="background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%); color: #fff; font-weight: 700; border-radius: 10px; padding: 14px 40px; box-shadow: 0 10px 25px rgba(255, 153, 0, 0.45); border: none;">
                    Get Started Now
                </button>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
