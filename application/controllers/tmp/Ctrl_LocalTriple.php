<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class Ctrl_LocalTriple extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('Rdf'); //load library RDF
		$endpoint = "http://localhost:3030/gunungpantai/query"; //mengatur SPARQL endpoint
		$sc = new SparqlClient(); //instansiasi
		$sc->setEndpointRead($endpoint);
		
		//SPARQL QUERY
		$q = "SELECT ?s ?p ?o { ?s ?p ?o }";
		
		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}
		
		?>
		
		<table border="1">
		<tr>
		<?php
		foreach ($rows["result"]["variables"] as $variable) {
		echo "<th>";
		echo($variable);
		}
		echo "</th>";
		echo "</tr>";
		echo "<tr>";
		
		foreach ($rows["result"]["rows"] as $row) {
			 foreach ($rows["result"]["variables"] as $variable) {
				echo "<td>";
				echo($row[$variable]);
			 }
		echo "</td>";
		echo "</tr>";
		}
	}	
}
