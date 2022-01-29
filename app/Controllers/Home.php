<?php

namespace App\Controllers;
use App\Models\DataPres;

class Home extends BaseController
{
    protected $mobat;

    public function __construct(){
        $this->mpres = new DataPres();
    }

    public function index()
    {
        $getData2 = $this->mpres->getdatasigna();
        $getData = $this->mpres->getdata();

        $data = array(
            'dataObat' => $getData,
            'dataSigna' => $getData2,
        );
        return view('prescription', $data);
        // var_dump($data);
    }    
}
