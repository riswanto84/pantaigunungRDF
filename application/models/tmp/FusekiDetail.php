<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class FusekiDetail extends CI_Model {
	function detailItem($label){
		$this->load->library('Rdf');
		$endpoint = "http://localhost:3030/gunungpantai/query";
		$sc = new SparqlClient();
		$sc->setEndpointRead($endpoint);
		
		$query = "prefix pg: <http://www.semanticweb.org/gries/ontologies/2018/11/gunungpantai#>
			  prefix owl: <http://www.w3.org/2002/07/owl#>
			  prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
			  prefix xml: <http://www.w3.org/XML/1998/namespace>
			  prefix xsd: <http://www.w3.org/2001/XMLSchema#>
				
			  select ?label ?islandLabel ?provinceLabel ?description ?image ?review ?akses ?thingstodo ?wikidataCode ?wikiEn ?wikiId  where {
			  ?item pg:hasLabel ?label; 
			  pg:provinceLocated ?province;
			  pg:hasDescription ?description;
			  pg:hasImage ?image;
			  pg:hasReview ?review;
			  pg:howToReach ?akses;
			  pg:thingsToDo ?thingstodo;
			  pg:hasWikidata ?wikidataCode;
			  pg:hasWikiEN ?wikiEn;
			  pg:hasWikiID ?wikiId.
  
			  ?island pg:hasProvince ?province;
			  pg:hasLabel ?islandLabel.
  
			  ?province pg:hasLabel ?provinceLabel.
  
  
			  FILTER (REGEX(STR(?label), '"$label"'))}";
			  
		$rows = $sc->query($query, 'rows');
		$err = $sc->getErrors();
		return $rows;
	}
}