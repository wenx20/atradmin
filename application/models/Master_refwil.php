<?php
class Master_refwil extends CI_Model
{
    //RefWil
    public function getprovinsi()
    {
        $this->db->order_by("KD_PROVINSI");
        $query = $this->db->get("REF_PROVINSI");
        return $query->result();
    }

    function getdati2($provinsi_id)
    {
        $this->db->where('KD_PROVINSI', $provinsi_id);
        $this->db->order_by('KD_DATI2', 'ASC');
        $query = $this->db->get('ref_dati2');
        $output = '<option value="">- Select Dati2 -</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->KD_DATI2 . '">' . $row->NM_DATI2 . '</option>';
        }
        return $output;
    }

    function getkecamatan($dati2_id)
    {
        $this->db->where('KD_DATI2', $dati2_id);
        $this->db->order_by('KD_KECAMATAN', 'ASC');
        $query = $this->db->get('ref_kecamatan');
        $output = '<option value="">- Select Kecamatan -</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->KD_KECAMATAN . '">' . $row->NM_KECAMATAN . '</option>';
        }
        return $output;
    }

    function getkelurahan($kecamatan_id)
    {
        $this->db->where('KD_KECAMATAN', $kecamatan_id);
        $this->db->order_by('KD_KELURAHAN', 'ASC');
        $query = $this->db->get('ref_kelurahan');
        $output = '<option value="">- Select Kelurahan -</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->KD_KELURAHAN . '">' . $row->NM_KELURAHAN . '</option>';
        }
        return $output;
    }

    //refwil datawarga
    function getkec()
    {
        $this->db->order_by("NM_KECAMATAN");
        $query = $this->db->get("ref_kecamatan");
        return $query->result();
    }

    function getkel($kecamatan_id)
    {
        $this->db->where('KD_KECAMATAN', $kecamatan_id);
        $this->db->order_by('KD_KELURAHAN', 'ASC');
        $query = $this->db->get('ref_kelurahan');
        $output = '<option value="">- Select Kelurahan -</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->NM_KELURAHAN . '">' . $row->NM_KELURAHAN . '</option>';
        }
        return $output;
    }
}
