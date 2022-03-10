<?php

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SSERES</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
        
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-primary">
            <a class="navbar-brand" href="#">CSERES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url ( '/' ) }}">Acreditacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ( 'nuevo' ) }}">Nueva carpeta</a>
                    </li>
                </ul>
            </div>
            
        </nav>

        @yield ('contenido');
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/recursos.js') }}"></script>
        <script src="{{ asset('js/chart.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('js/chart.js') }}"></script>
        
        

    </body>

</html>