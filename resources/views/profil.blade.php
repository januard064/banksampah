@extends('layouts.app')
<div class = "jumbotron" style="background-color:#3a7d77
; height: 0px;">

<div class="row" style="margin-left:0%;">

<div class="col-sm-3">
<p style="font:simsun; color:white;">SiPahias</p>
</div>



<div class="col-sm-5" style="margin-left:33%;">
<ul class="nav justify-content-center" >

<li class="nav-item">
    <a class="nav-link" href="dashboard2">Beranda</a>
  </li>

 
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tukar Sampah</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="antar">Antar</a>
      <a class="dropdown-item" href="jemput">Jemput</a>
    </div>
    </li>

  <li class="nav-item">
    <a  class="nav-link" href="#">Tentang</a>
  </li>
  
  <li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hai, </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Poin =  </a>
      <a class="dropdown-item" href="formedit">Akun</a>
      <a class="dropdown-item" href="logout">Keluar</a>
    </div>
  
    </li>


  <li class="nav-item">
    <img src="{{ ('ikon/user.png') }}" style ="width : 30px; height:30px; margin-top:5px;" >  
  </li>
</ul>
</div>
</div>


</div>







<!--edit.blade-->

<h3 style="margin-bottom:40px;color:#268986 ;font-weight:bold; margin-left: 46%;">AKUN</h3>
<div class="row" style="margin-left: 17%;">
<img src="{{ ('ikon/pencil.png') }}" style="width:20px; height:20px;" >
<a href="formedit">Sunting Profil</a>
</div>


<div class="row" style="margin-left: 15%;">

<div class="col-sm-9" >
<h3 style="margin-bottom:40px; font-weight:bold;"></h3>

<form method="GET" action="/formedit/updateprofil">
                        @csrf


<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-7">
    <input class="" type="text" name="nama_lengkap" style="width:500px;" readonly value="<?php echo $akun->Nama(); ?>" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-7">
    <input class="" type="text" name="email" style="width:500px;" readonly value="<?php echo $akun->Email(); ?>">
    </div>
  </div>
 

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
    <div class="col-sm-7">
    <input class="" type="text" name="no_telp" style="width:500px;" readonly value="<?php echo $akun->Telepon(); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
    <div class="col-sm-7">
    <input class="" type="text" name="pekerjaan" style="width:500px;" readonly value="<?php echo $akun->Pekerjaan(); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">No. ID</label>
    <div class="col-sm-7">
    <input class="" type="text" name="no_identitas" style="width:500px;" readonly value="<?php echo $akun->Id(); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-7">
    <input class="" type="text" name="alamat" style="width:500px;" readonly value="<?php echo $akun->Alamat(); ?>" >
    </div>
  </div>

</form>



</div>

<div class="col-sm-3" style="margin-left: 0;">
<img src ="{{ ('ikon/unnamed.jpg') }}" style="width:200px">
</div>


</div>

@include('footer')
