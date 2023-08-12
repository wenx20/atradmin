<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    private $db2;
    public function __construct()
    {
        parent::__construct();
        //$this->db2 = $this->load->database('db2', TRUE);
        $this->load->model('login_model', 'logmod');
    }

    public function index()
    {
        $this->load->view('FrmLogin');
    }

    public function validate()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $cek  = $this->db->get_where('dat_login', ['username' => $username]);

        if ($cek->num_rows() > 0) {
            $userValid = $this->logmod->get_pwd($username)->row_array();
            $passdb = $userValid['password'];

            $passValid = password_verify($password, $passdb);
            if ($passValid) {
                $get_id = $this->logmod->get_id($username, $passdb)->result();
                foreach ($get_id as $val) {
                    $id = $val->id;
                    $nip            =    $val->nip;
                    $username       =    $val->username;
                    $password       =    $val->password;
                    $type           =    $val->leveluser;
                    $blok           =    $val->blokir;
                    $nama = $val->nama;

                    $data = array(
                        'user_id' => $id,
                        'user_nama' => $nama,
                        'user_nip'      => $nip,
                        'user_login'   => $username,
                        'user_pass' => $password,
                        'user_type'    => $type,
                        'user_blokir'        => $blok,
                        'is_logged_in'  => true
                    );
                    $this->session->set_userdata($data);
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('error', 'Ada Kesalahan Pada Password Anda!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username tidak Tersedia !');
            redirect('login');
        }
    }

    public function logout()
    {
        /*
        $this->logmod->update_data('dat_user', 'id', $this->session->userdata('id_user'), array('lastLogin' => date('Y-m-d H:i:s')));

        $array_items = array(
            'id_user',
            'user_id',
            'user_login',
            'user_password',
            'user_type',
            'departemen',
            'is_logged_in'
        );
        $this->session->unset_userdata($array_items);
        */

        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Anda Telah Signed Out!');
        redirect('login');
    }

    function reguser()
    {
        $this->form_validation->set_rules('username', 'USERNAME', 'trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('password', 'PASSWORD', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == true) {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $this->logmod->newreguser($user, $pass);
            $this->session->set_flashdata('suksesreg', 'Registrasi User Berhasil, Silahkan Login');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('login');
        }
    }
}
