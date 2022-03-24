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
            Somos una Institución educativa que promueve el desarrollo integral de los niños a través de habilidades cognitivas mediante el proceso sensorial de maduración apoyado de las tic’s (tecnología información y comunicación) y las tac´s (tecnologías aplicadas a la educación), que serán la base para edificar y facilitar su potencial de aprendizaje que se sustenta en competencias educativas para las siguientes etapas de su vida.
          </p>

          <p class="mt-4">
            Tenemos una visión educativa, basada en los siguientes puntos:
            <ul>
              <li>Enseñamos con programas académicos completos que ayudan a que nuestros alumnos obtengan los conocimientos necesarios para afrontar con éxito esta primera etapa de su vida.</li>
              <li>Educamos a los alumnos para que apliquen lo aprendido en su vida diaria: sensibilidad, imaginación y capacidad comunicativa.</li>
              <li>Formamos niños alegres mediante los hábitos y la práctica de las virtudes, una personalidad sensible ante las necesidades de los demás, así como la apertura a la adquisición de valores.</li>
              <li>Vida Práctica: Los ejercicios están ideados para enseñar al niño a actuar en su propio medio, instruyéndolo respecto a cómo hacer frente a las cosas que le rodean, aprende que hay un modo correcto de hacerlo, estas actividades le hacen sentirse seguro y empieza a ser independiente.</li>
              <li >Desarrollo del lenguaje: Es una forma de expresión particular, a través del lenguaje expresamos nuestras ideas y pensamientos, un pensamiento alcanza a madurar cuando ha podido ser expresado. Hay 3 aspectos que consideramos para el desarrollo del lenguaje en los niños en nuestra institución:</li>
              <li>Formación integral: Son las áreas humanas, espirituales, sociales e intelectuales que son inseparables, convencidos de ello la formación que brindamos es de calidad. Ayudamos a cada niño a realizarse en plenitud, formando su voluntad, su corazón, afectividad, emotividad, libertad y responsabilidad.</li>
            </ul>
          </p>
        </div>
        <div class="col-md-6">
          <h4 class="mt-5">10 Razones para estudiar en el Instituto Rafael Haller:</h4>
            <p class="mt-3">
              <ol>
                <li>Actividades culturales.</li>
                <li>Actividades deportivas.</li>
                <li>Atención a padres de familia.</li>
                <li>Actividades que involucran a padres de familia.</li>
                <li>**Uso de plataforma educativa.</li>
                <li>**Uso de las TIC.</li>
                <li>Actividades para su desarrollo psicomotor.</li>
                <li>Docentes en constantes programas de actualización.</li>
                <li>Instalaciones adecuadas y seguras.</li>
                <li>Sistema de circuito cerrado.</li>
              </ol>
            </p>

        </div>
        <div class="col-md-6">
          <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}.png" width="100%">
        </div>
      </div>

      <p class="mt-4">
        <h4 class="mt-3">SERVICIOS</h4>
        <ul>
          <li>Incorporados a la SEP, con más de 32 años de experiencia en el área educativa</li>
          <li>Estimulación lúdica en ambientes multimedia</li>
          <li>Estimulación física</li>
          <li>Foros virtuales en línea</li>
          <li>Laboratorio de cómputo</li>
          <li>Sistema bilingüe</li>
          <li>Concurso de spelling</li>
          <li>Niño-políglota que es un programa para maximizar las actividades cognitivas enfocadas en idiomas ( español, inglés, alemán, francés, portugués y mandarín)</li>
          <li>Educación física</li>
          <li>Activación de inteligencia</li>
          <li>Rallys educativos y de conocimientos</li>
          <li>Educación artística</li>
          <li>Sistema de seguridad en entrada y salida de alumnos y padres de familia</li>
          <li>Actividades deportivas</li>
          <li>Salidas didácticas</li>
          <li>Promovemos la organización de eventos especiales como son: el día del padre, día de la madre y algunos otros espacios de convivencia entre padres e hijos.</li>
          <li>Atención personalizada</li>
          <li>Amplios espacios recreativos</li>
          <li>Docentes altamente calificados.</li>
        </ul>
      </p>

      <h4 class="mt-4">Personal Docente: El personal docente capacitado en las reformas educativas y el uso de tecnología..</h4>
      <h3 class="mt-4">CONTAMOS CON ESTANCIA INFANTIL.</h3>



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
