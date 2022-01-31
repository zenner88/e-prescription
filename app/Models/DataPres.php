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
    public function updateStockObat()
    {
        $data = array(
            'stock' => 'Marketing'
            );
        $this->db->where('obatalkes_id', $id);
        $this->db->update('obatalkes_m',$data);
    }
}