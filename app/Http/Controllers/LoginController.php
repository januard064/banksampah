<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class LoginController extends Controller
{
    private $email;
    private $password;

    public function loginAuth(Request $request){
        $this->email = $request->email;
        $this->password = $request->password;

        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->withDatabaseUri('db_uri')
            ->create();
        $auth = $Firebase->getAuth();
        $user = $auth->verifyPassword($this->email, $this->password);
        if($user){
            $email = str_replace('.','_',$this->email);
            session_start();
            $_SESSION['user'] = $email;
            return redirect()->action('SampahController@dashboard2');
        }
    }

    public function login(){
        return view('auth.login');
    }


    private $nama_lengkap;
    private $no_telp;
    private $pekerjaan;
    private $point;
    private $login;

    public function registerAuth(Request $request){
        $this->nama_lengkap = $request->nama_lengkap;
        $this->email = $request->email;
        $this->password = $request->password;
        $this->no_telp = $request->number;
        $this->pekerjaan ="Silahkan diisi";
        $this->point = 0;
        $this->identitas="Silahkan diisi";
        $this->alamat="Silahkan diisi";


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

        $email = str_replace('.','_',$this->email);

        $ref = $database->getReference("Users/{$email}");
        

        $ref->set([
            'nama_lengkap'=>$this->nama_lengkap,
            'email'=>$this->email,
            'password'=>$this->password,
            'no_telp'=>$this->no_telp,
            'pekerjaan'=>$this->pekerjaan,
            'point'=>$this->point,
            'alamat'=>$this->alamat,
            'no_identitas'=>$this->identitas,
            "profile_image_url"=>"kosong"
        ]);
        return redirect()->action('SampahController@dashboard');
        // return view('layouts.dashboard');
    }

    public function register(){
        return view('auth.register');
    }

    

  
    


}
