<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_model extends CI_Model
{
    public function getAllproduct(){
        return $this->db->get('product')->result_array();
    }
    
    public function getproduct($limit, $start)
    {
        return $this->db->get('product', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('product')->num_rows();
    }
}