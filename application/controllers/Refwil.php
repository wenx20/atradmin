
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Refwil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master_refwil', 'modwil');
    }

    public function index()
    {
        //$this->template->load('home/template', 'home/dashboard');
    }

    public function getdati2()
    {
        if ($this->input->post('provinsi_id')) {
            echo $this->modwil->getdati2($this->input->post('provinsi_id'));
        }
    }

    public function getkec()
    {
        if ($this->input->post('dati2_id')) {
            echo $this->modwil->getkecamatan($this->input->post('dati2_id'));
        }
    }

    public function getkel()
    {
        if ($this->input->post('kecamatan_id')) {
            echo $this->modwil->getkelurahan($this->input->post('kecamatan_id'));
        }
    }
}
