<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (empty($_SESSION['user_id'])) {
            redirect('login');
            die();
        }

        date_default_timezone_set("Asia/Jakarta");

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
        $condition   = [];
        $data['dp']  = $this->mastermod->get_master_spec('t_permohonan_pengukuran', '*', $condition);
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
        $data['dp']        = $this->mastermod->get_master_spec('tbl_pstb', '*', $condition);
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
    //////////////////////////////////////////////////////////////

    public function permohonan()
    {
        $jns = $this->uri->segment(3);
        $data['jns_permohonan'] = $jns;

        $condition         = [];
        $data['provinsi']  = $this->mastermod->get_master_spec('ref_provinsi', '*', $condition)->result_array();

        $condition[] = ['sts', 1];
        $condition[] = ['jns_permohonan', $jns];
        $data['kelengkapan_warkah'] = $this->mastermod->get_master_spec('ref_permohonan_berkas', '*', $condition)->result_array();

        $this->template->load('home/template', 'home/frmpstb', $data);
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
        $jns_permohonan = $this->input->post('jns_permohonan');

        $data1 = [
            'nm_perusahaan' => $perusahaan,
            'propinsi' => $propinsi,
            'dati2' => $dati2,
            'jns_permohonan' => $jns_permohonan,
            'created_date' => date('Y-m-d H:i:s'),
            'created_uid' => $_SESSION['user_id'],
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $insertID = $this->mastermod->insert_master('t_permohonan_pengukuran', $data1);

        if ($insertID) {
            for ($i = 0; $i < count($idberkas); $i++) {
                if ($this->upload->do_upload('scFile' . $idberkas[$i])) {
                    $uploadData = $this->upload->data();
                    $namaFile[$i] = $uploadData['file_name'];
                } else {
                    $namaFile[$i] = '';
                }

                $data2 = [
                    'permohonan_id' => $insertID,
                    'ref_permohonan_berkas' => $idberkas[$i],
                    'sts_ada' => $sts_berkas[$i],
                    'sts_sftcopy' => $copy[$i],
                    'scfile' => $namaFile[$i],
                    'keterangan' => $keterangan[$i],
                    'created_date' => date('Y-m-d H:i:s'),
                    'created_uid' => $_SESSION['user_id'],
                    'updated_date' => date('Y-m-d H:i:s'),
                    'updated_uid' => $_SESSION['user_id']
                ];
                $this->mastermod->insert_master('t_permohonan_berkas', $data2);
            }

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
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
        $row = $this->mastermod->get_master_spec('t_permohonan_pengukuran', '*', $cond)->row_array();

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row['propinsi']];
        $row2 = $this->mastermod->get_master_spec('ref_dati2', '*', $cond)->result();

        $condition = [];
        $condition[] = ['permohonan_id', $row['id']];
        $data['warkah'] = $this->mastermod->get_master_spec('v_permohonan_berkas', '*', $condition)->result_array();

        $data['permohonan'] = $row;
        $data['dati2'] = $row2;

        $this->template->load('home/template', 'home/frmpstb_ed', $data);
    }

    public function pstb_ed_sv()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|pdf|jpeg';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        $id_pstb = $this->input->post('permohonanID');
        $perusahaan = $this->input->post('nm_perusahaan');
        $propinsi = $this->input->post('provinsi');
        $dati2 = $this->input->post('dati2');
        $id_kelengkapan_warkah = $this->input->post('wrkID');
        $sts_berkas = $this->input->post('stsberkas');
        $copy = $this->input->post('sftcopy');
        $keterangan = $this->input->post('keterangan');
        $scfile_old = $this->input->post('file_old');

        $data1 = [
            'nm_perusahaan' => $perusahaan,
            'propinsi' => $propinsi,
            'dati2' => $dati2,
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => 1
        ];
        $where = ['id' => $id_pstb];
        $update = $this->mastermod->update_master($where, 't_permohonan_pengukuran', $data1);

        if ($update) {

            for ($i = 0; $i < count($id_kelengkapan_warkah); $i++) {
                if ($this->upload->do_upload('scFile' . $id_kelengkapan_warkah[$i])) {
                    $uploadData = $this->upload->data();
                    $namaFile[$i] = $uploadData['file_name'];
                } else {
                    $namaFile[$i] = $scfile_old[$i];
                }

                $data2 = [
                    'sts_ada' => $sts_berkas[$i],
                    'sts_sftcopy' => $copy[$i],
                    'scfile' => $namaFile[$i],
                    'keterangan' => $keterangan[$i],
                    'updated_date' => date('Y-m-d H:i:s'),
                    'updated_uid' => 1
                ];
                $where = ['id' => $id_kelengkapan_warkah[$i]];
                $this->mastermod->update_master($where, 't_permohonan_berkas', $data2);
            }

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Update data successfull');
            redirect('./home/loketberkas');
        }
    }

    public function pstb_del()
    {
        $id = $this->uri->segment('3');

        $delete = $this->mastermod->delete_master($id, 'pstb_id', 't_permohonan_berkas');
        if ($delete) {
            $del = $this->mastermod->delete_master($id, 'id', 'tbl_permohonan_pengukuran');

            if ($del) {
                $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Delete data successfull');
                redirect('./home/loketberkas');
            }
        }
    }
}
