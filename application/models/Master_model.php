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

	function get_master_order($paramTable, $paramSelect, $condition, $paramOrder, $paramType = 'select',  $paramCon = 'where')
	{
		$this->db->$paramType($paramSelect);
		$this->db->from($paramTable);
		if ($condition) {
			foreach ($condition as $c) {
				$this->db->$paramCon($c[0], $c[1]);
			}
		}
		$this->db->order_by($paramOrder);
		return $this->db->get();
	}

	function insert_master($paramTable, $data)
	{
		$this->db->insert($paramTable, $data);
		$lastid = $this->db->insert_id();
		return $lastid;
	}

	function update_master($where, $paramTable, $data)
	{
		$this->db->where($where);
		$this->db->update($paramTable, $data);

		return $this->db->affected_rows();
	}

	function delete_master($value, $id, $paramTable)
	{
		$this->db->where($id, $value);
		$this->db->delete($paramTable);

		return $this->db->affected_rows();
	}
}
