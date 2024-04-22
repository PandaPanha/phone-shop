<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StoreLoginRequest;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Authenticate extends Controller
{
    public function login(){

        return view('Frontend.Auth.login');
    }

    public function register(){

        return view('Frontend.Auth.register');
    }

    public function store(RegisterRequest $request){

        $user = $request->all();
        User::Create([
            'name'             =>$request->get('name'),
            'email'            =>$request->get('email'),
            'password'         =>bcrypt($request->get('password')),

        ]);

        return redirect()->route('dashboard');
    } 

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function loginA(Request $request) {
        try {
            $validateUser = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
    
            if ($validateUser->fails()) {
                throw new ValidationException($validateUser);
            }
    
            if (!Auth::attempt($request->only(['email', 'password']))) {
                throw new AuthenticationException('Email and password do not match our records');
            }
    
            return view('admin.dashboard.dashboard');
        } catch (ValidationException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                
            ], 401);
        } catch (AuthenticationException $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 401);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}

