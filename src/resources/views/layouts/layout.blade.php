<!doctype HTML>
<html style="position: relative; min-height: 100%">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SomeApp</title>
    <script  src="https://js.stripe.com/v3/"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        *{
            font-family: 'Noto Sans',sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body style="background-color: #191429; margin-bottom: 50px">
<div class="container" id="app">
    @yield('content')
</div>
</body>
</html>
