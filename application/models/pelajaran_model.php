<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pelajaran_model extends CI_Model
{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where('kode_pelajaran', $where);
        $this->db->update($table, $data);
        
        
    }

    public function delete($id){
        $this->db->where('kode_pelajaran', $id);
        $this->db->delete('pelajaran');
    }

    public function get_data($id){
        $this->db->select('*');
        $this->db->from('pelajaran');
        $this->db->join('kelas', 'kelas.nama_kelas = pelajaran.kelas', 'inner');
        $this->db->where('pelajaran.kode_pelajaran', $id);
        return $this->db->get()->result_array();
        
    }
}


/* End of file pelajaran_model.php */
