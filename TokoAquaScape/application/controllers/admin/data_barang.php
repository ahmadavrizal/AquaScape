<?php

class Data_barang extends CI_Controller{
    public function index(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang');
        $this->load->view('templates_admin/footer');
    }
}