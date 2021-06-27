<?php

class Data_barang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session-$this->session->set_flashdata('pesan','
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Harap Login Terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi(){
        $nama_barang    = $this->input->post('nama_barang');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar error!";
            }else{
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang'   => $nama_barang,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tbbarang');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = array('id_barang' =>$id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tbbarang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id                 = $this->input->post('id_barang');
        $nama_barang        = $this->input->post('nama_barang');
        $keterangan         = $this->input->post('keterangan');
        $kategori           = $this->input->post('kategori');
        $harga              = $this->input->post('harga');
        $stok               = $this->input->post('stok');

        $data = array(
            'nama_barang'       => $nama_barang,
            'keterangan'        => $keterangan,
            'kategori'          => $kategori,
            'harga'             => $harga,
            'stok'              => $stok,
        );

        $where = array(
            'id_barang' => $id
        );

        $this->model_barang->update_data($where,$data,'tbbarang');
        redirect('admin/data_barang/index');
    }

    public function hapus ($id){
        $where = array('id_barang' => $id);
        $this->model_barang->hapus_data($where, 'tbbarang');
        redirect('admin/data_barang/index');
    }
}
