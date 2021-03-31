<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data= [
            'title' => 'Koleki Komik'
        ];
        return view('komik/index', $data);

    }

}
