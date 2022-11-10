<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$redesSociais = array(
			'whatsapp'=>'https://api.whatsapp.com/send?phone=5544999933625&text=Ol%C3%A1%20estou%20visitando%20o%20website%20e%20gostaria%20de%20tirar%20algumas%20d%C3%BAvidas',
			'github'=>'https://github.com/passafaro/',
			'instagram'=>'https://www.instagram.com/alessandropassafaro/',
			'linkedin'=>'',
			'facebook'=>'https://www.facebook.com/alessandro.passafaro.3'
		);

		$dados = array('telas' => array('home'), 'redesSociais' => $redesSociais);
		$this->load->view('principal', $dados);

	}

	






}
