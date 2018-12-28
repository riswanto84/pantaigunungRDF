<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Barang</title>
	<link href="<?php //echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php //echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>SPARQL <small>Query</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>item</td>
				<td>itemLabel</td>
				<td>coord</td>
				<td>elev</td>
				<td>picture</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				//foreach($rows["result"]["rows"] as $row)
					//$barang_id=$i['barang_id'];
					//$barang_nama=$i['barang_nama'];
					//$barang_satuan=$i['barang_satuan'];
					//$barang_harga=$i['barang_harga'];
			?>
			<tr>
				<td><?php //echo $barang_id;?></td>
				<td><?php //echo $barang_nama;?></td>
				<td><?php //echo $barang_satuan;?></td>
				<td><?php //echo $barang_harga;?></td>
				<td><?php //echo $barang_harga;?></td>
			</tr>
			
		</tbody>
	</table>
	
</div>

<script src="<?php //echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php //echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php //echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php //echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>