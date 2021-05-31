<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\UserController;
use App\Models\User as Model;

class User{
    public static function store($data){
        $res = Model::create($data);
        return $res;
    }
    public static function show():array{
        try{
            $data = Model::all();
            if($data){
                return $data->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function delete($id):bool{
        try{
            $result = Model::find($id)->delete();
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
}