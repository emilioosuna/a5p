@extends('layouts.dashboard')
  @section('pageheader')
    Créditos
  @endsection

  @section('content')
    <style>
      @font-face {
        font-family: "Great Vibes";
        src: url("{{ asset('assets/fonts/great-vibes.woff2') }}");
      }

      p1 {
        font-family: "Great Vibes";
        font-size: 32px;
      }
    </style>

    <div class="row"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card">
          <div class="card-header bg-black">Créditos</div>

          <div class="card-body">
            <div class="card-group" id="accordion">
              <div class="panel card card-Teal">
                <div class="card-header with-border bg-black">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:white;">
                      <i class="fa fa-code"></i>
                      Programación y Diseño
                      <i class="fa fa-coffee"></i>
                    </a>
                  </h4>
                </div>

                <div id="collapseOne" class="panel-collapse collapse in show">
                  <div class="row">
                    <div class="col-md-6">

                      <a href="http://emilioosuna.github.io" target="blank" style="color:black;">
                        <p1>Emilio Osuna</p1>
                      </a>
                      <p>Programador / Diseñador Web | Móvil +58 412 193-2886 | Correo: ejohe54@gmail.com</p><br>

                      <a href="https://3rn3st0.github.io/" target="blank" style="color:black;">
                        <p1>Ernesto Chapon</p1>
                      </a>
                      <p>Programador / Desarrollador Web | Móvil: +58 412 846-6562 | Correo: ernestochapon@gmail.com</p><br>

                      <a href="#" target="blank" style="color:black;">
                        <p1>Jorge Khiyami</p1>
                      </a>
                      <p>Programador / Desarrollador Web | Móvil: +58 412 780-9461 | Correo: jorgekhiyami@gmail.com</p>
                      <br>
                        <a href="#" target="blank" style="color:black;">
                        <p1>Jorge Merchán</p1>
                      </a>
                      <p>Analista - Asesor Web | Móvil +58 416 628-9053</p><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- fin acordion 2 --}}
          </div>
        </div>
      </div>
    </div>
  @endsection
