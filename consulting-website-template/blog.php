<?php include 'includes/header.php'; ?>

        <!-- Blog Start -->
   <!-- Blog Start -->
<div class="blog mt-125">
  <div class="container">
    <div class="section-header">
<p>Expert Insights</p>
<h2>Latest Updates on Energy Management & Industrial Solutions</h2>

    </div>

    <div class="owl-carousel blog-carousel">

      <!-- Blog Post 1 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-1.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">Driving Business Growth Through Strategy</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Strategy</a>
            <i class="fa fa-calendar-alt"></i>
            <p>10-Oct-2025</p>
          </div>
          <div class="blog-text">
            <p>
              Effective business strategy is the backbone of sustainable growth. By aligning goals, resources, and market opportunities, companies can gain a competitive edge.
              <span class="more-text" style="display: none;">
                In this article, we explore how strategic planning, data-driven decisions, and innovation can help organizations adapt to changing market conditions and achieve long-term success.
              </span>
            </p>
            <a href="javascript:void(0);" class="btn read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-2.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">Maximizing Efficiency with Project Management</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Project Management</a>
            <i class="fa fa-calendar-alt"></i>
            <p>05-Oct-2025</p>
          </div>
          <div class="blog-text">
            <p>
              Successful project management ensures tasks are completed on time and within budget. It requires careful planning and execution.
              <span class="more-text" style="display: none;">
                Our insights cover practical techniques, risk management strategies, and tools that project managers can implement to improve collaboration, track progress, and achieve project goals efficiently.
              </span>
            </p>
            <a href="javascript:void(0);" class="btn read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-3.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">Understanding Market Trends for Growth</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Market Research</a>
            <i class="fa fa-calendar-alt"></i>
            <p>01-Oct-2025</p>
          </div>
          <div class="blog-text">
            <p>
              Market research is critical to understanding customer needs and competitor strategies. It helps businesses make informed decisions.
              <span class="more-text" style="display: none;">
                This blog post discusses techniques for analyzing market data, identifying trends, and leveraging insights to develop effective strategies that drive revenue and customer satisfaction.
              </span>
            </p>
            <a href="javascript:void(0);" class="btn read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 4 -->
      <div class="blog-item">
        <div class="blog-img">
          <img src="img/blog-4.jpg" alt="Blog">
        </div>
        <div class="blog-content">
          <h2 class="blog-title">Enhancing Team Performance in HR</h2>
          <div class="blog-meta">
            <i class="fa fa-list-alt"></i>
            <a href="">Human Resource</a>
            <i class="fa fa-calendar-alt"></i>
            <p>28-Sep-2025</p>
          </div>
          <div class="blog-text">
            <p>
              Human Resource management is key to maintaining a productive and motivated workforce.
              <span class="more-text" style="display: none;">
                Learn about best practices for employee engagement, training programs, and performance evaluation to create a strong, efficient, and satisfied team.
              </span>
            </p>
            <a href="javascript:void(0);" class="btn read-more-btn">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Blog End -->
<script>
  // Read More / Read Less functionality
  document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const moreText = btn.previousElementSibling.querySelector('.more-text');
      const isHidden = moreText.style.display === 'none' || moreText.style.display === '';
      moreText.style.display = isHidden ? 'inline' : 'none';
      btn.textContent = isHidden ? 'Read Less' : 'Read More';
    });
  });
</script>

        <!-- Blog End -->

<?php include 'includes/footer.php'; ?>
