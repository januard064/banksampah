<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class RewardController extends Controller
{


    public function getUser(){
        session_start();
        $this->user = $_SESSION['user'];
        return $this->user;
    }

public function reward(){

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

    $re =  $database->getReference("Reward");
    $reward = $re->getValue();

    // foreach($reward as $subject){
    //     $all_reward[] = $subject;
    // }
    return view('reward',compact('reward','nama','poin'));
}

}