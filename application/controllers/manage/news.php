<?php
class News extends CI_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->load->library('Layout_manage');
		$this->load->helper ( 'url' );
		$this->layout_manage->view ( "manage/news/index");
	}
	public function initData() {
		$query = $this->db->query ( 'SELECT * FROM news' );
		$news = $query->result ();
		echo "{\"total\":" . count ( $news ) . ",\"rows\":" . json_encode ( $news ) . "}";
	}
}