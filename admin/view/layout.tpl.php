<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>
    <head>
        <meta charset="utf-8" />
        <!-- If you delete this meta tag World War Z will become a reality -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta name="author" content="José Octavio Sánchez Contreras" />
        <meta name="author" content="Juan Daniel Gutiérrez Torres" />

        <title>admin</title>

        <!-- Foundation framework, used to do responsive the website -->
        <link rel="stylesheet" type="text/css" href="view/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="view/css/foundation.css" />

        <!-- Override default settings in framework -->
        <link rel="stylesheet" type="text/css" href="view/css/app.css" />

        <script type="text/javascript" src="view/scripts/vendor/modernizr.js"></script>
    </head>
    <body>
        <div id="top"><!-- top -->
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">Administración del sitio</a></h1>
                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menú</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li><a href="#">Contenido</a></li>
                        <li><a href="#">Usuarios</a></li>
                        <li><a href="#">Permisos</a></li>
                        <li><a href="question">Comentarios</a></li>
                        <li><a href="suggestion">Sugerencias</a></li>
                    </ul>
                </section>
            </nav> 
        </div><!-- End of top -->

        <div id="page-content"><!-- content -->
            <div class="row">
                <div class="large-12 columns">
                    <?= $tpl_content; ?>
                </div>
            </div>
        </div><!-- End of content -->

        <script type="text/javascript" src="view/scripts/vendor/jquery.js"></script>
        <script type="text/javascript" src="view/scripts/vendor/fastclick.js"></script>
        <script type="text/javascript" src="view/scripts/vendor/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript" src="view/scripts/app.js"></script>
    </body>
</html>