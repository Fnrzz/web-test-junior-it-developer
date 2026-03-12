<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kontrak')->insert([
            'kontrak_no' => 'AGR00001',
            'client_name' => 'SUGUS',
            'otr' => 240000000
        ]);

        $jadwal = [];

        for ($i = 1; $i <= 12; $i++) {
            $tanggalJatuhTempo = Carbon::create(2024, $i, 25)->format('Y-m-d');
            $jadwal[] = [
                'kontrak_no'          => 'AGR00001',
                'angsuran_ke'         => $i,
                'angsuran_per_bulan'  => 12907000,
                'tanggal_jatuh_tempo' => $tanggalJatuhTempo,
                'created_at'          => now(),
                'updated_at'          => now(),
            ];
        }

        DB::table('jadwal_angsuran')->insert($jadwal);
    }
}
