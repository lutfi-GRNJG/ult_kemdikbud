<?php

class Layanan_pengaduan_model extends CI_Model
{
    public function tampil_laporan()
    {
        $this->db->select('*')
            ->FROM('laporan');

        $query = $this->db->get();
        return $query->result();
    }

    public function detail_laporan($id)
    {
        $this->db->select('*')
            ->FROM('laporan')
            ->WHERE('id_laporan', $id);

        $query = $this->db->get();
        return $query->result();
    }
}
