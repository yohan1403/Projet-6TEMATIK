<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Exercice Technique</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../">Accueil <span class="sr-only">(current)</span></a>
          </li>
          
          @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Connexion</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Inscription</a>
                            </li>
                        @endif
                    @endauth
            @endif
            
        </ul>
      </div>
    </nav>


    <main role="main" class="container">

    <div class="row" style="padding: 12rem 1.5rem;">
    
    <div class="col-md-4">
            <img style="box-shadow: 0 0 9px rgba(0, 0, 0, 0.75);" width="290px" src="{{$cars->main_photo}}">
                                                     
    </div>
    <div class="col-md-8" style="text-shadow: 0 0 9px rgb(0 0 0 / 25%);text-align:start;">


        <br><p><strong style="font-weight: bold;">{{$cars->brand}}</strong> - {{$cars->model}} - <span class="text-info">{{$cars->year}}</span></p> 
        <p>Puissance : <span class="text-danger">{{$cars->power}}</span></p>
        <p>Finition : <span class="text-danger">{{$cars->finishing}}</span></p>
        <p>Prix : <span class="text-danger">{{$cars->sale_price}} €</span></p>
        <br><p>{{$cars->short_description}}</p>
        

                                                    </div>
                                                    
</div>

    </main><!-- /.container -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>