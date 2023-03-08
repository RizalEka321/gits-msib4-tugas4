<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    static function jumlahMahasiswa()
    {
        return DB::select('select count(*) as total from mahasiswas');
    }
}
