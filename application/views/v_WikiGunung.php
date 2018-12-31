<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo "<h1>".$Header."</h1>";
echo "<table border=1><tr>";
	foreach ($gunung["result"]["variables"] as $variable) 
	{
	echo "<th>".($variable)."</th>";
	}
	echo "</tr><tr>";
	
	foreach ($gunung["result"]["rows"] as $row) 
	{
				echo "<tr>";
				echo "<td>".$row['item']."</td>";
				echo "<td>".$row['itemLabel']."</td>";
				echo "<td>".$row['coord']."</td>";
				echo "<td>".$row['elev']."</td>";?>
				<td><img src = "<?php echo $row['picture'];?>" width = 100 height = 100>
				</img></td>
<?php		 
		echo "</tr>";
	}
	