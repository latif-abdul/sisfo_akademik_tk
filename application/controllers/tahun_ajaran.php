<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tahun_ajaran extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Siakad TK';
        $data['tahun_ajaran'] = $this->tahunajaran_model->tampil_data('tahun_ajaran')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/tahun_ajaran', $data);
        $this->load->view('template/footer');
    }

    public function tambah_tahun_ajaran()
    {
        $data['title'] = 'Siakad TK';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/tahun_ajaran_form', $data);
        $this->load->view('template/footer');
    }

    public function tambah_tahun_ajaran_aksi()
    {
        $data['title'] = 'Siakad TK';

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_tahun_ajaran();
        } else {
            $tahun_ajaran = $this->input->post('tahun_ajaran');
            $semester = $this->input->post('semester');
            $status = $this->input->post('status');

            $data = array(
                'tahun_ajaran' => $tahun_ajaran,
                'semester' => $semester,
                'status' => $status,
            );

            $this->tahunajaran_model->insert_data($data, 'tahun_ajaran');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                    Tahun ajaran berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
            redirect('tahun_ajaran');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required', [
            'required' => 'Tahun ajaran wajib diisi !'
        ]);
        $this->form_validation->set_rules('semester', 'Semester', 'required', [
            'required' => 'Semester wajib diisi !'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status wajib diisi !'
        ]);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function update($id)
    {
        $data['title'] = 'Siakad TK';
        $where = array('id' => $id);
        $data['tahun_ajaran'] = $this->tahunajaran_model->edit_data($where, 'tahun_ajaran')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/tahun_ajaran_update', $data);
        $this->load->view('template/footer');
    }

    public function update_aksi()
    {
        $id     = $this->input->post('id');
        $tahun_ajaran     = $this->input->post('tahun_ajaran');
        $semester     = $this->input->post('semester');
        $status     = $this->input->post('status');

        $data = array(
            'tahun_ajaran' => $tahun_ajaran,
            'semester' => $semester,
            'status' => $status,

        );

        $where = array(
            'id' => $id
        );

        $this->tahunajaran_model->update_data($where, $data, 'tahun_ajaran');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
        Data tahun ajaran berhasil diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('tahun_ajaran');
    }

    public function delete($id)
    {
        $data['title'] = 'Siakad TK';
        $where = array('id' => $id);
        $this->tahunajaran_model->hapus_data($where, 'tahun_ajaran');

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert" >
        Data tahun ajaran berhasil di hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('tahun_ajaran', 'refresh');

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/kelas_update', $data);
        $this->load->view('template/footer');
    }
}

/* End of file tahun_ajaran.php */
