<?php
$this->theme->header();
?>

    <body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div id="templatemo_logo">
                            <h1><a href="#">Sprint</a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                                <li><a href="#front">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#products">Products</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#front">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Products</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    <div class="site-slider">
        <ul class="bxslider">
            <li>
                <img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/slide1.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Your HTML5 Website</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/slide2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Free Bootstrap Template</h2>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/slide3.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Mobile Ready Design</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/slide4.jpg" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Responsive Bootstrap</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide5.jpg" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Get it for free!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/thumb1.jpg" alt="image 1" /></a>
                            <a data-slide-index="1" href=""><img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/thumb2.jpg" alt="image 2" /></a>
                            <a data-slide-index="2" href=""><img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/thumb3.jpg" alt="image 3" /></a>
                            <a data-slide-index="3" href=""><img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/thumb4.jpg" alt="image 4" /></a>
                            <a data-slide-index="4" href=""><img src="<?= \Engine\Core\Template\Theme::getUrl() ?>/images/slider/thumb5.jpg" alt="image 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->

    <div id="services" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon first"></span>
                        <h3>Responsive Theme</h3>
                        <p>Cras congue orci at diam condimentum, in dignissim tellus elementum. Praesent id mauris eu urna vehicula rutrum sed in elit. Sed sed urna porta.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon second"></span>
                        <h3>Mobile First</h3>
                        <p>Etiam porttitor nibh et felis molestie fermentum. Ut quis diam porttitor, dictum dolor in, volutpat nulla. Phasellus egestas eu lacus eu pharetra.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon third"></span>
                        <h3>Highest Quality</h3>
                        <p>Sprint is free responsive web template using HTML5 CSS3 and Bootstrap framework. Feel free to download, modify and use it for your site.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon fourth"></span>
                        <h3>Professional Support</h3>
                        <p>Ut congue interdum pharetra facilisi. Aenean consectetur pellentesque mauris nec ornare. Nam tortor justo, rutrum ut condimentum.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#services -->

    <div id="product-promotion" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">New Arrivals</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="item-small">
                        <img src="images/promotion/promotion1.jpg" alt="Product 1">
                        <h4>Nullam Non Ultrices Arcu</h4>
                    </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-8 col-sm-6">
                    <div class="item-large">
                        <img src="images/promotion/promotion2.jpg" alt="Product 2">
                        <div class="item-large-content">
                            <div class="item-header">
                                <h2 class="pull-left">Fusce facilisis semper magna</h2>
                                <span class="pull-right">Rate: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i></span>
                                <div class="clearfix"></div>
                            </div> <!-- /.item-header -->
                            <p>Sprint is free Bootstrap theme by templatemo. Donec fringilla, est ac hendrerit elementum, libero nulla sodales odio, a placerat urna lectus at sem. Vivamus vehicula accumsan orci a tempus. Vestibulum a augue iaculis, tincidunt lacus venenatis, aliquet ante.<br><br>Aliquam iaculis lectus accumsan, egestas lorem ac, malesuada purus. Aenean in tincidunt libero. Etiam vitae dolor vel justo temllicitudin. Sed fermentum, neque in dignissim aliquam, quam ante pellentesque quam, posuere eros purus purus. Ut non est magna.</p>
                        </div> <!-- /.item-large-content -->
                    </div> <!-- /.item-large -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-2 col-sm-3">
                    <div class="item-small">
                        <img src="images/promotion/promotion3.jpg" alt="Product 3">
                        <h4>Morbi Sit Amet Lorem</h4>
                    </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->

    <div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Products</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_1.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product1.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Nunc Consectetur</h3>
                        <span>Price: <em class="text-muted">$260.00</em> - <em class="price">$180.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_3.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product2.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Donec Vitae Massa</h3>
                        <span>Price: <em class="text-muted">$320.00</em> - <em class="price">$240.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_2.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product3.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Fusce Dignissim Neque</h3>
                        <span>Price: <em class="text-muted">$480.00</em> - <em class="price">$340.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_1.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product4.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Mauris Adipiscing Enim</h3>
                        <span>Price: <em class="text-muted">$260.00</em> - <em class="price">$140.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_3.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product5.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Quisque Tincidunt</h3>
                        <span>Price: <em class="text-muted">$400.00</em> - <em class="price">$260.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_1.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product6.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Aliquam Malesuada</h3>
                        <span>Price: <em class="text-muted">$470.00</em> - <em class="price">$330.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_2.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product7.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Sed Eleifend Tortor</h3>
                        <span>Price: <em class="text-muted">$680.00</em> - <em class="price">$480.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_3.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">Add to Cart</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product8.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3>Integer tincidunt</h3>
                        <span>Price: <em class="text-muted">$820.00</em> - <em class="price">$660.00</em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->

    <div id="contact" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Contact</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                    <p>Asperiores, itaque vero facere laudantium voluptas temporibus mollitia nisi deleniti illo minima quisquam corporis possimus nesciunt.</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div id="map">
                    </div>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">

                    <div class="row contact-form">

                        <fieldset class="col-md-6 col-sm-6">
                            <input id="name" type="text" name="name" placeholder="Name">
                        </fieldset>
                        <fieldset class="col-md-6 col-sm-6">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="text" name="subject" id="subject" placeholder="Subject">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <textarea name="comments" id="comments" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="submit" name="send" value="Send Message" id="submit" class="button">
                        </fieldset>

                    </div> <!-- /.contact-form -->

                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <span id="copyright">
                    	Copyright &copy; 2014 <a href="#">Company Name</a>
                    </span>

                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-6">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->


<?php $this->theme->footer(); ?>