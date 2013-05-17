<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {

	protected $data;
	protected $cur_class;
	protected $cur_ctrl;
	protected $def_class = 'app';
	protected $def_ctrl = 'index';
	protected $theme = 'theme/main';
	
	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Taipei");
		
		$this->cur_class = $this->uri->segment(1)?$this->uri->segment(1):$def_class;
		$this->cur_ctrl = $this->uri->segment(2)?$this->uri->segment(2):$def_ctrl;
		
		// $query = $this->db->get('config');
		// foreach ($query->result() as $row)
			// $this->data[$row->name] = $row->value;
	}
	
	public function render(){
		$this->data['apppage'] = $this->cur_class . '/' . $this->cur_ctrl;
		$this->load->view($this->theme, $this->data);
	}

}