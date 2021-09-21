<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pustakawan extends CI_Model
{

    public function list_pustakawan()
    {
        return $this->db->get('m_pustakawan')->result_array();
    }
    public function insert_pustakawan()
    {
        $data = [
            'id_pustakawan' => $this->input->post('id_pustakawan'),
            'nama_pustakawan' => $this->input->post('nama_pustakawan'),
            'level' => $this->input->post('level'),
            'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),
            'aktif' => 'Aktif'
        ];
        $this->db->insert('m_pustakawan', $data);
    }
    public function delete_pustakawan($id_pustakawan)
    {
        $this->db->delete('m_pustakawan', $id_pustakawan);
    }
}
