<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class registerController extends Controller
{
    private $nama_lengkap;
    private $email;
    private $password;
    private $no_telp;
    private $pekerjaan;
    private $point;
    private $login;

    public function registerAuth(Request $request){
        $this->nama_lengkap = $request->nama_lengkap;
        $this->email = $request->email;
        $this->password = $request->password;
        $this->no_telp = $request->number;
        $this->pekerjaan = $request->pekerjaan;
        $this->point = 0;

        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->withDatabaseUri('db_uri')
            ->create();
        $auth = $Firebase->getAuth();
        $user = $auth->createUserWithEmailAndPassword($this->email, $this->password);
        if($user){
            return $this->registerData();
        }        
    }

    public function registerData(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference('Users');

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $number = $request->number;
        $pekerjaan = $request->pekerjaan;
        $point = $request->poin;

        $key = $ref->push()->getKey();

        $ref->getChild($key)->set([
            'nama_lengkap'=>$name,
            'email'=>$email,
            'password'=>$password,
            'no_telp'=>$number,
            'pekerjaan'=>$pekerjaan,
            'point'=>'0'
        ]);

        $registers = $ref->getValue();
        
        foreach($registers as $register){
            $all_register[] = $register;
        }
        return view('layouts.dashboard',compact('all_register'));
    }

    public function register(){
        return view('auth.register');
    }
}
