<?php

namespace App\Controllers;
use CodeIgniter\Controller; 
use App\Models\DataObat;

class Obat extends Controller
{
    protected $mobat;
    public function __construct(){
        $this->mobat = new DataObat();
    }

    public function index()
    {
        $getData = $this->mobat->getdata();
        $data = array(
            'dataObat' => $getData,
        );
        // var_dump($data);
        return view('obat', $data);
    }

}