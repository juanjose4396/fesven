@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')

<body class="hold-transition login-page body-login" BACKGROUND="{{asset('bg.jpg')}}">

<div class="container">
    <div class="row cont-form-login col-xm-12 col-sm-7 col-lg-5 col-centered">
        <div class="col-xs-12 col-sm-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-login" action="{{ url('/login') }}" method="post">
                <div class="login-logo">
                    <a href="{{ url('/home') }}"><img  src="{{asset('logo-login.png')}}">  </a>
                </div><!-- /.login-logo -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="text-center">Iniciar sesión</h1>
                <input type="text" placeholder="Usuario" name="email">
                <input type="password" placeholder="Contraseña" name="password">
                <input type="submit" class="btn btn-primary">
                <p class="text-center"><a href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a></p>
                <hr>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 login-rrss">
            <a href="#">
                <div class="rrss-inner login-facebook text-center">
                    <i class="m-right fa fa-facebook-official" aria-hidden="true"></i><span>Inicia sesión con Facebook</span>
                </div>
            </a>
            <a href="#">
                <div class="rrss-inner login-google text-center">
                    <i class="m-right fa fa-google" aria-hidden="true"></i><span>Inicia sesión con Google</span>
                </div>
            </a>
            <p class="text-center m-right">¿No tienes una cuenta? <a href="{{ url('/register') }}">Regístrate</a></p>
        </div>
    </div>
</div>

</body>

@endsection
