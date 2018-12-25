<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dintsun @yield('title')</title>
    <link rel="shortcut icon" href="{{URL::asset('/images/logo-it.png')}}" />

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    {{ Html::style('css/style.css') }}
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">

    <!-- DataTable CSS -->
	  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/dataTables.bootstrap.min.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
    @yield('stylesheets')

    <!-- Multiselect JS -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    {{ Html::style('css/ultraselect/bootstrap-multiselect.css') }}
    {{ Html::script('js/ultraselect/bootstrap-multiselect.js') }}

    <!-- Table JS -->
	  <script type="text/javascript" language="javascript" src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
	  <script type="text/javascript" language="javascript" src="{{URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
    </script>
</head>
