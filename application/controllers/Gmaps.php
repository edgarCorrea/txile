<?php
 defined('BASEPATH') or exit ('Ação invalida');

 class Gmaps extends CI_Controller{

 	function __construct(){
 	parent::__construct();
 }

 function index(){

 	$this->load->library('googlemaps');

 	$config['center'] = '37.4419, -122.1416';
 	$config['zoom'] = 'auto';
 	$this->googlemaps->initialize($config);

 	$marker = array();
 	$marker['position'] = '37.4419, -122.1416';
 	$this->googlemaps->add_marker($marker);
 	$data['map']= $this->googlemaps->create_map();

 	$this->load->view('gmap/index');
 	$this->load->view('layout/header', $data);
 	$this->load->view('layout/footer');
 }
 }

?>