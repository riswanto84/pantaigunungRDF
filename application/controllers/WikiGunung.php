<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class WikiGunung extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('WikiModel');
	}
	
	function index() {
		$this->load->library('Rdf'); //load library RDF
		$endpoint = "https://query.wikidata.org/sparql"; //mengatur SPARQL endpoint
		$sc = new SparqlClient(); //instansiasi
		$sc->setEndpointRead($endpoint);
		
		//SPARQL QUERY
		$q = "SELECT ?item ?itemLabel ?coord ?elev ?picture WHERE {
				?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				?item wdt:P625 ?coord.
				?item wdt:P17 wd:Q252.
				?item wdt:P18 ?picture.
				SERVICE wikibase:label { bd:serviceParam wikibase:language 'it'. }
				FILTER(?elev > 4000)
			}";
		$rows = $sc->query($q, 'rows');
		$err  = $sc->getErrors();
		
		
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}
		
		$this->load->view('v_WikiGunung');
		
	}
}