<?php

namespace App\Http\Controllers\Validation;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class Register
{
    public static function validate($request)
    {
        $validation = Validator::make($request->all() ,[
            'profile_name' => 'required',
            'username' => 'required|unique:users',
            'email'     =>  'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        
        if($validation->fails()) {
            $errors = $validation->errors()->toArray();
            $data = array_map(function($errors){         
                foreach($errors as $key=>$value){
                    return $value;                           
                }                       
            },$errors);
            [$keys, $values] = Arr::divide($data);      
            return $values;
        } 
        
        if($request->input('password') != $request->input('confirm_password')) {
            return 'password tidak sesuai';
        }
    }
}