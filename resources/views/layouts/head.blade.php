<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Screenhit Studios') }}</title>
    <link rel="icon" href="{!! asset('img/Logo_Screenhit_Studios.png') !!}" style="border-radius: 50%"/>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> -->
    <script src="https://unpkg.com/vue@2.5.3/dist/vue.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- <script src="node_modules/angular/angular.min.js"></script>
    <script src="node_modules/angular-animate/angular-animate.min.js"></script> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
