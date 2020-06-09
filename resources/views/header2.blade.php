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
    <a  class="nav-link" href="tentang">Tentang</a>
  </li>
  
  <li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hai, <?php echo $nama ?></a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Poin : <?php echo $poin ?></a>
      <a class="dropdown-item" href="profil">Akun</a>
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