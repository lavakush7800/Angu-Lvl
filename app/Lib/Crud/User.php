<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\UserController;
use App\Models\User as Model;

class User{
    public static function store($data){
        $res = Model::create($data);
        return $res;
    
    }
}