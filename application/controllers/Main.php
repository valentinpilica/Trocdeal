<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller
{
	public function __construct()
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
	
	/**
	 * This is the controller method that drives the application.
	 * After a user logs in, show_main() is called and the main
	 * application screen is set up.
	 */
	function show_main()
	{		
		$this->load->model('post_m');
		
		// Get some data from the user's session
		$user_id = $this->session->userdata('id');
		$is_admin = $this->session->userdata('isAdmin');
		$team_id = $this->session->userdata('teamId');
		
		// Load all of the logged-in user's posts
		$posts = $this->post_m->get_posts_for_user($user_id, 5);
		
		// If posts were fetched from the database, assign them to $data
		// so they can be passed into the view.
		if ($posts)
		{
			$data['posts'] = $posts;
		}
		
		// Load posts based on the user's permission. Admins can see
		// everything, and regular users can only see posts from
		// their own team.
		$other_users_posts = $this->post_m->get_all_other_posts($user_id, $team_id, $is_admin);
		if ($other_users_posts)
		{
			$data['other_posts'] = $other_users_posts;
		}

		$data['is_admin'] = $is_admin;
		$data['max_posts'] = $posts ? count($posts) : 0;
		$data['post_count'] = $this->post_m->get_post_count_for_user($user_id);
		$data['email'] = $this->session->userdata('email');
		$data['name'] = $this->session->userdata('name');
		$data['avatar'] = $this->session->userdata('avatar');
		$data['tagline'] = $this->session->userdata('tagline');
		$data['teamId'] = $this->session->userdata('teamId');

		$this->breadcrumbs->push('Comments', '/main/show_main');
		$this->breadcrumbs->unshift('Home', '/');

		$this->load->section('breadcrumbs', 'sections/breadcrumbs');
		$this->load->view('main', $data);
	}
	function post_message()
	{
		$message = $this->input->post('message');
		
		if ($message)
		{
			$this->load->model('post_m');
			$saved = $this->post_m->save_post($message);
		}
		
		if (isset($saved) && $saved)
		{
			echo "<tr><td>" . $saved['body'] . "</td><td>" . $saved['createdDate'] . "</td></tr>";
		}
		else
		{
		}
	}
	function create_new_user()
	{
		$userInfo = $this->input->post(null, true);
		
		if (count($userInfo))
		{
			$this->load->model('user_m');
			$saved = $this->user_m->create_new_user($userInfo);
		}
		
		if (isset($saved) && $saved)
		{
			echo "success";
		}
	}
	function update_tagline()
	{
		$new_tagline = $this->input->post('message');
		$user_id = $this->session->userdata('id');
		
		if (isset($new_tagline) && $new_tagline != "")
		{
			$this->load->model('user_m');
			$saved = $this->user_m->update_tagline($user_id, $new_tagline);
		}
		
		if (isset($saved) && $saved)
		{
			$this->session->set_userdata(array (
					'tagline' => $new_tagline 
			));
			echo "success";
		}
	}
}
