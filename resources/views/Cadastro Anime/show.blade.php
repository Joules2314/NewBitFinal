<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Bite</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/show.css">
</head>
<body>
  <div class="nome text-center">
    <h1>NEW BITE</h1>
  </div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar scroll</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/sobre">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Cadastro Anime/create">Cadastrar Anime</a>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
  </nav>
      <br>

      <div class=" anome container text-light">
       <h2>{{ $anime->nome_anime }}</h2>
       
      </div>

      <div class="actionswar">
        <a href="/Cadastro Anime/edit/{{ $anime->id }}" class="btn btn-warning" >Editar</a>
      </div>

      <div class="actionsdel">
        <form action="/Cadastro Anime/{{ $anime->id }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
        </form>

      </div>

      <div>
        <img src="/img/default.jpg" class="imagem">
        
        <div class="autor">
          <h3>AUTOR:</h3>
        </div>

        <div class="autor-nome">
          <h4>{{ $anime->nome_autor }}</h4>
        </div>

        <div class="studio">
          <h3>STUDIO:</h3>
        </div>

        <div class="studio-nome">
          <h4>{{ $anime->nome_estudio }}</h4>
        </div>

        <div class="lançamento">
          <h3>ANO:</h3>
        </div>

        <div class="ano">
          <h4>{{ $anime->data_lançamento }}</h4>
        </div>

        <div class="sinopse">
          <h3>SINOPSE:</h3>
        </div>

        <div class="sinopse-conteudo">
          <p>{{ $anime->sinopse }} </p>
        </div>

      </div>

      <div class="Episodios container bg-info ">
        <h2>Episódios</h2>
      </div>


      

      










     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>