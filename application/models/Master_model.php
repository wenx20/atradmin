<?php
class Master_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_master_spec($paramTable, $paramSelect, $condition, $paramType = 'select',  $paramCon = 'where')
	{
		$this->db->$paramType($paramSelect);
		$this->db->from($paramTable);
		if ($condition) {
			foreach ($condition as $c) {
				$this->db->$paramCon($c[0], $c[1]);
			}
		}
		return $this->db->get();
	}

	function insert_master($paramTable, $data)
	{
		$this->db->insert($paramTable, $data);
		$lastid = $this->db->insert_id();
		return $lastid;
	}
}
