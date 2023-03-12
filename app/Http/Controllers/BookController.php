<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
//use App\Http\Controllers\BookExport;
use App\Exports\BookExport;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use PDF;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('pages.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->all();
        $data['cover'] = $request->file('cover')->store('assets/book', 'public');

        Book::create($data);

        // SweetAlert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('pages.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('assets/book', 'public');
        } else {
            $data['cover'] = $book->cover;
        }
        
        $book->update($data);
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('buku.index');
    }

    public function export_excel()
	{
		return Excel::download(new BookExport, 'databuku.xlsx');
	}

    public function exportpdf()
    {
        $books= Book::all();

        view()->share('books', $books);
        $pdf = PDF::loadview('datapdfcuy');
        return $pdf->download('DataBuku.pdf');
    }
}
