<?php
            include "header.php";

            if(!isset($_SESSION['email'])){
                header("Location: index.php");
            
            }
            if(isset($_POST['submit'])){
                $data = serialize($_POST);
                $select1 = "SELECT * FROM home where section='Client_section'";
                $selquery1 = mysqli_query($conn,$select1);
                if(mysqli_num_rows($selquery1) == 1){
                    $update = "UPDATE home SET data='$data' WHERE section='Client_section'";
                    $updatequery = mysqli_query($conn,$update);
                    if($updatequery){
                        echo "<script>alert('Data Updated')</script>";
                    }else{
                        echo "<script>alert('Something Wrong')</script>";
                    }
                }else{
                    $insert = "INSERT INTO home (section , data) VALUES ('Client_section', '$data')";
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
                            <li class="breadcrumb-item active">Update head slider</li>
                        </ol>


                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                <label for="title" class="mb-2">Section Heading</label>
                                <input type="text" name="Sheading[]" class="form-control m-input"  autocomplete="off">
                                <div id="inputClientformRow">

                                <label for="title" class="mb-2 mt-2">Slider Heading</label>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="slidehead[]" placeholder="Button Title ">
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tagline[]" placeholder="Button URL">
                                    </div>
                                    </div> 
                                    <label for="title" class="mb-2">Contant</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="Ccontant[]" class="form-control m-input"  autocomplete="off">
                                         <div class="input-group-append">
                                          <button id="removeSlideow" type="button" class="btn btn-danger">Remove</button>
                                         </div>
                                    </div>
                                </div>
                                   
                                    
                                <div id="newClientrow"></div>
                                <button id="addClientrow" type="button" class="btn btn-primary mt-3">add menu</button>
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
