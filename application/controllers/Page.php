<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if (! $this->session->userdata('isLoggedIn'))
		{
			redirect('/login/show_login');
		}
		
		$this->_init();
	}
	private function _init()
	{
		$this->output->set_template('trocdeal');
		$this->output->setDefaultTheme($this->config->item('default_theme_name'));
		$this->output->set_title('TrocDeal - Business changing between products');
		$this->load->css('assets/themes/' . $this->config->item('default_theme_name') . '/css/theme-default.css');
		$this->load->audio('assets/themes/' . $this->config->item('default_theme_name') . '/audio/alert.mp3');
		$this->load->audio('assets/themes/' . $this->config->item('default_theme_name') . '/audio/fail.mp3');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jquery/jquery.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jquery/jquery-ui.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/bootstrap/bootstrap.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/bootstrap/bootstrap-datepicker.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/icheck/icheck.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/scrolltotop/scrolltopcontrol.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/rickshaw/d3.v3.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/rickshaw/rickshaw.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/owl/owl.carousel.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/moment.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/daterangepicker/daterangepicker.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/settings.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/actions.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/main.js');
	}
	public function index()
	{
		$this->breadcrumbs->push('Dashboard', '/page/index');
		$this->breadcrumbs->unshift('Home', '/');
		$this->load->section('breadcrumbs', 'sections/breadcrumbs');
		$this->load->view('static_pages/dashboard');
	}
	public function login()
	{
		$this->load->view('static_pages/login.php');
	}
	public function signUp()
	{
		$this->load->view('static_pages/signUp.php');
	}
	public function forgottenPassword()
	{
		$this->load->section('sidebar', 'static_pages/sidebar');
		$this->load->view('static_pages/forgottenPassword.php');
	}
}
