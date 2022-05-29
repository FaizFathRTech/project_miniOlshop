<?php

class Product_model extends CI_model
{
    public function getProductData()
    {
        return $this->db->get('product')->result_array();
    }

    public function countProduct()
    {
        return $this->db->count_all('product');
    }
}
