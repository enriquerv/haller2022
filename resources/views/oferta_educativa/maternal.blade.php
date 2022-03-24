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
        <div class="col-md-6">
          <p class="mt-4">
            En Instituto Rafael Haller nos ocupamos de que los más pequeños del hogar cuenten con la mejor educación para la primera parte de su crecimiento, por tal motivo la incorporación en el grado de maternal es fundamental para el desarrollo psicomotriz y de lenguaje así como para los procesos de socialización.
          </p>

          <p class="mt-4">
            En este proceso de aprendizaje se forman personas integrales dispuestas a convivir, participar, cooperar y despertar su interés por preguntar; indagar, explorar y cuestionarse, proporcionándole las condiciones necesarias para que este proceso sea más constructivo e interesante.
          </p>

          <p class="mt-4">
            Trabajamos con niños a partir de 1 año 9 meses. Estimulándonos por medio de actividades que atiendan a su desarrollo físico y mental, nuestra prioridad es la calidad en atención y cuidado de los pequeños mediante una educación integral, en un ambiente seguro, favoreciendo el aprendizaje y desarrollo de las capacidades intelectuales, afectivas y físicas, en un entorno sumamente cálido para que los infantes se sientan como en casa y disfruten la transición hacia la escuela en forma natural.
          </p>
        </div>
        <div class="col-md-6">
          <img src="{{ env('APP_URL') }}/assets/images2022/ofed/{{ $active }}.png" width="100%">
        </div>
      </div>


      <p class="mt-4">
        *Cantos y juegos
      </p>

      <p class="mt-4">
        *Desarrollo de Habilidades motoras de manera lúdica y dinámica cuyo objetivo es que el alumno desarrolle su creatividad e imaginación con la información adquirida, básicamente a través de los sentidos, en una estructura de conocimiento que tenga sentido para él.
      </p>

      <p class="mt-4">
        En consecuencia, Instituto Rafael Haller promueve las habilidades cognitivas para que los pequeños puedan aprender a coordinarlas y dar lugar a las estrategias de aprendizaje. La enseñanza promueve las habilidades cognitivas al tiempo que desarrolla estrategias de aprendizaje. Este tipo de aprendizaje persigue propósitos como enseñar a aprender, aprender a aprender o enseñar a pensar.
      </p>

      <h4 class="mt-4">1-  DESARROLLO DE PSICOMOTRICIDAD</h4>
      <p class="mt-3">
        La psicomotricidad es parte del desarrollo de todo ser humano, relaciona dos aspectos:
        <ul>
          <li>Funciones neuromotrices; dirigen la actividad motora, (realizar movimientos, gatear, caminar, correr, saltar, coger objetos, escribir, etc.</li>
          <li>Funciones psíquicas, que engloba procesos de pensamiento, atención selectiva, memoria, pensamiento, lenguaje, organización espacial y temporal.</li>
          <li>Los elementos de la psicomotricidad se desarrollan paralelamente a las funciones socio-afectivas e intelectuales (Campos de formación).</li>
        </ul>
      </p>


      <h4 class="mt-4">2- ESTIMULACION TEMPRANA</h4>
      <p class="mt-3">
        Con esta formación, a la vez que el niño se divierte, adquiere confianza en sí mismo y desarrolla su motricidad; se realizan actividades de contacto o juego con el pequeño para que fortalezca, y desarrolle adecuada y oportunamente sus potenciales motrices. Tiene lugar mediante la repetición útil de diferentes estrategias sensoriales que aumentan, el control emocional, proporcionando al niño una sensación de seguridad y goce; y amplían la habilidad mental, que le facilita el aprendizaje, ya que desarrolla habilidades para lograr autorregularse a través del juego libre y del ejercicio de la curiosidad, la exploración y la imaginación. El control de esfínteres se adquiere cuando el niño logra una madurez física y emocional, es un proceso madurativo del niño en donde se requiere integración a nivel físico, emocional e intelectual y que en gran medida depende de su madurez a nivel neurológico.
      </p>

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
