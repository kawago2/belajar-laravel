@extends('template')
@section('main')
    <h1>Edit Data</h1>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" value="{{ $data->nis }}"
                name="nis">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama }}"
                name="nama">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ $data->alamat }}"
                name="alamat">
        </div>
        <div class="form-group">
            <label>Sekolah</label>
            <select class="form-control" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)>{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
