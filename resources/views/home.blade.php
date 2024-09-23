{{-- @extends('layouts.app')

@section('content')
<div class="main-menu">
    <aside class="sidebar" style="background-color: #18222B;">
        <div class="logo">
            <img src="{{ asset('path/to/your/logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#" id="pacientes-link" onclick="loadContent('pacientes')">Pacientes</a></li>
                <li><a href="#" id="citas-link" onclick="loadContent('citas')">Citas</a></li>
                <li><a href="#" id="consultas-link" onclick="loadContent('consultas')">Consultas</a></li>
                <li><a href="#" id="plan-alimenticio-link" onclick="loadContent('plan-alimenticio')">Crear Planes Alimenticios</a></li>
            </ul>
        </nav>
    </aside>
    <div class="content">
        <div class="profile-icon">
            <a href="#" id="perfil-link" onclick="loadContent('perfil')">Perfil</a>
        </div>
        <div class="page-content" id="content-area">
            <!-- Aquí se cargará el contenido dinámico -->
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="main-menu">
    <aside class="sidebar" style="background-color: #18222B;">
        <div class="logo">
            <img src="{{ asset('images/jacknutri.png') }}" alt="logo" width="210" height="200">

        </div>
        <nav>
            <ul>
                <li><a href="#" id="pacientes-link" onclick="loadContent('pacientes')">Pacientes</a></li>
                <li><a href="#" id="citas-link" onclick="loadContent('citas')">Citas</a></li>
                <li><a href="#" id="consultas-link" onclick="loadContent('consultas')">Consultas</a></li>
                <li><a href="#" id="plan-alimenticio-link" onclick="loadContent('plan-alimenticio')">Crear Planes Alimenticios</a></li>
            </ul>
        </nav>
    </aside>
    <div class="content">
        <div class="profile-icon">
            <a href="#" id="perfil-link" onclick="loadContent('perfil')">Perfil</a>
        </div>
        <div class="page-content" id="content-area">
            <!-- Aquí se cargará el contenido dinámico -->
        </div>
    </div>
</div>
@endsection
