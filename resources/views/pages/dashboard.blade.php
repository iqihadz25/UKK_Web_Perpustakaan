@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-3" style="color:white">Halaman Beranda</h1>
            <form action="/" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search book title..." name="search">
                    <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
        @foreach ($books as $book )
        <div class="col-md-3 mt-4">
            <div class="card" style="width: 200; border-top: 4px solid #ffffff;
            border-left: 4px solid #ffffff;
            border-right: 4px solid #ffffff;">
                 <img src="{{ asset('storage/' .$book->cover) }}" alt="{{ $book->title }}" height="400px">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title}}</h5>
                  <p class="card-text">{{ $book->author}}</p>
                  <a href="{{ route('books.detail', $book->id)}}"class="btn btn-primary">Lihat Buku</a> 
                </div>
              </div>
           </div>
        @endforeach
    </div>
</div>
       

       
<div class="footer p-2 mt-3" >
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3">
               
            </div>
        </div>
    </div>
</div>

@endsection