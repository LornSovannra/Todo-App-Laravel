<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Start Lessons
Route::get('user/{id1}/delete/{id2}', function ($id1, $id2) {
    return "user $id1, delete $id2";
}) -> whereAlpha("id1") -> whereNumber('id2');

Route::prefix("todo")->group(function(){
    Route::get('edit/{id}', function ($id) {
        return "edit $id";
    }) -> name('edit_todo');
    
    Route::get('auth/delete/{id}', function ($id) {
        return "Delete id $id";
    }) -> name("delete_todo") -> where(["id" => "[a-zA-Z0-9]{2, 3}+"]);
    
    Route::get('create', function ($id) {
        return "Create";
    });
});

Route::get("/index", [DepartmentController::class, "index"]);
Route::post("/create", [DepartmentController::class, 'create']);
Route::post("/store", [DepartmentController::class, 'store']);
Route::put("/update", [DepartmentController::class, 'update']);
Route::put("/edit", [DepartmentController::class, 'edit']);
Route::get("/show", [DepartmentController::class, 'show']);
Route::delete("/destroy", [DepartmentController::class, 'destroy']);
//End Lessons

//Start Project
Route::get("/", [HomeController::class, "Home"]) -> name("home");
Route::get("/important", [HomeController::class, "Important"]) -> name("important");
Route::get("/planned", [HomeController::class, "Planned"]) -> name('planned');
Route::get("/assign-to-me", [HomeController::class, "AssignedToMe"]) -> name("assigned_to_me");
Route::get("/tasks", [HomeController::class, "Tasks"]) -> name('tasks');