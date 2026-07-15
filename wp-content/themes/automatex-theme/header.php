<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png?v=2"/>
      <?php wp_head(); ?>
      <style>
          /* Global Fix for City Landing Page Badges */
          .premium-city-hero .badge {
              white-space: normal !important;
              line-height: 1.6 !important;
              max-width: 90% !important;
              display: inline-block !important;
              height: auto !important;
              padding: 10px 15px !important;
          }
          @media (max-width: 576px) {
              .premium-city-hero .badge {
                  font-size: 0.85rem !important;
                  letter-spacing: 1px !important;
              }
              .premium-city-hero h1 {
                  font-size: 2.2rem !important;
              }
          }

          /* Global Fix: Ensure navigation dropdowns render on top of sticky promo ribbons */
          .sub-menu, .mega-menu {
              z-index: 10000 !important;
          }
      </style>
   </head>
   <body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

   <!-- sticky wrapper start -->
   <div class="sticky-header-wrapper" style="position: sticky; top: 0; z-index: 1050; background: #fff; width: 100%;">
   <!-- header start  -->
   <header>
      <div class="container">
          <div class="row navbarContainer ">
              <div class="col-md-12">
                <div class="nav-wrap">
                  <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; display: flex; align-items: center;">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-automatex.png" alt="AutomateX.ai Logo" style="height: 50px; width: auto;" />
                    </a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbarNav"
                      aria-controls="navbarNav"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">

                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"> About</a>
                        </li>
                        <li class="nav-item mobile-contact-item">
                          <a class="nav-link" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"> Contact Us</a>
                        </li>

                        <!-- SERVICES -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#">
                            Services <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <div class="mega-menu">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-bullhorn"></i> Digital Marketing</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/search-engine-optimization/' ) ); ?>"><i class="fa-solid fa-magnifying-glass"></i> SEO (Search Engine Optimization)</a></li> 
                                    <li><a href="<?php echo esc_url( home_url( '/digital-marketing-services/' ) ); ?>"><i class="fa-solid fa-bullhorn"></i> Digital Marketing Services</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/social-media-optimization/' ) ); ?>"><i class="fa-brands fa-facebook"></i> Social Media Optimization</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/on-page-seo-services/' ) ); ?>"><i class="fa-solid fa-file-lines"></i> On Page SEO Services</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/off-page-seo-services/' ) ); ?>"><i class="fa-solid fa-link"></i> Off Page SEO Services</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/technical-seo-services/' ) ); ?>"><i class="fa-solid fa-screwdriver-wrench"></i> Technical SEO Services</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-globe"></i> Website Design & Development</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/modern-responsive-website-design/' ) ); ?>"><i class="fa-solid fa-laptop"></i> Modern & Responsive Website Design</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/e-commerce-website-development/' ) ); ?>"><i class="fa-solid fa-cart-shopping"></i> E-Commerce Website Development</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/custom-crm-solutions/' ) ); ?>"><i class="fa-solid fa-database"></i> Custom CRM Solutions</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/web-development-services/' ) ); ?>"><i class="fa-solid fa-code"></i> Web Development Services</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-mobile-screen"></i> Mobile Application</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/android-application/' ) ); ?>"><i class="fa-brands fa-android"></i> Android Application</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/ios-application/' ) ); ?>"><i class="fa-brands fa-apple"></i> IOS Application</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!-- PRODUCTS -->
                       <li class="nav-item position-relative">
                          <a class="nav-link" href="#"> Products <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo esc_url( home_url( '/pos/' ) ); ?>">POS</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/erp/' ) ); ?>">ERP</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/accounting/' ) ); ?>">Accounting</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/inventory/' ) ); ?>">Inventory</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/omnichannel/' ) ); ?>">Omnichannel</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/crm/' ) ); ?>">CRM</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/smart-retail/' ) ); ?>">Smart retail</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/lead-management/' ) ); ?>">Lead Management</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/payroll/' ) ); ?>">Payroll </a></li>
                                <li><a href="<?php echo esc_url( home_url( '/education/' ) ); ?>">Education </a></li>
                            </ul>
                        </li> 

                        <li class="nav-item position-relative">
                          <a class="nav-link" href="#"> Functions <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo esc_url( home_url( '/invoicing/' ) ); ?>">Invoicing</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/logistics/' ) ); ?>">Logistics</a></li>
                            </ul>
                        </li>

                        <!-- RETAIL -->
                      <li class="nav-item dropdown">
                          <a class="nav-link" href="#">
                            Retail <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <div class="mega-menu">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-shirt"></i> Apparel & Footwear</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/bridal-store/' ) ); ?>"><i class="fa-solid fa-ring"></i> Bridal Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/boutique-store/' ) ); ?>"><i class="fa-solid fa-scissors"></i> Boutique Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/readymade-garment/' ) ); ?>"><i class="fa-solid fa-shirt"></i> Readymade Garment</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/footwear-store/' ) ); ?>"><i class="fa-solid fa-shoe-prints"></i> Footwear Store</a></li>
                                  </ul>
                                  <ul>
                                    <strong><i class="fa-solid fa-book"></i> Books & Office Supplies</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/book-store/' ) ); ?>"><i class="fa-solid fa-book-open"></i> Book Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/stationery-store/' ) ); ?>"><i class="fa-solid fa-pen"></i> Stationery Store</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-couch"></i> Lifestyle</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/cosmetic-store/' ) ); ?>"><i class="fa-solid fa-pump-soap"></i> Cosmetic Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/home-decor-furniture/' ) ); ?>"><i class="fa-solid fa-couch"></i> Home Decor & Furniture</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/imitation-jewellery/' ) ); ?>"><i class="fa-solid fa-gem"></i> Imitation Jewellery</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/india-temple/' ) ); ?>"><i class="fa-solid fa-gem"></i>India Temple</a></li>
                                  </ul>
                                  <ul>
                                    <strong><i class="fa-solid fa-cart-shopping"></i> Hypermarket & Departmental Store</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/convenience-store/' ) ); ?>"><i class="fa-solid fa-store"></i> Convenience Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/departmental-hypermarket-store/' ) ); ?>"><i class="fa-solid fa-store"></i> Departmental Store</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-apple-whole"></i> Supermarket & Groceries</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/fruits-vegetable-shop/' ) ); ?>"><i class="fa-solid fa-apple-whole"></i> Fruits & Vegetable Shop</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/grocery-store/' ) ); ?>"><i class="fa-solid fa-basket-shopping"></i> Grocery Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/kirana-store/' ) ); ?>"><i class="fa-solid fa-store"></i> Kirana Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/supermarket/' ) ); ?>"><i class="fa-solid fa-cart-shopping"></i> Supermarket</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-gift"></i> Specialized Retail</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/gift-toy-sports-shop/' ) ); ?>"><i class="fa-solid fa-gift"></i> Gift ,Toy ,Sports Shop</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/hardware-shopping-store/' ) ); ?>"><i class="fa-solid fa-wrench"></i> Hardware , Shopping Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/retaile-store/' ) ); ?>"><i class="fa-solid fa-wine-bottle"></i>AI Retail Store</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/ai-manufacturing/' ) ); ?>"><i class="fa-solid fa-dog"></i>Ai Manufacturing</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li> 

                        <!-- ENTERPRISE -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#">
                            Enterprise <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <div class="mega-menu">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-industry"></i>Manufacturing</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/textile/' ) ); ?>"><i class="fa-solid fa-shirt"></i> Textile</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/pharma/' ) ); ?>"><i class="fa-solid fa-pills"></i> Pharma</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/consumer-goods/' ) ); ?>"><i class="fa-solid fa-boxes-stacked"></i> Consumer Goods</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/garments/' ) ); ?>"><i class="fa-solid fa-tshirt"></i> Garments</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/electronics-smartphones/' ) ); ?>"><i class="fa-solid fa-mobile"></i> Electronics / Smartphones</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/industrial-products/' ) ); ?>"><i class="fa-solid fa-industry"></i> Industrial Products</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-handshake"></i> Trading</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/trading-overview/' ) ); ?>"><i class="fa-solid fa-handshake"></i> Trading Overview</a></li>
                                  </ul>
								   <ul>
                                    <strong><i class="fa-solid fa-book"></i> After Sale Service / Warranty Management</strong>
                                     <li><a href="<?php echo esc_url( home_url( '/after-sale-service/' ) ); ?>"><i class="fa-solid fa-book-open"></i>After Sale Service</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-stethoscope"></i> Services</strong>
                                    <li><a href="<?php echo esc_url( home_url( '/schools-educational-institutions/' ) ); ?>"><i class="fa-solid fa-school"></i> Schools / Educational Institutions</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/employee-background-verification/' ) ); ?>"><i class="fa-solid fa-user-check"></i> Employee Background Verification</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/hospitals/' ) ); ?>"><i class="fa-solid fa-hospital"></i> Hospitals</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link" href="<?php echo esc_url( home_url( '/ai-business/' ) ); ?>">
                            AI For Business
                          </a>
                        </li>
						 <li class="nav-item dropdown">
                          <a class="nav-link" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
                            Blog 
                          </a>
                        </li>
                      </ul>

                      <div class="right-btn">
                        <ul>
                          <li>
                            <a href="tel:+917425016636" style="white-space: nowrap;">
                              <i class="fa-solid fa-mobile-screen-button"></i> +91&nbsp;7425016636
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
          </div>
      </div>
   </header>
   <!-- header end -->

   <!-- Book A Demo Strip -->
   <div class="book-demo-strip" style="background: #1e293b; padding: 10px 15px; text-align: center; border-bottom: 2px solid #e06930; position: relative; z-index: 9998;">
       <div class="container d-flex flex-row align-items-center justify-content-between justify-content-md-center gap-2 gap-md-4">
           <span style="color: #f8fafc; font-size: 14px; font-weight: 600; letter-spacing: 0.5px; text-align: left; line-height: 1.2;">Experience AI<br class="d-md-none"> Retail ERP</span>
           <button type="button" class="btn btn-sm" style="background: linear-gradient(to right, #e06930, #fbc145); color: white; font-weight: 800; border-radius: 25px; padding: 8px 20px; border: none; box-shadow: 0 4px 10px rgba(224, 105, 48, 0.3); text-transform: uppercase; font-size: 12px; letter-spacing: 1px; white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#trialModal">
               <i class="fas fa-calendar-check me-1"></i> Book A Demo
           </button>
       </div>
   </div>
   </div>
   <!-- sticky wrapper end -->

   <!-- WhatsApp Icon Box -->
   <div class="whatsapp-icon" style="position:fixed; bottom:20px; left:20px; z-index:9999;">
     <a href="#" id="whatsappButton" style="display:flex; align-items:center; justify-content:center;
                                         background-color:#25D366; color:white; border-radius:50%;
                                         width:60px; height:60px; text-decoration:none; box-shadow:0 4px 6px rgba(0,0,0,0.3);">
       <i class="fa-brands fa-whatsapp fa-2x"></i>
     </a>
   </div>

   <script>
   const phone = "917425016636";
   const name = "Website Visitor";

   document.getElementById('whatsappButton').addEventListener('click', function(e){
       e.preventDefault();
       // Send to WordPress REST API Custom route
       fetch('<?php echo esc_url( get_rest_url( null, 'automatex/v1/whatsapp-lead' ) ); ?>', {
           method: 'POST',
           headers: {'Content-Type': 'application/json'},
           body: JSON.stringify({
               phone: phone,
               lead_name: name,
               message: "Clicked WhatsApp icon"
           })
       })
       .then(response => response.json())
       .then(data => {
           console.log("WhatsApp lead saved:", data);
           window.open("https://wa.me/" + phone, "_blank");
       })
       .catch(err => {
           console.error(err);
           window.open("https://wa.me/" + phone, "_blank");
       });
   });
   </script>

   <style>
   .whatsapp-icon a:hover {
       transform: scale(1.2);
       transition: 0.3s ease;
   }
   .chatbot-overlay {
       display: none;
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       background: rgba(0,0,0,0.4);
       backdrop-filter: blur(5px);
       z-index: 9998;
   }
   </style>

   <!-- Background Blur Overlay -->
   <div id="chatbot-overlay" class="chatbot-overlay"></div>

   <div class="chatbot-container">
     <button id="chatbot-fab" class="chatbot-fab" aria-label="Open AI Assistant" title="Talk to AI">
       <i class="fa-solid fa-robot"></i>
       <div class="pulse-ring"></div>
     </button>

     <div id="chatbot-window" class="chatbot-window">
       <div class="chatbot-header">
         <div class="chatbot-header-info">
            <div class="chatbot-avatar" style="position: relative;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-automatex.png" alt="Logo" style="object-fit: cover; object-position: left; width: 100%; height: 100%;" />
              <span style="position: absolute; bottom: -2px; right: -2px; width: 10px; height: 10px; background: #10b981; border: 2px solid #fff; border-radius: 50%; box-shadow: 0 0 8px rgba(16, 185, 129, 0.6); animation: pulse-live 2s infinite;"></span>
            </div>
           <div class="chatbot-header-text">
             <h4>Automatex.ai AI</h4>
             <span style="color: #64748b; font-weight: 500; font-size: 0.7rem; text-transform: none; letter-spacing: 0;">Typically replies instantly</span>
           </div>
         </div>
         <div class="chatbot-header-actions">
           <button id="chatbot-reset-btn" class="chatbot-reset-btn" title="Clear Chat">
             <i class="fas fa-trash-alt"></i>
           </button>
           <button id="chatbot-close-btn" class="chatbot-close-btn" title="Close Chat">
             <i class="fas fa-chevron-down"></i>
           </button>
         </div>
       </div>

       <div id="chatbot-messages" class="chatbot-messages"></div>
       <div id="chatbot-suggestions" class="suggestion-vertical-menu" style="display:none; padding: 0 20px;"></div>

       <div class="chatbot-disclaimer">
         <i class="fas fa-shield-alt"></i>
         <span>This AI bot can make mistakes. Please double-check information.</span>
       </div>

       <div class="chatbot-input-area">
         <input type="text" id="chatbot-input" class="chatbot-input" placeholder="Ask about our services..." />
         <button id="chatbot-send-btn" class="chatbot-send">
           <i class="fas fa-paper-plane"></i>
         </button>
       </div>
     </div>
   </div>
   
   <style>
   @media (min-width: 992px) {
       .mobile-contact-item {
           display: none !important;
       }
   }
   @media (max-width: 767px) {
       .contact-floating a {
           padding: 8px 16px !important;
           font-size: 14px !important;
       }
   }
   </style>

   <!-- Floating Contact Us Button -->
   <div class="contact-floating" style="position:fixed; bottom:20px; left:50%; transform:translateX(-50%); z-index:100000; display:flex !important;">
     <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" style="display:flex; align-items:center; justify-content:center; padding: 10px 24px;
                                     background: linear-gradient(to right, #e06930, #fbc145); color:white; border-radius:30px;
                                     text-decoration:none; box-shadow:0 4px 10px rgba(0,0,0,0.3); font-weight:600; font-size:16px; white-space:nowrap;">
       <i class="fas fa-envelope" style="margin-right: 8px;"></i> Contact Us
     </a>
   </div>
