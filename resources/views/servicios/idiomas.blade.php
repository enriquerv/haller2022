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
            El lenguaje es la base de nuestra comunicación y por lo tanto, la parte medular de las relaciones humanas. A través del lenguaje somos capaces de expresar nuestros pensamientos y emociones. La actual integración internacional ha generado una creciente dependencia entre los distintos países del mundo que ha dado como resultado la unificación de diversas culturas, sociedades y mercados. Todo esto ha generado una serie de transformaciones sociales, políticas y económicas que han hecho inminente la necesidad de dominar otras lenguas.
          </p>
          <p class="mt-4">
            Centro de Idiomas te proporciona las herramientas necesarias para que construyas tu futuro.
          </p>
          <p class="mt-4">
            Estudia cualquiera de los 5 idiomas que impartimos:
            <ul>
              <li>Inglés</li>
              <li>Alemán</li>
              <li>Italiano</li>
              <li>Francés</li>
              <li>Chino Mandarín</li>
            </ul>
          </p>
          <p class="mt-4">
            Uso de material didáctico:
            <ul>
              <li>Audio-Visual</li>
              <li>Libros especializados</li>
              <li>Plataforma</li>
            </ul>
          </p>
          <p class="mt-4">
            <ul>
              <li>Clases 100% prácticas</li>
              <li>Grupos Reducidos</li>
              <li>Examen de ubicación sin costo.</li>
              <li>Cursos para todas las edades (niños, jóvenes y adultos).</li>
              <li>Diploma avalado por la Universidad y la Certificación SEP-CENNI.</li>
            </ul>
          </p>
        </div>

        <div class="col-md-2 mt-2 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/esfera1.png" width="85%">
        </div>
        <div class="col-md-2 mt-2 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/esfera2.png" width="85%">
        </div>
        <div class="col-md-2 mt-2 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/esfera3.png" width="85%">
        </div>
        <div class="col-md-2 mt-2 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/esfera4.png" width="85%">
        </div>
        <div class="col-md-2 mt-2 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/esfera5.png" width="85%">
        </div>
        <div class="col-md-2 mt-2 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/servicios/esfera6.png" width="85%">
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
