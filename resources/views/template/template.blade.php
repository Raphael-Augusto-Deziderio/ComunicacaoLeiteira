<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$titulo or 'Dashboard Laramusic'}} </title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.css')}}">

    <!-- CSS -->
    @if(\Session::has('themePainel'))
        @if (session('themePainel') == 0)
            <link rel="stylesheet" href="{{url('/assets/painel/css/laramusic-painel.css')}}">

            <!-- Sweet Alert-->
            <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">


        @elseif (session('themePainel') == 1)
            <link rel="stylesheet" href="{{url('/assets/painel/css/laramusic-painel-dark.css')}}">

            <!-- Sweet Alert-->
            <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        @endif
    @else
        <link rel="stylesheet" href="{{url('/assets/painel/css/laramusic-painel.css')}}">
@endif


    <!-- Fonte Awesome-->
    <script src="{{url('https://kit.fontawesome.com/3399a6696c.js')}}" crossorigin="anonymous"></script>

    <!-- JQuery-->
    <script src="{{url('assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

@yield('content')

<div class="clear"></div>

<footer class="footer">
    <div class="container text-center">

        <p class="text-footer"> CopyRight © Raphael TI - Todos os direitos reservados <?=date('Y')?>  <br>
            CNPJ: XX.XXX.XXX/XXXXXX-XX <br>
            Raphael Augusto Malaquias Deziderio - xxxxx@xxxx.com
        </p>
        <div class="social">
            <a href="https://www.instagram.com/raphael13augusto/" target="_blank">
                <i class="fab fa-instagram"></i> Instagram
            </a>
        </div>

    </div><!--End Div Container-->
</footer><!--End Footer-->


<!-- Bootstrap JS-->
<script src="{{url('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
