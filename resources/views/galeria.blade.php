@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

    <section>
        <img src="{{ env('APP_URL') }}/assets/images/titulos/titulo_instalaciones.png" style="width: 100%;">
    </section>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 mb-5 row">
                    <p class="col-1 offset-1 setImages" data-title='maternal'>
                        <i class="fas fa-circle circMaternal"></i>
                        <br>
                        Maternal
                    </p>

                    <p class="col-1 offset-1 setImages" data-title='preescolar'>
                        <i class="fas fa-circle circPreescolar"></i>
                        <br>
                        Preescolar
                    </p>

                    <p class="col-1 offset-1 setImages" data-title='ingles'>
                        <i class="fas fa-circle circIngles"></i>
                        <br>
                        Inglés
                    </p>

                    <p class="col-1 offset-1 setImages" data-title='primaria'>
                        <i class="fas fa-circle circPrimaria"></i>
                        <br>
                        Primaria
                    </p>

                    <p class="col-1 offset-1 setImages" data-title='secundaria'>
                        <i class="fas fa-circle circSecundaria"></i>
                        <br>
                        Secundaria
                    </p>

                    <p class="col-1 offset-1 setImages" data-title='prepa'>
                        <i class="fas fa-circle circPrepa"></i>
                        <br>
                        Preparatoria
                    </p>
                </div>
                {{-- @foreach($images as $key => $image)
                    @foreach($image as $level)
                        <div class="col-md-4 galery" data-image="'.$key.'">
                            <div class="div-galeria">
                                <img src="https://place-hold.it/200x200&text='.$level['name'].'.jpg">
                                <br>
                                <span>{{ $level['desc'] }}</span>
                            </div>
                        </div>
                    @endforeach
                @endforeach --}}
                <div class="container text-center">
                    <div class="alert alert-warning">Estamos trabajando en la galería de nuestras instalaciones, espéralo proximamente</div>
                </div>


            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(".setImages").click(function(){
            name = $(this).attr('data-title');
            $(".galery").each(function(){
                name2 = $(this).attr('data-image');
                if(name != name2)
                    $(this).hide();
                else
                    $(this).show();
            });


        });
    </script>
@endsection