<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
				echo "<td>".$row['description']."</td>";
				echo "<td>".$row['label']."</td>";		 
				echo "</tr>";
	}
	