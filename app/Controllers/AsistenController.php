<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class AsistenController extends BaseController
{
    public function index()
    {
        $model = new AsistenModel(); //membuat variable model
        $data['asisten'] = $model->findAll();

        return view('AsistenView', $data);
    }

    public function simpan()
    {


        helper('form');
        //Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim',
            'nama',
            "kelas_praktikum",
            "ipk"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->simpan($post);


        return view('/asisten/success');
    }

    public function update()
    {
        helper('form');
        //Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim',
            'nama',
            "kelas_praktikum",
            "ipk"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->perbarui($post);
        return view('/asisten/success');

    }

    public function delete()
    {
        helper('form');
        //Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim',
            'nama',
            "kelas_praktikum",
            "ipk"
        ]);


        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->hapus($post);
        $data = [
            'h1' => 'Data sukses terhapus',
        ];
        return view('/asisten/success', $data);
    }
}