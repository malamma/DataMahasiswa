@extends('layouts.mainLayout')

@section('mainContent')
    <div class="container">

        <form action="{{ url('update-Data', $mhs->id) }}" method="post">
            {{ csrf_field() }}
            @method('Put')
            <div class="mb-3">
                <label for="nimMhs" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nimMhs" name="nimMhs" value="{{ $mhs->nim }}">
            </div>
            <div class="mb-3">
                <label for="namaMhs" class="form-label">Nama</label>
                <input type="text" class="form-control" id="namaMhs" name="namaMhs" value="{{ $mhs->nama }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jkMhs" name="jkMhs" value="{{ $mhs->jenisKelamin }}">

            </div>
            {{-- <div class="mb-3">
            <input type="radio" name="jenis_kelamin" value="L" id="jkMhs">Pria
            <input type="radio" name="jenis_kelamin" value="P" id="jkMhs">Wanita
        </div> --}}
            <div class="mb-3">
                <label for="prodiMhs" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodiMhs" name="prodiMhs" value="{{ $mhs->prodi }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
