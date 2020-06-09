!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank-Sampah</title>
    <meta charset="UTF-8">
</head>
<body>
  <div id="container">
      <div id="header"> 
        <div class="background"><img src=" {{ ('ikon/Background.png') }}"></div>
       
        <div class="container-fluid" style="margin-left:10%;">
          <div class="navigasi" >
            <ul class="nav justify-content-center" >
             
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tukar Sampah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Registrasi</a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#">Login</a>
                  </li>

            </ul>
            <img src= "{{ ('ikon/Untitled-10.png') }}">
            <div class="katabank">
            <h3>BANK SAMPAH </h3>
          </div>
            <p>Bank sampah merupakan sebuah aplikasi yang ditujukan kepada mahasiswa dengan
              tujuan agar dapat menjaga kebersihan lingkungan IT Del.
            </p>
          </div>
        </div>
      </div>
      
      <div id="content" style="margin-top:110px;">
        <div class="bagian-kiri">
          <div class="garbage">
              <img src=" {{ ('ikon/garbage-bag.png') }}">
             <a href="antar">ANtar</a>
              <p>ANTAR</p>
          </div>
          <div class="check">
            <ul>
              <li><img src="{{ ('ikon/check.png') }}">Dummydum Dummydum</li>
              
              <li><img src="{{ ('ikon/check.png') }}">Dummydum Dummydum</li>
              <li><img src="{{ ('ikon/check.png') }}">Dummydum Dummydum</li>
            </ul> 
          </div>
        </div>
        
        <div class="bagian-kanan">
          <div class="trash">
              <img src="{{ ('ikon/trash (3).png') }}">
              <p>JEMPUT</p>
          </div>
          <div class="check1">
            <ul>
              <li><img src="{{ ('ikon/check.png') }}">Dummydum Dummydum</li>
              <li><img src="{{ ('ikon/check.png') }}"> Dummydum  Dummydum</li>
              <li><img src="{{ ('ikon/check.png') }}">Dummydum Dummydum</li>
            </ul> 
            <a class="tombol tombol-lengkap" href="#">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="content2">
        <h3>3 LANGKAH MUDAH TUKAR SAMPAH <hr></h3>
          <div class="tukar-sampah">
            <ul>
              <li><img src="{{ ('ikon/full-trash-container.png') }}"><p>Dummydum Dummydum</p></li>
              <li><img src="{{ ('ikon/rumah.png') }}"><p>Dummydum Dummydum</p></li>
              <li><img src="{{ ('ikon/payment (1).png') }}"><p>Dummydum Dummydum</p></li>
            </ul> 
          </div>
      </div>

      <div class="content3">
        <h3>UBAH SAMPAH JADI LEBIH BERGUNA <hr></h3>
          <div class="ubah-sampah">
            <img src="{{ ('ikon/Untitled-1.png') }}">
            
            <p>Tukar sampah menjadi voucher atau barang sesukamu!</p>
            <a class="tombol tombol-lengkap2" href="#">Selengkapnya</a> 
          </div>
      </div>


      <div class="content4">
        <h3>BANK SAMPAH <hr></h3>
          <div class="app">
            <ul>
              <div class="andrd">
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

    </div>
</body>
</html>