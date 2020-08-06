@extends('layouts.app2')
@section('content')
<div class=" d-flex justify-content-center align-content-center">
    <div id="Contenedor" class=" col-4 container-fluid " style="height: 100vh">

        <div class="Icon d-flex justify-content-center align-content-center col-2">
            <!--Icono de usuario-->
            <i class="fal fa-user-alt"></i>
        </div>
        <div class="ContentForm">
            <div class="card shadow">
                <div class="card-header">
                    <div class="py-3">
                        <h1 class="text-success text-center">Ingresar cuenta</h1>
                    </div>
                </div>
                <div class="card-body">
                    <label for="email">Usuario o correo eletrónico</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="email" class="form-control" name="email"
                            placeholder="{{ __('E-Mail Address') }}" id="Usuario" aria-describedby="sizing-addon1"
                            required autocomplete="email" autofocus value="arreciclar@impacta.com">
                    </div>
                    <br>
                    <label for="password">{{ __('Password') }}</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control"
                            placeholder="{{ __('Password') }}" aria-describedby="sizing-addon1" required
                            autocomplete="current-password" value="sadasdasdassa">
                    </div>
                    <div class="opcioncontra mt-2">
                        <a class="text-primary" href="{{url("/email") }}">
                            ¿Olvidaste la contraseña?
                        </a>
                    </div>
                    <br>
                    <!-- cambiar ingresar por acceder en el dic -->
                    <a href="{{url('/home')}}" class="w-100">
                        <button class="btn btn-lg btn-success btn-block w-100">Ingresar</button>
                    </a>
                    <br>
                </div>
               <div class="card-footer">
                <small id="emailHelp" class="form-text text-muted">
                    Al hacer click en "Ingresar" aceptas nuestros
                    <a href="#" class="text-decoration-none text-primary">términos de servicio</a> y
                    <a href="#" class="text-decoration-none text-primary">privacidad.</a> Si aun no tienes una cuenta haz click
                    <a href="{{ route('register') }}" class="text-decoration-none text-primary">aquí</a> para crear una.
                </small>
               </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
