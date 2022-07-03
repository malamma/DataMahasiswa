@extends('layouts.mainLayout')

@section('mainContent')
    <a class="btn btn-primary" href="{{ route('tambah-data') }}">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Prodi</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($dataMhs as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenisKelamin }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td><a class="btn btn-primary" href="{{ url('ubah-Data', $item->id) }}">Edit Data</a>
                        <a class="btn btn-primary" href="{{ url('deleteData', $item->id) }}">Hapus Data</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
