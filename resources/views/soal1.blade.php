@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Soal 1</strong> (Simulasi Perhitungan)</h1>

        <form id="form-perhitungan">
            <div class="mb-3">
                <label for="otr" class="form-label">Harga OTR</label>
                <input type="number" class="form-control" id="otr" placeholder="Harga OTR">
            </div>
            <div class="mb-3">
                <label for="dp_persen" class="form-label">DP (Dalam Persen)</label>
                <input type="number" class="form-control" id="dp_persen" placeholder="DP (Dalam Persen)">
            </div>
            <div class="mb-3">
                <label for="jangka_waktu" class="form-label">Jangka Waktu</label>
                <input type="number" class="form-control" id="jangka_waktu"
                    placeholder="Jangka Waktu (Dalam Bentuk Bulan)">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Hitung</button>
            </div>
        </form>

        <div id="hasil" class="mt-4" style="display: none;">
            <div class="card">
                <div class="card-body bg-light">
                    <h5 class="card-title">Hasil Simulasi</h5>
                    <p class="card-text mb-1">Pokok Utang: <strong id="pokok_utang"></strong></p>
                    <p class="card-text mb-1">Bunga Dikenakan: <strong id="bunga"></strong></p>
                    <hr>
                    <h4 class="text-primary">Angsuran Per Bulan: <strong id="angsuran"></strong></h4>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('form-perhitungan').addEventListener('submit', function(e) {
            e.preventDefault();

            const otr = document.getElementById('otr').value;
            const dp_persen = document.getElementById('dp_persen').value;
            const jangka_waktu = document.getElementById('jangka_waktu').value;

            const dp = otr * (dp_persen / 100);
            const pokokUtang = otr - dp;

            let bungaPersen = 0;
            if (jangka_waktu <= 12) {
                bungaPersen = 12;
            } else if (jangka_waktu <= 24) {
                bungaPersen = 14;
            } else if (jangka_waktu > 24) {
                bungaPersen = 16, 5;
            }

            let bunga = bungaPersen / 100;

            let angsuranPerBulan = (pokokUtang + (pokokUtang * bunga)) / jangka_waktu;

            let formatRupiah = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            });

            document.getElementById('pokok_utang').innerText = formatRupiah.format(pokokUtang);
            document.getElementById('bunga').innerText = bungaPersen + '%';
            document.getElementById('angsuran').innerText = formatRupiah.format(angsuranPerBulan);

            document.getElementById('hasil').style.display = 'block';
        })
    </script>
@endsection
