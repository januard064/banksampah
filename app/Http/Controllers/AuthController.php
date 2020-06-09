<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class AuthController extends Controller
{
    
    public function login(Request $request){
        $regist = $request->register;
        $login = $request->login;
        if(isset($regist)){
            return view('layout/register');
        }
        if(isset($login)){
            $email = $request->emailSignin;
            $pass = $request->passwordSignin;
        
            $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
            $Firebase = (new Factory)
                ->withServiceAccount($ServiceAccount)
                ->withDatabaseUri('db_uri')
                ->create();

            $auth = $Firebase->getAuth();
            $user = $auth->verifyPassword($email, $pass);
            if($user){
                $_SESSION['user'] = $email;
                return view('layout/home');
            }
        }
    }
    public function masuk(){
        return view('layout/login');
    }
    public function signup(Request $request){      
        $email = $request->emailSignup;
        $pass = $request->passwordSignup;
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->withDatabaseUri('db_uri')
            ->create();
        $auth = $Firebase->getAuth();
        $user = $auth->createUserWithEmailAndPassword($email, $pass);
        if($user){
            $_SESSION['user'] = $email;
            return view('layout/home');
        }
    }
    public function logout(){
        session_destroy();
        return view('layout/login');
    }
    public function register(){
        return view('layout/register');
    }
}
