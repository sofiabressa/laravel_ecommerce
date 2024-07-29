<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SofCar Tech</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <!-- Link para o CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
            </div>
        </div>"
        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
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

    <!-- Scripts do Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>