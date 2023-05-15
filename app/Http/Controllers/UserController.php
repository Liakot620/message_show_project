<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function register(request $request)
    {
        $validator= validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'c_password'=>'required',
        ]);

        if($validator->failed()){
            $response=[
                'success'=>'false',
                'message'=>$validator->errors(),
            ];
            return response()->json($request,400);
        }
        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);

        $success['token']=$user->createToken('Myapp')->planeTextToken;
        $success['name']=$user->name;
        $response=[
            'success'=>'ture',
            'data'=>$success,
            'message'=>'user register success'
        ];
        return response()->json($request,200);
    }
}
