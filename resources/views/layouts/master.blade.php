<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>October Training</title>
<link rel="stylesheet" href={{ asset('css/components.css')}}>
    <link rel="stylesheet" href={{asset('css/icons.css')}}>
    <link rel="stylesheet" href={{asset("css/responsee.css")}}>
    <link rel="stylesheet" href={{asset("owl-carousel/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("owl-carousel/owl.theme.css")}}>     
    <link rel="stylesheet" href={{asset("css/template-style.css")}}>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src={{ asset("js/jquery-1.8.3.min.js")}}></script>
    <script type="text/javascript" src={{ asset("js/jquery-ui.min.js")}}></script> 
</head>
<body class="size-1140">
    <!-- HEADER -->
    @include('layouts.header')
    <!-- CONTENT -->
    
    @yield('content')
    @include('layouts.alert')
    <!-- FOOTER -->
    @include('layouts.footer')

    <script type="text/javascript" src={{ asset("js/responsee.js")}}></script>
    <script type="text/javascript" src={{ asset("owl-carousel/owl.carousel.js")}}></script>
    <script type="text/javascript" src={{ asset("js/template-scripts.js")}}></script>

</body>
</html>