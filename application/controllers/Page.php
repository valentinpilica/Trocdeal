<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Page extends CI_Controller
{
	function __construct()
	{
		parent::__construct ();
		
		$this->load->helper ( 'url' );
		
		$this->_init ();
	}
	private function _init()
	{
		$this->output->set_template ( 'trocdeal' );
		
		$this->load->js ( 'assets/themes/default/js/jquery-1.9.1.min.js' );
		$this->load->js ( 'assets/themes/default/hero_files/bootstrap-transition.js' );
		$this->load->js ( 'assets/themes/default/hero_files/bootstrap-collapse.js' );
	}
	public function index()
	{
		$this->load->view ( 'static_pages/dashboard' );
	}
	public function login()
	{
		$this->load->view ( 'static_pages/login.php' );
	}
	public function signUp()
	{
		// $this->output->set_template ( 'simple' );
		$this->load->view ( 'static_pages/signUp.php' );
	}
	public function forgottenPassword()
	{
		$this->load->section ( 'sidebar', 'static_pages/sidebar' );
		$this->load->view ( 'static_pages/forgottenPassword.php' );
	}
}
