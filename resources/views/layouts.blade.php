<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 
</head>
<body style="background-color:#ffccbc">
<nav class="navbar navbar-expand-lg navbar-light mb-2 d-flex justify-content-between" style="background-color: #e9ecef;">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>

        @auth
        <a href="/sair" class="text-danger">Sair</a>
        @endauth

        @guest
        <a href="/entrar">Entrar</a>
        @endguest
</nav>
        <div class="container">
            <div class="jumbotron">
                <h1>@yield('conteudo')</h1>
            </div>
        </div>

    </div>   

</body>
</html>