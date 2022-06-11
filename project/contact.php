<?php
include 'admin/db.php';
include 'head.php';?>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'nav.php';?>
    <!-- end header section -->
  </div>

  <div class="bottom_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding">

      <div class="container">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <form action="">
                <div>
                  <input type="text" placeholder="Your Name" />
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" />
                </div>
                <div>
                  <input type="email" placeholder="Your Email" />
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="btn_box">
                  <button>
                    SEND
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->

    <!-- info section -->
    <?php include 'info.php';?>
    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <?php include 'footer.php';?>

</body>

</html>