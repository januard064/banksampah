@extends('layouts.app')

@include('header2')

<h3 style="margin-bottom:40px;color:#268986 ;font-weight:bold; margin-left: 46%;">ANTAR</h3>

<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width:100%;" >
    <label class="btn " style="width:50%; border-radius:0; color:black;" >
      <input  type="radio" name="options" id="option1" autocomplete="off" checked> <a style="color:black;" href="#"> Isi Form</a>
    </label>
    <label class="btn "style="width:50%; border-radius:0;  ">
      <input  type="radio" name="options" id="option2" autocomplete="off"> <a style="color:black;" href="statusantar"> Status</a>
    </label> 
  </div>


<div class="card" style="width:500px; height:200px; margin-left:30%; background-color:#F3F6F3; margin-top:5%; " >
  <div class="card-body">
    <h5 style="margin-left:18%; color:green; font-weight: bold; margin-top:30px; font-size:25px;">PERMINTAAN DIPROSES!</h5>
    <h6 style="margin-left:12%; margin-top:30px; font-size:20px; font-color:#1D8927;">Silahkan Mendatangi Pos Terdekat</h6>
    
    <button type="button" class="btn btn-success" style="margin-left:42%; margin-top:10px;" ><a style="color:black;" href="antar" class="card-link">OK</a></button>
    
  </div>
</div>



@include('footer')