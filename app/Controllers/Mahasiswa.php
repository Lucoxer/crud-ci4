<?php
namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController 
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        
        echo view('/layout/header');
        return view('/mahasiswa/index',$data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Data Mahasiswa',
            
        ];

        echo view('/layout/header');
        return view('/mahasiswa/create', $data);
        
    }

    public function save()
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();
        
        $this->mahasiswaModel->insert([
            'NIM' => $this->request->getPost('NIM'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kota_asal' => $this->request->getPost('kota_asal'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nama_ortu' => $this->request->getPost('nama_ortu'),
            'alamat_ortu' => $this->request->getPost('alamat_ortu'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'no_telp' => $this->request->getPost('no_telp'),
            'status_mhs' => $this->request->getPost('status_mhs')
        ]);
        
        return redirect()->to('/mahasiswa');
    }


    public function edit($NIM = false)
    {
        $mahasiswaModel = new MahasiswaModel();
        $nim = $mahasiswaModel->find($NIM);
        $data = [
            'title' => 'Form Data Mahasiswa',
            'NIM' => $nim
        ];
        echo view('/layout/header');
        return view('/mahasiswa/edit', ['data' => $data]);
    }
    
    public function predit(){
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->update($this->request->getPost('NIM'), $this->request->getPost());
        return redirect()->to('/mahasiswa');
    }

    public function delete($NIM)
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->delete($NIM);
        return redirect()->to('/mahasiswa');
    }
}
