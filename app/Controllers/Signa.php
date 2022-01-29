<?php

namespace App\Controllers;
use CodeIgniter\Controller; 
use App\Models\DataSigna;

class Signa extends Controller
{
    protected $msigna;
    public function __construct(){
        $this->msigna = new DataSigna();
    }

    public function index()
    {
        $getData = $this->msigna->getdata();
        $data = array(
            'dataSigna' => $getData,
        );
        // var_dump($data);
        return view('', $data);
    }

}