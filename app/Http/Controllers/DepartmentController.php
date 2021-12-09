<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return "Index method";
    }

    public function create(){
        return "Create method";
    }

    public function store(){
        return "Store method";
    }

    public function update(){
        return "Update method";
    }

    public function edit(){
        return "Edit method";
    }

    public function show(){
        return "Show method";
    }

    public function destroy(){
        return "Destroy method";
    }
}