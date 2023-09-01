@extends('template')
@section('main')
    <h1>Upload</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Pilih gambar</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/' . $item->image) }}" alt="" width="250px"></td>
                    <td>
                        {{-- <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit</a> --}}
                        {{-- <a href="{{ url('siswa/' . $item->id . '/edit') }}" class="btn btn-warning">edit</a> --}}
                        {{-- <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
