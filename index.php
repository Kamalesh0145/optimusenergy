<?php include 'includes/header.php'; ?>

<!-- Carousel Start -->
<div class="carousel">
  <div class="container-fluid">
    <div class="owl-carousel">

      <!-- Slide 1 -->
      <div class="carousel-item">
        <div class="carousel-img">
          <img src="img/carousel-1.jpg" alt="Smart Solutions">
        </div>
        <div class="carousel-text">
          <h1>Smart Energy Solutions</h1>
          <p>
            Optimize your energy consumption with our cutting-edge management systems designed for businesses and industries.
          </p>
          <div class="carousel-btn">
            <a class="btn" href="#services"><i class="fa fa-link"></i>Get Started</a>
            <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
              <i class="fa fa-play"></i>Watch Video
            </a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-img">
          <img src="img/carousel-2.jpg" alt="Consulting Services">
        </div>
        <div class="carousel-text">
          <h1>Expert Consulting Services</h1>
          <p>
            Our experienced consultants guide your business to maximize efficiency, reduce costs, and grow sustainably.
          </p>
          <div class="carousel-btn">
            <a class="btn" href="#services"><i class="fa fa-link"></i>Get Started</a>
            <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
              <i class="fa fa-play"></i>Watch Video
            </a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-img">
          <img src="img/carousel-3.jpg" alt="Business Growth">
        </div>
        <div class="carousel-text">
          <h1>Drive Business Growth</h1>
          <p>
            Leverage innovative strategies and smart technologies to scale your business and achieve measurable results.
          </p>
          <div class="carousel-btn">
            <a class="btn" href="#services"><i class="fa fa-link"></i>Get Started</a>
            <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
              <i class="fa fa-play"></i>Watch Video
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Carousel End -->

<!-- Video Modal Start-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal End -->


<!-- Fact Start -->
<div class="fact">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-3 col-md-6">
        <div class="fact-item text-center">
          <img src="img/icon-4.png" alt="Icon">
          <h2>Expert Engineers</h2>
          <p>
            Our team consists of skilled engineers in energy management, predictive maintenance, and industrial automation.
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="fact-item text-center">
          <img src="img/icon-1.png" alt="Icon">
          <h2>Advanced Solutions</h2>
          <p>We provide cutting-edge solutions such as IoT integration, smart grid systems, and renewable energy optimization.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="fact-item text-center">
          <img src="img/icon-8.png" alt="Icon">
          <h2>Proven Results</h2>
          <p>Our projects consistently improve energy efficiency, reduce downtime, and increase operational productivity.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="fact-item text-center">
          <img src="img/icon-6.png" alt="Icon">
          <h2>Client Satisfaction</h2>
          <p>We prioritize client goals and deliver solutions that ensure reliability, safety, and measurable success.</p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Fact End -->




<!-- About Start -->
<div class="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="about-img">
          <div class="about-img-1">
            <img src="img/about-2.jpg" alt="Image">
          </div>
          <div class="about-img-2">
            <img src="img/about-1.jpg" alt="Image">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="section-header">
          <p>Our Expertise</p>
          <h2>25 Years of Energy Solutions</h2>

        </div>
        <div class="about-text">
          <p>
            With over 25 years of experience, we specialize in delivering advanced Energy Management Systems (EMS) and industrial solutions that optimize energy performance, operational efficiency, and sustainability. Our services span power quality analysis, energy audits, predictive maintenance, smart grid solutions, and industrial automation, tailored to meet the unique needs of diverse commercial and industrial clients.
          </p>

          <!-- Hidden paragraph -->
          <p id="moreText" style="display: none;">
            Leveraging real-time data, IoT integration, and intelligent analytics, our team provides end-to-end solutions from system design and implementation to monitoring and continuous optimization. We help businesses reduce energy costs, minimize downtime, enhance equipment life, and achieve regulatory compliance. Over the years, we have empowered organizations to transform their energy infrastructure, adopt renewable solutions, and move towards a greener, more sustainable future.
          </p>

          <a class="btn" href="javascript:void(0);" id="learnMoreBtn" onclick="toggleText()">Learn More</a>
        </div>
      </div>

      <script>
        function toggleText() {
          const moreText = document.getElementById("moreText");
          const btn = document.getElementById("learnMoreBtn");

          if (moreText.style.display === "none") {
            moreText.style.display = "block"; // Show paragraph
            btn.textContent = "Read Less"; // Change button text
          } else {
            moreText.style.display = "none"; // Hide paragraph
            btn.textContent = "Learn More"; // Change back
          }
        }
      </script>

    </div>
  </div>
</div>
<!-- About End -->

<div class="service">
  <div class="container">
    <div class="section-header">
      <p>Energy Solutions</p>
      <h2>Our Expert Services</h2>

    </div>
     <!-- Service Start -->
    <div class="row">
      <!-- 1. Harmonics Study -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-1.png" alt="Icon">
          <h3><a href="service.php?id=1">HARMONICS ANALYSIS AND STUDY</a></h3> <!-- 22 letters -->
          Analyze and mitigate power quality issues caused by harmonic distortions.
          <span class="more-text" style="display: none;">
            We provide detailed reports, corrective recommendations, and implementation strategies to ensure stable and efficient electrical systems.
          </span>
          </p>
          <a href="service.php?id=1" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 2. Energy Audit -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-2.png" alt="Icon">
          <h3><a href="service.php?id=2">ENERGY AUDIT AND ASSESSMENT</a></h3> <!-- 23 letters -->
          <p>
            Evaluate energy consumption to identify inefficiencies across your facilities.
            <span class="more-text" style="display: none;">
              We provide audit reports, actionable recommendations, and implementation strategies to optimize energy usage and reduce operational costs.
            </span>
          </p>
          <a href="service.php?id=2" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 3. Motor Vibration Analysis -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-3.png" alt="Icon">
          <h3><a href="service.php?id=3">MOTOR VIBRATION ANALYSIS SYSTEM</a></h3> <!-- 24 letters -->
          <p>
            Detect mechanical issues early to prevent breakdowns and extend equipment life.
            <span class="more-text" style="display: none;">
              Using advanced sensors and data analysis, we provide actionable insights to optimize motor performance and reduce maintenance costs.
            </span>
          </p>
          <a href="service.php?id=3" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 4. Energy Management Systems -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-4.png" alt="Icon">
          <h3><a href="service.php?id=4">ENERGY MANAGEMENT SYSTEM STUDY</a></h3> <!-- 23 letters -->
          <p>
            Monitor and optimize energy consumption efficiently.
            <span class="more-text" style="display: none;">
              From real-time tracking to automated reporting, we ensure sustainable energy management and cost savings for your organization.
            </span>
          </p>
          <a href="service.php?id=4" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 5. IoT Solutions -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-5.png" alt="Icon">
          <h3><a href="service.php?id=5">IoT DEVICE CONNECTIVITY SYSTEM</a></h3> <!-- 23 letters -->
          <p>
            Connect devices for smarter operations.
            <span class="more-text" style="display: none;">
              By integrating sensors, analytics, and automation, we enhance operational efficiency, safety, and predictive maintenance capabilities.
            </span>
          </p>
          <a href="service.php?id=5" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 6. Power Quality Solutions -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-6.png" alt="Icon">
          <h3><a href="service.php?id=6">POWER QUALITY CONTROL SYSTEM</a></h3> <!-- 23 letters -->
          <p>
            Ensure stable and reliable power for your business operations.
            <span class="more-text" style="display: none;">
              We analyze electrical systems, identify disturbances, and implement corrective measures to prevent downtime and equipment damage.
            </span>
          </p>
          <a href="service.php?id=6" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 7. Smart Grid Solutions -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-7.png" alt="Icon">
          <h3><a href="service.php?id=7">SMART GRID MONITORING SYSTEM</a></h3> <!-- 23 letters -->
          <p>
            Modernize your electrical network for better reliability and efficiency.
            <span class="more-text" style="display: none;">
              We integrate advanced monitoring, automated controls, and predictive analytics to optimize energy distribution and reduce outages.
            </span>
          </p>
          <a href="service.php?id=7" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 8. Renewable Energy Integration -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-8.png" alt="Icon">
          <h3><a href="service.php?id=8">RENEWABLE ENERGY INTEGRATION PLAN</a></h3> <!-- 24 letters -->
          <p>
            Adopt solar, wind, and other green energy sources effectively.
            <span class="more-text" style="display: none;">
              We provide system design, feasibility studies, and implementation strategies to maximize energy savings and sustainability.
            </span>
          </p>
          <a href="service.php?id=8" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 9. Energy Storage Solutions -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-9.png" alt="Icon">
          <h3><a href="service.php?id=9">ENERGY STORAGE CONTROL SYSTEM</a></h3> <!-- 23 letters -->
          <p>
            Efficiently store all surplus electrical energy safely and reliably for long-term future use.

            <span class="more-text" style="display: none;">
              We design and implement battery storage systems to optimize energy consumption, reduce costs, and improve grid reliability.
            </span>
          </p>
          <a href="service.php?id=9" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 10. Predictive Maintenance -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-10.png" alt="Icon">
          <h3><a href="service.php?id=10">PREDICTIVE MAINTENANCE CONTROL PLAN</a></h3> <!-- 24 letters -->
          <p>
            Prevent downtime by identifying equipment issues before they occur.
            <span class="more-text" style="display: none;">
              Using advanced sensors, analytics, and AI, we predict equipment failures and provide actionable insights to optimize operations.
            </span>
          </p>
          <a href="service.php?id=10" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 11. Industrial Automation -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-1.png" alt="Icon">
          <h3><a href="service.php?id=11">INDUSTRIAL AUTOMATION CONTROL PLAN</a></h3> <!-- 24 letters -->
          <p>
            Streamline manufacturing and operational processes for higher productivity.
            <span class="more-text" style="display: none;">
              We integrate IoT, robotics, and control systems to reduce errors, improve efficiency, and enhance operational performance.
            </span>
          </p>
          <a href="service.php?id=11" class="read-more-btn">Read More</a>
        </div>
      </div>

      <!-- 12. Energy Compliance & Regulations -->
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <img src="img/icon-2.png" alt="Icon">
          <h3><a href="service.php?id=12">ENERGY COMPLIANCE REGULATION PLAN</a></h3> <!-- 24 letters -->
          <p>
            Ensure all business operations meet strict local and international energy standards.
            <span class="more-text" style="display: none;">
              We provide audits, certification assistance, and regulatory guidance to keep your business compliant, efficient, and future-ready.
            </span>
          </p>
          <a href="service.php?id=12" class="read-more-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->
<!-- Feature Start -->
<div class="feature">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-6">
        <div class="feature-img">
          <img src="img/business-man.png" alt="Image">
        </div>
      </div>
      <div class="col-md-6">
        <div class="section-header">
          <p>Our Expertise</p>
          <h2>Why Choose Our Energy Solutions?</h2>
        </div>
        <p>
          With over two decades of proven experience, we are committed to delivering innovative, reliable, and results-driven solutions.
          Our team combines technical expertise with strategic insight to help businesses achieve sustainable growth and operational excellence.
          We focus on quality, transparency, and customer satisfaction in every project we undertake, ensuring long-term success and trusted partnerships.
          <br><br>
          • Our experts continuously adapt to the latest technologies and energy standards to deliver future-ready solutions. <br>
          • We design tailor-made strategies to optimize energy efficiency and reduce operational costs. <br>
          • Every project undergoes rigorous quality checks to ensure maximum performance and reliability. <br>
          • We emphasize eco-friendly and sustainable practices to minimize environmental impact. <br>
          • Our client-focused service ensures seamless communication and satisfaction. <br>
          • We foster long-term partnerships built on trust and measurable results. <br>
        </p>

        <!-- <div class="row counters">
          <div class="col-6">
            <i class="fa fa-user"></i>
            <div class="counters-text">
              <h2 data-toggle="counter-up">100</h2>
              <p>Our Staffs</p>
            </div>
          </div>
          <div class="col-6">
            <i class="fa fa-users"></i>
            <div class="counters-text">
              <h2 data-toggle="counter-up">200</h2>
              <p>Our Clients</p>
            </div>
          </div>
          <div class="col-6">
            <i class="fa fa-check"></i>
            <div class="counters-text">
              <h2 data-toggle="counter-up">300</h2>
              <p>Completed Projects</p>
            </div>
          </div>
          <div class="col-6">
            <i class="fa fa-running"></i>
            <div class="counters-text">
              <h2 data-toggle="counter-up">400</h2>
              <p>Running Projects</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- Feature End -->
<!-- ===================== Clients Logo Section ===================== -->
<section class="clients_area p_120">
  <div class="container">
    <div class="main_title text-center">
      <h2>Our Trusted Partners</h2>
      <p>We are proud to collaborate with industry-leading organizations worldwide.</p>
    </div>
    <div class="logo-slider">
      <div class="logo-slide-track">
        <div class="logo-slide"><img src="img/Customerlogo1.jpg" alt="Logo 1"></div>
        <div class="logo-slide"><img src="img/Customerlogo2.jpg" alt="Logo 2"></div>
        <div class="logo-slide"><img src="img/Customerlogo3.jpg" alt="Logo 3"></div>
        <div class="logo-slide"><img src="img/Customerlogo4.jpg" alt="Logo 4"></div>
        <div class="logo-slide"><img src="img/Customerlogo5.jpg" alt="Logo 5"></div>
        <div class="logo-slide"><img src="img/Customerlogo6.jpg" alt="Logo 6"></div>

      </div>
    </div>
  </div>
</section>


<!-- Testimonial Start -->
<div class="testimonial">
  <div class="container">
    <div class="section-header">
      <p>Client Testimonials</p>
      <h2>Trusted by Businesses for Reliable Energy Solutions</h2>

    </div>

    <div class="owl-carousel testimonials-carousel">

      <div class="testimonial-item">
        <img src="img/testimonial-1.jpg" alt="Image">
        <p>
          “The team delivered exactly what we needed — on time and with excellent quality. Their attention to detail and commitment to customer satisfaction are truly impressive.”
        </p>
        <h2>Rajesh Kumar</h2>
        <h3>Managing Director, RK Solutions</h3>
      </div>

      <div class="testimonial-item">
        <img src="img/testimonial-2.jpg" alt="Image">
        <p>
          “Fantastic experience from start to finish! The project team was highly professional and kept us informed throughout the entire process. Highly recommended.”
        </p>
        <h2>Priya Sharma</h2>
        <h3>Marketing Head, InnovateX</h3>
      </div>

      <div class="testimonial-item">
        <img src="img/testimonial-3.jpg" alt="Image">
        <p>
          “We’@Wve seen a significant improvement in performance and efficiency since implementing their solutions. The support team is always responsive and helpful.”
        </p>
        <h2>Arun Patel</h2>
        <h3>Operations Manager, NexaCorp</h3>
      </div>

      <div class="testimonial-item">
        <img src="img/testimonial-4.jpg" alt="Image">
        <p>
          “They truly understand our business needs and deliver tailored solutions every time. Their professionalism and dedication are second to none.”
        </p>
        <h2>Sneha Reddy</h2>
        <h3>CEO, BrightWave Technologies</h3>
      </div>

    </div>
  </div>
</div>

<!-- Testimonial End -->


<!-- Team Start -->
<div class="team">
  <div class="container">
    <div class="section-header">
      <p>Our Experts</p>
      <h2>Experienced Energy & Consulting Professionals</h2>

    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="team-item">
          <div class="team-img">
            <img src="img/team-1.jpg" alt="Team Image">
          </div>
          <div class="team-text">
            <h2>Donald John</h2>
            <p>Founder & CEO</p>
            <div class="team-social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-item">
          <div class="team-img">
            <img src="img/team-2.jpg" alt="Team Image">
          </div>
          <div class="team-text">
            <h2>Adam Phillips</h2>
            <p>Chef Executive</p>
            <div class="team-social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-item">
          <div class="team-img">
            <img src="img/team-3.jpg" alt="Team Image">
          </div>
          <div class="team-text">
            <h2>Thomas Olsen</h2>
            <p>Chef Advisor</p>
            <div class="team-social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-item">
          <div class="team-img">
            <img src="img/team-4.jpg" alt="Team Image">
          </div>
          <div class="team-text">
            <h2>James Alien</h2>
            <p>Advisor</p>
            <div class="team-social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div class="contact">
  <div class="container">
    <div class="section-header">
      <p>Get In Touch</p>
      <h2>Get In Touch For Any Query</h2>
    </div>
    <div class="row align-items-center">
      <div class="col-md-5">
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fa fa-map-marker-alt"></i>
          </div>
          <div class="contact-text">
            <h3>Our Head Office</h3>
            <p> 12/94.Sathiyamoorthy Nagar<br>
              Thomas Cross Road<br>
              Opp.Central Warehouse<br>
              Ellis Nagar<br>
              Maduari-625016</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fa fa-phone-alt"></i>
          </div>
          <div class="contact-text">
            <h3>Call for Help</h3>
            <p>+91 99943 44816</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="contact-text">
            <h3>Email for Information</h3>
            <p>admin@optimusenergy.in
              technical@optimusenergy.in</p>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="contact-form">
          <div id="success"></div>
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div>
              <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<!-- Blog Start -->
<div class="blog">
  <div class="container">
    <div class="section-header">
      <p>Expert Insights</p>
      <h2>Latest Updates on Energy Management & Industrial Solutions</h2>

    </div>
    <div class="owl-carousel blog-carousel">

      <!-- Blog 1 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-1.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">The Future of Energy Efficiency in Modern Industries</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Energy Management</a>
            <i class="fa fa-calendar-alt"></i>
            <p>10-Oct-2025</p>
          </div>
          <div class="blog-text">
            <p>
              As industries continue to modernize, energy efficiency has become a critical focus area for sustainable growth and cost reduction.
              <span class="more-text" style="display: none;">
                With the integration of smart grids, IoT monitoring, and AI-driven analytics, companies can now optimize power usage, reduce waste, and achieve higher production efficiency while minimizing environmental impact.
              </span>
            </p>
            <a class="btn read-more-btn" href="javascript:void(0);">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-2.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">How Digital Transformation Drives Business Success</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Business Strategy</a>
            <i class="fa fa-calendar-alt"></i>
            <p>15-Oct-2025</p>
          </div>
          <div class="blog-text">
            <p>
              Digital transformation is reshaping how organizations operate, compete, and deliver value to customers.
              <span class="more-text" style="display: none;">
                From cloud adoption and automation to data-driven decision-making, businesses that embrace digital innovation gain agility, efficiency, and a strong competitive edge in today’s fast-changing markets.
              </span>
            </p>
            <a class="btn read-more-btn" href="javascript:void(0);">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-3.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">Sustainability and Innovation: The Path Forward</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Sustainability</a>
            <i class="fa fa-calendar-alt"></i>
            <p>20-Oct-2025</p>
          </div>
          <div class="blog-text">
            <p>
              Sustainability is no longer an option—it’s a necessity. Businesses are now integrating eco-friendly technologies to create long-term value.
              <span class="more-text" style="display: none;">
                Through innovation and responsible practices, organizations can reduce their carbon footprint, enhance brand reputation, and build a resilient future for the next generation.
              </span>
            </p>
            <a class="btn read-more-btn" href="javascript:void(0);">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.read-more-btn').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();

        let moreText;

        if (btn.closest('.service-item')) {
          const paragraph = btn.closest('.service-item').querySelector('p');
          moreText = paragraph.querySelector('.more-text');
        } else if (btn.closest('.blog-item')) {
          moreText = btn.parentElement.querySelector('.more-text');
        } else {
          moreText = btn.parentElement.querySelector('.more-text');
        }

        if (moreText) {
          const isHidden = moreText.style.display === 'none' || moreText.style.display === '';
          moreText.style.display = isHidden ? 'inline' : 'none';
          btn.textContent = isHidden ? 'Read Less' : 'Read More';
        }
      });
    });
  });
</script>

<?php include 'includes/footer.php'; ?>