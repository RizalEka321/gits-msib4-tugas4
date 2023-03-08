<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index()
    {
        $mentor = "Rizaldi Permana";
        $program = "Studi Independent";
        $mitra = "PT GITS Indonesia";
        $jumlah = Mahasiswa::jumlahMahasiswa();
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', [
            'mentor' => $mentor,
            'program' => $program,
            'mitra' => $mitra,
            'jumlah' => $jumlah,
            'mahasiswa' => $mahasiswa
        ]);
    }
}
