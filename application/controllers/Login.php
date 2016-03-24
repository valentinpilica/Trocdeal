<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->_init();
	}
	private function _init()
	{
		$this->output->set_title('Login | TrocDeal - Business changing between products');
		$this->output->set_template($this->config->item('default_theme_name') . '/templates/login');
	}
	function index()
	{
		if ($this->session->userdata('isLoggedIn'))
		{
			redirect('/dashboard/index');
		}
		else
		{
			$this->show_login(false);
		}
	}
	function login_user()
	{
		// Create an instance of the user model
		$this->load->model('user_m');
		
		// Grab the email and password from the form POST
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		
		// Ensure values exist for email and pass, and validate the user's credentials
		if ($email && $pass && $this->user_m->validate_user($email, $pass))
		{
			// If the user is valid, redirect to the main view
			redirect('/dashboard/index');
		}
		else
		{
			// Otherwise show the login screen with an error message.
			$this->show_login(true);
		}
	}
	function show_login($show_error = false)
	{
		$data['error'] = $show_error;
		$this->load->css('assets/themes/' . $this->config->item('default_theme_name') . '/css/theme-default.css');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/jquery/jquery.min.js');
		$this->load->js('assets/themes/' . $this->config->item('default_theme_name') . '/js/plugins/bootstrap/bootstrap.min.js');
		$this->load->view('layout/' . $this->config->item('default_theme_name') . '/sections/login/login', $data);
	}
	function logout_user()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	function showphpinfo()
	{
		echo phpinfo();
	}
}
