<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function index(Request $request)
    {
        $name = $request -> name;

        return "Hello, " . $name . "!";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function test(){
        $user = [
            'name' => 'Lorn Sovannra',
            'age' => 20
        ];

        /* dd($user); */
        return view("/test", compact('user'));
    }
}