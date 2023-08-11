<?php
class Home_model extends CI_Model
{

    private $db2;
    public function __construct()
    {
        parent::__construct();
        //$this->db2 = $this->load->database('db2', TRUE);
    }

    function carisppt_bkp($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop)
    {
        $this->db2->where("KD_PROPINSI", $kdprop);
        $this->db2->where("KD_DATI2", $kddt2);
        $this->db2->where("KD_KECAMATAN", $kdkec);
        $this->db2->where("KD_KELURAHAN", $kdkel);
        $this->db2->where("KD_BLOK", $kdbl);
        $this->db2->where("NO_URUT", $nourut);
        $this->db2->where("KD_JNS_OP", $kdop);
        $query = $this->db2->get('SPPT');
        return $query;
    }

    function carisppt($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop)
    {
        $sql = "select KD_PROPINSI, KD_DATI2, KD_KECAMATAN, KD_KELURAHAN, KD_BLOK, NO_URUT, KD_JNS_OP, NM_WP_SPPT, 
		JLN_WP_SPPT, BLOK_KAV_NO_WP_SPPT, KELURAHAN_WP_SPPT, KOTA_WP_SPPT, 
		to_char(tgl_jatuh_tempo_sppt,'DD-MM-YYYY') as tgl_jatuh_tempo_sppt, EXTRACT(YEAR FROM TGL_JATUH_TEMPO_SPPT) as tahun,
		thn_pajak_sppt, pbb_terhutang_sppt, pbb_yg_harus_dibayar_sppt  
				from sppt 
				where 
				kd_propinsi='$kdprop' and 
				kd_dati2='$kddt2' and 
				kd_kecamatan='$kdkec' and 
				kd_kelurahan='$kdkel' and 
				kd_blok='$kdbl' and 
				no_urut='$nourut' and 
				kd_jns_op='$kdop' and 
				status_pembayaran_sppt='0' 
				order by thn_pajak_sppt desc 
				";
        $query = $this->db2->query($sql);
        return $query;
    }

    function caridop($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop)
    {
        $sql = "SELECT * FROM SPPT A, DAT_OBJEK_PAJAK B WHERE
		A.KD_PROPINSI = '$kdprop' AND
		A.KD_DATI2 = '$kddt2' AND 
		A.KD_KECAMATAN = '$kdkec' AND
		A.KD_KELURAHAN='$kdkel' AND
		A.KD_BLOK='$kdbl' AND
		A.NO_URUT='$nourut' AND
		A.KD_JNS_OP='$kdop' AND
		A.KD_PROPINSI = B.KD_PROPINSI AND
		A.KD_DATI2 = B.KD_DATI2 AND
		A.KD_KECAMATAN = B.KD_KECAMATAN AND
		A.KD_KELURAHAN = B.KD_KELURAHAN AND
		A.KD_BLOK = B.KD_BLOK AND
		A.NO_URUT = B.NO_URUT AND
		A.KD_JNS_OP = B.KD_JNS_OP";
        $query = $this->db2->query($sql);
        return $query;
    }

    function refwil($kdprop, $kddt2, $kdkec, $kdkel)
    {
        $this->db2->where("A.KD_PROPINSI", $kdprop);
        $this->db2->where("B.KD_PROPINSI", $kdprop);
        $this->db2->where("B.KD_DATI2", $kddt2);
        $this->db2->where("C.KD_PROPINSI", $kdprop);
        $this->db2->where("C.KD_DATI2", $kddt2);
        $this->db2->where("C.KD_KECAMATAN", $kdkec);
        $this->db2->where("D.KD_PROPINSI", $kdprop);
        $this->db2->where("D.KD_DATI2", $kddt2);
        $this->db2->where("D.KD_KECAMATAN", $kdkec);
        $this->db2->where("D.KD_KELURAHAN", $kdkel);
        $query = $this->db2->get('REF_PROPINSI A, REF_DATI2 B, REF_KECAMATAN C, REF_KELURAHAN D');
        return $query;
    }

    function caridop_bkp($kdprop, $kddt2, $kdkec, $kdkel, $kdbl, $nourut, $kdop)
    {
        $this->db->where("A.KD_PROPINSI", $kdprop);
        $this->db->where("A.KD_DATI2", $kddt2);
        $this->db->where("A.KD_KECAMATAN", $kdkec);
        $this->db->where("A.KD_KELURAHAN", $kdkel);
        $this->db->where("A.KD_BLOK", $kdbl);
        $this->db->where("A.NO_URUT", $nourut);
        $this->db->where("A.KD_JNS_OP", $kdop);
        $this->db->where("A.SUBJEK_PAJAK_ID = B.SUBJEK_PAJAK_ID");
        $this->db->where("C.KD_PROPINSI", $kdprop);
        $this->db->where("C.KD_DATI2", $kddt2);
        $this->db->where("C.KD_KECAMATAN", $kdkec);
        $this->db->where("C.KD_KELURAHAN", $kdkel);
        $this->db->where("C.KD_BLOK", $kdbl);
        $this->db->where("C.NO_URUT", $nourut);
        $this->db->where("C.KD_JNS_OP", $kdop);
        $this->db->where("D.KD_PROPINSI", $kdprop);
        $this->db->where("D.KD_DATI2", $kddt2);
        $this->db->where("D.KD_KECAMATAN", $kdkec);
        $this->db->where("D.KD_KELURAHAN", $kdkel);
        $this->db->where("E.KD_PROPINSI", $kdprop);
        $this->db->where("E.KD_DATI2", $kddt2);
        $this->db->where("E.KD_KECAMATAN", $kdkec);
        $this->db->where("E.KD_KELURAHAN", $kdkel);
        $this->db->where("E.KD_BLOK", $kdbl);
        $this->db->where("E.NO_URUT", $nourut);
        $this->db->where("E.KD_JNS_OP", $kdop);
        $this->db->where("F.KD_PROPINSI", $kdprop);
        $this->db->where("F.KD_DATI2", $kddt2);
        $this->db->where("F.KD_KECAMATAN", $kdkec);
        $this->db->where("F.KD_KELURAHAN", $kdkel);
        $this->db->where("F.KD_BLOK", $kdbl);
        $this->db->where("F.NO_URUT", $nourut);
        $this->db->where("F.KD_JNS_OP", $kdop);
        $this->db->where("E.KD_JPB = G.KD_JPB");
        $src = $this->db->get('DAT_OBJEK_PAJAK A,DAT_SUBJEK_PAJAK B,DAT_OP_BUMI C,REF_KELURAHAN D,DAT_OP_BANGUNAN E,DAT_FASILITAS_BANGUNAN F,REF_JPB G');
        return $src;
    }

    //Nomor Pelayanan
    function berkaspst()
    {
        $cy = date('Y');
        $this->db->select("*");
        $this->db->where("A.THN_PELAYANAN='2017' AND A.KD_JNS_PELAYANAN=B.KD_JNS_PELAYANAN");
        $sql = $this->db->get('PST_DETAIL A,REF_JNS_PELAYANAN B');
        return $sql;
    }

    //Cari Nop Besar
    public function cnb($kdprop, $kddt2, $kdkec, $kdkel, $kdbl)
    {
        $this->db->select_max('NO_URUT');
        $this->db->where("KD_PROPINSI", $kdprop);
        $this->db->where("KD_DATI2", $kddt2);
        $this->db->where("KD_KECAMATAN", $kdkec);
        $this->db->where("KD_KELURAHAN", $kdkel);
        $this->db->where("KD_BLOK", $kdbl);
        $query = $this->db->get('DAT_OBJEK_PAJAK');

        return $query;
    }

    //Dat Perubahan NOP
    public function perubahanop()
    {
        $this->db->select("*");
        $sql = $this->db->get('PERUBAHAN_NOP');
        return $sql;
    }

    //Pemakai
    function datpemakai()
    {
        $this->db->select("*");
        $this->db->where("A.NIP = B.NIP AND A.NIP = C.NIP AND B.KD_WEWENANG = D.KD_WEWENANG");
        $sql = $this->db->get('DAT_LOGIN A,POSISI_PEGAWAI B,PEGAWAI C,WEWENANG D');
        return $sql;
    }

    //Pemakai
    function datznt()
    {
        $this->db->select("*");
        $this->db->where("A.KD_KECAMATAN = C.KD_KECAMATAN AND A.KD_KELURAHAN = C.KD_KELURAHAN AND B.KD_KECAMATAN = C.KD_KECAMATAN");
        $sql = $this->db->get('DAT_ZNT A, REF_KECAMATAN B, REF_KELURAHAN C');
        return $sql;
    }

    function getPbb($nop)
    {
        $kd_propinsi    = substr($nop, 0, 2);
        $kd_dati2       = substr($nop, 2, 2);
        $kd_kecamatan   = substr($nop, 4, 3);
        $kd_kelurahan   = substr($nop, 7, 3);
        $kd_blok        = substr($nop, 10, 3);
        $no_urut        = substr($nop, 13, 4);
        $kd_jns_op      = substr($nop, 17, 1);
        $sql = "select NM_WP_SPPT, JLN_WP_SPPT, BLOK_KAV_NO_WP_SPPT, KELURAHAN_WP_SPPT, KOTA_WP_SPPT, RT_WP_SPPT,RW_WP_SPPT,
			to_char(tgl_jatuh_tempo_sppt,'DD-MM-YYYY') as tgl_jatuh_tempo_sppt, EXTRACT(YEAR FROM TGL_JATUH_TEMPO_SPPT) as tahun,
			thn_pajak_sppt, pbb_terhutang_sppt, pbb_yg_harus_dibayar_sppt  
					from sppt 
					where 
					kd_propinsi='$kd_propinsi' and 
					kd_dati2='$kd_dati2' and 
					kd_kecamatan='$kd_kecamatan' and 
					kd_kelurahan='$kd_kelurahan' and 
					kd_blok='$kd_blok' and 
					no_urut='$no_urut' and 
					kd_jns_op='$kd_jns_op' and 
					status_pembayaran_sppt='0' 
					order by thn_pajak_sppt desc 
					";
        $query = $this->db2->query($sql);
        return $query;
    }

    function getPph($npwp)
    {
        $sql = "select * from master_pph_wp where npwp = '$npwp'";
        $query = $this->db2->query($sql);
        return $query;
    }

    function getOP($nop)
    {
        $kd_propinsi    = substr($nop, 0, 2);
        $kd_dati2       = substr($nop, 2, 2);
        $kd_kecamatan   = substr($nop, 4, 3);
        $kd_kelurahan   = substr($nop, 7, 3);
        $kd_blok        = substr($nop, 10, 3);
        $no_urut        = substr($nop, 13, 4);
        $kd_jns_op      = substr($nop, 17, 1);

        $q = "select jalan_op,blok_kav_no_op,rw_op,rt_op from dat_objek_pajak 
				where 
				kd_propinsi='$kd_propinsi' and 
				kd_dati2='$kd_dati2' and 
				kd_kecamatan='$kd_kecamatan' and 
				kd_kelurahan='$kd_kelurahan' and 
				kd_blok='$kd_blok' and 
				no_urut='$no_urut' and 
				kd_jns_op='$kd_jns_op' 
			";
        $query = $this->db2->query($q);
        return $query;
    }

    function getTbyr()
    {
        $qry = $this->db2->query("select * from tempat_pembayaran");
        return $qry;
    }
}
