@extends('layouts/default')

@section('content')
    <section id="error404-wrapper" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wrapper-1">
                    <div class="error404">
                        <span>404</span>
                    </div>
                </div>
                <div class="col-md-6 wrapper-1">
                    <div class="details404">
                        <h3>Hemos buscado por todas partes pero no pudimos encontrar nada ... lo siento. Por favor,
                            inténtelo de nuevo!</h3>

                        <p>Por favor, intente buscar para buscar más información en este sitio.</p>

                        <form class="search-form">
                            <input type="text" class="form-control" placeholder="Buscar ...">
                        </form>
                        <a href="" class="btn btn-flat flat-color"><i class="icon-long-arrow-left"></i> Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#error404-wrapper -->
@stop