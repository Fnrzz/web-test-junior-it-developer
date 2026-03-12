<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('soal1');
    }

    public function soal2()
    {
        $query = "
            SELECT 
                k.kontrak_no,
                k.client_name,
                SUM(jadwal.angsuran_per_bulan) AS total_angsuran
            FROM kontrak k
            JOIN jadwal_angsuran jadwal ON k.kontrak_no = jadwal.kontrak_no
            WHERE 
                jadwal.tanggal_jatuh_tempo <= '2024-08-14' AND
                k.client_name = 'SUGUS'
            GROUP BY k.kontrak_no, k.client_name
        ";

        $data = DB::select($query);

        $data = !empty($data) ? $data[0] : [];

        return view('soal2', compact('data'));
    }

    public function soal3()
    {
        $query = "
            SELECT
                k.kontrak_no,
                k.client_name,
                jadwal.angsuran_ke,
                DATEDIFF('2024-08-14',jadwal.tanggal_jatuh_tempo) AS hari_keterlambatan,
                (DATEDIFF('2024-08-14', jadwal.tanggal_jatuh_tempo) * 0.001 * jadwal.angsuran_per_bulan) AS total_denda
            FROM kontrak k
            JOIN jadwal_angsuran jadwal ON k.kontrak_no = jadwal.kontrak_no
            WHERE 
                jadwal.tanggal_jatuh_tempo > '2024-05-25' AND
                jadwal.tanggal_jatuh_tempo <= '2024-08-14' AND
                k.client_name = 'SUGUS'
            ORDER BY jadwal.angsuran_ke ASC
        ";

        $data = DB::select($query);

        $data = !empty($data) ? $data : [];

        return view('soal3', compact('data'));
    }
}
