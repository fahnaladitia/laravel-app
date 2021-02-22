@extends('layout/main')

@section('title', 'Form Edit Students')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Students</h1>
            <form method="post" , action="/students/{{$student->id}}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Input Name..." value="{{ $student->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">Nim : </label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id=" nim" name="nim"
                        placeholder="Input Nim..." value="{{ $student->nim}}">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Input Email..." value="{{ $student->email}}">
                    @error('email')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" placeholder="Input Jurusan..." value="{{ $student->jurusan}}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit Data!</button>
            </form>
        </div>
    </div>
</div>
@endsection