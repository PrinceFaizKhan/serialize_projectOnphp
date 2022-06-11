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
    <!-- client section -->
    <section class="client_section layout_padding">
           <?php
           $select2 = "SELECT * FROM home WHERE section='Client_section'";
           $query2 = mysqli_query($conn,$select2);
           if(mysqli_num_rows($query2) > 0){
             $row2 = mysqli_fetch_array($query2);
            $data2 = unserialize($row2[2]);
           }
          ?>
      <div class="container">
        <div class="heading_container">
          <?php
          foreach($data2['Sheading'] as $udata2){
          ?>
          <h2>
          <?php echo $udata2 ?>
          </h2>
          <?php } ?>
        </div>
      </div>
      <div id="customCarousel3" class="carousel slide" data-ride="carousel">
       
        <div class="carousel-inner">
        <?php
          $i = 0;
          foreach($data2['slidehead'] as $key2=>$slideData){
            $actives = '';
            if($i==0){
              $actives = 'active';
            }
        ?>
          <div class="carousel-item <?php echo $actives; ?>">
            <div class="container">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h4>
                      <?php echo $slideData; ?>
                    </h4>
                    <h6>
                      <?php echo $data2['tagline'][$key2]; ?>
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                 <?php echo $data2['Ccontant'][$key2]; ?>
              </p>
              </div>
            </div>
          </div>
          <?php $i++; } ?>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel3" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel3" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end client section -->

    <!-- info section -->
    <?php include 'info.php';?>
    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <?php include 'footer.php';?>

</body>

</html>