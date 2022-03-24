@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

    <section>
        <img src="{{ env('APP_URL') }}/assets/images/titulos/titulo_contacto.png" style="width: 100%;">
    </section>

    <section>
        <div class="container text-justify mt-5 mb-5">
            <div class="container mt-5 mb-5">
                <iframe class="map" src="https://maps.google.com.mx/maps?q=instituto+haller&ll=19.677828,-99.220276&spn=0.279308,0.308647&sll=19.320036399999996,-99.15212780000002&sspn=1.195607100001713,1.7598905899350736&t=m&hq=instituto+haller&z=12&iwloc=A&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            <div class="row text-white">
                <div class="col-md-6">
                    <b style="font-size: 20px;">¿TIENES ALGUNA DUDA?</b> <br><br>
                    Aquí te ofrecemos toda la información que necesites sobre:<br>
                    <ul class="mt-2 mb-4">
                        <li>Becas Académicas e inscripciones.</li>
                        <li>Ubicación de Campus.</li>
                        <li>Oferta académica y Planes de Estudio.</li>
                        <li>Modalidades de estudio.</li>
                    </ul>

                    <b style="font-size: 20px;">¡Estamos para ayudarte!</b> <br><br>
                    <b style="font-size: 20px;">Deja tus datos y nos pondremos en contacto.</b> <br><br>

                    <b>CAMPUS TEPOTZOTLÁN</b><br>
                    AV.BENITO JUÁREZ N.4 BARRIO SAN MARTÍN TEPOTZOTLÁN.<br>
                    Tel. 55 5876 4279 / 55 5876 0149<br>
                    WhatsApp. 55 2005 7633<br>
                    Correo haller.vinculacion@gmail.com<br><br>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <p style="font-size: 18px;" class="text-center w-100 mb-4"><b>¡En Haller ampliamos e innovamos nuestro Modelo Educativo!</b></p>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Nombre" id='name'>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Email" id='email'>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Teléfono" id='phone'>
                        </div>
                        <div class="col-12 mt-3">
                            <textarea class="form-control" placeholder="Mensaje" rows="10" id='tarea'></textarea>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <button class="btn btn-primary" id="btn-modal" style="padding: 5px 50px; font-size: 18px;">
                                Enviar
                            </button>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="alert alert-danger" style="opacity: 0; transition: 0.5s" id='error-f'>
                                Favor de llenar todos los campos
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mensaje enviado correctamente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Gracias por contactarnos<br>
            Nos comunicarémos lo más pronto posible.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>




    <style>
        .map{
            width: 90%
        }
    </style>

@endsection

@section('scripts')
    <script>
        $("#btn-modal").click(function(){
            nombre = $("#name").val();
            email = $("#email").val();
            phone = $("#phone").val();
            tarea = $("#tarea").val();
            if(name =! '' && email != '' && phone != '' && tarea != ''){
                $("#exampleModal").modal('show');
                $("#error-f").css('opacity', 0);
                $("#name").val('');
                $("#email").val('');
                $("#phone").val('');
                $("#tarea").val('');
                $.ajax({
                    url: "{{ env('APP_URL') }}/postContact",
                    data:{
                        name: nombre,
                        email: email,
                        phone: phone,
                        tarea: tarea,
                        type: 'instituto',
                        send_mail: true
                    },
                    success: function(result){

                    }
                });
            }
            else
                $("#error-f").css('opacity', 1);
        })
    </script>
@endsection