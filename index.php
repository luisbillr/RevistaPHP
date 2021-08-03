<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include "views/model/head.php";
   ?>
    <style>
    <?php include "assets/main/main.css";
    ?>
    </style>
</head>

<body>
    <?php 
        include "views/model/header.php";
     ?>
    <div class="container" id="contenido">

        <div class="wrapper">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Aside -->
                <?php 
                    include "views/model/aside.php";
                 ?>
            </nav>

            <!-- Page Content -->
            <div id="content">
                <?php 
                include "views/content/revista/index.php";
                ?>
            </div>

        </div>






        <!--====== Scripts -->
        <?php 
        include "views/model/footer.php";
        ?>
    </div>
    <?php 
        include "views/model/ModalUploadTxt.php";
        ?>
</body>

</html>