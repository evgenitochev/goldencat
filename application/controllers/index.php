<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_header_footer');
	}

	public function index()
	{
		$this->lang->load('about');
		
		$page_title['title'] = 'Начало - Golden Cat';
		$this->load->view('index', $page_title);
		$this->load->view('includes/footer');
	}
}