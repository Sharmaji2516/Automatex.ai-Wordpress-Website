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

      /* ==========================================
         🤖 AUTOMATEX PREMIUM FUTURISTIC HEADER STYLING
         ========================================== */
      .sticky-header-wrapper {
          position: sticky !important;
          top: 0 !important;
          z-index: 1050 !important;
          background: rgba(7, 11, 25, 0.95) !important;
          backdrop-filter: blur(12px) !important;
          -webkit-backdrop-filter: blur(12px) !important;
          width: 100% !important;
          border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
      }

      header {
          padding: 8px 0 !important;
      }

      .navbar-brand {
          background: #ffffff !important;
          padding: 6px 14px !important;
          border-radius: 10px !important;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25) !important;
          transition: transform 0.3s ease !important;
          display: flex !important;
          align-items: center !important;
      }
      .navbar-brand:hover {
          transform: scale(1.03) !important;
      }
      .navbar-brand img {
          height: 42px !important;
          width: auto !important;
          display: block !important;
      }

       @media (min-width: 992px) {
           .navbar-nav {
               gap: 6px !important;
               align-items: center !important;
           }
           .navbar-nav .nav-item {
               position: relative !important;
               padding-bottom: 12px !important;
               margin-bottom: -12px !important;
           }

           .sub-menu::before, .mega-menu::before {
               content: '' !important;
               position: absolute !important;
               top: -30px !important;
               left: 0 !important;
               width: 100% !important;
               height: 35px !important;
               background: transparent !important;
               z-index: 10001 !important;
           }

           .navbar-nav .nav-item:hover > .sub-menu,
           .navbar-nav .nav-item:hover > .mega-menu,
           .sub-menu:hover,
           .mega-menu:hover {
               display: block !important;
               opacity: 1 !important;
               visibility: visible !important;
               pointer-events: auto !important;
           }
       }

              /* Mobile Navigation Responsive Drawer Fix - Clean White Theme */
       @media (max-width: 991.98px) {
           .navbar-collapse, #navbarNav {
               background: #ffffff !important;
               border: 1px solid #e2e8f0 !important;
               border-radius: 16px !important;
               padding: 20px 16px !important;
               margin-top: 12px !important;
               box-shadow: 0 15px 45px rgba(0, 0, 0, 0.35) !important;
               max-height: 90vh !important;
               overflow-y: auto !important;
               -webkit-overflow-scrolling: touch !important;
           }

           .navbar-nav {
               align-items: stretch !important;
               flex-direction: column !important;
               width: 100% !important;
               gap: 6px !important;
               margin: 0 !important;
               padding: 0 !important;
           }

           .navbar-nav .nav-item {
               width: 100% !important;
               display: block !important;
               margin-bottom: 4px !important;
               padding: 0 !important;
           }

           .navbar-nav .nav-link,
           .navbar-nav .nav-item .nav-link,
           ul.navbar-nav > li > a,
           ul.navbar-nav .nav-link {
               width: 100% !important;
               display: flex !important;
               justify-content: space-between !important;
               align-items: center !important;
               padding: 12px 18px !important;
               background: transparent !important;
               border: 1px solid transparent !important;
               border-radius: 10px !important;
               color: #0f172a !important;
               -webkit-text-fill-color: #0f172a !important;
               font-weight: 700 !important;
               font-size: 0.98rem !important;
               text-decoration: none !important;
               transition: all 0.2s ease !important;
           }

           .navbar-nav .nav-link:hover,
           .navbar-nav .nav-link:focus,
           .navbar-nav .nav-item.show > .nav-link {
               background: #f1f5f9 !important;
               color: #ff9900 !important;
               -webkit-text-fill-color: #ff9900 !important;
               border-color: #e2e8f0 !important;
           }

           .navbar-nav .nav-link i {
               color: #64748b !important;
               font-size: 0.9rem !important;
           }

           /* Chevron Icon Rotation */
           .navbar-nav .nav-link i,
           .navbar-nav .nav-link i.fa-angle-down {
               color: #64748b !important;
               font-size: 0.85rem !important;
               transition: transform 0.25s ease !important;
           }

           .navbar-nav .nav-item.show > .nav-link i,
           .navbar-nav .nav-item.active > .nav-link i {
               color: #ea580c !important;
               transform: rotate(180deg) !important;
           }

           /* === 100% UNIFORM WHITE CARD ACCORDION FOR ALL DROPDOWNS === */
           .mega-menu,
           .sub-menu,
           .mega-menu-wrap,
           .mega-menu .row,
           .mega-menu .col-md-4,
           .mega-menu .col-md-3,
           .mega-menu-wrap strong,
           .mega-menu-wrap > ul > strong {
               background: transparent !important;
               box-shadow: none !important;
               border-right: none !important;
           }

           .mega-menu,
           .sub-menu {
               display: none !important;
               visibility: hidden !important;
               opacity: 0 !important;
               position: static !important;
               height: 0 !important;
               overflow: hidden !important;
               width: 100% !important;
               margin: 0 !important;
               padding: 0 !important;
               border: none !important;
           }

           /* === EXPANDED STATE (Services, Products, Retail, Functions, Enterprise) === */
           .nav-item.dropdown.show > .mega-menu,
           .nav-item.dropdown.show > .sub-menu,
           .nav-item.show > .mega-menu,
           .nav-item.show > .sub-menu,
           .nav-item.active > .mega-menu,
           .nav-item.active > .sub-menu {
               display: block !important;
               position: static !important;
               float: none !important;
               z-index: auto !important;
               visibility: visible !important;
               opacity: 1 !important;
               height: auto !important;
               overflow: visible !important;
               background: #f8fafc !important;
               border-left: 3px solid #ea580c !important;
               border-radius: 0 10px 10px 0 !important;
               padding: 10px 12px !important;
               margin-top: 6px !important;
               margin-bottom: 10px !important;
               width: 100% !important;
           }

           /* Category Section Headers (Digital Marketing, Books & Office Supplies, Lifestyle) */
           .mega-menu-wrap strong,
           .mega-menu-wrap > ul > strong {
               display: flex !important;
               align-items: center !important;
               gap: 8px !important;
               color: #ea580c !important;
               -webkit-text-fill-color: #ea580c !important;
               font-size: 0.85rem !important;
               font-weight: 800 !important;
               text-transform: uppercase !important;
               letter-spacing: 0.5px !important;
               padding: 8px 0 6px 0 !important;
               margin: 10px 0 8px 0 !important;
               border-bottom: 2px solid #fdba74 !important;
               background: transparent !important;
               width: 100% !important;
           }

           .mega-menu-wrap strong i { color: #ea580c !important; }

           /* Sub-Links List (Identical white cards for Products, Services, Retail) */
           .mega-menu-wrap ul,
           .sub-menu,
           ul.sub-menu {
               list-style: none !important;
               padding: 0 !important;
               margin: 0 !important;
               display: block !important;
               height: auto !important;
           }

           .mega-menu-wrap li,
           .sub-menu li {
               display: block !important;
               margin-bottom: 6px !important;
           }

           .mega-menu-wrap li a,
           .sub-menu li a,
           ul.sub-menu li a {
               display: flex !important;
               align-items: center !important;
               gap: 10px !important;
               color: #1e293b !important;
               -webkit-text-fill-color: #1e293b !important;
               background: #ffffff !important;
               border: 1px solid #e2e8f0 !important;
               border-radius: 8px !important;
               padding: 10px 14px !important;
               font-size: 0.92rem !important;
               font-weight: 600 !important;
               text-decoration: none !important;
               width: 100% !important;
               box-sizing: border-box !important;
               box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important;
               transition: all 0.2s ease !important;
           }

           .mega-menu-wrap li a i,
           .sub-menu li a i { color: #ea580c !important; font-size: 0.9rem !important; }

           .mega-menu-wrap li a:hover,
           .sub-menu li a:hover,
           ul.sub-menu li a:hover {
               background: #fff7ed !important;
               border-color: #fdba74 !important;
               color: #ea580c !important;
               -webkit-text-fill-color: #ea580c !important;
               padding-left: 18px !important;
           }

           .sub-menu::before, .mega-menu::before { display: none !important; }
       }

        /* Desktop Dropdown Styles */
        @media (min-width: 992px) {
            .sub-menu {
                min-width: 220px !important;
                padding: 12px 8px !important;
            }
            .sub-menu li {
                list-style: none !important;
                margin-bottom: 4px !important;
            }
            .sub-menu li a {
                color: #cbd5e1 !important;
                font-weight: 600 !important;
                font-size: 0.9rem !important;
                padding: 8px 14px !important;
                display: block !important;
                border-radius: 8px !important;
                text-decoration: none !important;
                transition: all 0.2s ease !important;
            }
            .sub-menu li a:hover {
                background: rgba(56, 189, 248, 0.15) !important;
                color: #ffffff !important;
                padding-left: 18px !important;
            }

            .mega-menu-wrap strong {
                color: #38bdf8 !important;
                font-weight: 800 !important;
                font-size: 0.85rem !important;
                text-transform: uppercase !important;
                letter-spacing: 0.8px !important;
                display: flex !important;
                align-items: center !important;
                gap: 8px !important;
                padding-bottom: 8px !important;
                margin-bottom: 12px !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
            }
            .mega-menu-wrap ul {
                list-style: none !important;
                padding: 0 !important;
                margin-bottom: 20px !important;
            }
            .mega-menu-wrap li a {
                color: #cbd5e1 !important;
                font-size: 0.88rem !important;
                font-weight: 500 !important;
                padding: 6px 10px !important;
                display: flex !important;
                align-items: center !important;
                gap: 8px !important;
                border-radius: 6px !important;
                text-decoration: none !important;
                transition: all 0.2s ease !important;
            }
            .mega-menu-wrap li a:hover {
                background: rgba(56, 189, 248, 0.15) !important;
                color: #ffffff !important;
                transform: translateX(4px) !important;
            }
            .mega-menu-wrap li a i {
                color: #ff9900 !important;
                font-size: 0.85rem !important;
            }
        }

      .right-btn ul {
          list-style: none !important;
          padding: 0 !important;
          margin: 0 !important;
      }
      .right-btn a {
          background: linear-gradient(135deg, #ff9900 0%, #e67e22 100%) !important;
          color: #ffffff !important;
          font-weight: 800 !important;
          font-size: 0.9rem !important;
          padding: 10px 22px !important;
          border-radius: 30px !important;
          box-shadow: 0 4px 15px rgba(255, 153, 0, 0.35) !important;
          text-decoration: none !important;
          display: inline-flex !important;
          align-items: center !important;
          gap: 8px !important;
          transition: all 0.3s ease !important;
      }
      .right-btn a:hover {
          background: linear-gradient(135deg, #ffaa1a 0%, #f39c12 100%) !important;
          transform: translateY(-2deg) !important;
          box-shadow: 0 8px 25px rgba(255, 153, 0, 0.55) !important;
          color: #ffffff !important;
      }

      .book-demo-strip {
          background: linear-gradient(90deg, #0d1527 0%, #1e293b 50%, #0d1527 100%) !important;
          padding: 8px 15px !important;
          border-bottom: 2px solid #ff9900 !important;
      }
      .book-demo-strip span {
          color: #f8fafc !important;
          font-weight: 700 !important;
          letter-spacing: 0.5px !important;
      }
      .book-demo-strip button {
          background: linear-gradient(135deg, #ff9900 0%, #ff5500 100%) !important;
          color: #ffffff !important;
          font-weight: 800 !important;
          border-radius: 25px !important;
          padding: 7px 20px !important;
          box-shadow: 0 4px 15px rgba(255, 153, 0, 0.4) !important;
          transition: all 0.3s ease !important;
      }
      .book-demo-strip button:hover {
          transform: scale(1.05) !important;
          box-shadow: 0 6px 20px rgba(255, 153, 0, 0.6) !important;
      }
      @media (max-width: 576px) {
          .book-demo-strip span {
              font-size: 0.8rem !important;
          }
          .book-demo-strip button {
              padding: 5px 12px !important;
              font-size: 0.75rem !important;
          }
      }

      .navbar-toggler {
          background: rgba(255, 255, 255, 0.1) !important;
          border: 1px solid rgba(255, 255, 255, 0.2) !important;
          color: #ffffff !important;
          padding: 8px 12px !important;
          border-radius: 8px !important;
      }
      .navbar-toggler i {
          color: #ff9900 !important;
          font-size: 1.25rem !important;
      }
      </style>
   </head>
   <body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

    <!-- sticky wrapper start -->
    <div class="sticky-header-wrapper">
     <!-- Book Demo Top Strip -->
     <div class="book-demo-strip d-flex justify-content-between align-items-center">
         <span>Experience AI Retail ERP</span>
         <button type="button" data-bs-toggle="modal" data-bs-target="#trialModal">
             <i class="fas fa-calendar-check me-2"></i>BOOK A DEMO
         </button>
     </div>
    <!-- header start  -->
    <header style="position: relative; z-index: 20000;">
      <div class="container">
          <div class="row navbarContainer ">
              <div class="col-md-12">
                <div class="nav-wrap">
                  <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; display: flex; align-items: center;">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="AutomateX.ai Logo" style="height: 50px; width: auto;" />
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

    // Desktop Navbar Dropdown Buffer (300ms grace period)
    document.addEventListener('DOMContentLoaded', function() {
        if (window.innerWidth >= 992) {
            document.querySelectorAll('.navbar-nav .nav-item').forEach(function(item) {
                const dropdownMenu = item.querySelector('.sub-menu, .mega-menu');
                if (!dropdownMenu) return;

                let leaveTimer;

                function keepOpen() {
                    clearTimeout(leaveTimer);
                    dropdownMenu.style.display = 'block';
                    dropdownMenu.style.opacity = '1';
                    dropdownMenu.style.visibility = 'visible';
                    dropdownMenu.style.pointerEvents = 'auto';
                }

                function closeWithDelay() {
                    leaveTimer = setTimeout(function() {
                        dropdownMenu.style.opacity = '0';
                        dropdownMenu.style.visibility = 'hidden';
                        dropdownMenu.style.pointerEvents = 'none';
                        dropdownMenu.style.display = '';
                    }, 300); // 300ms grace period keeps menu open while cursor moves
                }

                item.addEventListener('mouseenter', keepOpen);
                item.addEventListener('mouseleave', closeWithDelay);
                dropdownMenu.addEventListener('mouseenter', keepOpen);
                dropdownMenu.addEventListener('mouseleave', closeWithDelay);
            });
        }
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
