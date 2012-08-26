<?php
class News_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function queryData($title, $begin, $end, $offset, $rows, $sort, $order) {
		$whereCondition = "1=1";
		if ($title != false && ! empty ( $title )) {
			$whereCondition .= " AND title LIKE '%$title%'";
		}
		if ($begin != false && ! empty ( $begin )) {
			$whereCondition .= " AND createTime>=CAST($begin,DATETIME)";
		}
		if ($end != false && ! empty ( $end )) {
			$whereCondition .= " AND createTime<=CAST($end,DATETIME)";
		}
		$whereCondition .= " ORDER BY $sort $order";
		$whereCondition .= " LIMIT $offset,$rows";
		$totalarr = $this->db->query ( 'SELECT COUNT(*) AS total FROM news' )->result ();
		$total=$totalarr[0]->total;
		$news = $this->db->query ( "SELECT * FROM news WHERE $whereCondition" )->result ();
		return  "{\"total\":$total,\"rows\":" . json_encode ( $news ) . "}";
	}
}

?>