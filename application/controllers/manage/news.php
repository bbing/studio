<?php
class News extends CI_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->load->helper ( 'url' );
		$this->load->view ( "manage/news/index" );
	}
	public function initData() {
		//$query = $this->db->query ( 'SELECT * FROM news' );
		//echo $query;
		echo "{\"total\":2,\"rows\":[{\"id\":1,\"name\":\"ace\"},{\"id\":2,\"name\":\"ptfacetest\"}]}";
	}
}