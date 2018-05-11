<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'security'));
        $this->load->model('daftar_model');
        $this->load->library('form_validation');
        $this->load->database();
    }

    function index() {
        $this->load->view('header');
        $this->load->view('reseller');
        $this->load->view('footer');
    }

    function lihat() {
        $data['reseller'] = $this->daftar_model->read()->result();
        $this->load->view('lihat', $data);
    }

    function daftar() {
        $this->load->view('daftar');
    }

    function daftar_submit() {
        $tipe = $this->input->post('tipe');
        $nama = $this->input->post('nama', TRUE);
        $email = $this->input->post('email', TRUE);
        $gender = $this->input->post('gender');
        $dob = $this->input->post('dob', TRUE);
        $job = $this->input->post('job');
        $kota = $this->input->post('kota', TRUE);
        $coba = $this->input->post('coba');
        $sumber = $this->input->post('sumber');
        $alasan = $this->input->post('alasan', TRUE);
        $whatsapp = $this->input->post('wa', TRUE);
        $line = $this->input->post('line', TRUE);
        $instagram = $this->input->post('ig', TRUE);

        $data = array(
            'tipe' => $tipe,
            'nama' => $nama,
            'email' => $email,
            'gender' => $gender,
            'dob' => $dob,
            'job' => $job,
            'kota' => $kota,
            'coba' => $coba,
            'sumber' => $sumber,
            'alasan' => $alasan,
            'whatsapp' => $whatsapp,
            'line' => $line,
            'instagram' => $instagram
        );

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|alpha_numeric_spaces|max_length[50]');
        $this->form_validation->set_rules('email', 'Alamat Email', 'trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('dob', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('alasan', 'Alasan', 'trim|required');
        $this->form_validation->set_rules('wa', 'Nomor WhatsApp', 'trim|required|is_natural|max_length[50]');
        $this->form_validation->set_rules('line', 'ID LINE', 'trim|alpha_dash|max_length[50]');
        $this->form_validation->set_rules('ig', 'Instagram', 'trim|alpha_dash|max_length[50]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('daftar');
        } else {
            echo $this->security->xss_clean($data);
            $this->daftar_model->create($data, 'reseller');
            redirect('reseller/lihat');
        }
    }

    function hapus($id) {
        $where = array('id' => $id);
        $this->daftar_model->delete($where, 'reseller');
        redirect('reseller/lihat');
    }

    function edit($id) {
        $where = array('id' => $id);
        $data['reseller'] = $this->daftar_model->edit($where, 'reseller')->result();
        $this->load->view('edit', $data);
    }

    function update() {
        $id = $this->input->post('id');
        $tipe = $this->input->post('tipe');
        $nama = $this->input->post('nama', TRUE);
        $email = $this->input->post('email', TRUE);
        $gender = $this->input->post('gender');
        $dob = $this->input->post('dob', TRUE);
        $job = $this->input->post('job');
        $kota = $this->input->post('kota', TRUE);
        $coba = $this->input->post('coba');
        $sumber = $this->input->post('sumber');
        $alasan = $this->input->post('alasan', TRUE);
        $whatsapp = $this->input->post('wa', TRUE);
        $line = $this->input->post('line', TRUE);
        $instagram = $this->input->post('ig', TRUE);

        $data = array(
            'tipe' => $tipe,
            'nama' => $nama,
            'email' => $email,
            'gender' => $gender,
            'dob' => $dob,
            'job' => $job,
            'kota' => $kota,
            'coba' => $coba,
            'sumber' => $sumber,
            'alasan' => $alasan,
            'whatsapp' => $whatsapp,
            'line' => $line,
            'instagram' => $instagram
        );
        $where = array(
            'id' => $id
        );
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|alpha_numeric_spaces|max_length[50]');
        $this->form_validation->set_rules('email', 'Alamat Email', 'trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('dob', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('alasan', 'Alasan', 'trim|required');
        $this->form_validation->set_rules('wa', 'Nomor WhatsApp', 'trim|required|is_natural|max_length[50]');
        $this->form_validation->set_rules('line', 'ID LINE', 'trim|alpha_dash|max_length[50]');
        $this->form_validation->set_rules('ig', 'Instagram', 'trim|alpha_dash|max_length[50]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('edit');
        } else {
            echo $this->security->xss_clean($data);
            $this->daftar_model->update($where, $data, 'reseller');
            redirect('reseller/lihat');
        }
    }

}
