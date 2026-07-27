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
    'ai-chatbot-for-customer-support' => [
        'title' => 'AI Chatbot for Customer Support',
        'badge' => 'AI Chatbot for Customer Support',
        'sub_title' => 'Deliver Exceptional Customer Service with Intelligent AI Automation',
        'hero_desc' => 'Deliver instant customer support with an AI Chatbot. Automate FAQs, reduce support tickets, improve customer satisfaction, provide 24/7 AI customer service, and resolve customer queries with Conversational AI.',
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
                'desc' => 'Train your AI using website URLs, FAQs, product manuals, help center articles, company policies, warranty details, returns, and troubleshooting guides.'
            ],
            [
                'title' => 'Smart Live Chat Handover',
                'icon' => 'fa-comments',
                'desc' => 'Automatically creates support tickets or transfers the conversation to a live agent with complete chat history for unresolved issues.'
            ],
            [
                'title' => 'CRM & System Integrations',
                'icon' => 'fa-network-wired',
                'desc' => 'Connects to CRM, ERP, Helpdesk, Order Management, WhatsApp, Facebook Messenger, Live Chat, and Email Support.'
            ],
            [
                'title' => 'Omnichannel AI Care',
                'icon' => 'fa-comments-dollar',
                'desc' => 'Deliver consistent customer service across websites, mobile apps, WhatsApp, Facebook Messenger, Instagram, and Live Chat.'
            ]
        ],
        'long_copy' => [
            "Customer support has become one of the most important factors influencing customer satisfaction, brand loyalty, and long-term business success. Modern customers expect immediate responses whenever they have questions about products, services, pricing, order status, returns, technical issues, or account information. They no longer want to wait for business hours, remain on hold during phone calls, or wait several hours for email responses. In today's competitive marketplace, slow customer support often results in lost customers, negative reviews, and declining customer retention. This is why businesses across every industry are adopting an AI Chatbot for Customer Support to provide instant, personalized, and intelligent customer service around the clock.",
            "An AI Chatbot functions as a virtual customer support executive that is available twenty-four hours a day, seven days a week. Unlike traditional Chat Bot systems that rely on predefined rules and scripted responses, modern Chatbot AI uses Artificial Intelligence, Machine Learning, Natural Language Processing (NLP), and Conversational AI to understand customer intent, analyze conversation context, and provide accurate responses in natural language. Whether customers need assistance with product information, order tracking, technical support, billing inquiries, appointment scheduling, return policies, or troubleshooting, the chatbot delivers fast and reliable assistance without requiring human intervention.",
            "One of the biggest challenges faced by customer support teams is handling large volumes of repetitive inquiries. Every day, businesses receive thousands of similar questions regarding shipping information, payment methods, refund policies, warranty details, login issues, account management, business hours, and frequently asked questions. Customer support representatives often spend a significant portion of their time answering these routine requests, leaving less time for handling complex customer issues. An intelligent AI Chatbot for Customer Service automates these repetitive conversations, allowing support teams to focus on higher-value interactions that require empathy, problem-solving, and specialized expertise.",
            "Instant response is one of the greatest advantages of implementing an AI Customer Service Bot. Research consistently shows that customers are more likely to remain loyal to businesses that provide fast support. Every second of delay increases customer frustration and the possibility of losing business to competitors. An AI-powered chatbot eliminates waiting time by responding immediately to customer inquiries regardless of time zone, business hours, holidays, or support volume. Customers receive assistance whenever they need it, creating a seamless and satisfying support experience.",
            "Modern Conversational AI Chatbot technology provides far more than simple question-and-answer functionality. It understands customer conversations naturally and maintains context throughout the interaction. If a customer asks multiple related questions during the same conversation, the chatbot remembers previous responses and continues the discussion without requiring customers to repeat information. This creates a human-like support experience that feels personalized, intelligent, and highly engaging.",
            "An AI Chatbot Online can be trained using a company's knowledge base, website content, FAQs, product documentation, help center articles, policy documents, training materials, technical manuals, and customer support records. As a result, the chatbot develops deep knowledge of the business and provides responses that accurately reflect company policies and procedures. The more business information it learns, the more accurate and effective its responses become.",
            "Businesses also benefit significantly from reduced support costs through intelligent automation. Instead of expanding customer service teams to manage increasing inquiry volumes, organizations can deploy a single AI Chatbot capable of handling thousands of simultaneous conversations. The chatbot automatically resolves common customer issues while escalating only complex cases to human support agents. This balanced approach improves operational efficiency, reduces staffing costs, shortens response times, and enables businesses to scale customer support without increasing operational expenses.",
            "Customer experience is dramatically improved through personalized interactions powered by Artificial Intelligence Chat. The chatbot recognizes returning customers, retrieves previous conversation history, analyzes purchase records, and provides personalized recommendations based on customer preferences. Rather than delivering generic responses, the chatbot adapts conversations according to individual customer needs, creating stronger relationships and improving customer satisfaction.",
            "One of the most valuable features of an intelligent AI Chatbot for Customer Support is its ability to integrate with CRM software, ERP systems, Helpdesk platforms, ticket management solutions, order management systems, inventory software, and payment gateways. Through these integrations, the chatbot can retrieve real-time customer information such as order status, invoice history, shipment tracking, service requests, warranty details, subscription information, and account records. Customers receive accurate answers immediately without requiring support representatives to manually search multiple systems.",
            "Omnichannel customer support has become essential for modern businesses because customers communicate through websites, mobile applications, WhatsApp, Facebook Messenger, Instagram, Telegram, Live Chat, and email. An AI Chatbot Online provides consistent customer service across all communication channels while maintaining conversation history and customer context. Whether a conversation begins on the company website and continues on WhatsApp or social media, customers experience uninterrupted support across every platform.",
            "Businesses can also use an AI Chatbot proactively rather than waiting for customers to ask questions. For example, the chatbot can automatically notify customers about order confirmations, shipping updates, payment reminders, appointment schedules, maintenance notifications, subscription renewals, promotional offers, and service updates. These proactive interactions strengthen customer relationships while reducing incoming support inquiries.",
            "Customer satisfaction is further improved through intelligent issue resolution. If the chatbot cannot fully resolve a customer problem, it automatically transfers the conversation to the appropriate human support representative while sharing the complete conversation history. Customers never need to repeat their concerns, allowing support agents to resolve issues more efficiently while maintaining a smooth customer experience.",
            "Every customer interaction generates valuable business intelligence that helps organizations improve customer service continuously. The Chatbot AI analyzes conversation trends, identifies common customer issues, monitors response quality, measures customer satisfaction, and highlights areas requiring improvement. Businesses use these insights to optimize support workflows, update knowledge bases, improve products, strengthen training programs, and enhance overall customer experience.",
            "As organizations continue embracing digital transformation, intelligent customer service automation has become a strategic business investment rather than a luxury. The Best AI Chatbot combines AI Chat, Conversational AI, automation, and enterprise integration into a comprehensive customer support platform capable of serving businesses of every size. Whether supporting eCommerce stores, healthcare providers, educational institutions, manufacturers, SaaS companies, financial organizations, or retail businesses, AI-powered customer support delivers faster responses, higher satisfaction, improved efficiency, and measurable business growth.",
            "Ultimately, an AI Chatbot for Customer Support is far more than an automated messaging solution. It serves as a virtual customer service representative, technical support assistant, helpdesk agent, knowledge management system, and customer engagement platform working continuously to deliver exceptional customer experiences. Businesses that invest in intelligent Chatbot AI technology today are creating customer-centric support ecosystems capable of improving loyalty, reducing operational costs, increasing efficiency, and building lasting customer relationships in an increasingly digital world."
        ],
        'steps' => [
            ['title' => 'Create Your AI Customer Support Chatbot', 'desc' => 'Choose an AI chatbot platform and create your chatbot account. Configure your business profile, company details, support channels, and customer service preferences.'],
            ['title' => 'Train the AI with Your Business Knowledge', 'desc' => 'Upload your website, FAQs, product manuals, help center articles, knowledge base, company policies, warranty information, shipping details, return policy, and troubleshooting guides.'],
            ['title' => 'Design Customer Support Workflows', 'desc' => 'Customize welcome messages, support categories, automated replies, escalation rules, ticket creation, order tracking, refund requests, appointment booking, and complaint management workflows.'],
            ['title' => 'Integrate Business Systems', 'desc' => 'Connect your chatbot with CRM Software, ERP Software, Helpdesk, Ticket management systems, Order management, Inventory software, WhatsApp Business, Facebook Messenger, Live Chat, and Email Support.'],
            ['title' => 'Deploy Across Multiple Channels', 'desc' => 'Publish the chatbot on your website, customer portal, mobile application, WhatsApp, Facebook Messenger, Instagram, Telegram, and other communication channels.'],
            ['title' => 'Customers Start Asking Questions', 'desc' => 'Customers interact with the chatbot naturally by asking questions about products, services, payments, shipping, returns, technical issues, account information, warranties, or order status.'],
            ['title' => 'AI Resolves Customer Queries', 'desc' => 'The chatbot instantly provides personalized responses using AI and retrieves real-time information from connected business systems.'],
            ['title' => 'Escalate Complex Issues', 'desc' => 'If the chatbot cannot resolve a customer issue, it automatically creates a support ticket or transfers the conversation to a live support agent with complete chat history.'],
            ['title' => 'Analyze Customer Support Performance', 'desc' => 'Track customer satisfaction, response time, ticket resolution, chatbot accuracy, conversation volume, and support analytics to continuously improve customer service.']
        ],
        'benefits' => [
            ['title' => '24/7 Customer Support', 'desc' => 'Provide instant customer assistance every hour of the day without relying on business hours.', 'icon' => 'fa-clock'],
            ['title' => 'Instant Response Time', 'desc' => 'Customers receive immediate answers instead of waiting for email replies or phone support.', 'icon' => 'fa-bolt'],
            ['title' => 'Reduce Support Costs', 'desc' => 'Automate thousands of repetitive customer inquiries without increasing support staff.', 'icon' => 'fa-dollar-sign'],
            ['title' => 'Faster Ticket Resolution', 'desc' => 'Resolve common issues instantly while forwarding only complex cases to human agents.', 'icon' => 'fa-ticket-simple'],
            ['title' => 'Improve Customer Satisfaction', 'desc' => 'Quick, personalized responses create better customer experiences and stronger brand loyalty.', 'icon' => 'fa-face-smile'],
            ['title' => 'Handle Unlimited Conversations', 'desc' => 'Support thousands of customers simultaneously without reducing service quality.', 'icon' => 'fa-users'],
            ['title' => 'Reduce Human Workload', 'desc' => 'Allow support teams to focus on technical issues, escalations, and high-priority customers.', 'icon' => 'fa-user-tie'],
            ['title' => 'Omnichannel Customer Support', 'desc' => 'Serve customers across websites, mobile apps, WhatsApp, Facebook Messenger, Instagram, email, and live chat.', 'icon' => 'fa-comments'],
            ['title' => 'Real-Time Business Information', 'desc' => 'Provide live order status, payment details, invoices, shipping updates, appointment schedules, and account information.', 'icon' => 'fa-circle-info'],
            ['title' => 'Continuous AI Learning', 'desc' => 'The chatbot becomes smarter with every customer conversation, improving response quality over time.', 'icon' => 'fa-brain']
        ],
        'faqs' => [
            ['q' => 'What is an AI Chatbot for Customer Support?', 'a' => 'An AI Chatbot for Customer Support is an intelligent virtual assistant that automatically answers customer questions, resolves issues, creates support tickets, and provides 24/7 assistance using Artificial Intelligence and Conversational AI.'],
            ['q' => 'How does an AI Customer Support Chatbot work?', 'a' => 'The chatbot understands customer questions using Natural Language Processing (NLP), searches your business knowledge base and integrated systems, and provides accurate responses instantly. If necessary, it transfers the conversation to a live support representative.'],
            ['q' => 'Can the chatbot answer customer questions automatically?', 'a' => 'Yes. It can answer FAQs, product inquiries, pricing questions, order status, shipping information, payment issues, account management, warranty details, and many other routine support requests automatically.'],
            ['q' => 'Can the chatbot create support tickets?', 'a' => 'Yes. If the issue cannot be resolved automatically, the chatbot creates a support ticket and assigns it to the appropriate support team.'],
            ['q' => 'Can AI Chatbot integrate with CRM and ERP software?', 'a' => 'Yes. It integrates with CRM, ERP, Helpdesk, inventory systems, order management software, payment gateways, and customer databases to provide real-time information.'],
            ['q' => 'Does the chatbot work 24/7?', 'a' => 'Yes. AI chatbots operate continuously throughout the year without breaks, ensuring customers always receive immediate support.'],
            ['q' => 'Can AI Chatbot support multiple languages?', 'a' => 'Yes. Most modern AI chatbots provide multilingual support, enabling businesses to serve customers across different countries and regions.'],
            ['q' => 'Is AI Chatbot suitable for small businesses?', 'a' => 'Absolutely. Startups, SMEs, and large enterprises can all benefit by improving customer service, reducing operational costs, and increasing support efficiency.'],
            ['q' => 'Which industries use AI Customer Support Chatbots?', 'a' => 'AI Customer Support Chatbots are widely used in eCommerce, healthcare, banking, manufacturing, education, retail, logistics, travel, hospitality, insurance, SaaS, telecom, and government organizations.'],
            ['q' => 'Why should businesses implement an AI Customer Support Chatbot?', 'a' => 'Businesses should implement AI chatbots to automate customer service, improve response times, increase customer satisfaction, reduce support costs, streamline workflows, and deliver consistent, high-quality support at scale.']
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
                'icon' => 'fa-circle-info',
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
$data = isset( $chatbot_data[$chatbot_type] ) ? $chatbot_data[$chatbot_type] : $chatbot_data['ai-chatbot-for-customer-support'];
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
                    <h1 class="display-4 font-weight-extrabold text-white mt-2 animate__animated animate__fadeInLeft" style="font-weight: 800; line-height: 1.2; font-size: 2.3rem;">
                        <?php echo esc_html( $data['title'] ); ?> <br>
                        <span style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800; font-size: 1.8rem;"><?php echo esc_html( $data['sub_title'] ); ?></span>
                    </h1>
                    <p class="lead mt-4 animate__animated animate__fadeInUp" style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.8; max-width: 650px;">
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

    <!-- 1.2 MAIN CONTENT (LONG COPY) -->
    <?php if ( ! empty( $data['long_copy'] ) ) : ?>
        <section class="py-5" style="background: #060913; border-bottom: 1px solid rgba(255,255,255,0.04);">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-4 p-md-5 rounded-4 animate__animated animate__fadeInUp" style="background: rgba(14, 22, 40, 0.45); border: 1px solid rgba(0, 242, 254, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                            <?php foreach ( $data['long_copy'] as $para ) : ?>
                                <p style="font-size: 1.05rem; line-height: 1.9; color: #cbd5e1; margin-bottom: 24px; text-align: justify; text-justify: inter-word;">
                                    <?php echo esc_html( $para ); ?>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

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
                    
                    <div class="row g-4 mt-2">
                        <?php foreach ( $data['benefits'] as $benefit ) : ?>
                            <?php if ( is_array( $benefit ) ) : ?>
                                <!-- New structured format (Customer Support Chatbot) -->
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3">
                                        <div style="width: 42px; height: 42px; background: rgba(0, 242, 254, 0.15); color: #00f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; border: 1px solid rgba(0, 242, 254, 0.25); flex-shrink: 0;">
                                            <i class="fas <?php echo esc_attr( $benefit['icon'] ); ?>"></i>
                                        </div>
                                        <div>
                                            <h5 style="color: #fff; font-weight: 700; font-size: 1.05rem; margin-bottom: 4px;"><?php echo esc_html( $benefit['title'] ); ?></h5>
                                            <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin-bottom: 0;"><?php echo esc_html( $benefit['desc'] ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <!-- Standard string format (other chatbots) -->
                                <div class="col-12">
                                    <div class="d-flex align-items-start gap-3">
                                        <div style="color: #10b981; font-size: 1.2rem; margin-top: -2px;"><i class="fas fa-circle-check"></i></div>
                                        <span style="color: #cbd5e1; font-size: 0.95rem; font-weight: 500;"><?php echo esc_html( $benefit ); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: rgba(14, 22, 40, 0.85); border: 1px solid rgba(0, 242, 254, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
                        <h3 class="mb-4" style="color: #fff; font-weight: 800; font-size: 1.5rem;"><i class="fas fa-bolt me-2" style="color: #00f2fe;"></i> Instant Deployment Lifecycle</h3>
                        
                        <div class="steps-flow" style="display: flex; flex-direction: column; gap: 24px; max-height: 480px; overflow-y: auto; padding-right: 10px;">
                            <?php if ( ! empty( $data['steps'] ) ) : ?>
                                <!-- Dynamic steps loop (for Customer Support) -->
                                <?php foreach ( $data['steps'] as $idx => $step ) : ?>
                                    <div class="step-item d-flex gap-3">
                                        <div class="step-num" style="width: 32px; height: 32px; border-radius: 50%; background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); color: #060913; font-weight: 800; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <?php echo ($idx + 1); ?>
                                        </div>
                                        <div>
                                            <h5 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;"><?php echo esc_html( $step['title'] ); ?></h5>
                                            <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 0;"><?php echo esc_html( $step['desc'] ); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <!-- Static default steps (for other chatbots) -->
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
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3.2 WORKFLOW FLOWCHART -->
    <?php if ( $chatbot_type === 'ai-chatbot-for-customer-support' ) : ?>
        <section class="py-5" style="background: rgba(14, 22, 40, 0.25); border-bottom: 1px solid rgba(255,255,255,0.04);">
            <div class="container py-4">
                <div class="text-center mb-5">
                    <h2 style="color: #fff; font-weight: 800; font-size: 2.2rem;">How AI Customer Support <span style="background: linear-gradient(135deg, #00f2fe 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">Workflow Works</span></h2>
                    <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0 auto; font-size: 1.05rem; font-weight: 500;">A visual breakdown of how queries flow through AutomateX AI from visitor query to final customer satisfaction.</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
                            
                            <div class="p-3 rounded-3" style="background: var(--bg-dark-card); border: 1px solid var(--border-cyan-glow); min-width: 180px; max-width: 220px;">
                                <div style="font-size: 1.8rem; color: #00f2fe; margin-bottom: 8px;"><i class="fas fa-laptop"></i></div>
                                <h6 style="color: #fff; font-weight: 700; margin: 0; font-size: 0.95rem;">1. Customer Visits Site</h6>
                            </div>
                            
                            <div class="d-none d-lg-block" style="color: #00f2fe; font-size: 1.2rem;"><i class="fas fa-chevron-right"></i></div>
                            <div class="d-block d-lg-none" style="color: #00f2fe; font-size: 1.2rem; margin: 8px 0;"><i class="fas fa-chevron-down"></i></div>
                            
                            <div class="p-3 rounded-3" style="background: var(--bg-dark-card); border: 1px solid var(--border-cyan-glow); min-width: 180px; max-width: 220px;">
                                <div style="font-size: 1.8rem; color: #00f2fe; margin-bottom: 8px;"><i class="fas fa-robot"></i></div>
                                <h6 style="color: #fff; font-weight: 700; margin: 0; font-size: 0.95rem;">2. AI Welcomes User</h6>
                            </div>
                            
                            <div class="d-none d-lg-block" style="color: #00f2fe; font-size: 1.2rem;"><i class="fas fa-chevron-right"></i></div>
                            <div class="d-block d-lg-none" style="color: #00f2fe; font-size: 1.2rem; margin: 8px 0;"><i class="fas fa-chevron-down"></i></div>
                            
                            <div class="p-3 rounded-3" style="background: var(--bg-dark-card); border: 1px solid var(--border-cyan-glow); min-width: 180px; max-width: 220px;">
                                <div style="font-size: 1.8rem; color: #00f2fe; margin-bottom: 8px;"><i class="fas fa-comment-dots"></i></div>
                                <h6 style="color: #fff; font-weight: 700; margin: 0; font-size: 0.95rem;">3. User Asks Question</h6>
                            </div>
                            
                            <div class="d-none d-lg-block" style="color: #3b82f6; font-size: 1.2rem;"><i class="fas fa-chevron-right"></i></div>
                            <div class="d-block d-lg-none" style="color: #3b82f6; font-size: 1.2rem; margin: 8px 0;"><i class="fas fa-chevron-down"></i></div>
                            
                            <div class="p-3 rounded-3" style="background: var(--bg-dark-card); border: 1px solid var(--border-cyan-glow); min-width: 180px; max-width: 220px;">
                                <div style="font-size: 1.8rem; color: #3b82f6; margin-bottom: 8px;"><i class="fas fa-brain"></i></div>
                                <h6 style="color: #fff; font-weight: 700; margin: 0; font-size: 0.95rem;">4. AI Analyzes Intent</h6>
                            </div>
                            
                        </div>
                        
                        <div class="text-center my-4" style="color: #3b82f6; font-size: 1.5rem;"><i class="fas fa-chevron-down"></i></div>
                        
                        <div class="d-flex flex-wrap justify-content-center align-items-stretch gap-4">
                            
                            <div class="p-4 rounded-4 text-center" style="background: rgba(16, 185, 129, 0.05); border: 1px solid rgba(16, 185, 129, 0.3); max-width: 420px; flex: 1;">
                                <div style="display: inline-block; padding: 4px 12px; background: #10b981; color: #fff; border-radius: 20px; font-weight: 800; font-size: 0.8rem; margin-bottom: 12px;">YES (Auto-Resolved)</div>
                                <div style="font-size: 2.2rem; color: #10b981; margin-bottom: 12px;"><i class="fas fa-circle-check"></i></div>
                                <h5 style="color: #fff; font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Instant AI Resolution</h5>
                                <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.7; margin-bottom: 0; text-align: left;">AI fetches immediate answers from your synced FAQs and Knowledge Base. The case is marked resolved, boosting visitor satisfaction and saving resource costs.</p>
                            </div>
                            
                            <div class="p-4 rounded-4 text-center" style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.3); max-width: 420px; flex: 1;">
                                <div style="display: inline-block; padding: 4px 12px; background: #ef4444; color: #fff; border-radius: 20px; font-weight: 800; font-size: 0.8rem; margin-bottom: 12px;">NO (Needs Human Assist)</div>
                                <div style="font-size: 2.2rem; color: #ef4444; margin-bottom: 12px;"><i class="fas fa-headset"></i></div>
                                <h5 style="color: #fff; font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Human Escalation</h5>
                                <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.7; margin-bottom: 0; text-align: left;">System creates a helpdesk ticket automatically and routes the live conversation context directly to an online human agent to finalize customer satisfaction.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

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
