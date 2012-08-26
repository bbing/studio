<?php 
/**
 */
class Index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('Data');
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";
		$data['list']	= $this->Data->getInfo();
		$this->load->helper('url');
		$this->load->view('common/head');
		$this->load->view('index', $data);
	}
	
	public function test()
	{
		$this->load->view('common/head');
		//$this->load->view('index');
		$this->load->view('common/foot');
	}
}