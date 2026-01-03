<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }

    public function show()
    {
        return view('students.show');
    }

    public function edit()
    {
        return view('students.edit');
    }
    public function destroy()
    {
        return redirect()->route('students.index');
    }
}
