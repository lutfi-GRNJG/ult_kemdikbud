<?php

class Saran_model extends CI_Model
{

    public function tampil_saran()
    {
        $this->db->select('*')
            ->FROM('saran');

        $query = $this->db->get();
        return $query->result();
    }

    public function detail_saran($id)
    {
        $this->db->select('*')
            ->FROM('saran')
            ->WHERE('id_saran', $id);

        $query = $this->db->get();
        return $query->result();
    }
}
