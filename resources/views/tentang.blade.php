@extends('layouts.app')
@include('header2')




<div>
<h3 style="margin-left:50px;  text-decoration: underline;">Pos Pengumpulan sampah</h3>

   <div class="row" style="margin-left:10px; margin-top:15px;">
        <div class="card" style="width:350px;">
                <div class="header">
                <img src="{{ ('ikon/geo.png') }}" alt="" style="width:60px;height:60px; margin-left:40%;">
                </div> 

                <div class="card-body">
            
                <div style="margin-left:60px;">
                <h5> Tempat&nbsp &nbsp &nbsp &nbsp &nbsp: GD 7</h5>
                <h5> No. Telepon &nbsp: 08878787878778</h5>
                <h5>Waktu Kerja  &nbsp: 08:00-17.00</h5>
                </div>
                </div> 
            </div>
        <div class="card" style="width:350px;"> 
        <div class="header">
                <img src="{{ ('ikon/geo.png') }}" alt="" style="width:60px;height:60px; margin-left:40%;">
                </div> 
            <div class="card-body">
                
            <div style="margin-left:60px;">
                <h5>Tempat&nbsp &nbsp &nbsp &nbsp &nbsp: GD 9</h5>
                <h5> No. Telepon &nbsp: 08878787878778</h5>
                <h5>Waktu Kerja  &nbsp: 08:00-17.00</h5>
                </div>
            </div> 
        </div>

        <div class="card" style="width:350px;"> 
        <div class="header">
                <img src="{{ ('ikon/geo.png') }}" alt="" style="width:60px;height:60px; margin-left:40%;">
                </div> 
            <div class="card-body">
                
            <div style="margin-left:60px;">
                <h5>Tempat&nbsp &nbsp &nbsp &nbsp &nbsp: Pos Satpam 1</h5>
                <h5> No. Telepon &nbsp: 08878787878778</h5>
                <h5>Waktu Kerja  &nbsp: 08:00-17.00</h5>
                </div>
            </div> 
        </div>

</div>


<div class="row" style="margin-left:10px;margin-top:50px;">
        <div class="card" style="width:350px;"> 
        <div class="header">
                <img src="{{ ('ikon/geo.png') }}" alt="" style="width:60px;height:60px; margin-left:40%;">
                </div> 
                <div class="card-body">
                <div style="margin-left:60px;">
                <h5> Tempat&nbsp &nbsp &nbsp &nbsp &nbsp: Asrama Nazareth</h5>
                <h5> No. Telepon &nbsp: 08878787878778</h5>
                <h5>Waktu Kerja  &nbsp: 08:00-17.00</h5>
                </div>
                </div> 
            </div>
        <div class="card" style="width:350px;"> 
        <div class="header">
                <img src="{{ ('ikon/geo.png') }}" alt="" style="width:60px;height:60px; margin-left:40%;">
                </div> 
            <div class="card-body">
                
            <div style="margin-left:60px;">
                <h5>Tempat&nbsp &nbsp &nbsp &nbsp &nbsp: Asrama Mahanaim</h5>
                <h5> No. Telepon &nbsp: 08878787878778</h5>
                <h5>Waktu Kerja  &nbsp: 08:00-17.00</h5>
                </div>
            </div> 
        </div>

        <div class="card" style="width:350px;"> 
        <div class="header">
                <img src="{{ ('ikon/geo.png') }}" alt="" style="width:60px;height:60px; margin-left:40%;">
                </div> 
            <div class="card-body">
                
            <div style="margin-left:60px;">
                <h5>Tempat&nbsp &nbsp &nbsp &nbsp &nbsp: Koperasi</h5>
                <h5> No. Telepon &nbsp: 08878787878778</h5>
                <h5>Waktu Kerja  &nbsp: 08:00-17.00</h5>
                </div>
            </div> 
        </div>

</div>

<div style="margin-top:50px;">
<h3 style="margin-left:50px;  text-decoration: underline;">Kegiatan</h3>
<div class="content1">
        
        <div class="tukar-sampah">

        <div class="row">
        @foreach($all_event as $subject)

          <div class="card1-mb-3 text-center" style="width: 100rem; height: 20rem;">
            <div class="col-md-3 float-right"> <h2 style="color:black">{{$subject['namaEvent']}}</h2>
                                                         <p><img style="width : 15px ; height:15px ; margin-right:10px"  src="{{ ('ikon/calendar.png') }}"> {{$subject['waktuEvent']}}</p>
                                                         <p><img style="width : 20px ; height:20px ; margin-right:10px" src="{{ ('ikon/rumah.png') }}"> {{$subject['tempatEvent']}} </p>
          </div>
          
          <div class="d-inline p-2 bg-white"><img style="width: 40rem ; height: 15rem" src= "{{$subject['urlevent']}}"></div>
          </div>
          @endforeach
      </div>
      </div>
</div>
</div>


<div style="margin-top:100px;">
<h3 style="margin-left:50px;  text-decoration: underline;">Pengelolaan Sampah</h3>
<div class="content1">
        
        <div class="tukar-sampah">

        <div class="row">
       

          <div class="card1-mb-3 text-center" style="width: 100rem; height: 20rem;">
            <div class="col-md-3 float-right"> <h2 style="color:black">BANK SAMPAH</h2>
                                                         <p>Jln. Sombah Debata</p>
                                                        
          </div>
          
          <div class="d-inline p-2 bg-white"><img style="width: 50rem ; height: 35rem" src= "{{ ('ikon/sombadebata.jpg') }}"></div>
          </div>
         
      </div>
      </div>
</div>
</div >

<div style="margin-top:250px;">

</div>



@include('footer')