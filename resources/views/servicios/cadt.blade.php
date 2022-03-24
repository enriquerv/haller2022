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
            El Instituto Rafael Haller preocupado por el desarrollo integral de sus alumnos y de su comunidad en general, los impulsa a participar en las diferentes actividades deportivas, artísticas y tecnológicas, realizadas por el Centro Artístico, Deportivo y Tecnológico, (CADT) fomentando la educación física y cultural como un complemento del alumnado facilitando el acceso a una actividad deportiva de calidad, así como la creación de un hábito lúdico deportivo, con el objetivo primordial, de promover su sano desarrollo físico, intelectual, social y personal, estimulando todas sus capacidades físicas e incrementando su nivel competitivo, en cualquier deporte, mediante la aplicación de un enfoque pedagógico y de métodos técnico-tácticos y deportivos, con personal capacitado, complementando su formación integral en un entorno saludable, dentro del Instituto.
          </p>
        </div>

        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/aerea.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_aerea.jpg" width="85%">
          </a>
        </div>
        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/fut.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_fut.jpg" width="85%">
          </a>
        </div>
        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/basquet.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_basquet.jpg" width="85%">
          </a>
        </div>
        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/arco.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_arco.jpg" width="85%">
          </a>
        </div>
        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/artes.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_artes.jpg" width="85%">
          </a>
        </div>
        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/guitar.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_guitar.jpg" width="85%">
          </a>
        </div>
        <div class="col-md-3 mt-5 text-center">
          <a href="{{ env('APP_URL') }}/assets/files/tenis.pdf" target="_blank">
            <img src="{{ env('APP_URL') }}/assets/images2022/servicios/logo_tenis.jpg" width="85%">
          </a>
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
