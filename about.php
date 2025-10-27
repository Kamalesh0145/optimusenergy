<?php include 'includes/header.php'; ?>

<!-- About Start -->
<div class="about mt-125">
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
                        moreText.style.display = "block"; // Show the paragraph
                        btn.textContent = "Read Less"; // Change button text
                    } else {
                        moreText.style.display = "none"; // Hide the paragraph
                        btn.textContent = "Learn More"; // Change back
                    }
                }
            </script>

        </div>
    </div>
</div>
<!-- About End -->

  
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

           
            </div>
        </div>
    </div>
</div>

<!-- Achievement Start -->
<section class="achievement-section py-5">
  <div class="container">
    <div class="section-header text-center mb-5">
      <p>Our Achievements</p>
      <h2>Milestones That Define Our Success</h2>
      <p>
        We take pride in our journey of innovation, dedication, and excellence —
        shaping a sustainable energy future.
      </p>
    </div>

    <!-- Achievement 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0 text-center">
        <img src="img/Achive1.png" alt="Achievement 1" class="img-fluid rounded shadow">
      </div>
<div class="col-lg-6">
        <h3>🏆 National Energy Excellence Award</h3>
        <p>
          Recognized for our outstanding contribution to the acceleration of renewable energy
          solutions and national-level leadership in sustainable power generation.
        </p>
      </div>
    </div>

    <!-- Achievement 2 -->
    <div class="row align-items-center mb-5 flex-lg-row-reverse">
      <div class="col-lg-6 mb-4 mb-lg-0 text-center">
        <img src="img/Achive2.png" alt="Achievement 2" class="img-fluid rounded shadow">
      </div>
 <div class="col-lg-6">
        <h3>🔰 ISO 50001 Energy Management Certified</h3>
        <p>
          Certified for implementing a world-class **Energy Management System (EnMS)**,
          ensuring continuous improvement, resource optimization, and compliance with global standards.
        </p>
      </div>
    </div>

    <!-- Achievement 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0 text-center">
        <img src="img/Achive3.png" alt="Achievement 3" class="img-fluid rounded shadow">
      </div>
 <div class="col-lg-6">
        <h3>💡 Cutting-Edge Smart Grid Technology</h3>
        <p>
          Awarded for our innovative development of a **real-time, AI-driven Smart Grid
          solution**, setting a new industry benchmark for energy efficiency and operational intelligence.
        </p>
      </div>
    </div>

    <!-- Achievement 4 -->
    <div class="row align-items-center mb-5 flex-lg-row-reverse">
      <div class="col-lg-6 mb-4 mb-lg-0 text-center">
        <img src="img/Achive4.png" alt="Achievement 4" class="img-fluid rounded shadow">
      </div>
<div class="col-lg-6">
        <h3>🌱 GreenTech & Sustainability Leadership</h3>
        <p>
          Honored for our comprehensive efforts in adopting sustainable technology and
          eco-friendly industrial processes that significantly reduce carbon footprint and drive a greener tomorrow.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Achievement End -->


<?php include 'includes/footer.php'; ?>