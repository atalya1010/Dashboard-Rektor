@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rektor IT Del | Register</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/itdel.png" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<style>
        body {
            background-color= whitesmoke;
        }

        .card {
            border: none;
            border-top: 5px solid rgb(184 38 1);
            background: #062f4f;
            color: #d1d1d1;
        }

        p {
            font-weight: 600;
            font-size: 15px
        }

        .division {
            float: none;
            position: relative;
            margin: 30px auto 20px;
            text-align: center;
            width: 100%;
            box-sizing: border-box
        }

        .division .line {
            border-top: 1.5px solid #57557A;
            ;
            position: absolute;
            top: 13px;
            width: 85%
        }

        .line.l {
            left: 52px
        }

        .line.r {
            right: 45px
        }

        .division span {
            font-weight: 600;
            font-size: 14px
        }

        .myform {
            padding: 0 25px 0 33px
        }

        .form-control {
            border: 0px;
            border-radius: 5px;
            background: rgb(222 222 222);
            margin-bottom: 20px;
            letter-spacing: 1px
        }

        .form-control:focus {
            border: 1px solid #57557A;
            border-radius: 5px;
            box-shadow: none;
            background: rgba(0, 0, 0, 0.5);
            color: rgb(216, 216, 216);
            letter-spacing: 1px
        }

        .bn {
            text-decoration: underline
        }

        .bn:hover {
            cursor: pointer
        }

        .form-check-input {
            margin-top: 8px !important
        }

        .btn-primary {
            background: #b82601;
            border: none;
            border-radius: 23px
        }

        .btn-primary:hover {
            background:#f5603a;
            border: none;
        }

        small {
            color: #F2CEFF
        }

        .far.fa-user {
            font-size: 13px
        }
.option{
    background-color:#4c6272;
}
    </style>

    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                     <center><img src="{{ asset('images/itdel.png') }}" width="50px"></center>
                    <h4 class="text-center mb-3 mt-2">DASHBOARD REKTORAT INSTITUT<br> TEKNOLOGI DEL</h4>
                    <div class="row mx-auto ">
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div class="line l"></div>
                            </div>
                            <div class="col-6"><span>Tambah Akun Pengguna</span></div>
                            <div class="col-3">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>
                    <form class="myform" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Pengguna" name="name" value="">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" name="email" value="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror " placeholder="Password"  name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <select class="form-control"  id="level" required="required" name="level" aria-label="Default select example" >
                                <option class="option">-Pilih Role-</option>
                                <option class="option" value="1">Admin</option>
                                <option class="option" value="0">Rektor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="avatar">Pilih Foto Profil</label>
                            <input  style="  line-height: 1.3" type="file" id="avatar" class="form-control @error('avatar') is-invalid @enderror" name="avatar"  >
                            <p class="form-group">File: Maksimal-7MB</p>
                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg"><small><i
                                        class="far fa-user pr-2"></i>Daftar Akun</small></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>

</html>

@endsection
