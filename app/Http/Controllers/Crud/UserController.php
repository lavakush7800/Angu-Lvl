<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Crud\User;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }
    public function store(Request $request){
        $data = $request->all();
        $result = User::store($data);
        return view('user');
    }
}
