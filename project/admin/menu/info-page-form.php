<?php
include "header.php";
if(!isset($_SESSION['email'])){
    header("Location: index.php");
   
}
if(isset($_POST['submit'])){
   
    
   
            $data = [
                
                'loctext' => $_POST['loctext'],
                'locurl' => $_POST['locurl'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email']

            ];
           $udata = serialize($data);
            $select1 = "SELECT * FROM home where section='info_section'";
            $selquery1 = mysqli_query($conn,$select1);
            if(mysqli_num_rows($selquery1) == 1){
                $update = "UPDATE home SET data='$udata' WHERE section='info_section'";
                $updatequery = mysqli_query($conn,$update);
                if($updatequery){
                    echo "<script>alert('Data Updated')</script>";
                }else{
                    echo "<script>alert('Something Wrong')</script>";
                }
            }else{
                $insert = "INSERT INTO home (section , data) VALUES ('info_section', '$udata')";
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
                            <li class="breadcrumb-item active">Info page form</li>
                        </ol>


                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                     <label for="link"  class="mt-3">Location</label>    
                                     <div class="row">
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="loctext" placeholder="Location text">
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="url" class="form-control" name="locurl" placeholder="location url">
                                    </div>
                                    </div>
                                    <label for="content" class="mt-3" >Enter Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Number ">

                                    <label for="content" class="mt-3" >email</label>
                                    <input type="email" class="form-control" name="email" placeholder="enter email ">

                                    
                                    </div>
                                    </div>
                                    
                                    <input type="submit" class="btn btn-primary mt-3" name="submit" value="submit ">
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
