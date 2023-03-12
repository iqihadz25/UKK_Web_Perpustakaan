<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $books = Book::where('title','LIKE','%'.$request->search.'%')->paginate(10);
                                
            Session::put('halaman_url',request()->fullUrl());
        }else {
            $books = Book::paginate(10);
            Session::put('halaman_url',request()->fullUrl());
        }
        return view('pages.dashboard',compact('books',));
    }
    public function detail($id)
    {
        $books = Book::where('id', $id)->first();
        
        return view('detailBuku', compact('books'));
    }

}
