<?php
namespace App\Models;

use CodeIgniter\Model;

class DataPres extends Model
{
    public function getdata()
    {
        $query = $this->db->query("select * FROM obatalkes_m ORDER BY obatalkes_nama ASC");

        return $query->getResult();
    }
    public function getdatasigna()
    {
        $query = $this->db->query("select * FROM signa_m ORDER BY signa_nama ASC");

        return $query->getResult();
    }
}