@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')


    <section>
        <img src="{{ env('APP_URL') }}/assets/images/titulos/titulo_servicios.png" style="width: 100%;">
    </section>

    <section>
        <div class="container" style="font-weight: bold;">
            <div class="row">
                <div class="offset-md-1 col-md-4 mt-5 text-center">
                    <a href="{{ URL::route('plataforma') }}">
                        <img src="{{ env('APP_URL') }}/assets/images2022/cards_servicios_insti_plataforma.png" class="img_servicios">
                    </a>
                </div>
                <div class="offset-md-2 col-md-4 mt-5 text-center">
                    <a href="{{ URL::route('idiomas') }}">
                        <img src="{{ env('APP_URL') }}/assets/images2022/cards_servicios_insti_idiomas.png" class="img_servicios">
                    </a>
                </div>
                <div class="offset-md-1 col-md-4 mt-5 text-center">
                    <a href="{{ URL::route('cadt') }}">
                        <img src="{{ env('APP_URL') }}/assets/images2022/cards_servicios_insti_cadt.png" class="img_servicios">
                    </a>
                </div>
                <div class="offset-md-2 col-md-4 mt-5 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images2022/cards_servicios_insti_estancia.png" class="img_servicios" data-target="#estaciaModal" data-toggle="modal">
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="estaciaModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title bolder">ESTANCIA INFANTIL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
                <span class="bolder">Contamos con estancia infantil en los niveles:</span>
                <ul class="mt-3">
                    <li>Maternal</li>
                    <li>Preescolar</li>
                    <li>1st English</li>
                    <li>Primaria</li>
                </ul>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>



    <style>
        .img_servicios{
            width: 85%;
            text-align: center;
            transition: 0.5s;
            cursor: pointer;
        }
    </style>


@endsection

@section('scripts')
    <script>
        $(".img_servicios").mouseover(function() {
            $(this).css('width', '100%');
        });
        $(".img_servicios").mouseleave(function() {
            $(this).css('width', '85%');
        });

    </script>
@endsection