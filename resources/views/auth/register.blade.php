@extends('layouts.auth')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Pendaftaran</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
  <!-- Include your desktop-1.css file -->
  <link rel="stylesheet" href="{{ asset('styles/desktop-1.css') }}"/>
</head>
<body>
<div class="desktop-1-LXB">
  <div class="group-3-t2u">
    <p class="sudah-punya-akun-PkM">Sudah punya Akun?</p>
    <p class="untuk-tetap-terhubung-silahkan-masuk-sekarang-7wF">
      Untuk tetap terhubung,
      <br/>
      silahkan masuk sekarang
    </p>
    <div class="group-2-SCq">
      <a style="text-decoration:none" href="{{ url('/login') }}">Login</a>
    </div>
  </div>
    <div class="auto-group-ryqb-5mb">
        <p class="dormhere-Q3B">DormHere</p>
        <div class="group-4-w37">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                @csrf
                        <div class="icon1">
                            <span class="fa fa-user"></span>
                          <input id="name" placeholder="Nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="icon1">
                            <span class="fa fa-user"></span>
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="icon1">
                            <span class="fa fa-user"></span>
                            <input type="text" placeholder="Username" name="username" required />
                        </div>
                        <div class="icon1">
                            <span class="fa fa-lock"></span>
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="icon1">
                         <span class="fa fa-lock"></span>
                              <input placeholder="Password Confirm" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="icon1">
                            <select  id="pilihan" onchange="tampilkanForm()" class="option" placeholder="Pilih Daftar Sebagai" class="form-control  form-select" name="role" id="OptionLevel">
                                <option>Daftar sebagai</option>
                                <option value="pemilik">Pemilik</option>
                                <option value="pencari">Pencari</option>
                            </select>
                        </div>
                        <div class="icon1">
                            <select  id="pilihan" onchange="tampilkanForm()" class="option" placeholder="Jenis Kelamin" class="form-control  form-select" name="kelamin" id="OptionLevel">
                                <option>Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div id="formInput" class="icon1">
                            <span class="fa fa-user"></span>
                            <input type="file" value="NULL" placeholder="Bukti Kontrak" name="bukti_kontrak" />
                            <small><br>Upload <a href=""> Foto</a> disini jika mendaftar sebagai Pemilik</small>

                            @error('bukti_kontrak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>


                    <button type="submit" class="group-1-9qK">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>
@endsection


@push('addon-script')
   <script>
    function tampilkanForm() {
        var pilihan = document.getElementById("pilihan").value;
      var formInput = document.getElementById("formInput");

  if (pilihan.value == 'pemilik') {
    formInput.style.display = "block";
      } else {
        formInput.style.display = "none";
      }
}

    </script> 
@endpush