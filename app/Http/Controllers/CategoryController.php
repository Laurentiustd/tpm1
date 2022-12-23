<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){

        return view('createCategory');
    }

    public function store(Request $request){
    category::create([
        'nama'=>$request->name
    ]);
    
    return redirect('/home');
    }
}
