<?php
include "header.php";

if(!isset($_SESSION['email'])){
    header("Location: index.php");
   
}
if(isset($_POST['submit'])){
    //Image Hadle
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
            $data = [
                'file' => $target_file,
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'buttontext' => $_POST['btntitle'],
                'buttonurl' => $_POST['btnurl']

            ];
           $udata = serialize($data);
            $select = "SELECT * FROM home WHERE section='about_section'";
            $selquery = mysqli_query($conn,$select);
            if(mysqli_num_rows($selquery) > 0){
                $update = "UPDATE home SET data='$udata' WHERE section='about_section'";
                $updatequery = mysqli_query($conn,$update);
                if($updatequery){
                    echo "<script>alert('Data Updated')</script>";
                }else{
                    echo "<script>alert('Something Wrong')</script>";
                }
            }else{
                $insert = "INSERT INTO home (section , data) VALUES ('about_section', '$udata')";
                $query = mysqli_query($conn,$insert);
                if($query){
                    echo "<script>alert('Data Inserted')</script>";
                }else{
                    echo "<script>alert('Something Wrong in Insert')</script>";
                }
            }
           
    }   
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
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
                            <li class="breadcrumb-item active">about page</li>
                        </ol>


                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                <input type="file" name="image" class="form-control mt-3 mb-3">
                                    <label for="title" >Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                    <label for="content" class="mt-3" >Content</label>
                                    <input type="text" class="form-control" name="content" placeholder="Enter Content ">

                                    <label for="button" class="mt-3" >Content</label>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="btntitle" placeholder="Button Title ">
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="url" class="form-control" name="btnurl" placeholder="Button URL">
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
