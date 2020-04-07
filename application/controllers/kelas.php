<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Siakad TK';
        $data['kelas'] = $this->kelas_model->tampil_data()->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/kelas', $data);
        $this->load->view('template/footer');
    }

    public function input()
    {
        $data['title'] = 'Siakad TK';
        $data = array(
            'id_kelas' => set_value('id_kelas'),
            'kode_kelas' => set_value('kode_kelas'),
            'nama_kelas' => set_value('nama_kelas')
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/kelas_form', $data);
        $this->load->view('template/footer');
    }

    public function input_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'kode_kelas' => $this->input->post('kode_kelas', TRUE),
                'nama_kelas' => $this->input->post('nama_kelas', TRUE)
            );
        }

        $this->kelas_model->input_data();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data kelas berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('kelas');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_kelas', 'kode_kelas', 'required');
        $this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function update($id)
    {
        $data['title'] = 'Siakad TK';
        $where = array('id_kelas' => $id);
        $data['kelas'] = $this->kelas_model->edit_data($where, 'kelas')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/kelas_update', $data);
        $this->load->view('template/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'kode_kelas' => $kode_kelas,
            'nama_kelas' => $nama_kelas
        );

        $where = array(
            'id_kelas' => $id
        );

        $this->kelas_model->update_data($where, $data, 'kelas');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data kelas berhasil di update ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('kelas', 'refresh');
    }

    public function delete($id)
    {
        $where = array('id_kelas' => $id);
        $data['kelas'] = $this->kelas_model->hapus_data($where, 'kelas');

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert" >
        Data kelas berhasil di hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('kelas', 'refresh');



        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/kelas_update', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Controllername.php */
