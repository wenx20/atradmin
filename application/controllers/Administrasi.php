<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (empty($_SESSION['user_id'])) {
            redirect('login');
            die();
        }

        date_default_timezone_set("Asia/Jakarta");

        $this->load->model('Master_model', 'mastermod');
        $this->load->library('word');
    }

    public function spsawal()
    {
        $cond = [];
        $data['sps'] = $this->mastermod->get_master_spec('v_sps', '*', $cond);

        $this->template->load('home/template', 'loket_administrasi/sps_list', $data);
    }

    public function sps_in()
    {
        $data['no_pengantar'] = date('dmY') . rand(1231, 7879);
        $data['simponi'] = rand(123456, 787980);;
        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);

        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $this->template->load('home/template', 'loket_administrasi/frmspsawal', $data);
    }

    public function sps_sv()
    {
        $id_perusahaan = $this->input->post('perusahaan');
        $no_pengantar = $this->input->post('no_pengantar');
        $tgl_pengantar = $this->input->post('tgl_pengantar');
        $simponi = $this->input->post('simponi');
        $tgl_simponi = $this->input->post('tgl_simponi');
        $wkt_simponi = $this->input->post('wkt_simponi');
        $penandatangan = $this->input->post('ttd');

        $data = [
            'no_pengantar' => $no_pengantar,
            'tgl_pengantar' => $tgl_pengantar,
            'id_perusahaan' => $id_perusahaan,
            'simponi' => $simponi,
            'tgl_simponi' => $tgl_simponi,
            'wkt_simponi' => $wkt_simponi,
            'pegawai_ttd' => $penandatangan,
            'created_date' => date('Y-m-d H:i:s'),
            'created_uid' => $_SESSION['user_id'],
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $insert = $this->mastermod->insert_master('t_sps', $data);

        if ($insert) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
            redirect('./administrasi/spsawal');
        } else {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-bolt" style="font-weight: bold;"></i> Insert data failed');
            redirect('./administrasi/spsawal');
        }
    }

    public function sps_print_1()
    {
        $PHPWord = $this->word; // New Word Document
        $section = $PHPWord->createSection(); // New portrait section
        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(2);
        $section->addText('Mohammad Rifqi Sucahyo.', array('name' => 'Verdana', 'color' => '006699'));
        $section->addTextBreak(2);
        $PHPWord->addFontStyle('rStyle', array('bold' => true, 'italic' => true, 'size' => 16));
        $PHPWord->addParagraphStyle('pStyle', array('align' => 'center', 'spaceAfter' => 100));
        // Save File / Download (Download dialog, prompt user to save or simply open it)
        $section->addText('Ini Adalah Demo PHPWord untuk CI', 'rStyle', 'pStyle');

        $html = "
                <table border='1'>
                    <tr>
                        <td> Teas aja pake word </td>
                    </tr>
                </table>
                ";
        $section->addText($html);

        $filename = 'just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
        $objWriter->save('php://output');
    }

    public function sps_print_2()
    {
        $PHPWord = $this->word; // New Word Document
        $section = $PHPWord->createSection(); // New portrait section
        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(2);
        $section->addText('Mohammad Rifqi Sucahyo.', array('name' => 'Verdana', 'color' => '006699'));
        $section->addTextBreak(2);
        $PHPWord->addFontStyle('rStyle', array('bold' => true, 'italic' => true, 'size' => 16));
        $PHPWord->addParagraphStyle('pStyle', array('align' => 'center', 'spaceAfter' => 100));
        // Save File / Download (Download dialog, prompt user to save or simply open it)
        $section->addText('Ini Adalah Demo PHPWord untuk CI', 'rStyle', 'pStyle');

        $html = "Sehubungan dengan surat permohonan dari Direktur Nama Perusahaan Nomor Nomor Surat Permohonan tanggal Tanggal Surat Permohonan perihal Perihal Surat Permohonan, bersama ini disampaikan hal-hal sebagai berikut:";
        $section->addText($html);

        $header = array('size' => 16, 'bold' => true);

        $rows = 10;
        $cols = 5;
        $section->addText(htmlspecialchars('Basic table'), $header);

        $table = $section->addTable();
        for ($r = 1; $r <= 8; $r++) {
            $table->addRow();
            for ($c = 1; $c <= 5; $c++) {
                $table->addCell(1750)->addText(htmlspecialchars("Row {$r}, Cell {$c}"));
            }
        }

        $section->addTextBreak(2);
        $section->addText(htmlspecialchars('Basic table 2'), $header);

        $table = $section->addTable();
        $table->addRow(900);
        // Add cells
        $TfontStyle = array('bold' => true, 'italic' => true, 'size' => 11, 'name' => 'Times New Roman', 'afterSpacing' => 0, 'Spacing' => 0, 'cellMargin' => 0);
        $styleCell = array('borderTopSize' => 1, 'borderTopColor' => 'black', 'borderLeftSize' => 1, 'borderLeftColor' => 'black', 'borderRightSize' => 1, 'borderRightColor' => 'black', 'borderBottomSize' => 1, 'borderBottomColor' => 'black');
        $table->addCell(2500, $styleCell)->addText('Date', $TfontStyle);
        $table->addCell(2000)->addText('Col 1');
        $table->addCell(2000)->addText('Col 2');
        $table->addCell(2000)->addText('Col 3');


        ////////////
        $section->addTextBreak(-5);
        $center = $PHPWord->addParagraphStyle('p2Style', array('align' => 'center', 'marginTop' => 1));
        $section->addText('this is my name', array('bold' => true, 'underline' => 'single', 'name' => 'TIMOTHYfont', 'size' => 14), $center);
        $section->addTextBreak(-.5);

        $section->addText('Tel:    00971-55-25553443 Fax: 00971-55- 2553443', array('name' => 'Times New Roman', 'size' => 13), $center);
        $section->addTextBreak(-.5);
        $section->addText('Quotation', array('bold' => true, 'underline' => 'single', 'name' => 'Times New Roman', 'size' => 16), $center);
        $section->addTextBreak(-.5);
        $tableStyle = array('borderSize' => 1, 'borderColor' => '999999', 'afterSpacing' => 0, 'Spacing' => 0, 'cellMargin' => 0);
        $styleCell = array('borderTopSize' => 1, 'borderTopColor' => 'black', 'borderLeftSize' => 1, 'borderLeftColor' => 'black', 'borderRightSize' => 1, 'borderRightColor' => 'black', 'borderBottomSize' => 1, 'borderBottomColor' => 'black');
        $fontStyle = array('italic' => true, 'size' => 11, 'name' => 'Times New Roman', 'afterSpacing' => 0, 'Spacing' => 0, 'cellMargin' => 0);
        $TfontStyle = array('bold' => true, 'italic' => true, 'size' => 11, 'name' => 'Times New Roman', 'afterSpacing' => 0, 'Spacing' => 0, 'cellMargin' => 0);
        $cfontStyle = array('allCaps' => true, 'italic' => true, 'size' => 11, 'name' => 'Times New Roman', 'afterSpacing' => 0, 'Spacing' => 0, 'cellMargin' => 0);
        $noSpace = array('textBottomSpacing' => -1);
        $table = $section->addTable('myOwnTableStyle', array('borderSize' => 1, 'borderColor' => '999999', 'afterSpacing' => 0, 'Spacing' => 0, 'cellMargin' => 0));
        $table2 = $section->addTable('myOwnTableStyle');
        $table->addRow(-0.5, array('exactHeight' => -5));
        // $countrystate = $news['CompanyDetails']['Country'] . ' - ' . $news['CompanyDetails']['State'];
        $table->addCell(2500, $styleCell)->addText('Date', $TfontStyle);
        // $table->addCell(6000, $styleCell)->addText($news['CompanyDetails']['Date'], $fontStyle);
        $table->addCell(1500, $styleCell)->addText('Cust. Ref', $TfontStyle);
        // $table->addCell(2000, $styleCell)->addText($news['CompanyDetails']['Reference'], $fontStyle);
        $table->addRow();
        $table->addCell(2500, $styleCell)->addText('Company Name', $TfontStyle);
        // $table->addCell(6000, $styleCell)->addText($news['CompanyDetails']['CompanyName'], $cfontStyle);
        $table->addCell(1500, $styleCell)->addText('Tel', $TfontStyle);
        // $table->addCell(2000, $styleCell)->addText($news['CompanyDetails']['Tel'], $fontStyle);
        $table->addRow();
        $table->addCell(2500, $styleCell)->addText('Country', $TfontStyle);
        // $table->addCell(6000, $styleCell)->addText($countrystate, $fontStyle);
        $table->addCell(1500, $styleCell)->addText('Fax', $TfontStyle);
        // $table->addCell(2000, $styleCell)->addText($news['CompanyDetails']['Fex'], $fontStyle);
        $table->addRow();
        $table->addCell(2500, $styleCell)->addText('Attn.', $TfontStyle);
        // $table->addCell(6000, $styleCell)->addText($news['CompanyDetails']['ContectPerson'] . ' ' . $news['CompanyDetails']['Designation'] . ' ' . $news['CompanyDetails']['MobileNum'], $fontStyle);
        $table->addCell(1500, $styleCell)->addText('Email', $TfontStyle);
        // $table->addCell(2000, $styleCell)->addText($news['CompanyDetails']['Email'], $fontStyle);
        $table->addRow();
        $table->addCell(2500, $styleCell)->addText('Subject', $TfontStyle);
        // $table->addCell(6000, $styleCell)->addText($news['CompanyDetails']['Subject'], $fontStyle);
        $table->addCell(1500, $styleCell)->addText('From', $TfontStyle);
        // $table->addCell(2000, $styleCell)->addText($news['CompanyDetails']['From'], $fontStyle);
        $table->addRow();
        $table->addCell(2500, $styleCell)->addText('Quotation No.', $TfontStyle);
        // $table->addCell(6000, $styleCell)->addText($news['CompanyDetails']['QuotationNum'], $fontStyle);
        $table->addCell(1500, $styleCell)->addText('pages', $TfontStyle);
        // $table->addCell(2000, $styleCell)->addText($news['CompanyDetails']['Pages'], $fontStyle);

        $section->addTextBreak(-1);
        ///////////////
        $filename = 'just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
        $objWriter->save('php://output');
    }

    public function sps_print_3()
    {
        $cond = [];
        $row = $this->mastermod->get_master_spec('v_sps', '*', $cond)->row();

        $PHPWord = $this->word; // New Word Document
        $section = $PHPWord->createSection(); // New portrait section
        // Add text elements
        // $section->addText('Hello World!');
        // $section->addTextBreak(2);
        // $section->addText('Mohammad Rifqi Sucahyo.', array('name' => 'Verdana', 'color' => '006699'));
        $section->addTextBreak(2);
        $PHPWord->addFontStyle('rStyle', array('bold' => true, 'italic' => true, 'size' => 16));
        $PHPWord->addParagraphStyle('pStyle', array('align' => 'left', 'spaceAfter' => 30));
        // Save File / Download (Download dialog, prompt user to save or simply open it)
        $section->addText('Ini Adalah Demo PHPWord untuk CI', 'rStyle', 'pStyle');

        $html = "Sehubungan dengan surat permohonan dari Direktur " . $row->nm_perusahaan . " Nomor " . $row->no_permohonan . " tanggal " . $row->tgl_permohonan . " perihal [perihal_permohonan], bersama ini disampaikan hal-hal sebagai berikut:
                ";
        $section->addText($html, array('spaceAfter' => 100));

        $html1 = "1.	Bahwa berdasarkan hasil telaah permohonan pengukuran Kadastral " . $row->nm_perusahaan . " sebagaimana dimaksud, diketahui bahwa luas 
                yang dimohonkan adalah ± " . $row->luas_permohonan . " Ha. Sehingga sesuai Peraturan Pemerintah Republik Indonesia Nomor 128 Tahun 2015 tentang 
                Jenis dan Tarif atas Jenis Penerimaan Negara Bukan Pajak yang berlaku pada Kementerian Agraria dan Tata Ruang/Badan Pertanahan 
                Nasional dan Peraturan Menteri Keuangan Nomor 51/PMK.02/2012, maka besar biaya permohonan untuk luas areal ± " . $row->luas_permohonan . " Ha 
                adalah:";
        $section->addText($html1);

        $filename = 'just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
        $objWriter->save('php://output');
    }

    public function sps_print()
    {
        $cond = [];
        $row = $this->mastermod->get_master_spec('v_sps', '*', $cond)->row();

        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $data['propinsi'] = $this->mastermod->get_master_spec('ref_provinsi', 'NM_PROVINSI', $cond)->row_array()['NM_PROVINSI'];

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $cond[] = ['KD_DATI2', $row->dati2];
        $data['dati2'] = $this->mastermod->get_master_spec('ref_dati2', 'NM_DATI2', $cond)->row_array()['NM_DATI2'];

        if ($row->kategori_lahan == 'pertanian') {
            $kolhsbku = 'hsbku_pertanian';
        } else {
            $kolhsbku = 'hsbku_nonpertanian';
        }
        $cond = [];
        $cond[] = ['kd_propinsi', $row->propinsi];
        $data['hsbku'] = $this->mastermod->get_master_spec('ref_hsbku', $kolhsbku, $cond)->row_array()[$kolhsbku];

        $data['sps'] = $row;

        $this->load->view('loket_administrasi/sps_print', $data);
    }

    public function sps_ed()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $row = $this->mastermod->get_master_spec('t_sps', '*', $cond)->row_array();

        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);

        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $data['sps'] = $row;

        $this->template->load('home/template', 'loket_administrasi/sps_ed', $data);
    }

    public function sps_ed_sv()
    {
        $id_sps = $this->input->post('spsID');
        $id_perusahaan = $this->input->post('perusahaan');
        $no_pengantar = $this->input->post('no_pengantar');
        $tgl_pengantar = $this->input->post('tgl_pengantar');
        $tgl_simponi = $this->input->post('tgl_simponi');
        $wkt_simponi = $this->input->post('wkt_simponi');
        $penandatangan = $this->input->post('ttd');

        $data = [
            'no_pengantar' => $no_pengantar,
            'tgl_pengantar' => $tgl_pengantar,
            'id_perusahaan' => $id_perusahaan,
            'tgl_simponi' => $tgl_simponi,
            'wkt_simponi' => $wkt_simponi,
            'pegawai_ttd' => $penandatangan,
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $where = ['id' => $id_sps];
        $update = $this->mastermod->update_master($where, 't_sps', $data);

        if ($update) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Update data successfull');
            redirect('./administrasi/spsawal');
        } else {
            $this->session->set_flashdata('failed_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Update data failed');
            redirect('./administrasi/spsawal');
        }
    }

    public function sps_del()
    {
        $id = $this->uri->segment(3);
        $delete = $this->mastermod->delete_master($id, 'id', 't_sps');

        if ($delete) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Delete data successfull');
            redirect('./administrasi/spsawal');
        } else {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Delete data failed');
            redirect('./administrasi/spsawal');
        }
    }

    public function sugaspar()
    {
        $cond = [];
        $data['surat'] = $this->mastermod->get_master_spec('v_sugaspar', '*', $cond)->result_array();

        $this->template->load('home/template', 'loket_administrasi/sugastar_list', $data);
    }

    public function sugastar_in()
    {
        $cond = [];
        $data['dp'] = $this->mastermod->get_master_order('dat_pegawai', '*', $cond, 'nama');

        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $data['jabatanlapangan'] = $this->mastermod->get_master_spec('ref_jabatan_lapangan', '*', $cond)->result_array();

        $this->template->load('home/template', 'loket_administrasi/sugastar_in', $data);
    }

    public function sugastar_sv()
    {
        $perusahaan = $this->input->post('perusahaan');
        $no_surtug = $this->input->post('no_surtug');
        $tgl_surtug = $this->input->post('tgl_surtug');
        $ttd_surtug = $this->input->post('ttd_surtug');
        $no_pengantar = $this->input->post('no_pengantar');
        $tgl_pengantar = $this->input->post('tgl_pengantar');
        $pegawaiTgs = $this->input->post('pegawai_tgs'); // array
        $jabatan = $this->input->post('jabatan'); // array
        $tgl_brkt = $this->input->post('tgl_berangkat');
        $jml_petugaspusat = $this->input->post('petugas_pusat');
        $jml_petugaskanwil = $this->input->post('petugas_kanwil');
        $jml_petugaskantah = $this->input->post('petugas_kantah');
        $ibukota_prop = $this->input->post('ibukota_prop');
        $ibukota_kab = $this->input->post('ibukota_kab');
        $thn_anggaran = $this->input->post('tahun_anggaran');
        $nodipa = $this->input->post('no_dipa');
        $tgl_dipa = $this->input->post('tgl_dipa');

        $data = [
            'id_perusahaan' => $perusahaan,
            'no_surat' => $no_surtug,
            'tgl_surat' => $tgl_surtug,
            'ttdsurat' => $ttd_surtug,
            'no_pengantar' => $no_pengantar,
            'tgl_pengantar' => $tgl_pengantar,
            'tgl_berangkat' => $tgl_brkt,
            'thn_anggaran' => $thn_anggaran,
            'nomor_dipa' => $nodipa,
            'tgl_dipa' => $tgl_dipa,
            'jml_petugaspusat' => $jml_petugaspusat,
            'jml_petugaskanwil' => $jml_petugaskanwil,
            'jml_petugaskantah' => $jml_petugaskantah,
            'ibukota_prop' => $ibukota_prop,
            'ibukota_kab' => $ibukota_kab,
            'created_date' => date('Y-m-d H:i:s'),
            'created_uid' => $_SESSION['user_id'],
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $insertID = $this->mastermod->insert_master('t_sugaspar', $data);

        if ($insertID) {
            for ($i = 0; $i < count($pegawaiTgs); $i++) {
                $data2 = [
                    'id_sugaspar' => $insertID,
                    'id_pegawai' => $pegawaiTgs[$i],
                    'jabatan_lapangan' => $jabatan[$i]
                ];
                $insert = $this->mastermod->insert_master('t_pegawai_yg_ditugaskan', $data2);
            }

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
            redirect('./administrasi/sugaspar');
        }
    }

    public function sugastar_print_tugas()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $row = $this->mastermod->get_master_spec('v_sugaspar', '*', $cond)->row();

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $data['propinsi'] = $this->mastermod->get_master_spec('ref_provinsi', 'NM_PROVINSI', $cond)->row_array()['NM_PROVINSI'];

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $cond[] = ['KD_DATI2', $row->dati2];
        $data['dati2'] = $this->mastermod->get_master_spec('ref_dati2', 'NM_DATI2', $cond)->row_array()['NM_DATI2'];

        $cond = [];
        $cond[] = ['id_sugaspar', $id];
        $data['petugaslapangan'] = $this->mastermod->get_master_spec('v_petugas_lapangan', '*', $cond)->result_array();

        $data['row'] = $row;
        $this->load->view('loket_administrasi/sugastar_print', $data);
    }

    public function sugastar_print_pengantar()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $row = $this->mastermod->get_master_spec('v_sugaspar', '*', $cond)->row();

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $data['propinsi'] = $this->mastermod->get_master_spec('ref_provinsi', 'NM_PROVINSI', $cond)->row_array()['NM_PROVINSI'];

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $cond[] = ['KD_DATI2', $row->dati2];
        $data['dati2'] = $this->mastermod->get_master_spec('ref_dati2', 'NM_DATI2', $cond)->row_array()['NM_DATI2'];

        $cond = [];
        $cond[] = ['id_sugaspar', $id];
        $data['petugaslapangan'] = $this->mastermod->get_master_spec('v_petugas_lapangan', '*', $cond)->result_array();

        $data['row'] = $row;
        $this->load->view('loket_administrasi/sugastar_print_pengantar', $data);
    }

    public function sugastar_print_tndterima()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $row = $this->mastermod->get_master_spec('v_sugaspar', '*', $cond)->row();

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $data['propinsi'] = $this->mastermod->get_master_spec('ref_provinsi', 'NM_PROVINSI', $cond)->row_array()['NM_PROVINSI'];

        $cond = [];
        $cond[] = ['KD_PROVINSI', $row->propinsi];
        $cond[] = ['KD_DATI2', $row->dati2];
        $data['dati2'] = $this->mastermod->get_master_spec('ref_dati2', 'NM_DATI2', $cond)->row_array()['NM_DATI2'];

        $cond = [];
        $cond[] = ['id_sugaspar', $id];
        $data['petugaslapangan'] = $this->mastermod->get_master_spec('v_petugas_lapangan', '*', $cond)->result_array();

        $data['row'] = $row;
        $this->load->view('loket_administrasi/sugastar_print_tndterima', $data);
    }

    public function sugastar_ed()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $data_surat = $this->mastermod->get_master_spec('t_sugaspar', '*', $cond)->row();

        $cond = [];
        $data['dp'] = $this->mastermod->get_master_order('dat_pegawai', '*', $cond, 'nama');

        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $data['jabatanlapangan'] = $this->mastermod->get_master_spec('ref_jabatan_lapangan', '*', $cond)->result_array();

        $cond = [];
        $cond[] = ['id_sugaspar', $id];
        $cond[] = ['sts', 1];
        $data['petugaslapangan'] = $this->mastermod->get_master_spec('t_pegawai_yg_ditugaskan', '*', $cond)->result_array();

        $data['datax'] = $data_surat;
        $this->template->load('home/template', 'loket_administrasi/sugastar_ed', $data);
    }

    public function sugastar_ed_sv()
    {
        $id = $this->input->post('id_sugaspar');
        $perusahaan = $this->input->post('perusahaan');
        $no_surtug = $this->input->post('no_surtug');
        $tgl_surtug = $this->input->post('tgl_surtug');
        $ttd_surtug = $this->input->post('ttd_surtug');
        $no_pengantar = $this->input->post('no_pengantar');
        $tgl_pengantar = $this->input->post('tgl_pengantar');
        $tgl_brkt = $this->input->post('tgl_berangkat');
        $jml_petugaspusat = $this->input->post('petugas_pusat');
        $jml_petugaskanwil = $this->input->post('petugas_kanwil');
        $jml_petugaskantah = $this->input->post('petugas_kantah');
        $ibukota_prop = $this->input->post('ibukota_prop');
        $ibukota_kab = $this->input->post('ibukota_kab');
        $thn_anggaran = $this->input->post('tahun_anggaran');
        $nodipa = $this->input->post('no_dipa');
        $tgl_dipa = $this->input->post('tgl_dipa');
        $id_ptgslpg = $this->input->post('id_petugaslapangan'); // array
        $pegawaiTgs = $this->input->post('pegawai_tgs'); // array
        $jabatan = $this->input->post('jabatan'); // array

        $data = [
            'id_perusahaan' => $perusahaan,
            'no_surat' => $no_surtug,
            'tgl_surat' => $tgl_surtug,
            'ttdsurat' => $ttd_surtug,
            'no_pengantar' => $no_pengantar,
            'tgl_pengantar' => $tgl_pengantar,
            'tgl_berangkat' => $tgl_brkt,
            'thn_anggaran' => $thn_anggaran,
            'nomor_dipa' => $nodipa,
            'tgl_dipa' => $tgl_dipa,
            'jml_petugaspusat' => $jml_petugaspusat,
            'jml_petugaskanwil' => $jml_petugaskanwil,
            'jml_petugaskantah' => $jml_petugaskantah,
            'ibukota_prop' => $ibukota_prop,
            'ibukota_kab' => $ibukota_kab,
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $where = ['id' => $id];
        $update = $this->mastermod->update_master($where, 't_sugaspar', $data);

        if ($update) {
            $d = [
                'sts' => 0
            ];
            $where = ['id_sugaspar' => $id];
            $upd_sts_pg = $this->mastermod->update_master($where, 't_pegawai_yg_ditugaskan', $d);

            if ($upd_sts_pg) {
                for ($i = 0; $i < count($id_ptgslpg); $i++) {

                    if ($id_ptgslpg[$i] > 0) {
                        $data1 = [
                            'id_pegawai' => $pegawaiTgs[$i],
                            'jabatan_lapangan' => $jabatan[$i],
                            'sts' => 1
                        ];
                        $where = ['id' => $id_ptgslpg[$i]];
                        $this->mastermod->update_master($where, 't_pegawai_yg_ditugaskan', $data1);
                    } else {
                        $data2 = [
                            'id_sugaspar' => $id,
                            'id_pegawai' => $pegawaiTgs[$i],
                            'jabatan_lapangan' => $jabatan[$i]
                        ];
                        $insert = $this->mastermod->insert_master('t_pegawai_yg_ditugaskan', $data2);
                    }
                }
            }

            $this->db->delete('t_pegawai_yg_ditugaskan', array('id_sugaspar' => $id, 'sts' => 0));

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Update data successfull');
            redirect('./administrasi/sugaspar');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Update data failed, something wrong.');
            redirect('./administrasi/sugastar_ed/' . $id);
        }
    }

    public function sugastar_del()
    {
        $id = $this->uri->segment(3);
        $del = $this->mastermod->delete_master($id, 'id_sugaspar', 't_pegawai_yg_ditugaskan');

        if ($del) {
            $this->mastermod->delete_master($id, 'id', 't_sugaspar');

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Delete data successfull');
            redirect('./administrasi/sugaspar');
        } else {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Delete data failed');
            redirect('./administrasi/sugaspar');
        }
    }

    public function formdinamis()
    {
        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);
        $data['jabatanlapangan'] = $this->mastermod->get_master_spec('ref_jabatan_lapangan', '*', $cond)->result_array();

        $this->load->view('loket_administrasi/formdinamis', $data);
    }

    public function nodin()
    {
        $cond = [];
        $data['nodin'] = $this->mastermod->get_master_spec('v_nodin', '*', $cond)->result_array();

        $this->template->load('home/template', 'loket_administrasi/nodin', $data);
    }

    public function nodin_in()
    {
        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);
        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $this->template->load('home/template', 'loket_administrasi/nodin_in', $data);
    }

    public function nodin_sv()
    {
        $no_nodin = $this->input->post('no_nodin');
        $id_perusahaan = $this->input->post('perusahaan'); // array 
        $ttd_nodin = $this->input->post('ttd_nodin');

        $data = [
            'nomor_nodin' => $no_nodin,
            'ttd_nodin' => $ttd_nodin,
            'jml_perusahaan' => count($id_perusahaan),
            'created' => date('Y-m-d H:i:s'),
            'created_uid' => $_SESSION['user_id'],
            'updated' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $insertID = $this->mastermod->insert_master('t_nodin', $data);

        if ($insertID) {
            for ($i = 0; $i < count($id_perusahaan); $i++) {
                $data1 = [
                    'id_nodin' => $insertID,
                    'id_perusahaan' => $id_perusahaan[$i]
                ];
                $this->mastermod->insert_master('t_nodin_company', $data1);
            }

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
            redirect('./administrasi/nodin');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Insret data failed, something wrong.');
            redirect('./administrasi/nodin_in/');
        }
    }

    public function nodin_print()
    {
        $cond = [];
        $data['nodin'] = $this->mastermod->get_master_spec('v_nodin', '*', $cond)->row();

        $cond[] = ['id_nodin', $data['nodin']->id];
        $data['nc'] = $this->mastermod->get_master_spec('v_nodin_company', '*', $cond)->result_array();

        $this->load->view('loket_administrasi/nodin_print', $data);
    }

    public function nodin_ed()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $data['nodin'] = $this->mastermod->get_master_spec('t_nodin', '*', $cond)->row();

        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);

        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $cond[] = ['id_nodin', $id];
        $data['nc'] = $this->mastermod->get_master_spec('t_nodin_company', '*', $cond)->result_array();

        $this->template->load('home/template', 'loket_administrasi/nodin_ed', $data);
    }

    public function nodin_ed_sv()
    {
        $id_nodin = $this->input->post('id_nodin');
        $no_nodin = $this->input->post('no_nodin');
        $id_nc = $this->input->post('id_nodin_company'); //array 
        $perusahaan = $this->input->post('perusahaan'); //array 
        $ttd = $this->input->post('ttd_nodin');

        $data = [
            'nomor_nodin' => $no_nodin,
            'ttd_nodin' => $ttd,
            'jml_perusahaan' => count($perusahaan),
            'updated' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $where = ['id' => $id_nodin];
        $update = $this->mastermod->update_master($where, 't_nodin', $data);

        if ($update) {
            //////
            $d = [
                'sts' => 0
            ];
            $where = ['id_nodin' => $id_nodin];
            $upd_sts_nc = $this->mastermod->update_master($where, 't_nodin_company', $d);

            if ($upd_sts_nc) {
                for ($i = 0; $i < count($id_nc); $i++) {

                    if ($id_nc[$i] > 0) {
                        $data1 = [
                            'id_perusahaan' => $perusahaan[$i],
                            'sts' => 1
                        ];
                        $where = ['id' => $id_nc[$i]];
                        $this->mastermod->update_master($where, 't_nodin_company', $data1);
                    } else {
                        $data2 = [
                            'id_nodin' => $id_nodin,
                            'id_perusahaan' => $perusahaan[$i]
                        ];
                        $insert = $this->mastermod->insert_master('t_nodin_company', $data2);
                    }
                }
            }

            $this->db->delete('t_nodin_company', array('id_nodin' => $id_nodin, 'sts' => 0));

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Update data successfull');
            redirect('./administrasi/nodin');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Update data failed');
            redirect('./administrasi/nodin_ed/' . $id_nodin);
        }
    }

    public function nodin_del()
    {
        $id = $this->uri->segment(3);
        $del = $this->mastermod->delete_master($id, 'id_nodin', 't_nodin_company');

        if ($del) {
            $this->mastermod->delete_master($id, 'id', 't_nodin');

            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Delete data successfull');
            redirect('./administrasi/nodin');
        } else {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Delete data failed');
            redirect('./administrasi/nodin');
        }
    }

    public function sbs()
    {
        $cond = [];
        $data['sbs'] = $this->mastermod->get_master_spec('t_sbs', '*', $cond)->result_array();

        $this->template->load('home/template', 'loket_administrasi/sbs', $data);
    }

    public function sbs_in()
    {
        $this->template->load('home/template', 'loket_administrasi/sbs_in');
    }

    public function sbs_sv()
    {
        $no_berkas = $this->input->post('no_berkas');
        $no_di302 = $this->input->post('di302');
        $no_di305 = $this->input->post('di305');
        $no_di306 = $this->input->post('di306');
        $tgl_sbs = $this->input->post('tgl_sbs');

        $data = [
            'no_berkas' => $no_berkas,
            'nomor_di_302' => $no_di302,
            'nomor_di_305' => $no_di305,
            'nomor_di_306' => $no_di306,
            'tgl_sbs' => date("Y-m-d", strtotime($tgl_sbs)),
            'created' => date('Y-m-d H:i:s'),
            'created_uid' => $_SESSION['user_id'],
            'updated' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $insert = $this->mastermod->insert_master('t_sbs', $data);

        if ($insert) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
            redirect('./administrasi/sbs');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Insret data failed, something wrong.');
            redirect('./administrasi/sbs_in');
        }
    }

    public function sbs_ed()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $data['row'] = $this->mastermod->get_master_spec('t_sbs', '*', $cond)->row();

        $this->template->load('home/template', 'loket_administrasi/sbs_ed', $data);
    }

    public function sbs_ed_sv()
    {
        $id = $this->input->post('sbs_id');
        $no_berkas = $this->input->post('no_berkas');
        $no_di302 = $this->input->post('di302');
        $no_di305 = $this->input->post('di305');
        $no_di306 = $this->input->post('di306');
        $tgl_sbs = $this->input->post('tgl_sbs');

        $data = [
            'no_berkas' => $no_berkas,
            'nomor_di_302' => $no_di302,
            'nomor_di_305' => $no_di305,
            'nomor_di_306' => $no_di306,
            'tgl_sbs' => date("Y-m-d", strtotime($tgl_sbs)),
            'updated' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $where = ['id' => $id];
        $update = $this->mastermod->update_master($where, 't_sbs', $data);

        if ($update) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Update data successfull');
            redirect('./administrasi/sbs');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Update data failed, something wrong.');
            redirect('./administrasi/sbs_in');
        }
    }

    public function sbs_del()
    {
        $id = $this->uri->segment(3);
        $del = $this->mastermod->delete_master($id, 'id', 't_sbs');

        if ($del) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Delete data successfull');
            redirect('./administrasi/sbs');
        } else {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Delete data failed');
            redirect('./administrasi/sbs');
        }
    }

    public function expose()
    {
        $cond = [];
        $data['undangan'] = $this->mastermod->get_master_spec('v_expose', '*', $cond)->result_array();

        $this->template->load('home/template', 'loket_administrasi/expose', $data);
    }

    public function expose_in()
    {
        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);
        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $this->template->load('home/template', 'loket_administrasi/expose_in', $data);
    }

    public function expose_sv()
    {
        $no_undangan = $this->input->post('no_undangan');
        $tujuan = $this->input->post('perusahaan');
        $tgl_undangan = $this->input->post('tgl_undangan');
        $wkt_undangan = $this->input->post('wkt_undangan');
        $id_zoom = $this->input->post('id_zoom');
        $pwd_zoom = $this->input->post('pwd_zoom');
        $ttd = $this->input->post('ttd');
        $hari = date('D', strtotime($tgl_undangan));

        switch ($hari) {
            case 'Sun':
                $hari_undg = "Minggu";
                break;
            case 'Mon':
                $hari_undg = "Senin";
                break;
            case 'Tue':
                $hari_undg = "Selasa";
                break;
            case 'Wed':
                $hari_undg = "Rabu";
                break;
            case 'Thu':
                $hari_undg = "Kamis";
                break;
            case 'Fri':
                $hari_undg = "Jumat";
                break;
            case 'Sat':
                $hari_undg = "Sabtu";
                break;
            default:
                $hari_undg = "undefined";
                break;
        }

        $data = [
            'no_undangan' => $no_undangan,
            'tujuan' => $tujuan,
            'tgl_undangan' => date('Y-m-d', strtotime($tgl_undangan)),
            'wkt_undangan' => $wkt_undangan,
            'hari' => $hari_undg,
            'id_zoom' => $id_zoom,
            'pwd_zoom' => $pwd_zoom,
            'ttd' => $ttd,
            'created' => date('Y-m-d H:i:s'),
            'created_uid' => $_SESSION['user_id'],
            'updated' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $insert = $this->mastermod->insert_master('t_expose', $data);

        if ($insert) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
            redirect('./administrasi/expose');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Insret data failed, something wrong.');
            redirect('./administrasi/expose_in');
        }
    }

    public function expose_print()
    {
        $id = $this->uri->segment(3);

        $cond = [];
        $cond[] = ['id', $id];
        $row = $this->mastermod->get_master_spec('v_expose', '*', $cond)->row();

        $data['row'] = $row;
        $this->load->view('loket_administrasi/expose_print', $data);
    }

    public function expose_ed()
    {
        $id = $this->uri->segment(3);
        $cond = [];
        $cond[] = ['id', $id];
        $data['row'] = $this->mastermod->get_master_spec('t_expose', '*', $cond)->row();

        $cond = [];
        $data['dp'] = $this->mastermod->get_master_spec('dat_pegawai', '*', $cond);
        $data['company'] = $this->mastermod->get_master_spec('t_permohonan_pengukuran', 'id, nm_perusahaan', $cond);

        $this->template->load('home/template', 'loket_administrasi/expose_ed', $data);
    }

    public function expose_ed_sv()
    {
        $id = $this->input->post('id_undangan');
        $no_undangan = $this->input->post('no_undangan');
        $tujuan = $this->input->post('perusahaan');
        $tgl_undangan = $this->input->post('tgl_undangan');
        $wkt_undangan = $this->input->post('wkt_undangan');
        $id_zoom = $this->input->post('id_zoom');
        $pwd_zoom = $this->input->post('pwd_zoom');
        $ttd = $this->input->post('ttd');
        $hari = date('D', strtotime($tgl_undangan));

        switch ($hari) {
            case 'Sun':
                $hari_undg = "Minggu";
                break;
            case 'Mon':
                $hari_undg = "Senin";
                break;
            case 'Tue':
                $hari_undg = "Selasa";
                break;
            case 'Wed':
                $hari_undg = "Rabu";
                break;
            case 'Thu':
                $hari_undg = "Kamis";
                break;
            case 'Fri':
                $hari_undg = "Jumat";
                break;
            case 'Sat':
                $hari_undg = "Sabtu";
                break;
            default:
                $hari_undg = "undefined";
                break;
        }

        $data = [
            'no_undangan' => $no_undangan,
            'tujuan' => $tujuan,
            'tgl_undangan' => date('Y-m-d', strtotime($tgl_undangan)),
            'wkt_undangan' => $wkt_undangan,
            'hari' => $hari_undg,
            'id_zoom' => $id_zoom,
            'pwd_zoom' => $pwd_zoom,
            'ttd' => $ttd,
            'updated' => date('Y-m-d H:i:s'),
            'updated_uid' => $_SESSION['user_id']
        ];
        $where = ['id' => $id];
        $update = $this->mastermod->update_master($where, 't_expose', $data);

        if ($update) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Insert data successfull');
            redirect('./administrasi/expose');
        } else {
            $this->session->set_flashdata('fail_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Insret data failed, something wrong.');
            redirect('./administrasi/expose_ed/' . $id);
        }
    }

    public function expose_del()
    {
        $id = $this->uri->segment(3);
        $del = $this->mastermod->delete_master($id, 'id', 't_expose');

        if ($del) {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Well done! Delete data successfull');
            redirect('./administrasi/expose');
        } else {
            $this->session->set_flashdata('sukses_input', '<i class="ace-icon fa fa-check" style="font-weight: bold;"></i> Delete data failed');
            redirect('./administrasi/expose');
        }
    }
}
