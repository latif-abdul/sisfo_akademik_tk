<?php

defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function index()
    {
        $data['title'] = 'Siakad TK';
        $data['siswa'] = $this->siswa_model->tampil_data('siswa')->result_array();
        $data['kelas'] = $this->kelas_model->tampil_data('kelas')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/siswa', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Siakad TK';
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/siswa_detail', $data);
        $this->load->view('template/footer');
    }

    public function tambah_siswa()
    {
        $data['title'] = 'Siakad TK';
        $data['kelas'] = $this->siswa_model->tampil_data('kelas')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/siswa_form', $data);
        $this->load->view('template/footer');
    }

    public function tambah_siswa_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_siswa();
        } else {
            $nis = $this->input->post('nis');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $alamat = $this->input->post('alamat');
            $telepon_ortu = $this->input->post('telepon_ortu');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_kelas = $this->input->post('nama_kelas');
            $photo = $_FILES['photo'];
            if ($photo = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo 'Gagal Upload';
                    die();
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nis' => $nis,
                'nama_lengkap' => $nama_lengkap,
                'alamat' => $alamat,
                'telepon_ortu' => $telepon_ortu,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_kelas' => $nama_kelas,
                'photo' => $photo
            );

            $this->siswa_model->insert_data($data, 'siswa');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data Siswa Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
            redirect('siswa');
        }
    }

    public function update($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Siakad TK';

        $data['siswa'] = $this->db->query("select * from siswa swa, kelas kls where swa.nama_kelas=kls.nama_kelas and swa.id='$id'")->result();
        $data['kelas'] = $this->kelas_model->tampil_data('kelas')->result();
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/siswa_update', $data);
        $this->load->view('template/footer');
    }

    public function update_siswa_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($id);
        } else {
            $id = $this->input->post('id');
            $nis = $this->input->post('nis');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $alamat = $this->input->post('alamat');
            $telepon_ortu = $this->input->post('telepon_ortu');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_kelas = $this->input->post('nama_kelas');
            $photo = $_FILES['userfile']['name'];

            if ($photo = '') {
            }
            $config['upload_path'] = './assets/upload';
            $config['allowed_types'] = 'jpg|png|gif|tiff';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $userfile = $this->upload->data('file_name');
                $this->db->set('photo', $userfile);
            } else {
                echo ' Gagal Upload';
            }
        }

        $data = array(
            'nis' => $nis,
            'nama_lengkap' => $nama_lengkap,
            'alamat' => $alamat,
            'telepon_ortu' => $telepon_ortu,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'nama_kelas' => $nama_kelas,

        );

        $where = array(
            'id' => $id
        );

        $this->siswa_model->update_data($where, $data, 'siswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                    Data Siswa Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('siswa');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->siswa_model->hapus_data($where, 'siswa');

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert" >
        Data Siswa berhasil di hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('siswa', 'refresh');

        // $this->load->view('template/header', $data);
        // $this->load->view('template/sidebar', $data);
        // $this->load->view('template/topbar', $data);
        // $this->load->view('user/kelas_update', $data);
        // $this->load->view('template/footer');
    }


    public function _rules()
    {
        $this->form_validation->set_rules('nis', 'Nis', 'required', [
            'required' => 'NIS wajib diisi !'
        ]);

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap wajib diisi !'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat wajib diisi !'
        ]);

        $this->form_validation->set_rules('telepon_ortu', 'Telepon Orang Tua', 'required', [
            'required' => 'Telepon Ortu diisi !'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir wajib diisi !'
        ]);

        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir wajib diisi !'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin wajib diisi !'
        ]);

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required', [
            'required' => 'Nama Kelas wajib diisi !'
        ]);
    }
}

/* End of file Controllername.php */
