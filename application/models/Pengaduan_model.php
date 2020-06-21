<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_model extends CI_Model
{
    public function tambah_pengaduan($data, $nama_table)
    {
        $this->db->insert($nama_table, $data);
    }
}
