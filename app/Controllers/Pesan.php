<?php
namespace App\Controllers;

class Pesan extends BaseController
{
    public function submit($p = 'kosong')
    {
        $data['nama'] = $_GET['nama'];
        $data['nim'] = $_GET['nim'];
        $data['status'] = $_GET['status'];
        return view('tampilData', $data);
    }

    public function input()
    {
        return view('inputData');
    }
}