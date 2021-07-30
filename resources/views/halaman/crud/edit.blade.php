@extends('halaman.master')



@section('content')

<div>
    <h2>Tambah Data</h2>
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Cast</label>
                <input type="text" class="form-control" value="{{$cast->nama}}" name="nama" id="nama" placeholder="Masukkan Nama Cast">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur Cast</label>
                <input type="text" class="form-control" value="{{$cast->umur}}" name="umur" id="umur" placeholder="Masukkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" value="{{$cast->bio}}" name="bio" id="bio" placeholder="Masukkan Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>

@endsection