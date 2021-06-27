<?php

class kategori extends CI_Controller{
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