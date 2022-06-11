<?php
include "admin/db.php";
include "head.php"; ?>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include "nav.php" ?>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <?php 

$select = "SELECT * FROM home WHERE section='about_section'";
$query = mysqli_query($conn,$select);
if(mysqli_num_rows($query) > 0){
  $row = mysqli_fetch_array($query);
 $data = unserialize($row[2]);
}
?>


  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?php echo 'http://localhost/hs-telecom//admin/'.$data['file'] ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
               <?php echo $data['title'] ?>
              </h2>
            </div>
            <p> <?php echo $data['content'] ?> </p>
            <a href="<?php echo $data['buttonurl'] ?> ">
            <?php echo $data['buttontext'] ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <div class="bottom_bg">

    <!-- info section -->
    <?php include "info.php"; ?>
    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <?php include "footer.php"; ?>
  <!-- footer section -->

 </body>

</html>