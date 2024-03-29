<!DOCTYPE html>
<html>
<head>
    <title>Olimpiade Informatika Nasional</title>

     <!-- Use link tags for CSS files -->
     <link rel="icon" type="image/png" href="bootstrap/images/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/venobox.min.css">
    <link rel="stylesheet" href="bootstrap/css/animated_barfiller.css">
    <link rel="stylesheet" href="bootstrap/css/slick.css">
    <link rel="stylesheet" href="bootstrap/css/animate.css">
    <link rel="stylesheet" href="bootstrap/css/nice-select.css">

    <link rel="stylesheet" href="bootstrap/css/spacing.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/responsive.css">

  
    <!-- KE DUA -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="ark-theme.css"/>
    <link rel="stylesheet" href="assets/css/semi-dark.css"/>
    <link rel="stylesheet" href="assets/css/header-colors.css"/>


    <!-- TAMBAHAN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <!-- Konten Anda di sini -->
</body>
<script src="bootstrap/js/jquery-3.6.3.min.js"></script>
    <!--bootstrap js-->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="bootstrap/js/Font-Awesome.js"></script>
    <!--venobox js-->
    <script src="bootstrap/js/venobox.min.js"></script>
    <!--slick slider js-->
    <script src="bootstrap/js/slick.min.js"></script>
    <!--wow js-->
    <script src="bootstrap/js/wow.min.js"></script>
    <!--counterup js-->
    <script src="bootstrap/js/jquery.waypoints.min.js"></script>
    <script src="bootstrap/js/jquery.countup.min.js"></script>
    <!--animated barfiller js-->
    <script src="bootstrap/js/animated_barfiller.js"></script>
    <!--sticky sidebar js-->
    <script src="bootstrap/js/sticky_sidebar.js"></script>
    <!--nice select js-->
    <script src="bootstrap/js/jquery.nice-select.min.js"></script>

    <!--main/custom js-->
    <script src="bootstrap/js/main.js"></script>


    
    <!-- KE DUA-->
    <!-- Bootstrap JS -->
	  <script src="assets/js/bootstrap.bundle.min.js"></script>
	  <!--plugins -->
	   <!-- <script src="assets/js/jquery.min.js"></script> -->
	  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	  <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	  <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
	  <script src="assets/js/index.js"></script>
    	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	  <!--app JS-->
	  <script src="assets/js/app.js"></script>
</html>


<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
