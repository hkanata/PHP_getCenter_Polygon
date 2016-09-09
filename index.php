<?php
include ('CalculateForms.php');

/*
$data = array(
	array("lat" => "1", "lng" => "3"),
	array("lat" => "2", "lng" => "8"),
	array("lat" => "5", "lng" => "4"),
	array("lat" => "5", "lng" => "9"),
	array("lat" => "7", "lng" => "5"),
	array("lat" => "6", "lng" => "1"),
	array("lat" => "3", "lng" => "10")
);*/

$data = array(
	array("lat" => "-19.845680272890476", "lng" => "-43.99955749511719"),
	array("lat" => "-19.863279143038422", "lng" => "-44.002132415771484"),
	array("lat" => "-19.867476750284446", "lng" => "-43.965396881103516"),
	array("lat" => "-19.842612380182615", "lng" => "-43.96299362182617")
);
$CalculateForms = new CalculateForms();
print_r($CalculateForms->builder($data));


?>