<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;


class WikiModel extends CI_Model {
	function tampil(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?itemLabel ?coord ?elev ?picture WHERE {
				?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				?item wdt:P625 ?coord.
				?item wdt:P17 wd:Q252.
				?item wdt:P18 ?picture.
				SERVICE wikibase:label { bd:serviceParam wikibase:language 'it'. }
				FILTER(?elev > 4000)
			}";
		return $query;
	}
}