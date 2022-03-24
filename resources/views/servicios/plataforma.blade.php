@extends('layout.principal')

@section('title')
    Plataforma
@endsection

@section('styles')
@endsection

@section('content')

    <section>
        <img src="{{ env('APP_URL') }}/assets/images2022/servicios/{{ $active }}_banner.png" width="100%">
    </section>


    <section class="container text-white mt-4">

      <div class="row">
        <div class="col-md-12">
          <p class="mt-4">
            Entorno virtual intuitivo y amigable en el que hay muchas funcionalidades para optimizar tiempo y ahorrar dinero. La plataforma de Instinto Haller cuenta, estructuralmente, con distintos módulos que permiten responder a las necesidades de gestión  administrativa, académica,  de comunicación y del proceso de enseñanza aprendizaje. Proporciona espacios de trabajo compartidos para facilitar el intercambio de contenidos e información, cuenta con herramientas de comunicación (chats, correos, foros de debate, videoconferencias, blogs, etc.) El uso de la plataforma educativa ofrece una serie de ventajas en el apoyo de la enseñanza presencial que mejoran los resultados alcanzando el éxito académico.
        </div>
        <div class="offset-md-1 col-md-4 mt-5 mb-5">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/{{ $active }}_preescolar.png" width="60%">
          @include('servicios.frames.preescolar')
        </div>
        <div class="offset-md-2 col-md-4 mt-5 mb-5">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/{{ $active }}_primaria.png" width="60%">
          @include('servicios.frames.primaria')
        </div>
        <div class="offset-md-1 col-md-4 mt-5 mb-5">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/{{ $active }}_secundaria.png" width="60%">
          @include('servicios.frames.secundaria')
        </div>
        <div class="offset-md-2 col-md-4 mt-5 mb-5">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/{{ $active }}_preparatoria.png" width="60%">
          @include('servicios.frames.preparatoria')
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
