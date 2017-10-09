<!--
  __  __           _        ____                  _   _     _ _                      _  __     __         _       
 |  \/  |         | |      |  _ \            /\  | | | |   (_) |                    | | \ \   / /        (_)      
 | \  / | __ _  __| | ___  | |_) |_   _     /  \ | |_| |__  _| | __   __ _ _ __   __| |  \ \_/ /_ _ _ __  _ _   _ 
 | |\/| |/ _` |/ _` |/ _ \ |  _ <| | | |   / /\ \| __| '_ \| | |/ /  / _` | '_ \ / _` |   \   / _` | '_ \| | | | |
 | |  | | (_| | (_| |  __/ | |_) | |_| |  / ____ \ |_| | | | |   <  | (_| | | | | (_| |    | | (_| | | | | | |_| |
 |_|  |_|\__,_|\__,_|\___| |____/ \__, | /_/    \_\__|_| |_|_|_|\_\  \__,_|_| |_|\__,_|    |_|\__,_|_| |_|_|\__,_|
                                   __/ |                                                                          
                                  |___/       

    Contact Us @ artsylensmaldives@gmail.com for a website

-->
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
    <script type="text/javascript" src="/js/all.js"></script>
    <script type="text/javascript" src="/js/plugin.js"></script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107400398-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107400398-1');
    </script>
    @yield('js')
  </body>
</html>