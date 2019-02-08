<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arrayan extends CI_Model {

 public $usera=[];
 public  $passa=[];

public function __construct()
{
	parent::__construct();
	
}
public function insert($user,$pass)
{
	# code...
	array_push($this->usera,$user);
	array_push($this->passa,$pass);

	
	$this->session->set_userdata('user',$this->usera);
	$this->session->set_userdata('pass',$this->passa);
  //print_r($this->usera);



}
public function get($user,$pass)
{
	# code...
	if(in_array($user,$this->usera)&&in_array($pass, $this->passa)){
		return true;
	}
	else{
		return false;
	}
}
	

}

/* End of file array.php */
/* Location: ./application/models/array.php */