<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  
  <title> {{ $meta->title }} </title>
  
  <meta name="keywords" content="{{ $meta->keywords }}" />
  
  <meta name="description" content='{{ $meta->description }}' />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|PT+Sans&amp;subset=cyrillic" rel="stylesheet">
  
  <!-- FONTAWESONE -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <!-- Custom Style -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

    <!-- HEADER -->
        @include('header')
    <!-- / HEADER --> 

    <!-- MAIN -->
    <main class="main {{ url('/') !== url()->current() ? 'one-news text-left' : '' }}">
        @yield('content')
    </main>
    <!-- / MAIN -->

    <!-- FOOTER -->
        @include('footer')
    <!-- / FOOTER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    
    <!-- scrollTO -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>