<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota2422500005_model extends CI_Model {
    private $_table = "kota005";

    public function get_all() {
        return $this->db->get($this->_table)->result_array();
    }

    public function get_by_id($id) {
        $this->db->where('id_kota005', $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function tambah($data) {
        return $this->db->insert($this->_table, $data);
    }

    public function ubah($data, $id) {
        $this->db->where('id_kota005', $id);
        return $this->db->update($this->_table, $data);
    }

    public function hapus($id) {
    $this->db->where('id_kota005', $id);
    return $this->db->delete($this->_table);
    }
}