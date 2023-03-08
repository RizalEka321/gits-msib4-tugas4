<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    static function jumlahMahasiswa()
    {
        return DB::select('select count(*) as total from mahasiswas');
    }
}
