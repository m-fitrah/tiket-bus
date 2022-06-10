<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Asal extends CI_Controller{

    public function halaman_tambah(){
        $this->load->view('halaman_tambah');
    }
}