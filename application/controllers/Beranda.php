<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model', 'mastermod');
		$this->load->library('Pdf');
	}

	public function index()
	{
		$this->template->load('template', 'cariop');
	}

	public function cariop()
	{
		$kdprop  =   $this->input->get('kdprop');
		$kddt2   =   $this->input->get('kddt2');
		$kdkec   =   $this->input->get('kdkec');
		$kdkel   =   $this->input->get('kdkel');
		$kdbl    =   $this->input->get('kdbl');
		$nourut  =   $this->input->get('nourut');
		$kdop    =   $this->input->get('kdop');

		$data['fwil'] = $this->mastermod->refwil($kdprop, $kddt2, $kdkec, $kdkel);
		$data['fdop'] = $this->mastermod->caridop($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop);
		$data['fsppt'] = $this->mastermod->carisppt($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop);
		$this->template->load('home/template', 'home/datsppt', $data);
	}

	public function tunggakan_print()
	{
		$kdprop  =   $this->uri->segment('3');
		$kddt2   =   $this->uri->segment('4');
		$kdkec   =   $this->uri->segment('5');
		$kdkel   =   $this->uri->segment('6');
		$kdbl    =   $this->uri->segment('7');
		$nourut  =   $this->uri->segment('8');
		$kdop    =   $this->uri->segment('9');

		$data['fwil'] = $this->mastermod->refwil($kdprop, $kddt2, $kdkec, $kdkel);
		$data['fdop'] = $this->mastermod->caridop($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop);
		$data['fsppt'] = $this->mastermod->carisppt($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop);
		$data['nop'] = $nop = $kdprop . '.' . $kddt2 . '.' . $kdkec . '.' . $kdkel . '.' . $kdbl . '-' . $nourut . '.' . $kdop;

		$this->load->view('tunggakan_pdf', $data);
	}
}
