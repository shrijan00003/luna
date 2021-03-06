<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <title>{{ config('component.app.name') }}</title>
        <script>
            var env = function (name, default_value) {
                
                var config = <?php
                    echo json_encode(config('component'));
                ?>;

                var res = name.split('.').reduce(function (obj,i) {return obj[i]}, config);

                return res ? res : default_value;
            };
        </script>
    </head>
    <body>
        <div id='app'></div>
        
        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
