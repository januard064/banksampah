@extends('layouts.app')
@include('header2')

<div style="background-color: #ffffff; padding: 20px;">
            <div style="text-align: center;">
                <h4 style="color: #A0BAA2">REWARD</h4>
            </div>
        </div>

        @foreach($reward as $hadiah => $subject)
<div class="card" style="margin-top:5%; width:90%;">
<div class="row">
  <div class="card1-mb-3 text-center" style="width: 100rem; height: 20rem;">
    <div class="col-md-3 float-right"> 
      <h2 style="color:black">{{$subject['namaReward']}}</h2>
      <span class="badge badge-primary"><h4>{{$subject['jenisReward']}}</h4></span><br><br>
      <a href="#popup" class="btn btn-primary">{{$subject['pointReward']}}</a>
  </div>
  <div class="d-inline p-2 bg-white"><img style="width: 40rem ; margin-top:20px;  height: 15rem" src= "{{$subject['urlreward']}}"></div>
  </div>
</div>
</div>

<div id="popup">
    <div class="window">
        <a href="#" class="close-button" title="Close">X</a>
        <h2>Tukar {{$subject['pointReward']}} Poin Dengan {{$subject['namaReward']}}</h2>
        <br>
        <a href="tukarpoint.html" class="btn btn-danger btn-lg">Batal</a>
        <a href="#popup2" class="btn btn-success btn-lg">Tukar</a>
    </div>
</div>
<div id="popup2">
    <div class="window">
    <a href="#" class="close-button" title="Close">X</a>
    <h2>BERHASIL!</h2>
    <p>Silahkan ambil barang dari pos terdekat</p>
    <a href="#" class="btn btn-success btn-lg">OK</a>
    </div>
</div>


<!-- <div class="card" style="margin-left: 200px; margin-right: 200px; padding-left:50px;">
    <div class="card-body">
        <h5 class="card-title">{{$subject['namaReward']}}</h3> <br class="mb-5 "> <a class="btn btn-primary">{{$subject['jenisReward']}}</a> <a class="btn btn-primary">{{$subject['pointReward']}}</a>
    </div>
  <img src="{{ ('ikon/lelang.jpg') }}" class="text-center" style="width: 300px;" alt="...">
</div><br> -->
<!-- <div class="card" style="margin-top:5%; width:90%;">
    <div class="row">   
        <div class="card1-mb-3 text-center" style="width: 100rem; height: 20rem;">
            <div class="col-md-3 float-right"> 
                <h2 style="color:black">{{$subject['namaReward']}}</h2>
                <p><img style="width : 20px ; height:20px ; margin-right:10px" src="{{ ('ikon/rumah.png') }}">  {{$subject['jenisReward']}} </p>
            </div>
            <div class="d-inline p-2 bg-white"><img style="width: 40rem ; margin-top:20px;  height: 15rem" src= "{{ ('ikon/lelang.jpg') }}"></div>
        </div>         
    </div>
</div> -->
@endforeach
@include('footer')
