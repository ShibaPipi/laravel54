<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/components/favicon.png') }}" title="Favicon">

    <title>Shiba Inu Pipi</title>

    <!-- Bootstrap Core CSS -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional fonts for this theme -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this theme -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    @include('layout.nav')

    @yield('content')

    <!-- Footer -->
    @include('layout.footer')

    <!-- jQuery Version 3.1.1 -->
    <script src="/lib/jquery/jquery.js"></script>

    <!-- Tether -->
    <script src="/lib/tether/tether.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="/js/clean-blog.min.js"></script>

</body>

</html>
