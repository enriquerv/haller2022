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
            El plan de estudios de este nivel se centra en los conocimientos, en las competencias y en la comprensión para desarrollar un conjunto de habilidades.
        </div>
        <div class="col-md-6">
            <p class="mt-3">
              Contamos con instalaciones propicias e idóneas para el desarrollo de las actividades académicas, deportivas y culturales. Las cuales son áreas exclusivas para este nivel, con instalaciones hechas a la medida de los alumnos, nuestros programas académicos están basados en competencias.
            </p>
            <p class="mt-3">
              En el nivel secundaria se forma el espíritu de justicia, sabiduría y amor a través de todas las actividades diarias.
              El trabajo en equipo tiene como principal objetivo la formación de los alumnos, logrando que la colaboración sea efectiva.
              En el Instituto Haller promovemos una verdadera formación multidimensional, a través de los diferentes departamentos que conforman nuestra institución. Mediante las diversas actividades deportivas, culturales, artísticas, tecnológicas, científicas y sociales, nuestros alumnos desarrollan los conocimientos, virtudes y aptitudes indispensables para competir en una sociedad como la nuestra, en continua transformación.
            </p>
        </div>
        <div class="col-md-6">
          <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}.png" width="100%">
        </div>
      </div>

      <p class="mt-4">
        Fomentamos el desarrollo integral de los jóvenes, logrando que el alumno se sienta motivado por aprender y superarse a sí mismo, por explorar y explotar sus potenciales académicos y físicos, así como sus habilidades creativas. Un proceso particularmente importante justo en esta etapa en que los jóvenes inician el proceso de auto conocimiento y reafirmación de la personalidad.
      </p>
      <p class="mt-4">
        El programa de estudios diseñado por el Instituto Rafael Haller supera las exigencias oficiales, gracias a ello nuestros alumnos son altamente preparados para participar en concursos de Química, Física y Matemáticas, promovidos por la SEP u otros organismos, en los que, tradicionalmente, su participación es distinguida.
      </p>

      <h4 class="mt-4">IDIOMAS</h4>
      <p class="mt-3">
        El inglés y francés se trabaja por niveles, ya que el tener un segundo idioma es indispensable para enfrentar al mundo en una sociedad globalizada. Para su aprendizaje exitoso es necesario estudiarlo desde edades tempranas. Además de las cuatro habilidades básicas del idioma que es leer, escribir, escuchar y hablar; se utilizan otros medios para mejorar el aprendizaje como la producción de ensayos, proyectos, cuentos, obras de teatro así como la participación en debates, oratoria y declamación. Subjects:
        <ul>
          <li>Grammar</li>
          <li>Spelling</li>
          <li>Reading</li>
        </ul>
      </p>

      <h4 class="mt-4">SISTEMA EDUCATIVO SUSTENTADO EN VALORES</h4>
      <p class="mt-3">
        El profesorado está constantemente capacitado bajo un desarrollo profesional del más alto nivel y con una visión humanista. Nuestro sistema educativo, está sustentado en valores universales y orientados a las generaciones del tercer milenio. TICS Y TACS
      </p>

      <p class="mt-4">
        Promueve el desarrollo integral de los adolescentes a través de habilidades cognitivas mediante el proceso sensorial de maduración apoyado de las TICS (tecnología información y comunicación) y las TACS (tecnologías aplicadas a la educación) que serán la base para edificar y facilitar su potencial de aprendizaje.
      </p>

      <p class="mt-4">
        Uso de plataforma educativa interna exclusiva del instituto, donde los alumnos consultan, resuelven y envían tareas y trabajos. Contacto directo con profesores y directivos.
      </p>

      <h4 class="mt-4">APRENDIZAJE POR COMPETENCIAS</h4>
      <p class="mt-3">
        Los adolescentes llevan a la vida diaria todos los conceptos aprendidos en clase y fomentan el razonamiento dirigido a la solución de problemas
      </p>

      <h4 class="mt-4">CLUBES DEPORTIVOS, CULTURALES Y TECNOLÓGICOS</h4>
      <p class="mt-3">
        <ul>
          <li>Fútbol Soccer</li>
          <li>Robótica</li>
          <li>Computación</li>
          <li>Volibol</li>
          <li>Teatro</li>
          <li>Básquetbol</li>
          <li>Danza Folklórica</li>
          <li>Zumba</li>
          <li>Guitarra</li>
          <li>Pintura</li>
        </ul>
      </p>


      <h4 class="mt-4">13 RAZONES PARA ESTUDIAR EN EL INSTITUTO RAFAEL HALLER:</h4>
      <p class="mt-3">
        <ol>
          <li>Reconocida Calidad Académica.</li>
          <li>Evaluación continua y formativa.</li>
          <li>Actividades Culturales</li>
          <li>Actividades Deportivas</li>
          <li>Actividades para Padres de Familia.</li>
          <li>Amplio Programa de Estudios, además del establecido por la SEP.</li>
          <li>**Uso de Plataforma Educativa</li>
          <li>Clubes Deportivos.</li>
          <li>**Uso de las TIC.</li>
          <li>Excelente ambiente educativo.</li>
          <li>Docentes en constantes Programas de Actualización.</li>
          <li>Instalaciones adecuadas y seguras.</li>
          <li>Sistema de circuito Cerrado.</li>
        </ol>
        Personal Docente: Está capacitado en las reformas educativas y el uso de tecnología.
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
