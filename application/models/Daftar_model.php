<?php
class Daftar_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database(); 
    }

    public function insert_member($data)
    {
        return $this->db->insert('Member', $data);
    }

    public function get_member_by_ktp($noKtp)
    {
        $this->db->where('NoKTP', $noKtp);
        $query = $this->db->get('Member');
        return $query->row_array();  
    }

    public function get_last_member_id()
    {
        $this->db->select('ID');
        $this->db->order_by('ID', 'DESC');
        $query = $this->db->get('Member', 1);  
        return $query->row('ID');  
    }

    public function get_paket_by_id($paket_id) {
        $this->db->where('ID', $paket_id);
        return $this->db->get('paketaktivasi')->row();
    }

    public function get_member_by_idmember($id_member) {
        $this->db->where('IdMember', $id_member);
        return $this->db->get('member')->row();
    }

    public function insert_komisi($komisi_data) {
        return $this->db->insert('komisi', $komisi_data);
    }
    

}
