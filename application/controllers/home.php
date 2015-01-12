<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Maps to the following URL
	 * 		http://localhost/index.php/home
	 */
	public function index()
	{
		$this->load->view('home');
	}
}