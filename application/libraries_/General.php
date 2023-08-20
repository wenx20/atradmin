<?php
class General {
    var $ci;
    function __construct() {
        $this->ci = &get_instance();
    }
    function cek_database() {
        if ($this->ci->session->userdata('client') == "ora"){
            $this->ci->db = $this->ci->load->database('ora', TRUE);
        }  else {
            $this->ci->db = $this->ci->load->database('default', TRUE);
        }
    }

    function kdbooking(){
        $y = date('Y');
        $b = date('m');
        $r = mt_rand(1111,9999);
        $kdbook = "B".$b.$y.$r;
		return  $kdbook;
    }

    function ntpdabah(){
        $y = date('Y');
        $b = date('m');
        $r = mt_rand(1111,9999);
        $kdntpd = $b.$y.$r;
		return  $kdntpd;
    }
}
?>