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
            La preparatoria en Instituto Haller tiene como objetivo la formación  de personas con visión de liderazgo, trabajando día con día logrando la calidad total y competitiva que nuestros estudiantes requieran para obtener las mejores oportunidades que ofrezca la sociedad.
        </div>
        <div class="col-md-6">
            <h4 class="mt-4">Misión</h4>
            <p class="mt-3">
              Propiciar el desarrollo de un ser humano integral a través  de los elementos formativos e informativos que favorezcan la mejora personal continua para ser agentes de cambio en su medio de influencia.
            </p>
            <p class="mt-3">
              <h4 class="mt-4">Turnos</h4>
              <br>
              Matutino<br>
              06:45 a 13:30
              <br><br>
              Vespertino<br>
              13:45 a 19:30
            </p>
        </div>
        <div class="col-md-6">
          <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}.png" width="100%">
        </div>
      </div>

      <h4 class="mt-4">VENTAJAS DE ESTUDIAR EN INSTITUTO  RAFAEL HALLER</h4>
      <p class="mt-3">
        <ul>
          <li>Precios accesibles.</li>
          <li>Incorporación a la Dirección General de Bachillerato.</li>
          <li>Equivalencias en asignaturas en todos los semestres.</li>
          <li>Educación de primer nivel.</li>
          <li>Evaluación contitnua y formativa.</li>
          <li>Formación para el trabajo en Tecnologías de la Información y la Comunicación.</li>
          <li>Personal Docente Calificado con Vocación Humanista.</li>
          <li>Desarrollo Artístico, Deportivo y cultural.</li>
          <li>Tutoría Académica.</li>
          <li>Atención Psicopedagógica.</li>
          <li>Recuperación académica</li>
          <li>Orientación Educativa y Psicológica.</li>
          <li>Atención personalizada a padres y alumnos.</li>
          <li>Trato cordial y ambiente agradable.</li>
          <li>Instalaciones amplias y seguras.</li>
          <li>Grupos reducidos</li>
        </ul>
      </p>

      <h4 class="mt-4">IDIOMAS</h4>
      <p class="mt-2">
        En Preparatoria Haller contamos con un Centro de Idiomas que nos distingue, ofreciendo a nuestros alumnos una formación académica para la adquisición de una segunda lengua; con modelos novedosos de enseñanza, así como una certificación de estudios por el CENNI.<br>
        POR CICLO ESCOLAR: Inglés y Francés.
      </p>

      <h4 class="mt-4">ACTIVIDADES DEPORTIVAS:</h4>
      <p class="mt-2">
        <ul>
          <li>BASQUETBOL</li>
          <li>FUTBOL</li>
          <li>TENNIS</li>
        </ul>
      </p>

      <h4 class="mt-4">REQUISITOS DE INSCRIPCIÓN:</h4>
      <p class="mt-2">
        <ul>
          <li>ACTA DE NACMIENTO.</li>
          <li>CERTIFICADO DE SECUNDARIA.</li>
          <li>2 FOTOGRAFÍAS TAMAÑO INFANTIL B/N.</li>
          <li>CERTIFICADO MÉDICO DE CUALQUIER INSTITUCIÓN PRIVADA O PÚBLICA.</li>
          <li>CURP.</li>
        </ul>
      </p>

      <h5 class="mt-5">LABORATORIOS: INFORMÁTICA, INGLÉS, FÍSICA, QUÍMICA y BIOLOGÍA.</h5>

      <h5 class="mt-4">TALLERES: DANZA, GASTRONOMÍA, FÚTBOL, TOCHO BANDERA y TEATRO.</h5>

      <h4 class="mt-4">NOTA: TODOS LOS DOCUMENTOS SE DEBEN ENTREGAR EN ORIGINAL Y 1 COPIA.</h4>








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
