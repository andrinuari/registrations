<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_model');
        $this->load->library('form_validation');        
    }



	public function index()
	{
		$data = array('active_controller' => 'daftar',
        'active_function' => 'index');
        $this->load->view('template', $data);		        

	}

    public function submit(){
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $noKtp = $this->input->post('noKtp');
            $existing_member = $this->Daftar_model->get_member_by_ktp($noKtp);

            if ($existing_member) {
                $this->session->set_flashdata('message', 'Member dengan KTP ini sudah terdaftar.');
                redirect('daftar');
            } else {
                $new_member_id = $this->generate_member_id();


                $member_data = array(
                    'IdMember'            => $new_member_id,  
                    'Nama'          => $this->input->post('namaMember'),
                    'Alamat'        => $this->input->post('alamat'),
                    'Rt'        => $this->input->post('rt'),
                    'Rw'        => $this->input->post('rw'),
                    'Kelurahan'        => $this->input->post('kelurahan'),
                    'Kecamatan'        => $this->input->post('kecamatan'),
                    'KodePos'        => $this->input->post('kodePos'),                    
                    'JenisKelamin'  => $this->input->post('jenisKelamin'),
                    'NoKTP'         => $noKtp,
                    'TanggalLahir'  => $this->input->post('tanggalLahir'),
                    'TempatLahir'  => $this->input->post('tempatLahir'),
                    'NoHandphone'   => $this->input->post('noHp'),
                    'Email'         => $this->input->post('email'),
                    'NamaBank'      => $this->input->post('namaBank'),
                    'NoRekening'    => $this->input->post('noRekening'),
                    'IDUpline'      => $this->input->post('idUpline'),  
                    'IDSponsor'     => $this->input->post('idSponsor'),  
                    'Paket'     => $this->input->post('paket'),  
                    'NamaPaket'     => $this->input->post('namaPaket'),  
                    'ManagerArea'     => $this->input->post('managerArea'),  
                    'KartuStockist'     => $this->input->post('kartuStockist'),  
                    'Tempat'     => $this->input->post('tempat'),  
                    'StatusBayar'     => "Belum Lunas",  
                    'Status'     => "New",  
                    'Tanggal'     => $this->input->post('tanggal')  
                );
                
                // print_r($member_data);
                // return false;
                $insert_member = $this->Daftar_model->insert_member($member_data);
                $insert_id = $this->db->insert_id();

                if ($insert_member) {
                $id_sponsor = $this->input->post('idSponsor');  
                $sponsor = $this->Daftar_model->get_member_by_idmember($id_sponsor);  
                $paket_id = $this->input->post('paket');        
                
                $paket = $this->Daftar_model->get_paket_by_id($paket_id); 
                $jumlah_komisi = $paket->JumlahBonus;  

                $komisi_data = array(
                    'SponsorID'     => $sponsor->ID,          
                    'MemberBaruID'  => $insert_id,          
                    'PaketID'       => $paket_id,            
                    'JumlahKomisi'  => $jumlah_komisi,       
                    'TanggalKomisi' => date('Y-m-d H:i:s')  
                );

                $this->Daftar_model->insert_komisi($komisi_data);

            //    return false; 
                        $this->session->set_flashdata('message', 'Pendaftaran berhasil.');
                        redirect('daftar/success');
                    
                } else {
                    $this->session->set_flashdata('message', 'Pendaftaran gagal. Silakan coba lagi.');
                    redirect('daftar');
                }
            }

        // print_r($_POST);
        // return false;
        }
        // Array ( [idMember] => [namaMember] => Andri [alamat] => Jakarta [rt] => 01 [rw] => 02 [kelurahan] => Kedaung [kecamatan] => Pamulang [kodePos] => 14142 [jenisKelamin] => Laki-laki [noKtp] => 23239898 [tempatLahir] => Jakarta [tanggalLahir] => 1991-01-01 [noHp] => 0887576565 [email] => andri@gmail.com [namaBank] => BRI [noRekening] => 7676767 [idUpline] => MED123 [namaUpline] => Nuari [idSponsor] => MED222 [namaSponsor] => Asep [paket] => 1 [namaPaket] => Fast Track [managerArea] => Aip [kartuStockist] => ABCD [tempat] => Jakarta [tanggal] => 2024-10-19 )

    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaMember', 'Nama Member', 'trim|required');
	$this->form_validation->set_rules('idSponsor', 'ID Sponsor', 'trim|required');
	$this->form_validation->set_rules('namaSponsor', 'Nama Sponsor', 'trim|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    private function generate_member_id()
    {
        $prefix = 'MEM'; 
        $current_year = date('my');
        
        $last_member_id = $this->Daftar_model->get_last_member_id();

        if ($last_member_id) {
            $last_number = intval(substr($last_member_id, -4));
            $new_number = $last_number + 1;
        } else {
            $new_number = 1;
        }

        $new_member_id = $prefix . $current_year . str_pad($new_number, 4, '0', STR_PAD_LEFT);

        return $new_member_id;
    }

    public function success()
    {
        $data = array('active_controller' => 'daftar',
        'active_function' => 'success');
        $this->session->set_flashdata('message', 'Pendaftaran berhasil.');

        $this->load->view('template', $data);		        

    }

}
