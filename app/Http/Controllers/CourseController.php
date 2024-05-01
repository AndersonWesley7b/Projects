<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('courses.index');
    }

    public function show(){
        return view('courses.show');
    }

    public function create(){
        return view('courses.create');
    }

    public function store(){
        dd('store');
    }

    public function edit(){
        return view('courses.edit');
    }

    public function update(){
        dd('update');
    }

    public function destroy(){
        dd('destroy');
    }

}
