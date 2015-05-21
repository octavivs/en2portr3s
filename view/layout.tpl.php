<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>
    <head>
        <meta charset="utf-8" />
        <!-- If you delete this meta tag World War Z will become a reality -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>en2portr3s</title>

        <!-- Foundation framework, used to do responsive the website -->
        <link rel="stylesheet" type="text/css" href="view/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="view/css/foundation.css" />

        <!-- Override default settings in framework -->
        <link rel="stylesheet" type="text/css" href="view/css/app.css" />

        <script type="text/javascript" src="view/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <div id="top"><!-- top -->
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <header>
                        <img src="view/img/logo.png" alt="" class="logo" />
                    </header>
                </div>
                <div class="large-9 medium-9 columns">
                    <nav class="top-bar" data-topbar>
                        <ul class="title-area">
                            <li class="name"></li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                        </ul>
                        <div class="top-bar-section">
                            <ul class="right">
                                <li><a href="inicio">Inicio</a></li>
                                <li><a href="servicios">Servicios</a></li>
                                <li><a href="conocenos">Conócenos</a></li>
                                <li><a href="contacto">Contacto</a></li>
                                <li><a href="registro">Registro</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- End of top -->

        <div id="content"><!-- content -->
            <div class="row">
                <div class="large-12 columns">
                    <?= $tpl_content; ?>
                </div>
            </div>
        </div><!-- End of content -->

        <div id="bottom"><!-- bottom -->
            <footer class="row">
                <div class="medium-4 push-8 columns">
                    <ul class="home-social">
                        <li><a href="http://www.twitter.com" class="twitter"></a></li>
                        <li><a href="http://www.facebook.com" class="facebook"></a></li>
                        <li><a href="#" class="mail"></a></li>
                    </ul>
                </div>
                <div class="medium-8 pull-4 columns">
                    <ul class="inline-list">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                    </ul>
                </div>
            </footer>
        </div><!-- End of bottom -->

        <script type="text/javascript" src="view/js/vendor/jquery.js"></script>
        <script type="text/javascript" src="view/js/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript" src="view/js/signup.js"></script>
    </body>
</html>