@extends('layout')

@section('navbar')

<nav>
    <div class="nav-wrapper light-blue darken-3">
        <a href="#" id="menuH2" data-activates="mobile-demo" class="menu button-collapse left btn-flat fixed-action "><i class="material-icons" id="iconMenu">menu</i></a>
        <a href="#!" class="brand-logo center "><img src="/imgs/Logo.png" class="logo"></a>
        
        <ul class="left hide-on-med-and-down">
            <li><a href="#home" id="home">Inicio</a></li>
            <li><a href="#!">Participantes</a></li>
            <li><a href="#!">Inscripción</a></li>
            <li><a href="#!">Participantes Inscritos</a></li>
            <li><a href="#!">Cerrar Sesión</a></li>
            
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#home" id="home">Inicio</a></li>
            <li><a href="#!">Perfil</a></li>
            <li><a href="#!">Participantes</a></li>
            <li><a href="#!">Inscripción</a></li>
            <li><a href="#!">Participantes Inscritos</a></li>
            <li class="divider"></li>
            <li><a href="#!">Cerrar Sesión</a></li>
        </ul>
    </div>
</nav>
        
@stop

@section('content')

<div class="row">
    <form class="col s12" method="POST" action="{{route('create.piraguista')}}" enctype="multipart/form-data">
       {{ csrf_field() }}
    <div class="row">
        <center><h1 id="nomInsc">Inscripción de participantes</h1></center>
        <div class="input-field col s3 offset-s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nombre">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="apellido">
          <label for="icon_prefix">Primer Apellido</label>
        </div>
        <div class="input-field col s3 offset-s3 ">
          <i class="material-icons prefix">fitness_center</i>
          <input id="icon_fitness" type="text" class="validate" name="club">
          <label for="icon_fitness">Club</label>
        </div>
         <div class="input-field col s3  ">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="apellido2">
          <label for="icon_prefix">Segundo Apellido</label>
        </div>
        <div class="input-field col s3 offset-s3">
          <i class="material-icons prefix">public</i>
          <input id="icon_telephone" type="text" class="validate" name="nacionalidad">
          <label for="icon_telephone">Nacionalidad</label>
        </div>
        <div class="input-field col s3">
            <p>
                
              <i class="material-icons prefix">wc</i>
              <label for="">Sexo</label><br>
              <input name="genero" type="radio" id="test1" value="masculino"/>
              <label for="test1">Masculino</label>
              
              <input name="genero" type="radio" id="test2" value="femenino" />
              <label for="test2">Femenino</label>
            </p>
        </div>
         <div class="input-field col s3 offset-s3">
             <input type="file" name="avatar" value="fileupload" id="fileupload">
        </div>
        <br/>
        <div class="row">
            <button class="btn waves-effect waves-light blue col s1 offset-s8" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    </form>
</div>

@stop