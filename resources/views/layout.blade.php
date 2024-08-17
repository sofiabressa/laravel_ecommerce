<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SofCar Tech</title>
    <!-- CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- FontAwesome para ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JS do Bootstrap 4.5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
     <!-- Meta tag para CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     
    @yield("script.js")
</head>
<body>
<!-- Navbar -->
   <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">SofCar Tech</a>
        <div class="collapse navbar-collapse">
            <div class="navbar nav"> 
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
                @if(!\Auth::user())
                    <a class="nav-link" href="{{ route('logar') }}">Logar</a>
                @else
                    <a class="nav-link" href="{{ route('compras_historico') }}">Meus Pedidos</a>
                    <a class="nav-link" href="{{ route('sair') }}">Logout</a>
                @endif  
            </div>
        </div>
        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">

            @if(\Auth::user())
                <div class="col-12">
                    <p class="text-right">Seja bem-vindo(a), {{ \Auth::user()->nome }}! <a href="{{ route('sair') }}">sair</a></p>
                </div>
            @endif

            @if($message = Session::get("err"))
                <div class="col-12">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
            @endif
            @if($message = Session::get("ok"))
                <div class="col-12">
                    <div class="alert alert-success">{{ $message }}</div>
                </div>
            @endif

           <!-- Nesta div teremos uma área que os outros arquivos irão adc conteúdo -->
            @yield("conteudo")
        </div>
    </div>

 
</body>
</html>