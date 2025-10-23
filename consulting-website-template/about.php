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
        moreText.style.display = "block";  // Show the paragraph
        btn.textContent = "Read Less";     // Change button text
    } else {
        moreText.style.display = "none";   // Hide the paragraph
        btn.textContent = "Learn More";    // Change back
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
                         With over two decades of proven experience, we are committed to delivering innovative, reliable, and results-driven solutions. Our team combines technical expertise with strategic insight to help businesses achieve sustainable growth and operational excellence. We focus on quality, transparency, and customer satisfaction in every project we undertake, ensuring long-term success and trusted partnerships.
                        </p>
                        <div class="row counters">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        
        <!-- Testimonial Start -->
 <div class="testimonial">
  <div class="container">
    <div class="section-header">
<p>Client Testimonials</p>
<h2>Trusted by Businesses for Reliable Energy Solutions</h2>

    </div>

    <div class="owl-carousel testimonials-carousel">

      <!-- Testimonial 1 -->
      <div class="testimonial-item">
        <img src="img/testimonial-1.jpg" alt="Image">
        <p>
          “The team delivered outstanding results with professionalism and efficiency. Their solutions helped streamline our operations and save valuable resources.”
        </p>
        <h2>Rajesh Kumar</h2>
        <h3>Managing Director, RK Solutions</h3>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-item">
        <img src="img/testimonial-2.jpg" alt="Image">
        <p>
          “Excellent service from start to finish! The project was completed on time and exceeded our expectations. Highly recommended for any business.”
        </p>
        <h2>Priya Sharma</h2>
        <h3>Marketing Head, InnovateX</h3>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-item">
        <img src="img/testimonial-3.jpg" alt="Image">
        <p>
          “Implementing their solutions has significantly improved our workflow and productivity. The team is responsive, knowledgeable, and supportive at every step.”
        </p>
        <h2>Arun Patel</h2>
        <h3>Operations Manager, NexaCorp</h3>
      </div>

      <!-- Testimonial 4 -->
      <div class="testimonial-item">
        <img src="img/testimonial-4.jpg" alt="Image">
        <p>
          “A highly professional team that truly understands client needs. Their dedication and innovative approach helped our company achieve measurable success.”
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

<?php include 'includes/footer.php'; ?>
