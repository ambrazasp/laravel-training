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
    <h1>Contact</h1>
    <div class="">
        @forelse($interests as $interest)
            <div>{{$interest}}</div>
        @empty
            <div>No items</div>
        @endforelse
    </div>
</div>
</body>
</html>