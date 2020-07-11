<?php

class Permohonan_informasi_model extends CI_Model
{
    public function tampil_permohonan()
    {
        $this->db->select('*')
            ->FROM('permohonan');

        $query = $this->db->get();
        return $query->result();
    }
}
