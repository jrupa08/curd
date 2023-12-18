<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function store()
    {
        return view('list', ['todos' => todo::get()]);
    }

    public function cteate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        //dd($result->all());
        $todos = new todo();
        $todos->name = $request->name;
        $todos->dob = $request->dob;
        $todos->address = $request->address;
        $todos->email = $request->email;
        $todos->password = $request->password;

        $todos->save();

        return redirect('/list');
    }

public function edit($id)
{
    //dd($id);
    //$todos = todo::find($id);
    // dd($todos);
    $todos = DB::table('todos')->find($id);

    return view('welcome-edit', ['todo' => $todos]);
}

public function update(Request $request, $id)
{
    // dd(todo::find($id));
    $todos = todo::find($id);
    //dd($request->dob);
    $todos->name = $request->name;
    $todos->dob = $request->dob;
    $todos->address = $request->address;
    $todos->email = $request->email;
    $todos->password = $request->password;

    $todos->save();

    return redirect('/list');
}

public function distroy($id)
{
    ///$todos::todo('id');
    // $todos->delete();
    $todos = todo::find($id);
    $todos->delete();

    return redirect('/list');
}
}
