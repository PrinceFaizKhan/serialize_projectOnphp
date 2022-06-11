<?php 
include 'admin/db.php';
include 'head.php';?>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'nav.php';?>
    <!-- end header section -->
  </div>

  <!-- course section -->

  <section class="course_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Courses</span>
        </h2>
        <p>
          going to use a passage of Lorem Ipsum, you need to be sure there isn't
        </p>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="images/course-img.jpg" alt="">
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-9 mx-auto">
                  <div class="detail-box">
                    <h3>
                      Node with React
                    </h3>
                    <p>
                      Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="images/course-img.jpg" alt="">
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-9 mx-auto">
                  <div class="detail-box">
                    <h3>
                      Node with React
                    </h3>
                    <p>
                      Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="images/course-img.jpg" alt="">
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-9 mx-auto">
                  <div class="detail-box">
                    <h3>
                      Node with React
                    </h3>
                    <p>
                      Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- end course section -->

  <div class="bottom_bg">

    <!-- info section -->
    <?php include 'info.php';?>
    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <?php include 'footer.php';?>

</body>

</html>