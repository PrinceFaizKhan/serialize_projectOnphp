<?php 

$select1 = "SELECT * FROM home WHERE section='info_section'";
$query1 = mysqli_query($conn,$select1);
if(mysqli_num_rows($query1) > 0){
  $row1 = mysqli_fetch_array($query1);
 $data1 = unserialize($row1[2]);
}
?>
    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <hr>
          </div>
        </div>
        <div class="info_box ">
          <div class="info_contact">
            <a href="<?php echo $data1['locurl'] ?>" target="#">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                <?php echo $data1['loctext'] ?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
              <?php echo $data1['phone'] ?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
              <?php echo $data1['email'] ?>
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </section>