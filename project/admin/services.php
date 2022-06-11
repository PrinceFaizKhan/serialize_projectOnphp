<?php
            include "header.php";

            if(!isset($_SESSION['email'])){
                header("Location: index.php");
            
            }
            if(isset($_POST['submit'])){
                $files = $_FILES;
                
                $image = $_FILES['image'];
                // echo "<pre>";
                // foreach($_FILES['image']['name'] as $key => $file){
                //     $fileName = "uploads/". $_FILES['image']['name'][$key];
                //     move_uploaded_file($_FILES['image']['tmp_name'][$key], $fileName);
                // }
                // die();
                // print_r($image);
                // echo "</pre>";
                
                $target = [];
                
                foreach( $image['name'] as $key=>$images){
                    $path =  'uploads/'.$images;
                    move_uploaded_file($image['tmp_name'][$key], $path);
                    $target['image'][] =  'uploads/'.$images;
                }
                               
                
                $final = array_merge($target,$_POST);
                $data = serialize($final);
               

                
                $select1 = "SELECT * FROM home where section='service_section'";
                $selquery1 = mysqli_query($conn,$select1);
                if(mysqli_num_rows($selquery1) == 1){
                    $update = "UPDATE home SET data='$data' WHERE section='service_section'";
                    $updatequery = mysqli_query($conn,$update);
                    if($updatequery){
                        echo "<script>alert('Data Updated')</script>";
                    }else{
                        echo "<script>alert('Something Wrong')</script>";
                    }
                }else{
                    $insert = "INSERT INTO home (section , data) VALUES ('service_section', '$data')";
                    $query = mysqli_query($conn,$insert);
                    if($query){
                        echo "<script>alert('Data Inserted')</script>";
                    }else{
                        echo "<script>alert('Something Wrong in Insert')</script>";
                    }
                }
                
                
                }
                
    


    
?>
<body class="sb-nav-fixed">
      <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include "sidebar.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Menu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Update Services Section</li>
                        </ol>


                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                <label for="button" class="mt-3" >Heading</label>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="Sheading[]" placeholder="Enter Heading Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="SheadSpan[]" placeholder="Enter Tagline" required>
                                    </div>
                                    </div>
                                <div id="inputServiceformRow">
                                   
                                   <input type="file" name="image[]" class="form-control mt-3 mb-3">
                                    <label for="title" class="mb-2"> Service Titles</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="Stitle[]" class="form-control m-input" placeholder="Enter Title" autocomplete="off" required>
                                    </div> 
                                    <label for="title" class="mb-2"> Service Contant</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="Scontant[]" class="form-control m-input" placeholder="Enter Contant" autocomplete="off" required>
                                         <div class="input-group-append">
                                          <button id="removeServicerow" type="button" class="btn btn-danger">Remove</button>
                                         </div>
                                    </div>
                                </div> 
                                   
                                    
                                <div id="newServicerow"></div>
                                <button id="addServicerow" type="button" class="btn btn-primary mt-3">add menu</button>
                                <button type="submit" class="btn btn-primary mt-3" name="submit">submit</button>
                                </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </main>
               <?php include "footer.php" ?>
            </div>
        </div>
        <?php include "footer-script.php"?>
    </body>
</html>
