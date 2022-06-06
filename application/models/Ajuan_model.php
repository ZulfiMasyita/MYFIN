<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuan_model extends CI_Model
{
    public function get_all()       
    {
        $result = $this->db->get('tb_pengajuan_kredit');
        return $result;
    }
    
}
