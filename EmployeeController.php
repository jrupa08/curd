<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = employee::all();

        return view('empmodel');
    }

    public function create()
    {
        $employees = employee::all();

        return view('emptable', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $emps = new employee;
        $emps->fname = $request->fname;
        $emps->lname = $request->lname;
        $emps->address = $request->address;
        $emps->mobile = $request->mobile;
        $emps->save();

        return redirect('/emptable')->with('success', 'Data saved');
    }

    public function edit($id)
    {
        $employees = employee::where('id', $id)->first();

        return view('empedit', ['employees' => $employees]);
    }

    public function update(Request $request, $id)
    {
        $emps = employee::where('id', $id)->first();
        //  $emps = new employee;
        $emps->fname = $request->fname;
        $emps->lname = $request->lname;
        $emps->address = $request->address;
        $emps->mobile = $request->mobile;
        $emps->save();

        return redirect('/emptable');
    }

    public function distroy($id)
    {
        $emps = employee::where('id', $id)->first();
        $emps->delete();

        return redirect('/emptable');
    }
}
