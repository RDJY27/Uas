<?php

class M_menu extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('user');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function update_data()
    {
        return $this->db->get('user');
    }

    public function hapusData($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }
}
