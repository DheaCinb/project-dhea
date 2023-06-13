<?php
namespace App\Models;
use CodeIgniter\Model;
class AsistenModel extends Model
{ 
    protected $table = 'asisten';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama', 'kelas_praktikum', 'ipk'];
    protected $useAutoIncrement = false;

    public function simpan($record)
    {
        $this->save([
            'nim' => $record['nim'],
            'nama' => $record['nama'],
            'kelas_praktikum' => $record['kelas_praktikum'],
            'ipk' => $record['ipk'],
        ]);
    }

    public function perbarui($data)
    {
        $this->save([
            'nim' => $data['nim'],
            'nama' => $data['nama'],
            'kelas_praktikum' => $data['kelas_praktikum'],
            'ipk' => $data['ipk'],
        ]);
    }

    public function hapus($data)
    {
        $this->delete([
            'nim' => $data['nim'],
        ]);
    }

}