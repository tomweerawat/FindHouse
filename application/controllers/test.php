<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller{
  private $def_lat;
  private $def_lng;
  public function __construct(){
    parent::__construct();
    $this->load->library('googlemaps');
  }
public function index(){
  $center=$this->def_lat.",".$this->def_lng;
  $cfg=array(
  'class'			=>'map-canvas',
  'map_div_id'	=>'map-canvas',
  'center'		=>$center,
  'zoom'			=>6,
  'places'		=>TRUE, //Aktifkan pencarian alamat
  'placesAutocompleteInputID'	=>'cari', //set sumber pencarian input
  'placesAutocompleteBoundsMap'	=>TRUE,
  'placesAutocompleteOnChange'	=>'showmap();' //Aksi ketika pencarian dipilih
  );
  $this->googlemaps->initialize($cfg);

  $marker=array(
  'position'		=>$center,
  'draggable'		=>TRUE,
  'title'			=>'Coba diDrag',
  'ondragend'		=>"document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value = event.latLng.lng();
                showmap();",
  );
      $this->googlemaps->add_marker($marker);

  $d['map']=$this->googlemaps->create_map();
  $d['lat']=$this->def_lat;
  $d['lng']=$this->def_lng;

  $this->load->view('test/map',$d);
  }

public function getdata(){

}

}
