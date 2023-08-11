<?php
class Login_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  /*Check Login*/
  function validate($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('blokir', 'N');
    $query = $this->db->get('dat_login');
    return $query;
  }

  /*Get Session values */
  function get_id($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    return $this->db->get('dat_login');
  }

  function get_user($username)
  {
    $this->db->select('username');
    $this->db->from('dat_login');
    $this->db->where('username', $username);
    return $this->db->get();
  }

  function get_pwd($username)
  {
    $this->db->select('password');
    $this->db->from('dat_login');
    $this->db->where('username', $username);
    return $this->db->get();
  }

  function get_dept()
  {
    $qry = $this->db->query("select * from ref_departemen");
    return $qry;
  }

  //new registration
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

    if ($mode == "save")
      $this->form_validation->set_rules('input_username', 'Username', 'required');
    $this->form_validation->set_rules('input_password', 'Password', 'required');
    $this->form_validation->set_rules('input_email', 'Email', 'required');
    $this->form_validation->set_rules('input_departemen', 'Departemen', 'required');
    $this->form_validation->set_rules('input_nip', 'Nip', 'required|numeric|max_length[18]');

    if ($this->form_validation->run())
      return true;
    else
      return false;
  }

  function fetch_single_data($id)
  {
    $this->db->where("username", $id);
    $this->db->or_where("nip", $id);
    $query = $this->db->get("tbl_dat_user");
    return $query;
  }


  public function save()
  {
    $data = array(
      "username" => $this->input->post('input_username'),
      "password" => password_hash($this->input->post('input_password'), PASSWORD_BCRYPT),
      "email" => $this->input->post('input_email'),
      "departemen" => $this->input->post('input_departemen'),
      "nip" => $this->input->post('input_nip')
    );

    $this->db->insert('tbl_dat_user', $data); // insert data
  }

  function insert_data($paramTable, $data)
  {
    $this->db->insert($paramTable, $data);
  }

  function update_data($paramTable, $paramColumn, $paramId, $data)
  {
    $this->db->where($paramColumn, $paramId);
    $this->db->update($paramTable, $data);
  }

  public function newreguser($user, $pass)
  {
    $data = array(
      "username" => $user,
      "password" => password_hash($pass, PASSWORD_DEFAULT),
    );
    $this->db->insert('dat_login', $data);
  }
}
