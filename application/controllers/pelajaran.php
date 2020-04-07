<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pelajaran extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Siakad TK';
        $data['pelajaran'] = $this->pelajaran_model->tampil_data('pelajaran')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/pelajaran', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pelajaran()
    {
        $data['title'] = 'Siakad TK';
        $data['kelas'] = $this->pelajaran_model->tampil_data('kelas')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/pelajaran_form', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pelajaran_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_pelajaran();
        } else {
            $kode_pelajaran = $this->input->post('kode_pelajaran');
            $nama_pelajaran = $this->input->post('nama_pelajaran');
            $semester = $this->input->post('semester');
            $nama_kelas = $this->input->post('kelas');

            $data = array(
                'kode_pelajaran' => $kode_pelajaran,
                'nama_pelajaran' => $nama_pelajaran,
                'semester' => $semester,
                'kelas' => $nama_kelas
            );

            $this->pelajaran_model->insert_data($data, 'pelajaran');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data pelajaran berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
            redirect('pelajaran');
        }
    }

    public function update($kode)
    {
        $data['title'] = 'Siakad TK';
        $where = array('kode_pelajaran' => $kode);
        $data['pelajaran'] = $this->pelajaran_model->get_data($kode);
        $data['kelas'] = $this->pelajaran_model->tampil_data('kelas')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/pelajaran_update', $data);
        $this->load->view('template/footer');
    }

    public function delete($id){
        $this->pelajaran_model->delete($id);
        redirect('pelajaran', 'refresh');
    }

    public function update_aksi($id)
    {
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $semester = $this->input->post('semester');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'nama_pelajaran' => $nama_pelajaran,
            'semester' => $semester,
            'kelas' => $nama_kelas
        );


        $this->pelajaran_model->update_data($id, $data, 'pelajaran');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data kelas berhasil di update ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('pelajaran', 'refresh');
    }

    public function _rules()
    {

        $this->form_validation->set_rules('kode_pelajaran', 'kode_pelajaran', 'required', [
            'required' => 'Kode pelajaran wajib diisi !'
        ]);
        $this->form_validation->set_rules('nama_pelajaran', 'nama_pelajaran', 'required', [
            'required' => 'Nama pelajaran wajib diisi !'
        ]);
        $this->form_validation->set_rules('semester', 'semester', 'required', [
            'required' => 'Semester pelajaran wajib diisi !'
        ]);
        $this->form_validation->set_rules('kelas', 'kelas', 'required', [
            'required' => 'Nama kelas pelajaran wajib diisi !'
        ]);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
}

/* End of file pelajaran.php */
