<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'modhome');
        $this->load->model('Master_model', 'mastermod');
        $this->load->model('Master_refwil', 'refwilmod');
        $this->load->library('Pdf');
    }

    public function index()
    {
        $this->template->load('home/template', 'home/dashboard');
    }

    public function datpegawai()
    {
        $condition         = [];
        $data['dp']        = $this->mastermod->get_master_spec('dat_pegawai', '*', $condition);
        $this->template->load('home/template', 'home/datpegawai', $data);
    }

    public function datuser()
    {
        $condition         = [];
        $data['du']        = $this->mastermod->get_master_spec('dat_login', '*', $condition);
        $this->template->load('home/template', 'home/datuser', $data);
    }

    public function loketberkas()
    {
        $condition         = [];
        $data['dp']        = $this->mastermod->get_master_spec('tbl_pstb', '*', $condition);
        $this->template->load('home/template', 'home/datberkas', $data);
    }

    public function pstbaru()
    {
        $condition         = [];
        $data['provinsi']  = $this->mastermod->get_master_spec('ref_provinsi', '*', $condition)->result_array();

        $condition[] = ['sts', 1];
        $data['kelengkapan_warkah'] = $this->mastermod->get_master_spec('ref_pstb', '*', $condition)->result_array();

        $this->template->load('home/template', 'home/frmpstb', $data);
    }

    public function pstperpanjangan()
    {
        $condition         = [];
        $data['dp']        = $this->mastermod->get_master_spec('dat_pegawai', '*', $condition);
        $this->template->load('home/template', 'home/datberkas', $data);
    }

    public function regpermohonan()
    {
        $data['provinsi'] = $this->refwilmod->getprovinsi();
        $this->template->load('home/template', 'home/frmregpermohonan', $data);
    }

    public function getdati2()
    {
        if ($this->input->post('provinsi_id')) {
            echo $this->refwilmod->getdati2($this->input->post('provinsi_id'));
        }
    }

    public function getkec()
    {
        if ($this->input->post('dati2_id')) {
            echo $this->refwilmod->getkecamatan($this->input->post('dati2_id'));
        }
    }

    public function getkel()
    {
        if ($this->input->post('kecamatan_id')) {
            echo $this->refwilmod->getkelurahan($this->input->post('kecamatan_id'));
        }
    }

    public function loketadmin()
    {
        $condition         = [];
        $data['dp']        = $this->mastermod->get_master_spec('dat_pegawai', '*', $condition);
        $this->template->load('home/template', 'home/datadmin', $data);
    }

    public function loketarsip()
    {
        $condition         = [];
        $data['dp']        = $this->mastermod->get_master_spec('dat_pegawai', '*', $condition);
        $this->template->load('home/template', 'home/datarsip', $data);
    }

    public function cariop()
    {
        $this->template->load('home/template', 'home/cariop');
    }

    public function prosesop()
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

    public function pstb_sv()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|pdf|jpeg';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        $perusahaan = $this->input->post('nm_perusahaan');
        $propinsi = $this->input->post('provinsi');
        $dati2 = $this->input->post('dati2');
        $idberkas = $this->input->post('berkasID');
        $sts_berkas = $this->input->post('stsberkas');
        $copy = $this->input->post('sftcopy');
        $keterangan = $this->input->post('keterangan');

        $data1 = [
            'nm_perusahaan' => $perusahaan,
            'propinsi' => $propinsi,
            'dati2' => $dati2,
            'created_date' => date('Y-m-d H:i:s'),
            'created_uid' => 1,
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => 1
        ];
        $insertID = $this->mastermod->insert_master('tbl_pstb', $data1);

        if ($insertID) {
            for ($i = 0; $i < count($idberkas); $i++) {
                if ($this->upload->do_upload('scFile' . $idberkas[$i])) {
                    $uploadData = $this->upload->data();
                    $namaFile[$i] = $uploadData['file_name'];
                } else {
                    $namaFile[$i] = '';
                }

                $data2 = [
                    'pstb_id' => $insertID,
                    'ref_pstb_id' => $idberkas[$i],
                    'sts_warkah' => $sts_berkas[$i],
                    'sts_sftcopy' => $copy[$i],
                    'scfile' => $namaFile[$i],
                    'keterangan' => $keterangan[$i],
                    'created_date' => date('Y-m-d H:i:s'),
                    'created_uid' => 1,
                    'updated_date' => date('Y-m-d H:i:s'),
                    'updated_uid' => 1
                ];
                $this->mastermod->insert_master('tbl_pstb_warkah', $data2);
            }

            $this->session->set_flashdata('sukses_input', 'berhasil');
            redirect('./home/loketberkas');
        }
    }

    public function pstb_ed()
    {
        $id = $this->uri->segment('3');

        $condition         = [];
        $data['provinsi']  = $this->mastermod->get_master_spec('ref_provinsi', '*', $condition)->result_array();

        $cond = [];
        $cond[] = ['id', $id];
        $row = $this->mastermod->get_master_spec('tbl_pstb', '*', $cond)->row_array();

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row['propinsi']];
        $row2 = $this->mastermod->get_master_spec('ref_dati2', '*', $cond)->result();

        $condition = [];
        $condition[] = ['pstb_id', $row['id']];
        $data['warkah'] = $this->mastermod->get_master_spec('v_pstb_warkah', '*', $condition)->result_array();


        $data['pstb'] = $row;
        $data['dati2'] = $row2;

        $this->template->load('home/template', 'home/frmpstb_ed', $data);
    }
}
