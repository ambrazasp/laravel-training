<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js" charset="utf-8"></script>
</head>
<body>
<div class="container">
    <h1>Skills</h1>
    <div class="">
        @forelse($skills as $skill)
            <div>{{$skill['title']}} ({{$skill['percentage']}}%)</div>
        @empty
            <div>No sklls</div>
        @endforelse
    </div>
</div>
</body>
</html>
