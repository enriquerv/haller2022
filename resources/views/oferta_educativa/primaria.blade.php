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
            En este nivel se propone contribuir a la formación integral de los niños, enmarcada dentro de una labor conjunta interactiva, cooperativa y coordinada por parte de los distintos actores que concurren en el hecho educativo. En tal sentido, se concibe el rol del educador como mediador de experiencias de aprendizajes, que asume su función desde dos ámbitos:
            <ul>
              <li>El pedagógico, cuando interviene en los ambientes de aprendizaje.</li>
              <li>El sociocultural cuando su acción se proyecta a la familia y la comunidad.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="mt-3">
              Contamos con instalaciones propicias e idóneas para el desarrollo de las actividades académicas, deportivas y culturales. Las cuales son áreas exclusivas para este nivel, con instalaciones hechas a la medida de los alumnos, nuestros programas académicos están basados en competencias.
            </p>
            <p class="mt-3">
              En el Instituto Rafael Haller contribuimos a su formación intelectual de acuerdo a la etapa de desarrollo en que se encuentran, poniendo los medios adecuados para lograr que el pensamiento concreto, que caracteriza a los más pequeños, gradualmente llegue a la abstracción. Igualmente promovemos su desarrollo físico, afectivo y tecnológico. Nuestro Modelo Educativo busca la alta formación humana, el desarrollo de habilidades físicas y artísticas, promover la creatividad y el dominio del idioma inglés entre otros; comprometiéndonos a integrar a la sociedad a los niños disciplinados y metódicos que busquen la verdad en un orden social fundamentado en la justicia y el bien común.
            </p>
        </div>
        <div class="col-md-6">
          <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}.png" width="100%">
        </div>
      </div>

      <p class="mt-4">
        <h4 class="mt-3">ESPAÑOL</h4>
        Realizamos actividades dirigidas a fortalecer el desarrollo integral de nuestros educandos:
        <ul>
          <li>Club de Lectura.</li>
          <li>Club de Escritura.</li>
          <li>Club de Cálculo Mental.</li>
          <li>Club de Ciencias Naturales.</li>
          <li>Fomento a los Valores.</li>
        </ul>

      </p>


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
