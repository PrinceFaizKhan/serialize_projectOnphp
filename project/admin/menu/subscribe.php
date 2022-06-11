<?php
include "header.php";
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
                            <li class="breadcrumb-item active">subscribe page</li>
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
