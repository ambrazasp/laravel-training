<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Training</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</head>
<body>

@include('partials.navbar')

<div class="container">
    <h1>Storage</h1>


    @if ( session('message') )
        @component('components.alert', ['type' => 'success'])
            {{ session('message') }}
        @endcomponent
    @endif

    @yield('content')
</div>

</body>
</html>
