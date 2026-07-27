  <!--  footer -->
  <footer class="live-footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="footer-logo-section">
                    <figure> 
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; display: inline-block; background: #fff; padding: 10px 15px; border-radius: 8px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-automatex.png" alt="AutomateX.ai Logo" style="height: 45px; width: auto; display: block;" />
                      </a> 
                    </figure>
                    <span class="footer-tagline">Smart IT . Smarter Business</span>
                    <p class="mt-3">At Automatex.ai Solutions, we are passionate about transforming businesses through innovative, cloud-based software solutions. Founded with a vision to empower small and mid-sized enterprises, we specialize in delivering cutting-edge ERP, CRM, and automation systems.</p>
                    
                    <div class="footer-cities-serve mt-4">
                        <h5 class="cities-title">Cities We Serve:</h5>

                        <div class="cities-links-container" id="footerCitiesList">
                            <?php 
                                // Query custom cities post type dynamically
                                $cities_query = new WP_Query( array(
                                    'post_type'      => 'cities',
                                    'posts_per_page' => -1,
                                    'orderby'        => 'title',
                                    'order'          => 'ASC'
                                ) );

                                if ( $cities_query->have_posts() ) {
                                    while ( $cities_query->have_posts() ) {
                                        $cities_query->the_post();
                                        echo '<a href="' . esc_url( get_permalink() ) . '" class="city-link">' . esc_html( get_the_title() ) . '</a>';
                                    }
                                    wp_reset_postdata();
                                } else {
                                    // Staging Fallback if CPT holds no posts yet
                                    $allCities = ["Mumbai", "Delhi", "Bengaluru", "Hyderabad", "Chennai", "Pune", "Ahmedabad", "Jaipur", "Surat", "Kolkata", "Noida", "Gurgaon", "Lucknow", "Indore", "Bhopal", "Nagpur", "Vadodara", "Nashik", "Coimbatore", "Kochi", "Visakhapatnam", "Vijayawada", "Chandigarh", "Ludhiana", "Ranchi", "Raipur", "Bhubaneswar", "Kanpur", "Agra", "Varanasi", "Meerut", "Faridabad", "Ghaziabad", "Jodhpur", "Udaipur", "Ajmer", "Kota", "Aurangabad", "Thane", "Mysuru", "Hubli", "Mangalore", "Trichy", "Madurai", "Salem", "Tiruppur", "Guwahati", "Dehradun", "Shimla", "Jammu", "Srinagar", "Amritsar", "Jalandhar", "Panipat", "Sonipat", "Dharwad", "Rajkot", "Jamnagar", "Gandhinagar", "Thrissur", "Kannur", "Warangal", "Nizamabad", "Karimnagar", "Belgaum", "Davanagere", "Tumakuru", "Anand", "Bhavnagar", "Junagadh", "Thiruvananthapuram"];
                                    
                                    foreach($allCities as $city) {
                                        $slug = sanitize_title($city);
                                        echo '<a href="' . esc_url( home_url( '/cities/' . $slug . '/' ) ) . '" class="city-link">' . esc_html( $city ) . '</a>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
              </div>
               <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                   <h4>Our Products</h4>
                   <ul class="footer-links">
                       <li><a href="<?php echo esc_url( home_url( '/pos/' ) ); ?>">POS</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/erp/' ) ); ?>">ERP</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/accounting/' ) ); ?>">Accounting</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/inventory/' ) ); ?>">Inventory</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/omnichannel/' ) ); ?>">Omnichannel</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/crm/' ) ); ?>">CRM</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/smart-retail/' ) ); ?>">Smart retail</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/lead-management/' ) ); ?>">Lead Management</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/payroll/' ) ); ?>">Payroll</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/education/' ) ); ?>">Education</a></li>
                     </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                   <h4>Useful Links</h4>
                   <ul class="footer-links">
                       <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About us</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/invoicing/' ) ); ?>">Invoicing</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/logistics/' ) ); ?>">Logistics</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact</a></li>
                     </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                   <h4>Service</h4>
                   <ul class="footer-links">
                       <li><a href="<?php echo esc_url( home_url( '/digital-marketing-services/' ) ); ?>">Digital Marketing Services</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/e-commerce-website-development/' ) ); ?>">Web Development</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/android-application/' ) ); ?>">Mobile App Development</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/modern-responsive-website-design/' ) ); ?>">Web Design</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/social-media-optimization/' ) ); ?>">Social Media Marketing</a></li>
                       <li><a href="<?php echo esc_url( home_url( '/custom-crm-solutions/' ) ); ?>">CRM Development</a></li>
                     </ul>
                </div>
              </div> 
              <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                   <h4>Contact Us</h4>
                   <ul class="footer-contact-links">
                      <li><a href="mailto:sales.Automatex.ai@Automatex.aicrm.in">sales.Automatex.ai@Automatex.aicrm.in</a></li>
                      <li><a href="tel:+917425016636">+91 7425016636</a></li>
                    </ul>
                    <div class="footer-address">
                        <p><strong>India (Noida Office):</strong><br>
                        Knowledge Park V, Sector 12, Greater Noida, Uttar Pradesh, 203207</p>
                        <p class="mt-3"><strong>India (Jaipur Office):</strong><br>
                        Akash Ganga, C-107, Keshav Nagar, Civil Lines, Jaipur – 302006, Rajasthan, India.</p>
                    </div>
                    <div class="footer-social-icons mt-4">
                       <ul>
                          <li> <a target="_blank" href="https://www.facebook.com/people/Automatex.ai/61554507884332/"> <i class="fa-brands fa-facebook-f"></i></a> </li>
                          <li> <a target="_blank" href="https://www.instagram.com/Automatex.ai/"> <i class="fa-brands fa-instagram"></i></a> </li>
                          <li> <a target="_blank" href="https://wa.me/917425016636"> <i class="fa-brands fa-whatsapp"></i></a> </li>
                          <li> <a target="_blank" href="https://www.linkedin.com/company/Automatex.ai-soft-solutions/"> <i class="fa-brands fa-linkedin-in"></i></a> </li>
                          <li> <a target="_blank" href="https://www.Automatex.ai.in/pos_bill/lead/inquiry_formIndiaMART.php"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social1.png" style="width: 20px;"> </a></li>
                          <li> <a target="_blank" href="https://www.Automatex.ai.in/pos_bill/lead/inquiry_formJustdial.php"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social2.png" style="width: 20px;"> </a></li>
                       </ul>
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="footer-copyright-bar">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <p>© 2026 Automatex.ai  All Rights Reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--  footer -->

<style>
  /* Prevent Modal Backdrop Dark Overlay Lock */
  .modal-backdrop {
      z-index: 999998 !important;
  }
  #trialModal {
      z-index: 999999 !important;
  }
  body:not(.modal-open) .modal-backdrop {
      display: none !important;
  }

  /* Trial Modal Premium Dark Glassmorphism Styling */
  #trialModal .modal-dialog {
      max-width: 820px;
      margin: 1.75rem auto;
  }
  #trialModal .modal-content {
      background: linear-gradient(145deg, #0d1527 0%, #070b19 100%) !important;
      border: 1px solid rgba(255, 255, 255, 0.15) !important;
      border-radius: 20px !important;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.7), 0 0 35px rgba(255, 153, 0, 0.15) !important;
      overflow: hidden;
      position: relative;
  }
  #trialModal .close-modal-custom {
      position: absolute;
      top: 15px;
      right: 15px;
      width: 38px;
      height: 38px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-size: 1.25rem;
      cursor: pointer;
      z-index: 10;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.15);
  }
  #trialModal .close-modal-custom:hover {
      background: #ff9900;
      color: #000000;
      transform: scale(1.1) rotate(90deg);
  }
  #trialModal .modal-body {
      padding: 0 !important;
  }
  .trial-flex {
      display: flex;
      flex-direction: column;
  }
  .trial-banner {
      background: linear-gradient(135deg, #0d1527 0%, #1e293b 50%, #060814 100%) !important;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 30px 25px;
      box-sizing: border-box;
  }
  .trial-banner::before {
      content: '';
      position: absolute;
      top: -50px; left: -50px;
      width: 150px; height: 150px;
      background: radial-gradient(circle, rgba(255, 153, 0, 0.25) 0%, rgba(0,0,0,0) 70%);
      pointer-events: none;
  }
  .trial-banner-content {
      position: relative;
      z-index: 2;
      color: #ffffff;
      width: 100%;
  }
  .trial-banner-content h2 {
      font-size: 1.65rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 8px;
  }
  .trial-form-side {
      flex: 1;
      padding: 30px 25px;
      color: #ffffff;
  }
  
  /* Desktop Layout: Full height left panel */
  @media (min-width: 768px) {
      .trial-flex {
          flex-direction: row;
          align-items: stretch;
      }
      .trial-banner {
          flex: 0 0 42%;
          width: 42%;
          border-right: 1px solid rgba(255, 255, 255, 0.12);
          padding: 40px 30px;
      }
      .trial-form-side {
          padding: 35px 30px;
      }
  }

  /* Mobile Layout: Centered upper section */
  @media (max-width: 767.98px) {
      .trial-banner {
          padding: 25px 20px;
          text-align: center;
          align-items: center;
          justify-content: center;
          border-bottom: 1px solid rgba(255, 255, 255, 0.12);
      }
      .trial-banner-content {
          text-align: center;
          display: flex;
          flex-direction: column;
          align-items: center;
      }
      .trial-banner-content ul {
          text-align: left;
          display: inline-block;
      }
      .trial-form-side {
          padding: 25px 20px;
      }
      .trial-form-side .text-center-mobile {
          text-align: center !important;
      }
  }

  .trial-badge {
      display: inline-block;
      padding: 4px 12px;
      background: linear-gradient(90deg, #ff9900 0%, #ff5500 100%);
      color: #ffffff;
      font-size: 0.75rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 20px;
      margin-bottom: 8px;
  }
  .trial-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: #ffffff !important;
      margin-bottom: 4px;
  }
  .trial-subtitle {
      color: #cbd5e1 !important;
      font-size: 0.92rem !important;
      font-weight: 500 !important;
      margin-bottom: 20px;
  }
  #trialForm .input-group {
      margin-bottom: 12px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
      border: 1px solid rgba(255, 255, 255, 0.12) !important;
      transition: all 0.3s ease;
  }
  #trialForm .input-group:focus-within {
      border-color: #ff9900 !important;
      box-shadow: 0 0 0 3px rgba(255, 153, 0, 0.25) !important;
  }
  #trialForm .input-group-text {
      background: rgba(255, 255, 255, 0.04) !important;
      border: none !important;
      color: #ff9900 !important;
      padding: 10px 14px;
      font-size: 0.95rem;
  }
  #trialForm .form-control,
  #trialForm .form-select {
      background: rgba(15, 23, 42, 0.6) !important;
      border: none !important;
      color: #f8fafc !important;
      font-size: 0.9rem !important;
      font-weight: 500 !important;
      padding: 10px 14px !important;
      transition: all 0.3s ease;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
  }
  #trialForm .form-control::placeholder {
      color: #64748b !important;
      font-weight: 500 !important;
      opacity: 1 !important;
  }
  #trialForm .form-select {
      color: #64748b !important;
      font-weight: 500 !important;
  }
  #trialForm .form-select option {
      background: #0f172a;
      color: #f8fafc;
      font-weight: 500;
  }
  #trialForm .form-control:focus,
  #trialForm .form-select:focus {
      background: rgba(15, 23, 42, 0.8) !important;
      color: #ffffff !important;
      box-shadow: none !important;
      outline: none !important;
  }
  #trialForm textarea.form-control {
      border-radius: 10px !important;
      margin-bottom: 15px;
      border: 1px solid rgba(255, 255, 255, 0.12) !important;
      background: rgba(15, 23, 42, 0.6) !important;
      color: #f8fafc !important;
      font-weight: 500 !important;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      transition: all 0.3s ease;
  }
  #trialForm textarea.form-control:focus {
      border-color: #ff9900 !important;
      background: rgba(15, 23, 42, 0.8) !important;
      box-shadow: 0 0 0 3px rgba(255, 153, 0, 0.25) !important;
      color: #ffffff !important;
      outline: none !important;
  }
  .trial-btn {
      width: 100%;
      background: linear-gradient(135deg, #ff9900 0%, #e67e22 100%) !important;
      color: #ffffff !important;
      font-weight: 800 !important;
      font-size: 1rem !important;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding: 14px 20px !important;
      border: none !important;
      border-radius: 10px !important;
      box-shadow: 0 6px 20px rgba(255, 153, 0, 0.4) !important;
      transition: all 0.3s ease !important;
      cursor: pointer;
      margin-top: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
  }
  .trial-btn:hover {
      background: linear-gradient(135deg, #ffaa1a 0%, #f39c12 100%) !important;
      transform: translateY(-2deg);
      box-shadow: 0 10px 25px rgba(255, 153, 0, 0.55) !important;
  }
  .trial-btn:focus {
      outline: none !important;
      box-shadow: 0 0 0 3px rgba(255, 153, 0, 0.4) !important;
  }
  .dont-show-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin-top: 14px;
      font-size: 0.85rem;
      color: #e2e8f0;
      font-weight: 600;
  }
  .dont-show-box input[type="checkbox"] {
      accent-color: #ff9900;
      width: 16px;
      height: 16px;
      cursor: pointer;
  }
  .dont-show-box label {
      cursor: pointer;
      margin-bottom: 0;
  }

  /* Premium Success Card */
  .trial-success-card {
      text-align: center;
      padding: 40px 20px;
      animation: fadeInScale 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  .success-icon-wrap {
      font-size: 4.5rem;
      color: #22c55e;
      margin-bottom: 20px;
      display: inline-flex;
      animation: pulseGlow 2s infinite ease-in-out;
  }
  .trial-success-card h4 {
      font-size: 1.5rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 12px;
  }
  .trial-success-card p {
      color: #cbd5e1;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-bottom: 0;
  }
  @keyframes fadeInScale {
      0% {
          opacity: 0;
          transform: scale(0.9);
      }
      100% {
          opacity: 1;
          transform: scale(1);
      }
  }
  @keyframes pulseGlow {
      0%, 100% {
          transform: scale(1);
          filter: drop-shadow(0 0 5px rgba(34, 197, 94, 0.25));
      }
      50% {
          transform: scale(1.05);
          filter: drop-shadow(0 0 15px rgba(34, 197, 94, 0.65));
      }
  }
</style>

  <!-- Trial Modal -->
  <div class="modal fade" id="trialModal" tabindex="-1" aria-hidden="true" data-bs-focus="false">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-0">
              <div class="close-modal-custom" data-bs-dismiss="modal" data-dismiss="modal">
                  <i class="fas fa-times"></i>
              </div>
              <div class="modal-body">
                  <div class="trial-flex">
                      <!-- Left Side: Banner (Visible on Desktop) -->
                      <div class="trial-banner">
                          <div class="trial-banner-content">
                              <div class="mb-3">
                                  <span style="background: #ffffff; padding: 6px 12px; border-radius: 8px; display: inline-block;">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-automatex.png" alt="AutomateX.ai" style="height: 28px; width: auto;">
                                  </span>
                              </div>
                              <h2>Scale Your <span style="color: #ff9900;">Success</span></h2>
                              <p style="color: #cbd5e1; font-size: 0.9rem; margin-bottom: 20px;">Join the future of retail & manufacturing with Automatex.ai ERP.</p>
                              
                              <ul class="list-unstyled mb-0" style="font-size: 0.85rem; color: #f1f5f9;">
                                  <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> AI-Powered POS & Billing</li>
                                  <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Real-time Stock Inventory</li>
                                  <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> GST Accounting & CRM</li>
                                  <li class="mb-0"><i class="fas fa-check-circle text-warning me-2"></i> 24/7 Dedicated Support</li>
                              </ul>
                          </div>
                      </div>

                      <!-- Right Side: Form -->
                      <div class="trial-form-side">
                          <div class="text-center text-md-start">
                              <span class="trial-badge"><i class="fas fa-fire me-1"></i> Exclusive Access</span>
                              <h3 class="trial-title">Special Offer - Free Trial</h3>
                              <p class="trial-subtitle">Experience AI-driven ERP today.</p>
                          </div>

                          <div id="trialMessageArea"></div>

                          <form id="trialForm" method="POST">
                              <div class="row g-2">
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-user small"></i></span>
                                          <input type="text" class="form-control" name="name" placeholder="Name*" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-envelope small"></i></span>
                                          <input type="email" class="form-control" name="email" placeholder="Email*" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-building small"></i></span>
                                          <input type="text" class="form-control" name="company" placeholder="Company*" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-industry small"></i></span>
                                          <select name="industry" class="form-select" required>
                                              <option value="">Industry*</option>
                                              <option value="Manufacturing">Manufacturing</option>
                                              <option value="Trading">Trading</option>
                                              <option value="Retail">Retail</option>
                                              <option value="Services">Services</option>
                                              <option value="Any other">Any other</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-concierge-bell small"></i></span>
                                          <input type="text" class="form-control" name="firm" placeholder="Business*" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-phone small"></i></span>
                                          <input type="text" class="form-control" name="contact" placeholder="Contact*" required>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="fas fa-map-marker-alt small"></i></span>
                                          <input type="text" class="form-control" name="location" placeholder="Location (City/State)*" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="mb-2">
                                  <textarea class="form-control" name="message" rows="2" placeholder="Brief requirements..."></textarea>
                              </div>

                              <button type="submit" class="trial-btn" id="trialSubmitBtn"><i class="fas fa-paper-plane me-1"></i> Get Free Trial Now</button>

                              <div class="dont-show-box">
                                  <input type="checkbox" id="dontShowTrial">
                                  <label for="dontShowTrial">Don't show this for 7 days</label>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
      const trialModalEl = document.getElementById('trialModal');
      if (!trialModalEl) return;

      const trialModal = bootstrap.Modal.getOrCreateInstance(trialModalEl);
      const dontShowCheckbox = document.getElementById('dontShowTrial');
      const trialForm = document.getElementById('trialForm');
      const msgArea = document.getElementById('trialMessageArea');
      
      let popupCount = parseInt(sessionStorage.getItem('trial_popup_count')) || 0;
      const maxPopups = 1; // Only show automatically once per browsing session to prevent annoying lock issues
      let isPermanentlyDismissed = false;
      let timerId = null;
      let startTime = null;
      let remainingTime = 0;

      function shouldShowModal() {
          // Do not show automatically if dismissed in this session
          if (sessionStorage.getItem('trial_modal_dismissed_session') === 'true') {
              return false;
          }
          const lastDismissed = localStorage.getItem('trial_modal_dismissed_v2_at');
          if (!lastDismissed) return true;
          const sevenDaysInMs = 7 * 24 * 60 * 60 * 1000;
          return (Date.now() - parseInt(lastDismissed)) > sevenDaysInMs;
      }

      function startTimer(delay) {
          clearTimer();
          startTime = Date.now();
          remainingTime = delay;
          
          timerId = setTimeout(() => {
              if (!document.querySelector('.modal.show') && !isPermanentlyDismissed && shouldShowModal()) {
                  trialModal.show();
                  popupCount++;
                  sessionStorage.setItem('trial_popup_count', popupCount);
              }
              timerId = null;
          }, remainingTime);
      }

      function pauseTimer() {
          if (timerId) {
              clearTimeout(timerId);
              timerId = null;
              remainingTime -= (Date.now() - startTime);
              if (remainingTime < 0) remainingTime = 0;
          }
      }

      function resumeTimer() {
          if (remainingTime > 0 && !timerId) {
              startTime = Date.now();
              timerId = setTimeout(() => {
                  if (!document.querySelector('.modal.show') && !isPermanentlyDismissed && shouldShowModal()) {
                      trialModal.show();
                      popupCount++;
                      sessionStorage.setItem('trial_popup_count', popupCount);
                  }
                  timerId = null;
              }, remainingTime);
          }
      }

      function clearTimer() {
          if (timerId) {
              clearTimeout(timerId);
              timerId = null;
          }
          remainingTime = 0;
      }

      function scheduleNext() {
          if (popupCount >= maxPopups || isPermanentlyDismissed || !shouldShowModal()) return;
          const delay = 3000; // Trigger after 3 seconds on page load
          startTimer(delay);
      }

      // Safely auto-show popup
      if (shouldShowModal()) {
          scheduleNext();
          if (document.hidden) {
              pauseTimer();
          }
      }

      document.addEventListener('visibilitychange', function() {
          if (document.hidden) {
              pauseTimer();
          } else {
              resumeTimer();
          }
      });

      // Intercept submit and handle via AJAX (WordPress Lead Bridge Connection)
      trialForm.addEventListener('submit', function(e) {
          e.preventDefault();
          const submitBtn = document.getElementById('trialSubmitBtn');
          submitBtn.disabled = true;
          submitBtn.innerText = "Submitting...";

          const formData = new FormData(trialForm);
          // Action mapping in custom plugin
          formData.append('action', 'automatex_submit_lead');

          fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
              method: 'POST',
              body: formData
          })
          .then(r => r.json())
          .then(res => {
              submitBtn.disabled = false;
              submitBtn.innerText = "Get Free Trial Now";

               if (res.success) {
                   trialForm.style.display = 'none';
                   const formSide = document.querySelector('.trial-form-side');
                   if (formSide) {
                       const title = formSide.querySelector('.trial-title');
                       const subtitle = formSide.querySelector('.trial-subtitle');
                       const badge = formSide.querySelector('.trial-badge');
                       if (title) title.style.display = 'none';
                       if (subtitle) subtitle.style.display = 'none';
                       if (badge) badge.style.display = 'none';
                   }
                   msgArea.innerHTML = `
                       <div class="trial-success-card">
                           <div class="success-icon-wrap">
                               <i class="fas fa-check-circle"></i>
                           </div>
                           <h4>Request Submitted!</h4>
                           <p>Thank you! Your trial request has been received. We will get in touch with you shortly.</p>
                       </div>
                   `;
                   localStorage.setItem('trial_modal_dismissed_v2_at', Date.now());
                   isPermanentlyDismissed = true;
                   clearTimer();
                   setTimeout(() => {
                       trialModal.hide();
                   }, 3000);
               } else {
                  msgArea.innerHTML = '<div class="alert alert-danger">Error: ' + res.data.message + '</div>';
              }
          })
          .catch(err => {
              submitBtn.disabled = false;
              submitBtn.innerText = "Get Free Trial Now";
              msgArea.innerHTML = '<div class="alert alert-danger">There was an issue sending the request. Please try again.</div>';
          });
      });

      trialModalEl.addEventListener('hide.bs.modal', function () {
          // Mark as dismissed for this session so they aren't bothered on subsequent pages
          sessionStorage.setItem('trial_modal_dismissed_session', 'true');
          
          if (dontShowCheckbox && dontShowCheckbox.checked) {
              localStorage.setItem('trial_modal_dismissed_v2_at', Date.now());
              isPermanentlyDismissed = true;
          }
          clearTimer();
      });

       trialModalEl.addEventListener('hidden.bs.modal', function () {
           // Explicit cleanup of overlays & locks to completely prevent mobile black screen bugs
           document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
           document.body.classList.remove('modal-open');
           document.body.style.overflow = '';
           document.body.style.paddingRight = '';

           // Restore form visibility and reset fields for subsequent manual opens
           trialForm.reset();
           trialForm.style.display = 'flex';
           msgArea.innerHTML = '';
           const formSide = document.querySelector('.trial-form-side');
           if (formSide) {
               const title = formSide.querySelector('.trial-title');
               const subtitle = formSide.querySelector('.trial-subtitle');
               const badge = formSide.querySelector('.trial-badge');
               if (title) title.style.display = '';
               if (subtitle) subtitle.style.display = '';
               if (badge) badge.style.display = '';
           }
       });
  });
  </script>

  <!-- Mobile Accordion Navbar & Footer Toggle Scripts -->
  <script>
  jQuery(document).ready(function($) {
      if ($(window).width() < 992) {
          // Mobile Footer Accordion
          $('.footer-widget h4').css('cursor', 'pointer').click(function() {
              $(this).parent('.footer-widget').toggleClass('active');
          });

          // Mobile Header Navigation Accordion (Services, Products, Retail, etc.)
          $('.navbar-nav .nav-item.dropdown > a').on('click', function(e) {
              e.preventDefault();
              e.stopPropagation();
              var $parent = $(this).parent('.dropdown');
              $('.navbar-nav .nav-item.dropdown').not($parent).removeClass('show');
              $parent.toggleClass('show');
          });
      }
  });
  </script>

  <?php wp_footer(); ?>
 </body>
</html>
