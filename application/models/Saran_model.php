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
}
