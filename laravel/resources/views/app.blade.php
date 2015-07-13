<!doctype html>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://laravel-vue.app/css/site.css">
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        @yield('content')
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.7/vue.min.js" type="text/javascript"></script>
<script src="http://laravel-vue-js.app/app.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<meta name="_token" content="{{ csrf_token() }}"/>
</body>
</html>