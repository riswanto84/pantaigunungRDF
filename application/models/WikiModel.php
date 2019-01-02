<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;


class WikiModel extends CI_Model {
	function GunungIndonesia(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?itemLabel ?coord ?elev ?picture ?terletak_di_wilayah_administrasi 
		?terletak_di_wilayah_administrasiLabel ?terletak_di_pulauLabel WHERE {
					?item wdt:P31 wd:Q8502.
					?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
					?item wdt:P625 ?coord.
					?item wdt:P17 wd:Q252.
					optional {?item wdt:P18 ?picture.}
					SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
					OPTIONAL { ?item wdt:P131 ?terletak_di_wilayah_administrasi. }
					OPTIONAL { ?item wdt:P5130 ?terletak_di_pulau. }
				}
					LIMIT 5
				";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		return $rows;
	}
	
	function gunungAceh(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?itemLabel ?coord ?elev ?picture WHERE { 
				?item wdt:P31 wd:Q8502.
				?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				?item wdt:P625 ?coord.
				?item wdt:P17 wd:Q252.
				?item wdt:P131 wd:Q1823.
				?item wdt:P5130 wd:Q3492.
				optional {?item wdt:P18 ?picture.}
				SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungSumut(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
			     ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2140.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungSumbar(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2772.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungJambi(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2051.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungSumsel(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2271.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungBengkulu(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q1890.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungKepri(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2223.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function gunungLampung(){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2110.
				 ?item wdt:P5130 wd:Q3492.
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
}