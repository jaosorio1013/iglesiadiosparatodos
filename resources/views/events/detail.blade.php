@extends('layouts/blogDetail')

@section('content')
    <section id="item-content-wrapper" class="section">
        <div class="container">
            <div class="portfolio-navigation wrapper-1">
                <ul class="portfolio-navigation-list">
                    <li><a href="#"><i class="icon-long-arrow-left"></i> Prev</a></li>
                    <li><a href="#">Next <i class="icon-long-arrow-right"></i></a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-thumb wrapper-1">
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
                                    <img src="assets/img/portfolio/portfolio-single/photo (1).jpg"
                                         class="img-responsive" alt="Carousel Image">
                                </div>
                                <div class="item">
                                    <img src="assets/img/portfolio/portfolio-single/photo (9).jpg"
                                         class="img-responsive" alt="Carousel Image">
                                </div>
                                <div class="item">
                                    <img src="assets/img/portfolio/portfolio-single/photo (16).jpg"
                                         class="img-responsive" alt="Carousel Image">
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
                </div>
                <div class="col-md-4 item-details">
                    <div class="wrapper-1">
                        <h5 class="subpage-title">Project Description</h5>

                        <p>Lorem ipsum dolor sit amet, habeo persecuti ad usu, tota eruditi accusam ad cum. Eu his illum
                            feugait, nam no idque indoctum electram. Cum ea aliquid delenit cotidieque, sed impedit
                            ullamcorper at. Ei nam omnis maiorum, usu ferri convenire expetendis an, vim adhuc senserit
                            recteque at. Ea ius tota delicata, cu odio habemus officiis vel. Possim copiosae his te.</p>
                    </div>
                    <div class="wrapper-1">
                        <h5 class="subpage-title">Project Details</h5>
                        <ul class="project-details-list">
                            <li>
                                <h6>Company:</h6>

                                <div class="project-terms">
                                    WrapMarket LLC
                                </div>
                            </li>
                            <li>
                                <h6>Categories:</h6>

                                <div class="project-terms">
                                    Design, Photography, Creativity, Web Development
                                </div>
                            </li>
                            <li>
                                <h6>Date:</h6>

                                <div class="project-terms">
                                    30 August, 2013
                                </div>
                            </li>
                            <li>
                                <h6>Skills:</h6>

                                <div class="project-terms">
                                    HTML5, CSS3, JavaScript, jQuery, Twitter Bootstrap
                                </div>
                            </li>
                            <li>
                                <h6>Website:</h6>

                                <div class="project-terms">
                                    <a href="#">WrapMarket.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#item-content-wrapper -->
    <section id="releted-items" class="section colored-wrapper">
        <div class="container wrapper-2">
            <h5 class="subpage-title">
                <span>Releted Works</span>
                <!-- Controls -->
                <span id="portfolio-next" class="next black"><i class="icon-angle-right"></i></span>
                <span id="portfolio-prev" class="prev black"><i class="icon-angle-left"></i></span>
            </h5>

            <div class="row">
                <div id="caroufredsel-portfolio-container">
                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item-wrapper">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                <img src="assets/img/portfolio/photo (1).jpg" class="img-responsive"
                                     alt="1st Portfolio Thumb">

                                <div class="image-overlay"></div>
                                <a href="assets/img/portfolio/photo (1).jpg" rel="prettyPhoto[pp_gal]"
                                   class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                <a href="portfolio-item-1.html" class="portfolio-link"><i class="icon-link"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h5>1st Portfolio Item</h5>

                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.portfolio-item-wrapper -->
                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item-wrapper">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                <img src="assets/img/portfolio/photo (12).jpg" class="img-responsive"
                                     alt="2nd Portfolio Thumb">

                                <div class="image-overlay"></div>
                                <a href="assets/img/portfolio/photo (12).jpg" rel="prettyPhoto[pp_gal]"
                                   class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                <a href="portfolio-item-1.html" class="portfolio-link"><i class="icon-link"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h5>2nd Portfolio Item</h5>

                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.portfolio-item-wrapper -->
                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item-wrapper">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                <img src="assets/img/portfolio/photo (2).jpg" class="img-responsive"
                                     alt="3rd Portfolio Thumb">

                                <div class="image-overlay"></div>
                                <a href="assets/img/portfolio/photo (2).jpg" rel="prettyPhoto[pp_gal]"
                                   class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                <a href="portfolio-item-1.html" class="portfolio-link"><i class="icon-link"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h5>3rd Portfolio Item</h5>

                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.portfolio-item-wrapper -->
                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item-wrapper">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                <img src="assets/img/portfolio/photo (4).jpg" class="img-responsive"
                                     alt="4th Portfolio Thumb">

                                <div class="image-overlay"></div>
                                <a href="assets/img/portfolio/photo (4).jpg" rel="prettyPhoto[pp_gal]"
                                   class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                <a href="portfolio-item-1.html" class="portfolio-link"><i class="icon-link"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h5>4th Portfolio Item</h5>

                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.portfolio-item-wrapper -->
                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item-wrapper">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                <img src="assets/img/portfolio/photo (5).jpg" class="img-responsive"
                                     alt="5th Portfolio Thumb">

                                <div class="image-overlay"></div>
                                <a href="assets/img/portfolio/photo (5).jpg" rel="prettyPhoto[pp_gal]"
                                   class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                <a href="portfolio-item-1.html" class="portfolio-link"><i class="icon-link"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h5>5th Portfolio Item</h5>

                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.portfolio-item-wrapper -->
                </div>
                <!-- /.caroufredsel-portfolio-container -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#releted-items -->
@stop