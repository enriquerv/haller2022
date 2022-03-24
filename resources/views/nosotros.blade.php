@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section>
    <img src="{{ env('APP_URL') }}/assets/images/titulos/titulo_nosotros.png" style="width: 100%;">
</section>

<div class="who container">
    <h2 style="font-weight: bold;" class="text-center text-white">¿QUIÉNES SOMOS?</h2>
    <p class="mt-4 text-white">
        Somos una institución educativa, con más de 30años de experiencia. Nuestro legado es
        formar alumnos (as) críticos, reflexivos, creativos, amantes dela paz y los derechos
        humanos, socialmente comprometidos con su entorno social y con su país. Para lograr
        estepropósito fomentamos valores morales y éticos, tales como: solidaridad, compromiso,
        respeto, responsabilidad,entre otros.
    </p>

    <div class="row text-white" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-md-6 first">
            <h2 class="bolder text-center mb-4">Misión</h2>
            <p class="text-center">
                Propiciamos el desarrolla de un ser humano integral a través de elementos formativos e informativos que favorezcan la mejora personal continua para ser agentes de cambio en su medio de influencia
            </p>
        </div>
        <div class="col-md-6">
            <h2 class="bolder text-center mb-4">Visión</h2>
            <p class="text-center">
                Propiciamos el desarrolla de un ser humano integral a través de elementos formativos e informativos que favorezcan la mejora personal continua para ser agentes de cambio en su medio de influencia.
            </p>
        </div>
    </div>

    <div class="row text-white" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-md-12 mt-4">
            <h2 class="bolder text-center mb-4">Valores</h2>
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_1.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_2.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_3.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_4.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_5.png" width="135px">
        </div>
    </div>
</div>

<section class="container " style="margin-top: 100px; margin-bottom: 100px;">
      <img src="{{ env('APP_URL') }}/assets/images2022/img_hashtag_index.png" width="100%">
    </section>

<style>
    .first{
        border-right: 5px solid #c72242;
    }
</style>

@endsection

@section('scripts')
@endsection