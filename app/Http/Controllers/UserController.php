<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Validator;
class UserController extends Controller
{
    public function loginUser(Request $request){
        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');

            $validator=Validator::make($request->all(),[
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);
            if($validator->fails()){
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            if(Auth::attempt($credentials)){
                return 1;
            }else{
                return 2;
            }
        }
        return 'ok';
    }

    public function registerUser(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // Check if User already exists
            $userCount = User::where('email', $data['email'])->count();
            if($userCount>0){
                $message = "Email already exists!";
                Session::flash('error_message', $message);
                return redirect()->back();
            }else{
                // Register the User
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();

                if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                    return redirect('/');
                }

            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
