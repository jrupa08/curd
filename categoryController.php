<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('home', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        // dd($request->all());
        $category = new category;
        // dd($catagory->title);
        $category->title = $request->title;
        $category->save();

        return redirect('/home');
    }

    public function edit($id)
    {
        // dd($id);
        $category = category::where('id', $id)->first();

        return view('edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);

        $category = category::where('id', $id)->first();
        // dd($id);
        //dd($category->title);
        $category->title = $request->title;
        $category->save();

        return redirect('/home');
    }

    public function distroy($id)
    {
        $category = category::where('id', $id)->first();

        //  $category::category('$id');
        $category->delete();

        return redirect('/home');
    }
}
