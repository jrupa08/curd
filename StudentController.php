<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        //dd($request->all());
        //dd($request->all());
        // dd($students);
        $students = student::all();

        return view('student-table', ['student' => $students]);
    }

    public function store(Request $request)
    {
        // {
    //     //dd($request->all());
    //     dd($request->all());

    //     return view('student-table')

        // }
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $stu = new student();
        $stu->name = $request->name;
        $stu->dob = $request->dob;
        $stu->email = $request->email;
        $stu->password = $request->password;
        $stu->save();

        return redirect('/index1');
    }

    public function edit($id)
    {
        $students = student::where('id', $id)->first();

        return view('stuedit', ['student' => $students]);
    }

    public function update(Request $request, $id)
    {
        $stu = student::where('id', $id)->first();
        $stu->name = $request->name;
        $stu->dob = $request->dob;
        $stu->email = $request->email;
        $stu->password = $request->password;
        $stu->save();

        return redirect('/index1');
    }

    public function distroy($id)
    {
        $stu = student::where('id', $id)->first();
        $stu->delete();

        return redirect('/index1');
    }

    public function show()
    {
        $todos = DB::table('todos')
        ->select('todos.*', 'students.name')
        ->join('students', 'todos.stu_id', '=', 'students.id')
       // ->where('todos.email', '=', 'jrupali@gmail.com')
       // ->count();
        ->groupBy('name')
         ->select(DB::raw('count(*)as students_count'), 'name')
         ->get();

        return $todos;
        // return view('stud', compact('todos'));
    }

    public function chunk()
    {
        $todos = DB::table('todos')->orderBy('id')
        ->chunkById(3, function ($todos) {
            //echo "<div style='border:1px solid red;margin-bottom:15px'>";
            foreach ($todos as $todo) {
                DB::table('todos')
                ->where('id', $todo->id)
                ->update(['stu_id' => false]);
            }
            //  echo$student->name.'<br>';
        });
        // echo'</div>';
    }
}
