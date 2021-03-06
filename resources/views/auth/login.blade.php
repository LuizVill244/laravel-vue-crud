@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-6">
        <div class="panel panel-register">
          <div class="panel-heading header_register">Registrate</div>
          <div class="panel-body">
            <form class="form-horizontal form-register" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              {{-- <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}"> --}}
                <div class="col-md-12{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-4 control-label form-register-label">Nombre</label>
                  <input id="name" type="text" class="form-control input-register" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              {{-- </div> --}}

              {{-- <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}"> --}}
                <div class="col-md-12{{ $errors->has('lastname') ? ' has-error' : '' }}">
                  <label for="lastname" class="col-md-4 control-label form-register-label">Apellido</label>
                  <input id="lastname" type="text" class="form-control input-register" name="lastname" value="{{ old('lastname') }}" required autofocus>
                  @if ($errors->has('lastname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                  </span>
                  @endif
                </div>
              {{-- </div> --}}

              {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> --}}
                <div class="col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label form-register-label">Correo electrónico</label>
                  <input id="email" type="email" class="form-control input-register" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              {{-- </div> --}}

              {{-- <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}"> --}}
                <div class="col-md-12{{ $errors->has('username') ? ' has-error' : '' }}">
                  <label for="username" class="col-md-4 control-label form-register-label">Nombre de usuario</label>
                  <input id="username" type="text" class="form-control input-register" name="username" value="{{ old('username') }}" required autofocus>
                  @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                  @endif
                </div>
              {{-- </div> --}}

              <div class="row">

                {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> --}}
                  <div class="col-md-6{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-6 control-label form-register-label">Contraseña</label>
                    <input id="password" type="password" class="form-control input-register" name="password" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                  </div>
                {{-- </div> --}}

                {{-- <div class="form-group"> --}}
                  <div class="col-md-6">
                    <label for="password-confirm" class=" control-label form-register-label">Confirmar contraseña</label>
                    <input id="password-confirm" type="password" class="form-control input-register" name="password_confirmation" required>
                  </div>
                {{-- </div> --}}

              </div>
              
              <div class="row">
                
               {{-- <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}"> --}}
                <div class="col-md-6{{ $errors->has('country') ? ' has-error' : '' }}">
                  <label for="country" class="col-md-4 control-label form-register-label">País</label>
                  <input id="country" type="text" class="form-control input-register" name="country" value="{{ old('country') }}" required autofocus>
                  @if ($errors->has('country'))
                  <span class="help-block">
                    <strong>{{ $errors->first('country') }}</strong>
                  </span>
                  @endif
                </div>
              {{-- </div> --}}
              {{-- <div class="form-group{{ $errors->has('born') ? ' has-error' : '' }}"> --}}
                <div class="col-md-6{{ $errors->has('born') ? ' has-error' : '' }}">
                  <label for="born" class="control-label form-register-label">Fecha de nacimiento</label>
                  <input id="born" type="date" class="form-control input-register" name="born" value="{{ old('born') }}" required autofocus>
                  @if ($errors->has('born'))
                  <span class="help-block">
                    <strong>{{ $errors->first('born') }}</strong>
                  </span>
                  @endif
                </div>
              {{-- </div> --}}

              </div>

              <div class="form-group button-register">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary content-center btn-register-form">
                    Registrarse
                  </button>
                </div>
              </div>

            </form>
          </div>
          <div class="panel-footer footer-register">
            <center>Te enviaremos un correo de confirmación de creación de tu cuenta</center>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="panel panel-info">
          <div class="panel-heading">Iniciar sesión</div>
          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Correo electrónico</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Contraseña</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recuerdame
                    </label>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      ¿Olvidaste tu contraseña?
                    </a>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-success pull-right">
                    Iniciar sesión
                  </button>
                </div>
              </div>

            </form>
            <hr/>
            <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Facebook">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
