<?php
class News extends CI_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->load->library ( 'Layout_manage' );
		$this->load->helper ( 'url' );
		$this->layout_manage->view ( "manage/news/index" );
	}
	public function initData() {
		$title = $this->input->post ( 'title' );
		$begin = $this->input->post ( 'begin' );
		$end = $this->input->post ( 'end' );
		$page = $this->input->post ( 'page' );
		$rows = $this->input->post ( 'rows' );
		$order = $this->input->post ( 'order' );
		$sort = $this->input->post ( 'sort' );
		$this->load->model ( 'manage/News_model' );
		echo $this->News_model->queryData ( $title, $begin, $end, ($page - 1) * $rows, $rows, $sort, $order );
	}
}