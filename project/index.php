<?php
 include 'head.php';
 include 'admin/db.php';?>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'nav.php'; ?>
    <!-- end header section -->
    <!-- slider section -->
    <?php
    $selectH = "SELECT * FROM home WHERE section='Hslide_section'";
    $queryH = mysqli_query($conn,$selectH);
    if(mysqli_num_rows($queryH)>0){
      $row1 = mysqli_fetch_array($queryH);
      $data1 = unserialize($row1[2]);
      // echo "<pre>";
      // print_r($data1);
      // echo "</pre>";
    }
    ?>
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
          $i= 0;
          foreach($data1['Title'] as $key => $udata1){
            $actives = ''; 
            if($i == 0){
              $actives = 'active';
            }
             
            ?>
          <li data-target="#customCarousel1" data-slide-to="<?php echo $i; ?>" class="<?php echo $actives; ?>"><?php echo $i + 1 ; ?></li>
          <?php $i++; } ?>
           </ol>
        <div class="carousel-inner">
        <?php
          $i= 0;
          foreach($data1['Title'] as $key => $udata1){ 
            $actives = '';
            if($i == 0){
              $actives = 'active';
            }
             
            ?>
          <div class="carousel-item <?php echo $actives; ?>">
            <div class="container">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div class="detail_box">
                    <h1>
                    <?php echo $udata1; ?>
                    </h1>
                    <p>
                    <?php echo $data1['Contant'][$key]; ?>
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; } ?>
         
        </div>
      </div>
    </section>
    <!-- end slider section -->
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


  <!-- course section -->
<?php
$select = "SELECT * FROM home WHERE section='service_section'";
$query =mysqli_query($conn,$select);
$data = '';
if(mysqli_num_rows($query) > 0){
  $row = mysqli_fetch_array($query);
  $data = unserialize($row['data']);
  
}
?>

  <section class="course_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <?php
        foreach($data['Sheading'] as $key=> $udata){
        ?>
        <h2>
         <?php echo $udata; ?>  <span><?php echo $data['SheadSpan'][$key]; ?></span>
        </h2>
          <?php } ?>
       
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php 
         $i= 0;
         foreach($data['image'] as $key=> $udata){
           $actives ='';
           if($i==0){
             $actives = 'active';
           }
        ?>
        <div class="carousel-item <?php echo $actives;?> ">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo 'admin/'.$udata; ?>" alt="" width="100%" height="300px">
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-9 mx-auto">
                  <div class="detail-box">
                    <h3>
                    <?php echo $data['Stitle'][$key];?>
                    </h3>
                    <p>
                      <?php echo $data['Scontant'][$key];?>
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
        <?php $i++; } ?>
      
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

  <!-- lab section -->

  <section class="lab_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Reasearch <span>Lab</span>
        </h2>
        <div class="box">
          <div class="img-box">
            <img src="images/lab-img.jpg" alt="">
          </div>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="detail-box">
                <p>
                  Internet tend to repeat predefined chunks as necessary, making this the first true generator on the IInternet tend to repeat pr
                  edefined chunks as necessary, making this the first true generator
                  on the IInternet tend to repeat predefined chunks as necessary, making this the first true generator on the I
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
  </section>

  <!-- end lab section -->

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
    <!-- contact section -->
    <section class="contact_section layout_padding-bottom">

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