<?php

class Kategori extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
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
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik',$data);
        $this->load->view('templates/footer');
    }

    public function alat_pancing()
    {
        $data['alat_pancing'] = $this->model_kategori->data_alat_pancing()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_pancing',$data);
        $this->load->view('templates/footer');
    }

    public function makanan_ikan()
    {
        $data['makanan_ikan'] = $this->model_kategori->data_makanan_ikan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan_ikan',$data);
        $this->load->view('templates/footer');
    }

    public function macam_aquarium()
    {
        $data['macam_aquarium'] = $this->model_kategori->data_macam_aquarium()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('macam_aquarium',$data);
        $this->load->view('templates/footer');
    }

    public function spesies_ikan()
    {
        $data['spesies_ikan'] = $this->model_kategori->data_spesies_ikan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('spesies_ikan',$data);
        $this->load->view('templates/footer');
    }
}
