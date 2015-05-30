@extends('layouts/default')

@section('content')
    {{--<section id="google-map" class="section google-map">--}}
        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d901.7648092542297!2d-75.6375122065293!3d6--}}
		{{--.091592041083305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2s!4v1412363876651" width="100%"--}}
                {{--height="350" frameborder="0" style="border:0"></iframe>--}}
    {{--</section>--}}
    <!-- /#google-map -->
    <section id="contact-us" class="section contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wrapper-2">
                    <h5 class="subpage-title"><i class="icon-compass"></i> Visitanos</h5>
                    <address>
                        <strong>Caldas (Ant.) Colombia.</strong><br>
                        Calle 130 Sur Nº 51 - 40<br>
                        <strong>Estrella (Ant.) Colombia.</strong><br>
                        Calle 95 sur No. 55b-23 (Pueblo Viejo)<br>
                    </address>
                    <h5 class="subpage-title"><i class="icon-phone"></i> Contactos</h5>
                    <address>
                        Teléfono: 278 2121<br>
                        <a href="mailto:icdpt@yahoo.es">icdpt@yahoo.es</a>
                    </address>
                </div>
                <div class="col-md-8 wrapper-1">
                    <form class="contact-form">
                        <h5 class="subpage-title">Ponte en contacto</h5>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con los datos que ingresaste.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control" placeholder="Nombre (requerido)" type="text">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" placeholder="Email (requerido)" type="text">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" placeholder="Asunto (Opcional)" type="text">
                            </div>
                        </div>
                        <!-- row-fluid -->
                        <textarea class="form-control" placeholder="Tu mensaje (requerido)" rows="3"></textarea>
                        <button class="btn btn-flat flat-color ">Enviar</button>
                    </form>
                    <!-- /.contact-form -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#contact-us -->
@stop