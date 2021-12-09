<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view("home");
    }

    public function Important(){
        return view("important");
    }

    public function Planned(){
        return view("planned");
    }

    public function AssignedToMe(){
        return view("assignedToMe");
    }

    public function Tasks(){
        return view("tasks");
    }
}