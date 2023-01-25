<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //register
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed'
        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()], 422);
        }
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        //token
        return $this->getResponse($user);
    }

    //login
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()], 422);
        }
        $credentials = request(['email', 'password']);
        if(Auth::attempt($credentials)){
            $user = $request->user();
            return $this->getResponse($user);
        }
    }
    // user
    public function user(Request $request){
        return $request->user();
    }

    //get response
    private function getResponse(User $user){
        $token = $user->createToken('Personal_Access_Token')->plainTextToken;
        return response([
                'user' => $user->first_name.' '.$user->last_name,
                'email' => $user->email,
                'token' => $token,
                'expires_at' => Carbon::parse($user->tokens()->first()->expires_at)->toDateTimeString()
            ],200);
    }

    //logout
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response([
            'message' => 'Logged  out successfully'
        ],200);
    }
}
