@extends('layout/main')

@section('title', 'Form Create Students')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Create Students</h1>
            <form method="post" , action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Input Name..." value="{{ old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">Nim : </label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id=" nim" name="nim"
                        placeholder="Input Nim..." value="{{ old('nim')}}">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Input Email..." value="{{ old('email')}}">
                    @error('email')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" placeholder="Input Jurusan..." value="{{ old('jurusan')}}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Data!</button>
            </form>
        </div>
    </div>
</div>
@endsection