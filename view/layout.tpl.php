<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>
    <head>
        <meta charset="utf-8" />
        <!-- If you delete this meta tag World War Z will become a reality -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta name="author" content="José Octavio Sánchez Contreras" />
        <meta name="author" content="Juan Daniel Gutiérrez Torres" />

        <title>en2portr3s</title>

        <!-- Foundation framework, used to do responsive the website -->
        <link rel="stylesheet" type="text/css" href="view/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="view/css/foundation.css" />

        <!-- Override default settings in framework -->
        <link rel="stylesheet" type="text/css" href="view/css/app.css" />

        <!-- Used to do compatible the website with more browsers -->
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
                    <div class="row">
                        <div class="medium-12 columns" id="login-form">
                            <ul class="inline-list right">
                                <li><input type="email" class="data-field" id="login-id" placeholder="ejemplo@mail.com" /></li>
                                <li><input type="password" class="data-field" id="login-pass" placeholder="Contraseña" /></li>
                                <li><input type="button" class="button" id="login-btn" value="Login" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <nav class="top-bar" data-topbar>
                            <ul class="title-area">
                                <li class="name"></li>
                                <li class="toggle-topbar menu-icon">
                                    <a href="#"><span>Menu</span></a>
                                </li>
                            </ul>
                            <div class="top-bar-section">
                                <ul class="right">
                                    <li><a href="./">Inicio</a></li>
                                    <li><a href="servicios">Servicios</a></li>
                                    <li><a href="conocenos">Conócenos</a></li>
                                    <li><a href="contacto">Contacto</a></li>
                                    <li><a href="registro">Registro</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- End of top -->

        <div id="page-content"><!-- content -->
            <div class="row">
                <div class="large-12 columns">
                    {tpl_content}
                </div>
            </div>
        </div><!-- End of content -->
        <div class="msg_box" style="right:50px">
            <div class="msg_head"> En2portr3s  <!--<div class="close">x</div>--></div>
            <div class="msg_wrap">
                <div class="msg_body">

                    <div class="msg_a"> ! hola en que puedo servirte !	</div>
                    <div class="msg_b">imprimir mensaje del usuario:)</div>
                    <div class="msg_a">mensaje admin </div>	
                    <div class="msg_push"></div>
                </div>
                <div class="msg_footer"> <input type = "text" class="msg_input" rows="2" id = "" maxlength = "255"/></div>
                 <!--<div class="msg_footer"><textarea class="msg_input" rows="2"></textarea></div>
                -->
            </div>
        </div>
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
                        <li><a href="privacidad">Política de privacidad</a></li>
                        <li><a href="conocenos">Conócenos</a></li>
                        <li><a href="contacto">Contacto</a></li>
                    </ul>
                    <p class="copyright">© En2porTr3s Soluciones gráficas. Derechos reservados.</p>
                </div>
            </footer>
        </div><!-- End of bottom -->

        <script type="text/javascript" src="view/js/vendor/jquery.js"></script>
        <script type="text/javascript" src="view/js/vendor/fastclick.js"></script>
        <script type="text/javascript" src="view/js/vendor/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript" src="view/js/app.js"></script>
    </body>
</html>
