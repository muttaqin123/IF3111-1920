<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'userlogin';

    public function Baca($data) {
        return $this->db->get_where('komentar', $data);
    }

    public function inputKomentar($data)
    {
        $this->db->insert('komentar', $data);
    }

    public function tampilLapor() {
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get('komentar');
    }

    public function cari_Like($inp) {
        $this->db->order_by('tanggal', 'desc');
        return $this->db->like('isi', $inp);
    }

}