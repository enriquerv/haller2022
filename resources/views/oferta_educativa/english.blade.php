@extends('layout.principal')

@section('title')
    Maternal
@endsection

@section('styles')
@endsection

@section('content')

    <section>
        <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}_banner.png" width="100%">
    </section>


    <section class="container text-white mt-4">

      <div class="row">
        <div class="col-md-12">
          <p class="mt-4">
            Nuestro sistema bilingüe promueve la competencia comunicativa del idioma en contextos reales e interesantes para los alumnos como por ejemplo:
            <ul>
              <li>Festivales culturales y familiares.</li>
              <li>Spelling.</li>
              <li>Viajes al extranjero.</li>
              <li>Plays.</li>
            </ul>
        </div>
        <div class="col-md-6">
          <h4 class="mt-5">15 RAZONES PARA ESTUDIAR EN EL INSTITUTO RAFAEL HALLER:</h4>
            <p class="mt-3">
              <ol>
                <li>Alta Calidad Académica y en valores.</li>
                <li>35 años de experiencia educativa.</li>
                <li>Evaluación continua y formativa.</li>
                <li>Modernos y dinámicos programas para el aprendizaje del Inglés.</li>
                <li>Laboratorio de Matemáticas.</li>
                <li>**Plataforma Educativa.</li>
                <li>Clubes: Deportivos, Artísticos y Tecnológicos.</li>
                <li>Centro de cómputo actualizado.</li>
                <li>Escuela para Padres.</li>
                <li>Instalaciones adecuadas y seguras.</li>
                <li>Docentes en constantes Programas de Actualización.</li>
                <li>Excelente ambiente educativo.</li>
                <li>**Uso de las TIC.</li>
                <li>Sistema de circuito cerrado.</li>
              </ol>
            </p>

        </div>
        <div class="col-md-6">
          <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}.png" width="100%">
        </div>
      </div>
    </section>


    <style>
        .dnone{ display: none; }
    </style>

@endsection

@section('scripts')
  <script>
      $( document ).ready(function() {
          H = $("#contVideo").height();
          $("#imgVideo").css('height', H+'px');
          $("#contVideo").hide();
      });

      $("#imgVideo").click(function(){
          $("#contVideo").show();
          $(this).hide();
          $("#instVideo").get(0).play();
      });

      $(".img-ofed").hover(function() {
          /* Stuff to do when the mouse enters the element */
          $(this).css('opacity', '0.5');
          $(this).next('.centered').css('display', 'block');
      }, function() {
          $(this).css('opacity', '1');
          $(this).next('.centered').css('display', 'none');
      });

  </script>
@endsection
