@extends('layouts.auth')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Login Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
  <link rel="stylesheet" href="./styles/desktop-4.css"/>
</head>
<body>
<div class="desktop-4-vS5">
  <div class="group-6-scD">
    <div class="group-5-zwj">
      <p class="dormhere-xNm">DormHere</p>
      <div class="group-4-GuF">
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="auto-group-thqt-Er5">
          <img class="a0e0bb315b0f7675a9-1-MA1" src="./assets/a0e0bb315b0f7675a9-1.png"/>
          <div class="input-box">
                        <input id="email" type="email" name="email" placeholder="Masukkan Email Anda" :value="old('email')" required autocomplete="email" />
        </div>
        </div>
        <div class="auto-group-m3er-gED">
          <img class="gembok-logo-o3w" src="./assets/gembok-logo.png"/>
          <div class="input-box">
                        <input id="password" type="password" name="password" placeholder="Masukkan Kata Sandi" required autocomplete="new-password" />
        </div>
        </div>
      </div>
    </div>
    <button class="group-1-DNZ" type="submit" >Login</button>
  </div>
  <div class="group-9-fkM">
    <p class="belum-punya-akun-npy">
    Belum punya Akun?
    <br/>
    
    </p>
    <p class="yuk-gabung-jadilah-bagian-dari-dormhere-XGm">
      <span class="yuk-gabung-jadilah-bagian-dari-dormhere-XGm-sub-0">
      Yuk gabung! jadilah bagian
      <br/>
      dari 
      </span>
      <span class="yuk-gabung-jadilah-bagian-dari-dormhere-XGm-sub-1">DormHere</span>
    </p>
    <a style="text-decoration:none" class="auto-group-ysld-nM7" href="{{ route('register') }}">Sign Up</a>
  </div>
</div>
</body>
</html>
@endsection
