<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class AkunController extends Controller
{
    public function getUser(){
        session_start();
        $this->user = $_SESSION['user'];
        return $this->user;
    }
   
    public function Nama(){  
        $this->user =  $this->getUser();
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/nama_lengkap");
        return $ref->getValue();
    }

    public function Email(){  
       
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/email");
        return $ref->getValue();
    }

    public function Alamat(){    
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/alamat");
        return $ref->getValue();
    }



    public function Id(){    
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/no_identitas");
        return $ref->getValue();
    }

    public function Telepon(){    
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/no_telp");
        return $ref->getValue();
    }

    public function Password(){    
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/password");
        return $ref->getValue();
    }

    public function Pekerjaan(){    
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/pekerjaan");
        return $ref->getValue();
    }

    public function profil(){
        $akun = new editController();
        return view('profil',compact('akun'));
    }

}
