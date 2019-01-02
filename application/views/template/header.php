<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wisata gunung pantai - Tugas Semantic Web kelompok : Kami        -MIK UI 2018-</title>
	
	<!-- Menyisipkan library Google Maps -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-0.7892750,113.9213270),
            zoom:4,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("bootstrap/vendor/bootstrap/css/bootstrap.min.css"); ?>"
    rel = "stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("bootstrap/css/blog-home.css"); ?>"
    rel = "stylesheet" type="text/css">
	<script src="http://maps.googleapis.com/maps/api/js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">wisata gunung pantai Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url(); ?>">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
