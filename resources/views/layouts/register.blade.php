<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
		<h2 class="page-header">Form Register Bootstrap</h2>
			<form  method="GET" action= "/register/registerData" >
			@csrf
				<div class="form-group">
                    <label>Nama</label><br>
					<input id="nama_lengkap" placeholder="Nama Lengkap" type="text" 
                                class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" 
                                value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

					<label>Email</label><br>
					<input id="email" placeholder="Email" type="email" 
                                class="form-control @error('email') is-invalid @enderror" name="email" 
                                value="{{ old('email') }}" required autocomplete="email">
					<label>Password</label><br>
					<input id="password"placeholder="Kata Sandi" type="password" 
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label>Nomor Telepon</label><br>
					<input id="number" placeholder="Nomor Telepon" type="number" 
                                class="form-control @error('number') is-invalid @enderror" name="number" 
                                value="{{ old('number') }}" required autocomplete="number" autofocus>
					<label>Pekerjaan</label><br>
					<input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan"><br>
					<a class="btn btn-warning" href="login">Login</a>
                    <button class="btn btn-danger" name="register" id="register" type="submit" value="regist">Register</button>
				</div>
			</form>
		</div>
		<div class="col-sm-4">
		</div>		
	</div>	
</div>
</body>
</html>