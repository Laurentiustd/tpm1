<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Book = Book::All();
        return view('welcome', compact('Book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('formBooks', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            // 'Judul' => 'required|unique:books|min:5|max:255',
            'author'=>'required',
            'date'=> 'required',
            'stock'=>'required|integer|min:5',
            'image'=>'required|mimes:jpg,png'

 
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Judul.'_'.$request->title.'.'.$extension;
        $request->file('image')->storeAs('/public/Book/',$filename);

        Book::create([
            'Judul'=> $request -> title,
            'PublishDate'=> $request -> date,
            'Penulis'=>$request->author,
            'stock'=> $request -> stock,
            'image'=>$filename,
            'category_id'=>$request->category
        ]);

        return redirect('/home');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Book = Book::findOrFail($id);

        return view('showBook', compact('Book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Book = Book::findOrFail($id);

        return view('editBook', compact('Book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Judul.'_'.$request->title.'.'.$extension;
        $request->file('image')->storeAs('/public/Book/',$filename);
        
        Book::findOrFail($id)->update([
            'Judul'=>$request->title,
            'Penulis'=>$request->author,
            'PublishDate'=>$request->date,
            'stock'=>$request->stock,
            'image'=>$filename
        ]);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);

        return redirect('/home');
        
    }
}
