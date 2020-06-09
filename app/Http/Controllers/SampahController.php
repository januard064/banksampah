<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class SampahController extends Controller
{
    
    public function edit()
    {
        return view('edit');
    }

    public function tukarpoin()
    {
        return view('tukarpoin');
    }

    public function dashboard()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
   
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // The following line is optional if the project id in your credentials file
        // is identical to the subdomain of your Firebase project. If you need it,
        // make sure to replace the URL with the URL of your project.
        ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref =  $database->getReference("Event");
        $event = $ref->getValue();

        foreach($event as $subject){
            $all_event[] = $subject;
        }

        // return json_encode($all_event);
       

        return view('layouts.dashboard',compact('all_event'));
    }

    public function getUser(){
        session_start();
        $uid = $_SESSION['user'];
        return $uid;
    }

    public function Nama(){  
        $this->user =  $this->getUser();
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("UsersWeb/{$this->user}/nama_lengkap");
        return $ref->getValue();
    }

    public function Poin(){  
        
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();
        $database = $firebase->getDatabase();
        $ref =  $database->getReference("UsersWeb/{$this->user}/point");
        return $ref->getValue();
    }

    // public function dashboard2(){
    //     $akun = new SampahController();
    //     return view('dashboard2',compact('akun'));
    // }

    public function dashboard2(){

        $this->uid = $this->getUser();
        $email = str_replace('_', '.',$this->uid);
        
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // The following line is optional if the project id in your credentials file
        // is identical to the subdomain of your Firebase project. If you need it,
        // make sure to replace the URL with the URL of your project.
        ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref =  $database->getReference("Jenis_Sampah");


        $ambilpoin =  $database->getReference("Users/{$this->uid}/point");
        $poin = $ambilpoin->getValue();

        $ambilnama =  $database->getReference("Users/{$this->uid}/nama_lengkap");
        $nama= $ambilnama->getValue();

        $ev =  $database->getReference("Event");
        $event = $ev->getValue();

        foreach($event as $subject){
            $all_event[] = $subject;
        }

        
        
        return view('dashboard2',compact('all_event','poin','nama'));
    }




    

    public function your()
    {
        return view('your');
    }

    public function afterlogin()
    {
        return view('layouts.afterlogin');
    }

    public function tambahevent()
    {
        return view('tambahevent');
    }

    public function formedit()
    {
        return view('formedit');
    }

    public function tentang()
    {
        
        $this->uid = $this->getUser();
        $email = str_replace('_', '.',$this->uid);
        
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // The following line is optional if the project id in your credentials file
        // is identical to the subdomain of your Firebase project. If you need it,
        // make sure to replace the URL with the URL of your project.
        ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref =  $database->getReference("Jenis_Sampah");


        $ambilpoin =  $database->getReference("Users/{$this->uid}/point");
        $poin = $ambilpoin->getValue();

        $ambilnama =  $database->getReference("Users/{$this->uid}/nama_lengkap");
        $nama= $ambilnama->getValue();

        $ev =  $database->getReference("Event");
        $event = $ev->getValue();

        foreach($event as $subject){
            $all_event[] = $subject;
        }



        return view('tentang',compact('all_event','poin','nama'));
    }


    public function event()
    {
        
        $this->uid = $this->getUser();
        $email = str_replace('_', '.',$this->uid);
        
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // The following line is optional if the project id in your credentials file
        // is identical to the subdomain of your Firebase project. If you need it,
        // make sure to replace the URL with the URL of your project.
        ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref =  $database->getReference("Jenis_Sampah");


        $ambilpoin =  $database->getReference("User/{$this->uid}/point");
        $poin = $ambilpoin->getValue();

        $ambilnama =  $database->getReference("User/{$this->uid}/nama_lengkap");
        $nama= $ambilnama->getValue();

        $ev =  $database->getReference("Event");
        $event = $ev->getValue();

        foreach($event as $subject){
            $all_event[] = $subject;
        }



        return view('event',compact('all_event','poin','nama'));
    }


}

