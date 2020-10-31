
@extends ('layout')
@section('content')
 <div class="jumbotron bg-light mt-5">
        <h1 class="text-center">Bienestar Institucional</h1>
    </div>
    <div class="container container-fluid ">
        <div class="carousel slide carouseltamaño" data-ride="carousel" id="carouselControls">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/78265373_3291546064253623_1790650214495813632_o.jpg" alt="Primera imagen">
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/78591475_3345557275519168_7553073274213629952_o.jpg" alt="Segunda imagen">
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/79420991_3366574760084086_6087922177061945344_o.jpg" alt="Tercera imagen">
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/87541552_3633712100037016_1779950192536059904_o.png" alt="Tercera imagen">
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/bienestar1.jpg" alt="Tercera imagen">
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/Horarios.jpg" alt="Tercera imagen">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <!--info-->

        <div class="row mt-3">

            <div class="col-sm-4 ">

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#quienes-somos" aria-expanded="true" >¿Quienes somos?</button>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ubicacion" aria-expanded="false" aria-controls="multiCollapse2">Ubicación</button>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#pagos" aria-expanded="false" aria-controls="multiCollapse3">Servicios</button>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-4 collapse multi-collapse" id="quienes-somos">
                <h3>Quienes Somos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, iusto illo assumenda tempore ex dolorem dolores laborum, vitae nostrum. </p>

            </div>
            <div class="col-sm-4 collapse multi-collapse" id="ubicacion">
                <h3>Ubicación</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, iusto illo assumenda tempore ex dolorem dolores laborum, vitae nostrum. </p>

            </div>
            <div class="col-sm-4 collapse multi-collapse" id="servicios">
                <h3>Servicios</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, iusto illo assumenda tempore ex dolorem dolores laborum, vitae nostrum. </p>

            </div>

        </div>
        <hr>
    </div>
</div>

<div style="width: 640px; height: 480px; margin: 10px; position: relative;"><iframe allowfullscreen frameborder="0" style="width:640px; height:480px" src="https://lucid.app/documents/embeddedchart/89f517e8-6d51-4b26-9437-ab341a05a6de" id="EtvC4FgmZtHA"></iframe></div>
@endsection
