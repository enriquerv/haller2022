@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')

    <section>
        <img src="{{ env('APP_URL') }}/assets/images2022/titulo_index_insti.png" width="100%">
    </section>

    <div id="haller_carousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#haller_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#haller_carousel" data-slide-to="1"></li>
        <li data-target="#haller_carousel" data-slide-to="2"></li>
        <li data-target="#haller_carousel" data-slide-to="3"></li>
        <li data-target="#haller_carousel" data-slide-to="4"></li>

      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ env('APP_URL') }}/assets/images2022/banner_index_1.png" width="100%">
        </div>
        <div class="carousel-item">
          <img src="{{ env('APP_URL') }}/assets/images2022/banner_index_2.png" width="100%">
        </div>
        <div class="carousel-item">
          <img src="{{ env('APP_URL') }}/assets/images2022/banner_index_3.png" width="100%">
        </div>
        <div class="carousel-item">
          <img src="{{ env('APP_URL') }}/assets/images2022/banner_index_4.png" width="100%">
        </div>
        <div class="carousel-item">
          <img src="{{ env('APP_URL') }}/assets/images2022/banner_index_5.png" width="100%">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#haller_carousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#haller_carousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

    <section class="oferta_edu container-fluid" id="ofed" style="margin: 100px 0px;">
        <div class="row titlemid">
            <div class="col-md-4"><hr></div>
            <div class="col-md-4 text-center text-white">OFERTA EDUCATIVA</div>
            <div class="col-md-4"><hr></div>
        </div>
    </section>


    <div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">



      <!--Indicators-->
      <ol class="carousel-indicators carousel-indicators-ofed">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>

      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="col-4" style="float:left">
           <div class="card mb-2 containerImg">
              <img src="{{ env('APP_URL') }}/assets/images2022/cards_niveles_maternal.jpg" width="100%" class="img-ofed" onclick="goTo('maternal')">
              <div class="centered dnone">VER MÁS</div></a>
            </div>
          </div>

          <div class="col-4" style="float:left">
            <div class="card mb-2 containerImg">
              <img src="{{ env('APP_URL') }}/assets/images2022/cards_niveles_preescolar.jpg" width="100%" class="img-ofed" onclick="goTo('preescolar')">
              <div class="centered dnone">VER MÁS</div>
            </div>
          </div>

          <div class="col-4" style="float:left">
            <div class="card mb-2 containerImg">
              <img src="{{ env('APP_URL') }}/assets/images2022/cards_niveles_english.jpg" width="100%" class="img-ofed" onclick="goTo('english')">
              <div class="centered dnone">VER MÁS</div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="col-4" style="float:left">
            <div class="card mb-2 containerImg">
              <img src="{{ env('APP_URL') }}/assets/images2022/cards_niveles_primaria.jpg" width="100%" class="img-ofed" onclick="goTo('primaria')">
              <div class="centered dnone">VER MÁS</div>
            </div>
          </div>

          <div class="col-4" style="float:left">
            <div class="card mb-2 containerImg">
              <img src="{{ env('APP_URL') }}/assets/images2022/cards_niveles_secundaria.jpg" width="100%" class="img-ofed" onclick="goTo('secundaria')">
              <div class="centered dnone">VER MÁS</div>
            </div>
          </div>

          <div class="col-4" style="float:left">
            <div class="card mb-2 containerImg">
              <img src="{{ env('APP_URL') }}/assets/images2022/cards_niveles_prepa.jpg" width="100%" class="img-ofed" onclick="goTo('preparatoria')">
              <div class="centered dnone">VER MÁS</div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

      </div>
      <!--/.Slides-->
      <a class="carousel-control-prev carousel-control-prev-ofed" href="#multi-item-example" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next carousel-control-next-ofed" href="#multi-item-example" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

    <section class="container-fluid " style="margin-top: 150px; margin-bottom: 150px; ">
      <img src="{{ env('APP_URL') }}/assets/images2022/img_hashtag_index.png" width="100%">
    </section>


    <section class="container-fluid " style="margin-top: 150px; margin-bottom: 150px; ">
        <div class="row">
            <div class="col-md-4" style="border-right: 5px solid red;">
                <div class="cont-mvh">
                    <img src="{{ env('APP_URL') }}/assets/images2022/icono_txt_01.png" width="100%">
                </div>
            </div>
            <div class="col-md-4" style="border-right: 5px solid red;">
                <div class="cont-mvh">
                    <img src="{{ env('APP_URL') }}/assets/images2022/icono_txt_02.png" width="100%">
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont-mvh">
                    <img src="{{ env('APP_URL') }}/assets/images2022/icono_txt_03.png" width="100%">
                </div>
            </div>
            </div>
        <input type="hidden" value="0" id="height-mvh">
    </section>

    <style>
        .titlemid hr {
            border: 2px solid #df0c09;
        }
        .titlemid{
            font-size: 35px;
            color: #023f66;
        }
        .carousel-indicators li {
            box-sizing: content-box;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 20px;
            height: 20px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease;
            border-radius: 100%;
        }
        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: -17px;
            left: 0;
            z-index: 15;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-control-next-ofed{
            right: -120px;
        }
        .carousel-control-prev-ofed{
            left: -120px;
        }
        .carousel-indicators-ofed{
            bottom: -60px;
        }
        .img-ofed{
            cursor: pointer;
        }

        .containerImg {
          position: relative;
          text-align: center;
          color: white;
          background: #193b68;
        }
        .centered {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: #fff;
          font-size: 30px;
          pointer-events:none;
        }
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

      function goTo(page) {
        window.location.href = direction+'oferta_educativa/'+page;
      }

  </script>
@endsection
