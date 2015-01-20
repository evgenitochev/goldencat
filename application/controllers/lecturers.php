<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lecturers extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_header_footer');
	}

	public function index()
	{
		$this->lang->load('about');

		$page_title['title'] = 'Лектори - Golden Cat';
		$this->load->view('includes/header', $page_title);
		$this->load->view('lecturers');
		$this->load->view('includes/footer');
	}
}