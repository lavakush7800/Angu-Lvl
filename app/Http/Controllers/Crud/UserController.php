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
    public function show(){
        try{
            $results = User::show();
            return view('user_show', compact('results'));
        }catch(\Exception $e){

        }
    }    public function delete($id){
        try{
           $result = User::delete($id);
           if($result){
               return redirect('user_show')->withErrors(['msg', 'Unable Yo Dalete!']);
           }else{
            return redirect('user_show')->withErrors(['msg', 'Unable Yo Dalete!']);
           }
        }catch(\Exception $e){

        }
    }
}
