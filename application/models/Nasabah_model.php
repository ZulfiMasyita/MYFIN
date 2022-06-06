<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{
    public function get_all()       
    {
        $result = $this->db->get_where('tb_data_nasabah',['deleted' => 0]);
        return $result;
    }
    public function get_nonaktif()       
    {
        $result = $this->db->get_where('tb_data_nasabah',['deleted' => 1]);
        return $result;
    }
    public function create($data)
    {
        $this->db->insert('tb_data_nasabah', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }

//    public function update($data_nasabah, $id)
//    {
//        $this->db->update('tb_data_nasabah', $data_nasabah, ['id_user' => $id]);
//        return $this->db->affected_rows() > 0 ? true : false;
//    } 
    
}
