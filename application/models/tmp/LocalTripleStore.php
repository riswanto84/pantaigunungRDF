<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;


class LocalTripleStore extends CI_Model {
	
	function GunungIndonesia(){
		$this->load->library('Rdf');
		$endpoint = "http://localhost:5820/";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "select ?item ?description ?label where {
					?item pg:hasDescription ?description;
					pg:hasLabel ?label.}
				";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		return $rows;
	}
	
}