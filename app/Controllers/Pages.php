<?php

namespace App\Controllers;

use App\Models\RegisModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cek',
        ];
        echo view('layout/header', $data);
        echo view('pages/home');

    }

    public function login()
    {
        $data1 = [
            'title' => 'Login',
        ];
        echo view('layout/header', $data1);
        echo view('pages/login');
    }

    public function registrasi()
    {
        $data2 = [
            'title' => 'Registrasi',
        ];
        echo view('layout/header', $data2);
        echo view('pages/registrasi');
    }

    public function member()
    {
        $model = new RegisModel(); //membuat variable model
        $data['member'] = $model->findAll();
        echo view('layout/header');
        return view('pages/dataMember', $data);
    }

    public function addMember()
    {
        return view('dataMember');
    }

    public function proses_add_member()
    {
        $model = new RegisModel();
        $model->insert($this->request->getPost());
        return redirect()->to(base_url('member'));
    }
}