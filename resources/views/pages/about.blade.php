@extends('layouts/default')

@section('content')
    <section id="our-story" class="section colored-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wrapper-1">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://lorempixel.com/500/350/nature" class="img-responsive"
                                     alt="Carousel Image">
                            </div>
                            <div class="item">
                                <img src="http://lorempixel.com/500/350/nature" class="img-responsive"
                                     alt="Carousel Image">
                            </div>
                            <div class="item">
                                <img src="http://lorempixel.com/500/350/nature" class="img-responsive"
                                     alt="Carousel Image">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 wrapper-1">
                    <h5 class="subpage-title">Nuestra historia</h5>

                    <p>
                        La Iglesia Cristiana Dios Para Todos inició en el municipio de Caldas (Ant.) Colombia, como un
                        grupo familiar presidido por Gildardo Ramírez Urrea, quién además es el pastor fundador. Dios le
                        fue guiando a abrir obra en ya mencionado lugar al añadir salvados al grupo familiar hasta
                        contar con un número significativo de creyentes en Jesucristo, de manera que institucionalizaron
                        la Iglesia.
                    </p>

                    <p>
                        Actualmente, cuenta con dos sedes (municipios Caldas y la Estrella), además visionando para
                        otras más. Cuenta, también, con un extraordinario equipo pastoral integrado por: Giovanny
                        Ramírez, Lucelly Alzate y Ed. Ramírez Suaza. La comunidad es integrada por personas llenas del
                        amor de Dios dispuestas a compartirlo con otros a fin de dar a conocer al Dios revelado en la
                        Biblia.
                    </p>

                    <p>
                        La Iglesia Cristiana Dios Para Todos está vinculada a AMCI (Asociación de Ministros Cristianos
                        de Itagüí) y en completa unidad con el resto del cuerpo de Cristo.
                    </p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /#our-story -->
    <section id="we-and-our-skills" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wrapper-1">
                    <h5 class="subpage-title">Quiénes somos?</h5>

                    <p>
                        Somos una iglesia de brazos abiertos, de amor incondicional, de pasión inextinguible y en
                        absoluta dependencia del Único Dios verdadero revelado en Jesucristo.
                    </p>
                </div>
                <div class="col-md-6 wrapper-1">
                    <h5 class="subpage-title">Misión</h5>

                    <p>
                        Es nuestra misión traer personas a Jesús para discipularles en la fe; equipándoles para su
                        ministerio en la iglesia y para la misión de su vida en el mundo, de tal manera que magnifica el
                        nombre de Dios.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wrapper-1">
                    <h5 class="subpage-title">Visión</h5>

                    <p>
                        Una Iglesia en crecimiento integral, abundando en amor y fortalecida en unidad, madurando en su
                        identidad con Cristo y en su responsabilidad con el mundo.
                    </p>
                </div>
                <div class="col-md-6 wrapper-1">
                    <h5 class="subpage-title">Propósito</h5>

                    <p>
                        La Iglesia Cristiana Dios Para Todos existe para adorar a Dios en comunión, amar sin condición,
                        crecer para edificación, servir para bendición y cumplir la gran comisión.
                    </p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#we-and-our-skills -->
    <section id="our-team" class="section colored-wrapper">
        <div class="container wrapper-2">
            <h5 class="subpage-title">Nuestros pastores</h5>

            <div class="row">
                <div class="col-md-4 team-member-wrapper">
                    <div class="team-member">
                        <div class="team-member-thumb">
                            <img src="assets/img/smiling-group/photo (1).jpg" class="img-responsive" alt="Member Image">

                            <div class="overlay"></div>
                            <ul class="member-social">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h5>Pastor 1</h5>
                            <span>Pastor</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@stop