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
		?terletak_di_wilayah_administrasiLabel ?terletak_di_pulauLabel ?Smithsonian_volcano_ID 
		?VOGRIPA_ID WHERE {
					?item wdt:P31 wd:Q8502.
					?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
					?item wdt:P625 ?coord.
					?item wdt:P17 wd:Q252.
					optional {?item wdt:P18 ?picture.}
					SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
					OPTIONAL { ?item wdt:P131 ?terletak_di_wilayah_administrasi. }
					OPTIONAL { ?item wdt:P5130 ?terletak_di_pulau. }
					OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
					OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				}
					LIMIT 3
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
		$query = "SELECT ?item ?itemLabel ?coord ?elev ?Smithsonian_volcano_ID ?picture 
				?terletak_di_wilayah_administrasiLabel ?VOGRIPA_ID ?penanda_Freebase WHERE {
				?item wdt:P31 wd:Q8502.
				?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				?item wdt:P625 ?coord.
				?item wdt:P17 wd:Q252.
				?item wdt:P131 wd:Q1823.
				?item wdt:P5130 wd:Q3492.
				OPTIONAL { ?item wdt:P131 ?terletak_di_wilayah_administrasi. }
				OPTIONAL { ?item wdt:P18 ?picture. }
				OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture 
				 ?terletak_di_wilayah_administrasiLabel ?VOGRIPA_ID ?Smithsonian_volcano_ID 
				 ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
			     ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2140.
				 ?item wdt:P5130 wd:Q3492.
				 OPTIONAL { ?item wdt:P131 ?terletak_di_wilayah_administrasi. }
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture 
				 ?VOGRIPA_ID ?Smithsonian_volcano_ID ?terletak_di_wilayah_administrasiLabel 
				 ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2772.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture ?terletak_di_wilayah_administrasiLabel
				 ?VOGRIPA_ID ?Smithsonian_volcano_ID ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2051.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture ?terletak_di_wilayah_administrasiLabel 
				 ?VOGRIPA_ID ?Smithsonian_volcano_ID ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2271.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture ?terletak_di_wilayah_administrasiLabel 
				 ?VOGRIPA_ID ?Smithsonian_volcano_ID ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q1890.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture ?terletak_di_wilayah_administrasiLabel
				 ?VOGRIPA_ID ?Smithsonian_volcano_ID ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2223.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
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
		$query = "SELECT ?item ?coord ?elev ?itemLabel ?picture ?terletak_di_wilayah_administrasiLabel
				 ?VOGRIPA_ID ?Smithsonian_volcano_ID ?penanda_Freebase WHERE {
				 ?item wdt:P31 wd:Q8502.
				 ?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
				 ?item wdt:P625 ?coord.
				 ?item wdt:P17 wd:Q252.
				 ?item wdt:P131 wd:Q2110.
				 ?item wdt:P5130 wd:Q3492.
				 optional {?item wdt:P18 ?picture.}
				 OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
				 OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				 OPTIONAL { ?item wdt:P646 ?penanda_Freebase. }
				 SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
			}";
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		
		return $rows;
	}
	
	function cari($keyword){
		$this->load->library('Rdf');
		$endpoint = "https://query.wikidata.org/sparql";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		
		$query = "SELECT ?item ?itemLabel ?coord ?elev ?picture ?terletak_di_wilayah_administrasi 
				  ?terletak_di_wilayah_administrasiLabel ?terletak_di_pulauLabel ?Smithsonian_volcano_ID 
				  ?VOGRIPA_ID ?penanda_Freebase WHERE {
					?item wdt:P31 wd:Q8502.
					?item (p:P2044/psn:P2044/wikibase:quantityAmount) ?elev.
					?item wdt:P625 ?coord.
					?item wdt:P17 wd:Q252.
					optional {?item wdt:P18 ?picture.}
					SERVICE wikibase:label { bd:serviceParam wikibase:language 'id'. }
					OPTIONAL { ?item wdt:P131 ?terletak_di_wilayah_administrasi. }
					OPTIONAL { ?item wdt:P5130 ?terletak_di_pulau. }
					OPTIONAL { ?item wdt:P1886 ?Smithsonian_volcano_ID. }
					OPTIONAL { ?item wdt:P4708 ?VOGRIPA_ID. }
				}
			FILTER (REGEX(STR(?itemLabel), '".$keyword."'))}
		    order by ?itemLabel";
			  
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		return $rows;
	}
	
}