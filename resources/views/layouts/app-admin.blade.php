<!DOCTYPE html>
<html>
  <head>
    <title>Scuba Tribe Maldives</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="/fonts/fi/flaticon.css">
    
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/main.css"> 

    <meta name="csrf-token" content="{{ csrf_token() }}">   
    
    <link rel="shortcut icon" href="{{url('icon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{url('icon.png')}}" type="image/x-icon">
    @yield('css')
  </head>
  <body>
    @include('partials.header-admin')    
    
    @yield('content')
    
    @include('partials.footer')
    <script src="//www.youtube.com/player_api"></script>
    <script type="text/javascript" src="/js/all.js"></script>
    <script type="text/javascript" src="/js/plugin.js"></script>
    @yield('js')
  </body>
</html>