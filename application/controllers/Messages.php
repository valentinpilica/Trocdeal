<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Messages extends CI_Controller
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
		$this->output->set_template($this->config->item('default_theme_name') . '/templates/messages');
		$this->output->set_title('Messages | TrocDeal - Business changing between products');	
		$this->load->css('assets/themes/' . $this->config->item('default_theme_name') . '/css/theme-default.css');
		$this->load->audio('assets/themes/' . $this->config->item('default_theme_name') . '/audio/alert.mp3');
		$this->load->audio('assets/themes/' . $this->config->item('default_theme_name') . '/audio/fail.mp3');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jquery/jquery.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jquery/jquery-ui.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/bootstrap/bootstrap.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/icheck/icheck.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/bootstrap/bootstrap-datepicker.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/bootstrap/bootstrap-select.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/validationengine/languages/jquery.validationEngine-en.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/validationengine/jquery.validationEngine.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jquery-validation/jquery.validate.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/maskedinput/jquery.maskedinput.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/settings.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/actions.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/form_validation.js');
	}
	public function index()
	{
		$this->breadcrumbs->push('Messages', '/messages/index');
		$this->breadcrumbs->unshift('Home', '/');
		$this->load->section('breadcrumbs', 'layout/' . $this->config->item('default_theme_name') . '/sections/breadcrumbs/breadcrumbs');
		$this->load->view('layout/' . $this->config->item('default_theme_name') . '/sections/messages/messages');
	}
}
