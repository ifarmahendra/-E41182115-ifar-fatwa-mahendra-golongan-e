<?php

class Data_tagihan extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }

    public function index()
    {
        $data['listrik'] = $this->tagihan_pln->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_tagihan', $data);
        $this->load->view('templates_admin/footer'); 

    }

    public function tambah_aksi()
    {
    $nama                = $this->input->post('nama');
    $nomer_meteran       = $this->input->post('nomer_meteran');
    $bulan               = $this->input->post('bulan');
    $total_tagihan       = $this->input->post('total_tagihan');

    $data = array(
        'nama'          =>$nama,
        'nomer_meteran' =>$nomer_meteran,
        'bulan'         =>$bulan,
        'total_tagihan' =>$total_tagihan
    );

    $this->tagihan_pln->tambah_data($data, 'tb_listrik');
    redirect('admin/data_tagihan/index');
    }
    
    public function edit($id)
    {
        $where = array('id_listrik' =>$id);
        $data['listrik'] = $this->tagihan_pln->edit_data($where, 'tb_listrik')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_data', $data);
        $this->load->view('templates_admin/footer'); 
    }

    public function update(){
        $id                = $this->input->post('id_listrik');
        $nama              = $this->input->post('nama');
        $nomer_meteran     = $this->input->post('nomer_meteran');
        $bulan             = $this->input->post('bulan');
        $total_tagihan     = $this->input->post('total_tagihan');

        $data = array(
            'nama'          =>$nama,
            'nomer_meteran' =>$nomer_meteran,
            'bulan'         =>$bulan,
            'total_tagihan' =>$total_tagihan
        );

        $where = array(
            'id_listrik' => $id
        );

        $this->tagihan_pln->update_data($where,$data,'tb_listrik');
        redirect('admin/data_tagihan/index');
    }
    
    public function hapus($id)
    {
        $where = array('id_listrik' => $id);
        $this->tagihan_pln->hapus_data($where, 'tb_listrik');
        redirect('admin/data_tagihan/index');
    }
}

//di dalam halaman ini adalah controller data tagihan dari adminnya dimana semua fungsi yang berada di admin berada disini