<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<v-app>

<app-home></app-home>

</v-app>
</body>
</html>