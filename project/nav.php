
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Stoneridge
            </span>
          </a>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <?php 

              $select = "SELECT * FROM home WHERE section='nav_section'";
              $query = mysqli_query($conn,$select);
              if(mysqli_num_rows($query) > 0){
              $row = mysqli_fetch_array($query);
              // print "<pre>";
              $data = unserialize($row[2]);
              //print_r($data);


             foreach($data['menuName'] as $key => $udata){
             echo'
            <li class="nav-item">
           <a class="nav-link" href="'.$data['menuUrl'][$key].'">'.$udata.'</a>
           </li>';
           }
          }


?>
   
              </ul>
            </div>
            
          </div>
        </nav>
      </div>
    </header>