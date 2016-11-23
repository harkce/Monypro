<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('pageTitle') | Monypro</title>

<!-- Styles -->
<link href="/css/app.css" rel="stylesheet">


<link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/bootstrap-social.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/fileinput.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/awesome-bootstrap-checkbox.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
