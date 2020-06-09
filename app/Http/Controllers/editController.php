<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class editController extends Controller
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
        $ref =  $database->getReference("User/{$this->user}/password");
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

    public function Poin(){    
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("Users/{$this->user}/point");
        return $ref->getValue();
    }


    public function formedit(){
        $akun = new editController();
        return view('formedit',compact('akun'));
    }

    public function updateprofil(Request $request){

        $this->uid = $this->getUser();
        $email = str_replace('_', '.',$this->uid);

        $this->nama_lengkap = $request->nama_lengkap;
        $this->email = $request->email;
        // $this->password = $request->password;
        $this->no_telp = $request->no_telp;
        $this->pekerjaan ="$request->pekerjaan";
        $this->point = "$request->poin";
        $this->identitas="$request->no_identitas";
        $this->alamat="$request->alamat";
        
 
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();

        $ref = $database->getReference("Users/{$this->uid}");     
  
        $ref->update([
            'nama_lengkap'=>$this->nama_lengkap,
            'email'=>$this->email,
            // 'password'=>$this->password,
            'no_telp'=>$this->no_telp,
            'pekerjaan'=>$this->pekerjaan,
            'point'=>$this->point,
            'alamat'=>$this->alamat,
            'no_identitas'=>$this->identitas
           
        ]);
        
        return redirect()->action('AkunController@profil');

    }



    
}
