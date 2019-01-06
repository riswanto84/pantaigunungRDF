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
	  
	<table class="table table-hover table-striped">
	<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Terletak di Pulau</th>	
				<th>Propinsi</th>
			</tr>
		</thead>
	<?php
		$no = 0;
		foreach ($gunung["result"]["rows"] as $row) { 
		if (empty($row['terletak_di_wilayah_administrasiLabel'])) 
		{ 
			$row['terletak_di_wilayah_administrasiLabel'] = "-";
		}
		;
	?>
      
	  <!-- Blog Post -->
      
			<tr>
				<td> <?php echo $no = $no+1; ?></td>
				<td><a href="<?php echo $row['wikiId'] ?>"><?php echo $row['label'] ?></a></td>
				<td><?php echo $row['islandLabel'] ?></td>
				<td><?php echo $row['provinceLabel'] ?></td>
			</tr>
     
	<?php } ?>
	  
	  </table>

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
				<li>
                  <a href="<?php echo site_url("DetailWisata"); ?>">Semua Data</a>
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
