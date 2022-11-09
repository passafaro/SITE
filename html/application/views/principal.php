<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	$this->load->view('header');

	foreach($telas as $tela){
		$this->load->view($tela);
	}
	
	$this->load->view('footer');


?>

