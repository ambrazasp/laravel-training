<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
</head>
<body>
@include('partials.navbar')
<div class="container">
    <h1>Welcome</h1>
{{--    <a href="{{route('skills-page')}}">Skills</a>--}}
{{--    <a href="{{route('skills-page')}}">Skills</a>--}}
</div>
</body>
</html>
