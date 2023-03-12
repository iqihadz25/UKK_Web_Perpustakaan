@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <img src="{{ asset('storage/' .$books->cover) }}" alt="..." height="400px">
        </div>
        <div class="col-md-8 mt-4">
            <h5><strong>Judul Buku :</strong> {{ $books->title}}</h5>
            <h5><strong>Pengarang :</strong> {{ $books->author}}</h5>
            <h5><strong>Penerbit :</strong> {{ $books->publisher}}</h5>
            <h5><strong>Tahun Terbit:</strong> {{ $books->year}}</h5>
            <h5><strong>Deskripsi :</strong> {{ $books->description}}</h5>
            <h5><strong>Kategori :</strong> {{ $books->category}}</h5>
            <a href="/" type="button" class="btn btn-danger">Kembali</a>
        </div>
    </div>

</div>

@endsection