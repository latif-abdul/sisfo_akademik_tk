<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kelas_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kelas');
    }

    public function input_data()
    {

        $data = array(
            'kode_kelas' => $this->input->post('kode_kelas', TRUE),
            'nama_kelas' => $this->input->post('nama_kelas', TRUE)
        );
        $this->db->insert('kelas', $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

/* End of file kelas_model.php */
