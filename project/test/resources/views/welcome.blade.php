<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="js/@angular/material/prebuilt-themes/indigo-pink.css" rel="stylesheet">

        <!-- 1. Load libraries -->
        <!-- Polyfill(s) for older browsers -->
        {{ @Html::script('js/core-js/client/shim.min.js') }}
        {{ @Html::script('js/zone.js/dist/zone.js') }}
        {{ @Html::script('js/reflect-metadata/Reflect.js') }}
        {{ @Html::script('js/systemjs/dist/system.src.js') }}
        {{ @Html::script('systemjs.config.js') }}

        <script>
            System.import('app').catch(function(err){ console.error(err); });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <my-app>Loading...</my-app>
            </div>
        </div>
    </body>
</html>
