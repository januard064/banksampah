@extends('layouts.app')

@section('content')
<meta charset="UTF-8">
<div  class="container">
<div id="header">
<div class="background1"><img src=" {{ ('ikon/latar.png') }}" style="width:60%"></div>
        <div class="container-fluid" style="margin-left:25%;">          
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" style="width:500px">
                        @csrf

                        <img src= "{{ ('ikon/Untitled-10.png') }}">
                        <p style= "font-style:SimSun ; font-size: 25 ; margin-left: -4%;"> SiPahias </p>

                        <div class="form-group row">
                            <label for="email"  class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                               
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success" style="margin-left:50px">
                                    {{ __('Masuk') }}
                                </button>
                                <p style="margin-left: 10px ; "> <h4>Belum Punya Akun?     <a href="register" class='text-blue'>Daftar </a> </h4></p>

                                @if (Route::has('password.request'))
                                   
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
           </div>   
        </div>
    </div>
</div>

@section('content')

 
@endsection