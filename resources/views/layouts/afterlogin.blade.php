@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SiPahias</title>
    <meta charset="UTF-8">
</head>
<body>
@extends('layouts.app')


<div class = "jumbotron" style="background-color:#3a7d77;">

<div class="col-sm-3">
<p style="font:simsun; color:white;">SiPahias</p>
</div>

<div class="col-sm-5" style="margin-left:33%; ">
<ul class="nav justify-content-center" >

<li class="nav-item">
    <a class="nav-link" href="dashboard">Beranda</a>
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
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hai, Eric Nam</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Jumlah Poin</a>
      <a class="dropdown-item" href="#">Akun</a>
      <a class="dropdown-item" href="{{route('logout')}}">Keluar</a>
    </div>
    </li>


  <li class="nav-item">
    <img src="{{ ('ikon/user.png') }}" style ="width : 30px; height:30px; margin-top:5px;" >  
  </li>
</ul>
</div>
</div>

</div>
</div>


<div id="container">
      <div id="header"> 
        <div class="background"><img src=" {{ ('ikon/Background.png') }}"></div>
       
        <div class="container" style="margin-center:10%;">
          <div class="navigasi" >
            <img src= "{{ ('ikon/Untitled-10.png') }}" style="margin-left:7%;">
            <div class="katabank">
            <h3>SIPAHIAS </h3>
          </div>
            <p>Bank sampah merupakan sebuah aplikasi yang ditujukan kepada mahasiswa dengan
              tujuan agar dapat menjaga kebersihan lingkungan IT Del.
            </p>
          </div>
</div>

          <div class="content">
          <div class="tukar-sampah">
            <ul>
            <div class="card1 text-center shadow p-3 mb-5 bg-white rounded" style="width: 18rem; margin-left:50%">
              <div class="card-body1" >
                <li><img src="{{ ('ikon/trashh.png') }}">
                <a href="#" class="tombol tombol-lengkap">Antar Sampah</a></li>
              </div>
            </div>
            <div class="card1 text-center shadow p-3 mb-5 bg-white rounded" style="width: 18rem; margin-left:90% ">
              <div class="card-body1">
                <li><img src="{{ ('ikon/trash (4).png') }}"></li>
                <a href="jemput" class="tombol tombol-lengkap">Jemput Sampah</a>
              </div>
            </div>
            <div class="card1 text-center shadow p-3 mb-5 bg-white rounded" style="width: 18rem; margin-left:140%">
              <div class="card-body1">
                <li><img src="{{ ('ikon/atm.png') }}"></li>
                <a href="tukarpoin" class="tombol tombol-lengkap">Tukar Poin</a>
              </div>
            </div>
            </ul> 
          </div>
      </div>

      <div class="content1">
        <h3>EVENT <hr></h3>
        <div class="tukar-sampah">
        <div class="row">
          <div class="card1-mb-3 text-center" style="width: 100rem; height: 20rem;">
            <div class="col-md-3 float-right"> <h2 style="color:black">Lelang Pakaian </h2>
                                                         <p><img style="width : 15px ; height:15px ; margin-right:10px"  src="{{ ('ikon/calendar.png') }}"> 29 Feb 2020 </p>
                                                         <p><img style="width : 20px ; height:20px ; margin-right:10px" src="{{ ('ikon/rumah.png') }}"> Auditorium IT Del </p>
          </div>
          <div class="d-inline p-2 bg-white"><img style="width: 40rem ; height: 15rem" src= "{{ ('ikon/lelang.jpg') }}"></div>
          </div>
          
          <div class="card1-mb-3 text-center" style="width: 100rem; height :20rem">
          <div class="d-inline p-2 bg-white"><img style="width: 40rem ; height: 15rem" src= "{{ ('ikon/sale.jpg') }}"></div>
          <div class="col-md-3 float-right"> <h2 style="color:black">Preloved Sale</h2>
                   <p><img style="width : 15px ; height:15px ; margin-right: 10px" src="{{ ('ikon/calendar.png') }}">   14 Maret 2020</p>
                        <p><img style="width : 20px ; height:20px ; margin-right: 10px" src="{{ ('ikon/rumah.png') }}">Auditorium IT Del</p>
          </div>
         
        </div>
      </div>
      </div>
</div>

      <div class="content2">
      <h3>3 LANGKAH MUDAH TUKAR SAMPAH <hr></h3>
          <div class="tukar-sampah">
            <ul>
            <div class="card1 text-center rounded-circle" style="width: 23rem;">
              <div class="card1-body" >
                <li><img src="{{ ('ikon/full-trash-container.png') }}"></li>
                <p style="font-size:1.2em">Kumpulkan Sampah</p>
              </div>
            </div>
            
            <div class="card1 text-center rounded-circle" style="width: 23rem;">
              <div class="card-body1" >
                <li><img src="{{ ('ikon/rumah.png') }}"></li>
                <p style="font-size:1.1em">Temukan Agen Sampah</p>
              </div>
            </div>

            <div class="card1 text-center rounded-circle" style="width: 23rem;">
              <div class="card-body1" >
                <li><img src="{{ ('ikon/payment (1).png') }}"></li>
                <p style="font-size:1.2em">Dapatkan Poin</p>
              </div>
            </div>
            </ul> 
          </div>
      <div>

    
      <div class="content4">
        <h3>BANK SAMPAH <hr></h3>
            <div class="app">
            <ul>
              <div class="card1 text-center shadow p-3 mb-5 bg-white rounded">
              <li><img src="{{ ('ikon/Android Mobile - 1.png') }}"></li>
            </div>
              <div class="ply">
              <li><img src="{{ ('ikon/plystore.jpg') }}"></li>
              
              <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore
                 magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                   velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                   sunt in culpa qui officia deserunt mollit anim id est laborum." </P>
            </div>
            </ul> 
          </div>
          
    
          </div> 

      @include('footer')
    
    
</body>
</html>