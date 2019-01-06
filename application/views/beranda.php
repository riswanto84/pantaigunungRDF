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
		if (empty($row['VOGRIPA_ID'])) 
		{ 
			$row['VOGRIPA_ID'] = "";
		}
		if (empty($row['Smithsonian_volcano_ID'])) 
		{ 
			$row['Smithsonian_volcano_ID'] = "";
		}
		if (empty($row['penanda_Freebase'])) 
		{ 
			$row['penanda_Freebase'] = "";
		}
		;
	?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src= 
		<?php 
		if (!empty($row['picture']))
		{
			echo $row['picture'];
		}
		else { echo "http://localhost:84/img/480px-No_image_available.svg.png";}
		?> >
        
		
		<div class="card-body">
          <h2 class="card-title"><?php echo $row['itemLabel'] ?></h2>
          <p class="card-text">Ketinggian : <?php echo $row['elev'] ?> meter</p>
		  <p class="card-text">Koordinat : <?php echo $row['coord'] ?></p>
		  <p class="card-text">Wilayah administrasi : <?php echo $row['terletak_di_wilayah_administrasiLabel'] ?>
		  <p class="card-text">Vogriva ID : <a href="http://www.bgs.ac.uk/vogripa/searchVOGRIPA.cfc?method=detail&id=<?php echo $row['VOGRIPA_ID'] ?>"><?php echo $row['VOGRIPA_ID'] ?></a></p>
		  <p class="card-text">Freebase ID : <a href="https://www.google.com/search?q=knowledge+graph+search+api&kponly&kgmid=<?php echo $row['penanda_Freebase'] ?>"><?php echo $row['penanda_Freebase'] ?></a></p>
		  <p class="card-text">Smithsonian volcano ID : <a href="http://volcano.si.edu/volcano.cfm?vn=<?php echo $row['Smithsonian_volcano_ID'] ?>"><?php echo $row['Smithsonian_volcano_ID'] ?></a></p>
        </div>
        <div class="card-footer text-muted">
          Wiki Data link
          <a href="<?php echo $row['item'] ?>"><?php echo $row['item'] ?></a>
		  <?php if (!empty($row['VOGRIPA_ID'])) { ?>
		  <embed src="http://www.bgs.ac.uk/vogripa/searchVOGRIPA.cfc?method=detail&id=<?php echo $row['VOGRIPA_ID']; } ?>" style="width:690px; height: 700px;">
		</div>
      </div>
	<?php } ?>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Pencarian</h5>
        <div class="card-body">
          <div class="input-group">
			<?php echo form_open('DetailWisata/search') ?>
            <span class="input-group-btn">
				<input type="text" name="keyword" placeholder="search">
				<input type="submit" name="search_submit" value="Cari">  
            </span>
			<?php echo form_close() ?>
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
                  <a href="<?php echo site_url("GunungKepri"); ?>">Kepulauan Riau</a>
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
