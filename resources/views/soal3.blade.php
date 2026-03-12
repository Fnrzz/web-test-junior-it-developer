@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Soal 3</strong> ( Denda Keterlambatan)</h1>

        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th class="align-middle">KONTRAK NO</th>
                    <th class="align-middle">CLIENT NAME</th>
                    <th class="align-middle">INSTALLMENT<br>NO</th>
                    <th class="align-middle">HARI<br>KETERLAMBATAN</th>
                    <th class="align-middle">TOTAL DENDA</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $row)
                    <tr>
                        <td>{{ $row->kontrak_no }}</td>
                        <td>{{ $row->client_name }}</td>
                        <td>{{ $row->angsuran_ke }}</td>
                        <td>{{ $row->hari_keterlambatan }} Hari</td>
                        <td class="text-end">Rp {{ number_format(round($row->total_denda), 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data keterlambatan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
