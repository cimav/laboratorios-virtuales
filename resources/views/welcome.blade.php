@extends('master', ['body_class' => 'landing-body'])

@section('content')
<div class="welcome-area">
<h1>¡Hagamos Ciencia Juntos!</h1>
<p>Laboratorios Virtuales del CIMAV al servicio de Estudiantes, Investigadores y Docentes de los Centros Públicos CONACYT.</p>
</div>


<div class="columns welcome-cards">
  
  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="content">
          <span class="icon"><i class="fas fa-microscope"></i></span>
          <h2>Acceso Remoto</h2>
          <p>Programa sesiones asistidas en nuestro Laboratorio Nacional de Nanotecnología.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="content">
          <span class="icon"><i class="fas fa-laptop-code"></i></span>
          <h2>Modela y Simula</h2>
          <p>Utiliza nuestro cluster de cómputo científico para tus modelados y simulaciones.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="content">
          <span class="icon"><i class="fas fa-flask"></i></span>
          <h2>Procesos Robóticos</h2>
          <p>Haz uso de laboratorios robóticos de automatización de procesos.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="content">
          <span class="icon"><i class="fas fa-graduation-cap"></i></span>
          <h2>Aprende</h2>
          <p>Agenda una visita virtual a nuestros laboratorios guiada por expertos.</p>
        </div>
      </div>
    </div>
  </div>



</div>
@stop