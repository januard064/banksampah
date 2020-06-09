<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class JemputsampahController extends Controller
{
    public function index(){    

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

        $ref =  $database->getReference("JemputSampah/{$this->uid}");

        $antarsampah = $ref->getValue();

        $ambilpoin =  $database->getReference("Users/{$this->uid}/point");
        $poin = $ambilpoin->getValue();

        $ambilnama =  $database->getReference("Users/{$this->uid}/nama_lengkap");
        $nama= $ambilnama->getValue();

        foreach($antarsampah as $subject){
            $all_subject[] = $subject;
        }

        // return json_encode($all_subject);
        return view('StatusJemput',compact('all_subject','poin','nama'));

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


    public function addjemput(Request $request){

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

        $ref =  $database->getReference("JemputSampah/{$this->uid}");

        $jenissampah = $request->jenissampah;
        $berat  = $request->berat;
        $satuan = $request->satuan;
        $tanggal = $request->tanggal;
        $poin = $request->poin;
        $alamat = $request->alamat;
        $status = $request->status;

        $key = $ref->push()->getKey();

        $ref->getChild($key)->set([
            'JenisSampah'=>$jenissampah,
            'Berat'=>$berat,
            'Satuan'=>$satuan,
            'Tanggal'=>$tanggal,
            'Poin'=>$poin,
            // 'Status'=>$status
            'LokasiJemput'=>$alamat,
            'currentId'=>$this->uid,
            'Status'=>'Sedang diproses'
            
        ]);

        $subjects = $ref->getValue();

        foreach($subjects as $subject){
            $all_subject[] = $subject;
        }


        return redirect()->action('JemputsampahController@berhasiljemput');

    }

    public function jemput(){
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

        $this->uid = $this->getUser();
        $email = str_replace('_', '.',$this->uid);
        
        $ambilpoin =  $database->getReference("Users/{$this->uid}/point");
        $poin = $ambilpoin->getValue();

        $ambilnama =  $database->getReference("Users/{$this->uid}/nama_lengkap");
        $nama= $ambilnama->getValue();

        $antarsampah = $ref->getValue();
        foreach($antarsampah as $subject){
            $all_sampah[] = $subject;
        }
        return view('jemput',compact('all_sampah','poin','nama'));

    }

    public function berhasiljemput(){

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // The following line is optional if the project id in your credentials file
        // is identical to the subdomain of your Firebase project. If you need it,
        // make sure to replace the URL with the URL of your project.
        ->withDatabaseUri('https://bank-sampah-750d0.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

     

        $this->uid = $this->getUser();
        $email = str_replace('_', '.',$this->uid);

        $ambilpoin =  $database->getReference("Users/{$this->uid}/point");
        $poin = $ambilpoin->getValue();

        $ambilnama =  $database->getReference("Users/{$this->uid}/nama_lengkap");
        $nama= $ambilnama->getValue();

        return view('berhasiljemput',compact('poin','nama'));
    }

}