<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {
        // Cek apakah user belum sudah login
        if (!$this->session->userdata('user_id')) {
            // Jika sudah login, redirect ke auth
            redirect('auth');
        }
        // parameter data yg dikirim lalu diextract jadi variabel.
        // extract($this->input->get());
        // if (empty($nama)) {
        //     $nama = "";
        // }
        // echo "halo $nama, from dashboard";
        // echo "<br>";
        // if (!empty($alamat)) {
        //     // kalau tidak ada variable data alamat yg dikirim dari url
        //     echo "alamat : " . $alamat;
        // }
        // die;

        $data = array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer', $data);
    }
}
