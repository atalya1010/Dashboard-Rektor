@extends('layouts.app')

@section('content')
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
                <div class="card py-3 px-2"><center>
                <img src="{{ asset('images/itdel.png') }}" width="50px"></center>
                    <h4 class="text-center mb-3 mt-2">DASHBOARD REKTORAT INSTITUT <br> TEKNOLOGI DEL</h4>

                    <div class="row mx-auto ">
                        <br>
                        <!-- <p class="text-center mb-3 mt-2">Aplikasi ini digunakan oleh Rektorat IT Del untuk monitoring kampus</p> -->
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div class="line l"></div>
                            </div>
                            <div class="col-6"><span>Masukkan Akun Anda</span></div>
                            <div class="col-3">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>

                    <form class="myform" action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Ingatkan Saya </label>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color:#ffffff;">{{ __('Lupa Kata Sandi?') }}</a> @endif
                        </div>
                        <br>
                        <!-- <div class="form-group mt-3"> <button type="submit" class="btn btn-block btn-primary btn-lg"
                                href=""><small><i class="fas fa-key pr-2"></i>Login</small></button> </div> -->
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Masuk <i class="icon-circle-right2 ml-2"></i></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
