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

  <!-- Trial Modal -->
  <div class="modal fade" id="trialModal" tabindex="-1" aria-hidden="true" data-bs-focus="false">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-0">
              <div class="close-modal-custom" data-bs-dismiss="modal">
                  <i class="bi bi-x"></i>
              </div>
              <div class="modal-body">
                  <div class="trial-flex">
                      <!-- Left Side: Banner (Visible on Desktop) -->
                      <div class="trial-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/free_trial_banner_1778579466613.png');">
                          <div class="trial-banner-content">
                              <h2 class="mb-2">Scale Your Success</h2>
                              <p class="mb-0 small">Join the future of retail with Automatex.ai.</p>
                          </div>
                      </div>

                      <!-- Right Side: Form -->
                      <div class="trial-form-side">
                          <div class="text-center text-md-start">
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
                                  <textarea class="form-control" name="message" rows="2" placeholder="Brief requirements..." style="border: 1px solid #ddd; border-radius: 8px; font-size: 0.8rem;"></textarea>
                              </div>

                              <button type="submit" class="trial-btn" id="trialSubmitBtn">Get Free Trial Now</button>

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
      const trialModal = new bootstrap.Modal(trialModalEl);
      const dontShowCheckbox = document.getElementById('dontShowTrial');
      const trialForm = document.getElementById('trialForm');
      const msgArea = document.getElementById('trialMessageArea');
      
      let popupCount = parseInt(sessionStorage.getItem('trial_popup_count')) || 0;
      const maxPopups = 2;
      let isPermanentlyDismissed = false;
      let timerId = null;
      let startTime = null;
      let remainingTime = 0;

      function shouldShowModal() {
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
              if (!document.querySelector('.modal.show') && !isPermanentlyDismissed) {
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
                  if (!document.querySelector('.modal.show') && !isPermanentlyDismissed) {
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
          const delay = (popupCount === 0) ? 3000 : 6000;
          startTimer(delay);
      }

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
                  msgArea.innerHTML = '<div class="alert alert-success">Thank you! Your trial request has been submitted successfully.</div>';
                  localStorage.setItem('trial_modal_dismissed_v2_at', Date.now());
                  isPermanentlyDismissed = true;
                  clearTimer();
                  setTimeout(() => {
                      trialModal.hide();
                  }, 2000);
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
          if (dontShowCheckbox && dontShowCheckbox.checked) {
              localStorage.setItem('trial_modal_dismissed_v2_at', Date.now());
              isPermanentlyDismissed = true;
              clearTimer();
          }
      });

      trialModalEl.addEventListener('hidden.bs.modal', function () {
          if (!isPermanentlyDismissed) {
              scheduleNext();
          }
      });
  });
  </script>

  <!-- Mobile Accordion Footer Toggle Script -->
  <script>
  jQuery(document).ready(function($) {
      if ($(window).width() < 768) {
          $('.footer-widget h4').css('cursor', 'pointer').click(function() {
              $(this).parent('.footer-widget').toggleClass('active');
          });
      }
  });
  </script>

  <?php wp_footer(); ?>
 </body>
</html>
