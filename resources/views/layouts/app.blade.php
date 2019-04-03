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
    <img src="{{ asset('images/logo-color.png') }}" height="30"/>
    <img src="{{ asset('images/laravel.png') }}" height="30"/>

    <h1>App</h1>

    @if ( session('message') )
        @component('components.alert', ['type' => 'success'])
            {{--@slot('title')--}}
                {{--hey you--}}
            {{--@endslot--}}
            {{ session('message') }}
        @endcomponent
    @endif

    {{--@if ( $errors->any() )--}}
        {{--@component('components.alert', ['type' => 'danger'])--}}
            {{--@slot('title')--}}
                {{--Error--}}
            {{--@endslot--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endcomponent--}}
    {{--@endif--}}

    @yield('content')
</div>

@include('partials.footer')

</body>
</html>
