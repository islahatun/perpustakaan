<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pustakawan extends CI_Model
{

    public function list_pustakawan()
    {
        return $this->db->get('m_pustakawan')->result_array();
    }
    public function get_id()
    {
        $id = "SELECT id_pustakawan FROM m_pustakawan ORDER BY  id_pustakawan DESC ";
        return $this->db->query($id)->row_array();
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
    public function update_pustakawan()
    {
        $id_pustakawan = $this->input->post('id_pustakawan');
        $nama_pustakawan = $this->input->post('nama_pustakawan');
        $level = $this->input->post('level');
        $aktif = $this->input->post('aktif');

        $this->db->set('nama_pustakawan', $nama_pustakawan);
        $this->db->set('level', $level);
        $this->db->set('aktif', $aktif);
        $this->db->where('id_pustakawan', $id_pustakawan);
        $this->db->update('m_pustakawan');
    }
    public function delete_pustakawan($id_pustakawan)
    {
        $this->db->where('id_pustakawan', $id_pustakawan);
        $this->db->delete('m_pustakawan');
    }
}
