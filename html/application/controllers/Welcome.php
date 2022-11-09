<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$dados = array('telas' => array('home'));
		$this->load->view('principal', $dados);

	}

	






}
