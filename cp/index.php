<!--headscript-->
<?php
session_start();
if($_SESSION['userlogin'] == false){
?>
<?php include('layouts/head-script.php'); ?>
<!--Endheadscript-->
<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">

        <?php include('layouts/menu.php'); ?>


        <!-- Navbar (Header) Starts-->
            <?php include('layouts/header.php'); ?>
        <!-- Navbar (Header) Ends-->

        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                        <!--4top-->
                        <?php include('layouts/4topmenu.php'); ?>
                    <!--Line with Area Chart 1 Starts-->
                    <?php
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
    include('pages/'. $page . '.php');
}else
{
?>
                    <!--Start-Main-Admin-Content-->
                 <?PHP include('layouts/home.php'); ?>
                    <!--End-Main-Admin-Cotent-->
                </div>
            </div>
<?php
}
?>
            <footer class="footer footer-static footer-light">
                <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2018 <a href="../../../marketplace.envato.com/indexbf7d.html?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
            </footer>

        </div>
</div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include('layouts/sidebar.php');  ?>
    <!-- END Notification Sidebar-->
        </div>
</div>
<!-- Theme customizer Ends-->
<!-- BEGIN VENDOR JS-->
<?php include('layouts/footer-script.php'); ?>

<?php
}else
{
    header("Location:../login.php");
}
    ?>
