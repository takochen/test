<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->auth = new stdClass;
		date_default_timezone_set('UTC');
		$this->load->library('flexi_auth');
		if ($this->flexi_auth->is_logged_in_via_password() && uri_string() != 'app/logout') 
		{
			// Preserve any flashdata messages so they are passed to the redirect page.
			if ($this->session->flashdata('message')) { $this->session->keep_flashdata('message'); }
			
			// Redirect logged in admins (For security, admin users should always sign in via Password rather than 'Remember me'.
			if ($this->flexi_auth->is_admin()) 
			{
				redirect('app/welcome');
			}
			else
			{
				redirect('app/login');
			}
		}
		$this->data = NULL;
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('app/login');
		$this->login();
	}
	function login()
	{
		if($this->input->post('login_user'))
		{
			$this->load->model('app_modal');
			$this->app_modal->login();

		}
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		
		$this->load->view('app/login', $this->data);
	}
	function welcome()
	{

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */