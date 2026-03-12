@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Soal 2</strong> (Total Angsuran Jatuh Tempo)</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>KONTRAK NO</th>
                    <th>CLIENT NAME</th>
                    <th>TOTAL ANGSURAN JATUH TEMPO</th>
                </tr>
            </thead>
            <tbody>
                @if ($data)
                    <tr>
                        <td>{{ $data->kontrak_no }}</td>
                        <td>{{ $data->client_name }}</td>
                        <td>Rp {{ number_format($data->total_angsuran, 0, ',', '.') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
@endsection
