<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
</head>
<body style="background-color:#ffccbc">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p1-5 pr-5 mb-5">
        <a class="navbar-brand" href="#">Loja</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="#">Categorias</a>
                <a class="nav-link" href="#">Produtos</a>
                <a class="nav-link" href="#">Cadastrar</a>
            </div> 
        </div>
        <a href="#" class="btn btn-sm">
            <i style="color:aliceblue"class="fas fa-shopping-cart"></i>
        </a>
    </nav>
    
    
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/produto1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"><strong>Descrição</strong></p>
                  <a href="#" class="btn btn-sm btn-secondary">Adicionar</a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>