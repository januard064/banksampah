@extends('layouts.app')


@section('content')

 
@endsection



<meta charset="UTF-8">
<div  class="container">
<div id="header">
<div class="background1"><img src=" {{ ('ikon/latar.png') }}" style="width:60%"></div>
        <div class="container-fluid" style="margin-left:25%;">
        
        

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" style="width:500px">
                        @csrf

                        <img src= "{{ ('ikon/Untitled-10.png') }}">
                        <p style="font-size: 25 ; margin-left: -4%; font-color: #3a7d77 ;">SiPahias</p>

                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                            <input id="nama_lengkap" placeholder="Nama Lengkap" type="text" 
                                class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" 
                                value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                            <input id="email" placeholder="Email" type="email" 
                                class="form-control @error('email') is-invalid @enderror" name="email" 
                                value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                            <input id="number" placeholder="Nomor Telepon" type="number" 
                                class="form-control @error('number') is-invalid @enderror" name="number" 
                                value="{{ old('number') }}" required autocomplete="number" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                            <input id="password"placeholder="Kata Sandi" type="password" 
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Konfimasi Kata Sandi" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-top : 4%">
                                <button style="margin-right: 3%" type="button" class="btn btn-danger">Batal</button>
                                <button style="margin-left: 3%" type="submit" class="btn btn-success">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                        
                            
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div> 
  
  
