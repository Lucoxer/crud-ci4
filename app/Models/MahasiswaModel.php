<?php
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table    = 'tb_mahasiswa';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'nama_lengkap', 'kota_asal', 'tanggal_lahir', 'nama_ortu', 'alamat_ortu', 'kode_pos', 'no_telp', 'status_mhs'];
}
