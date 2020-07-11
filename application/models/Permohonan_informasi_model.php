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

    public function detail_informasi($id)
    {
        $this->db->select('*')
            ->FROM('permohonan')
            ->WHERE('id_permohonan', $id);

        $query = $this->db->get();
        return $query->result();
    }
}
