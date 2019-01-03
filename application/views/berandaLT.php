<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">
        <small><?php  ?></small>
      </h1>
	
	<?php foreach ($gunung["result"]["rows"] as $row) { 
		if (empty($row['terletak_di_wilayah_administrasiLabel'])) 
		{ 
			$row['terletak_di_wilayah_administrasiLabel'] = "-";
		}
		;
	?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src= <?php echo $row['image']; ?> >
        <div class="card-body">
          <h2 class="card-title"><?php echo $row['label'] ?></h2>
		  <p class="card-text">Deskripsi : <?php echo $row['description'] ?></p>
		  <p class="card-text">Wiki Data Code : <a href="<?php echo $row['wikidataCode'] ?>"><?php echo $row['wikidataCode'] ?></a></p>		  
		  <p class="card-text"><a href="<?php echo base_url()."index.php/DetailWisata/detail/".$row['label']; ?>" >Selengkapnya</a></p>
		  <a class="page-link" href="<?php echo $row['review'] ?>">Ulasan Google</a>
		  <a class="page-link" href="<?php echo $row['akses'] ?>">Akses ke lokasi</a>
		  <a class="page-link" href="<?php echo $row['thingstodo'] ?>">Kegiatan yang bisa dilakukan</a>
		  </br>
		  <embed src="<?php echo $row['wikiId'] ?>" style="width:690px; height: 400px;">
		  </p>
        </div>
        <div class="card-footer text-muted">
          Posted on January 1, 2017 by
          <a href="#">Start Bootstrap</a>
        </div>
      </div>
	<?php } ?>
	  
      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Pencarian</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Wisata Pegunungan & Pantai</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
				<li>
					<p class="card-text"><b>Lokal Triplestore :</b></p>
				</li>
                <li>
                  <a href="<?php echo site_url("GunungIndonesiaLT"); ?>">Gunung & Pantai</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
				<li>
				<p class="card-text"><b>Wikidata :</b></p>
				</li>
				<li>
                   <a href="<?php echo site_url("GunungAceh"); ?>">Aceh</a>
                </li>
				<li>
                  <a href="<?php echo site_url("GunungSumut"); ?>">Sumatera Utara</a>
                </li>
				<li>
                  <a href="<?php echo site_url("GunungSumbar"); ?>">Sumatera Barat</a>
                </li>
				<li>
                  <a href="<?php echo site_url("GunungJambi"); ?>">Jambi</a>
                </li>
				<li>
                  <a href="<?php echo site_url("GunungSumsel"); ?>">Sumatera Selatan</a>
                </li>
				<li>
                  <a href="<?php echo site_url("GunungBengkulu"); ?>">Bengkulu</a>
                </li>
				<li>
                  <a href="<?php echo site_url("GunungLampung"); ?>">Lampung</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Peta</h5>
        <div class="card-body">
          <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
