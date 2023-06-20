<!doctype html>
<html lang="en">
  
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="vvm.com e um blog de musica desenvolvida para exaltar a cultura xopi"/>
		<meta name="keywords" content="cultura, inen boss, bigzenny, d-cry, young-G"/>
		<meta name="author" content="Delcio Bimbe"/>

		<link rel="stylesheet" href="Controlos/css/estilos.css"/>
		<link rel="stylesheet" href="Controlos/css/sestiloso.css"/>
		<!-- Bootstrap CSS -->
		<link href="Controlos/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>VVM-Portal da Música Moçambicana</title>
		<script src="Controlos/js/jquery-3.2.0.min.js"></script>
		<script src="Controlos/js/estiloso.js"></script>

    <meta charset="utf-8">
    <title>VVM-Portal da Música Moçambicana</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="logo justify-content-center">
          <img src="imagens/logo.png" class="mx-auto d-block">
          <div class="legenda">
            <P>O Universo da nossa cultura.</P>
          </div>	
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-8 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-warning" aria-current="../pages/inicio.php" href="../index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-warning" href="Paginas/Sobre.php">Sobre Nós</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle text-warning" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Conteúdo 
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-warning" href="Paginas/Musica.php">Música </a></li>
                  <li><a class="dropdown-item text-warning" href="Paginas/Loja-vvm.php">Loja VVM</a></li>
                  <li><a class="dropdown-item text-warning" href="Paginas/Artistas.php">Artistas</a></li>
                  <li><a class="dropdown-item text-warning" href="Paginas/Videos.php">Vídeos</a></li>
                  <li><a class="dropdown-item text-warning" href="Paginas/Enventos.php">Enventos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-warning" href="Contactos.php" tabindex="-1" aria-disabled="true">Contactos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="row justify-content-center bg-dark">
      <div class="col-lg-10">	
        <div class="box text-center  bg-light">
          <div class="card">
            <div class="card-body bg-primary justify-content-center">
              <h2 class="d-block p-2 text-warning font-family-RubikDirt-Regular">REPRESENT WHAT YOU REPRESENT</h2>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Login!
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content bg-light">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card-body">
                <form action="Metodos/processalogin.php" method="POST">
                  <div class="card">
                    <div class="box" style="background-color:#283593;border-radius: 20px;">	
                      <img src="imagens/logo2.png" alt="Avatar" style="height: 40%; width:50%;">
                    </div>
                  </div>
                  <br>
                  <h3>Login</h3>
                  <div class="col">
                    <div class="form-outline">
                      <label class="form-label" for="email">Email</label>
                      <input name="email" id="email" class="form-control" type="text" placeholder="Seu Email" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <label class="form-label" for="password">Senha</label>
                      <input name="password" class="form-control" type="password" placeholder="Senha" requiredwwwwwww>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="form-check d-flex  mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" checked />
                    <label class="form-check-label" for="form5Example3">I have read and agree to the terms</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Entrar</button>
                  <br>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item text-warning"><a href="inicio.php">Início</a></li> 
          </ol>
        </nav>
        <form class="d-flex" action="">
          <input class="form-control me-2 outline-warning" type="search" placeholder="Procurar" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Procurar</button>
        </form>
      </div>
	  </nav> 
    <div class="row justify-content-center">
      <div class="col-lg-10 bg-light">	
        <div class="box text-center  bg-primary">
          <div class="box">
            <div class="card-body">
              <div class="card-body bg-dark justify-content-center">
                <h2 class="d-block p-2 text-warning" id="Música">Lançamentos</h2>
              </div>
              <hr class="bg-primary">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 bg-secondary"style="max-width: 800px;">
                    <div class="card bg-dark">
                      <div class="row g-0">
                        <div class="col">
                          <img src="imagens/capas/DCRY-Recovered.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h5 class="text-warning">D'Cry-Magupele</h5>
                            <p class="card-text lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="row">
                              <div class="col">
                                <a href="Paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">
                                  <svg xmlns="imagens/icons/arrow-down-circle.svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                  </svg>
                                  BAIXAR
                                </a>
                              </div>
                              <div class="col">
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Escute nas Seguintes Plataformas</h5>
                                        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-danger" type="button">
                                            <svg xmlns="imagens/icons/music-note-list.svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                              <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>       
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Youtube Music</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-warning" type="button">
                                            <span> <i class="fa-brands fa-facebook"></i></span> <span>SoundCloud</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-success" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span> <i class="fa-brands fa-instagram"></i> </span> <span>Spotify</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-primary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Deezer</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-info" type="button">
                                            <span><i class="fa-brands fa-twitter text-info"></i></span><span class="text-info">Tidal</span>
                                          </button>   
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center">
                                        <figcaption class="figure-caption">
                                          <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                        </figcaption>
                                      </div>
                                    </div>
                                  </div>
                                </div>                     
                                <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                  <svg xmlns="imagens/icons/music-note-list.svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                  ESCUTAR
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col justify-content-center">
                            <span class="text-info  small text-center"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 bg-secondary" style="max-width: 800px;">
                    <div class="card bg-dark">
                      <div class="row g-0">
                        <div class="col">
                          <img src="imagens/capas/represent what u represent cover.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h5 class="text-warning">D'Cry-Represent what you Represent (Single)</h5>
                            <p class="card-text lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="row">
                              <div class="col">
                                <a href="Paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">
                                  <svg xmlns="imagens/icons/arrow-down-circle.svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                  </svg>
                                  BAIXAR
                                </a>
                              </div>
                              <div class="col">
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Escute nas Seguintes Plataformas</h5>
                                        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-danger" type="button">
                                            <svg xmlns="imagens/icons/music-note-list.svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                              <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>       
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Youtube Music</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-warning" type="button">
                                            <span> <i class="fa-brands fa-facebook"></i></span> <span>SoundCloud</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-success" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span> <i class="fa-brands fa-instagram"></i> </span> <span>Spotify</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-primary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Deezer</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-info" type="button">
                                            <span><i class="fa-brands fa-twitter text-info"></i></span><span class="text-info">Tidal</span>
                                          </button>   
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center">
                                        <figcaption class="figure-caption">
                                          <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                        </figcaption>
                                      </div>
                                    </div>
                                  </div>
                                </div>                     
                                <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                  <svg xmlns="imagens/icons/music-note-list.svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                  ESCUTAR
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col justify-content-center">
                            <span class="text-info  small text-center"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-3 bg-secondary" style="max-width: 800px;">
                    <div class="card bg-dark">
                      <div class="row g-0">
                        <div class="col">
                          <img src="imagens/capas/cover art.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h5 class="text-warning">Stream Elite - Long Story to Tell (MIXTAPE)</h5>
                            <p class="card-text lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="row">
                              <div class="col">
                                <a href="Paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">
                                  <svg xmlns="imagens/icons/arrow-down-circle.svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                  </svg>
                                  BAIXAR
                                </a>
                              </div>
                              <div class="col">
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Escute nas Seguintes Plataformas</h5>
                                        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-danger" type="button">
                                            <svg xmlns="imagens/icons/music-note-list.svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                              <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>       
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Youtube Music</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-warning" type="button">
                                            <span> <i class="fa-brands fa-facebook"></i></span> <span>SoundCloud</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-success" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span> <i class="fa-brands fa-instagram"></i> </span> <span>Spotify</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-primary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Deezer</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-info" type="button">
                                            <span><i class="fa-brands fa-twitter text-info"></i></span><span class="text-info">Tidal</span>
                                          </button>   
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center">
                                        <figcaption class="figure-caption">
                                          <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                        </figcaption>
                                      </div>
                                    </div>
                                  </div>
                                </div>                     
                                <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                  <svg xmlns="imagens/icons/music-note-list.svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                  ESCUTAR
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col justify-content-center">
                            <span class="text-info  small text-center"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3 bg-secondary" style="max-width: 800px;">
                    <div class="card bg-dark">
                      <div class="row g-0">
                        <div class="col">
                          <img src="imagens/capas/Resiliencia cover art.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h5 class="text-warning">D'Cry-Resiliencia (Mixtape)</h5>
                            <p class="card-text lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="row">
                              <div class="col">
                                <a href="Paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">
                                  <svg xmlns="imagens/icons/arrow-down-circle.svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                  </svg>
                                  BAIXAR
                                </a>
                              </div>
                              <div class="col">
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Escute nas Seguintes Plataformas</h5>
                                        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-danger" type="button">
                                            <svg xmlns="imagens/icons/music-note-list.svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                              <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>       
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Youtube Music</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-warning" type="button">
                                            <span> <i class="fa-brands fa-facebook"></i></span> <span>SoundCloud</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-success" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span> <i class="fa-brands fa-instagram"></i> </span> <span>Spotify</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-primary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Deezer</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-info" type="button">
                                            <span><i class="fa-brands fa-twitter text-info"></i></span><span class="text-info">Tidal</span>
                                          </button>   
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center">
                                        <figcaption class="figure-caption">
                                          <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                        </figcaption>
                                      </div>
                                    </div>
                                  </div>
                                </div>                     
                                <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                  <svg xmlns="imagens/icons/music-note-list.svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                  ESCUTAR
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col justify-content-center">
                            <span class="text-info small text-center"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-3 bg-secondary" style="max-width: 800px;">
                    <div class="card bg-dark">
                      <div class="row g-0">
                        <div class="col">
                          <img src="imagens/capas/CAPA-Primeiros Raios do Sol.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h5 class="text-warning">D'Cry-Primeiros Raios do Sol (Mixtape)</h5>
                            <p class="card-text lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="row">
                              <div class="col">
                                <a href="Paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">
                                  <svg xmlns="imagens/icons/arrow-down-circle.svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                  </svg>
                                  BAIXAR
                                </a>
                              </div>
                              <div class="col">
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Escute nas Seguintes Plataformas</h5>
                                        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-danger" type="button">
                                            <svg xmlns="imagens/icons/music-note-list.svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                              <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>       
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Youtube Music</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-warning" type="button">
                                            <span> <i class="fa-brands fa-facebook"></i></span> <span>SoundCloud</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-success" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span> <i class="fa-brands fa-instagram"></i> </span> <span>Spotify</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-primary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Deezer</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-info" type="button">
                                            <span><i class="fa-brands fa-twitter text-info"></i></span><span class="text-info">Tidal</span>
                                          </button>   
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center">
                                        <figcaption class="figure-caption">
                                          <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                        </figcaption>
                                      </div>
                                    </div>
                                  </div>
                                </div>                     
                                <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                  <svg xmlns="imagens/icons/music-note-list.svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                  ESCUTAR
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col justify-content-center">
                            <span class="text-info small text-center"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-3 bg-secondary" style="max-width: 800px;">
                    <div class="card bg-dark">
                      <div class="row g-0">
                        <div class="col">
                          <img src="imagens/capas/IMG-20230404-WA0071.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h5 class="text-warning">Vamtumbuniku-Mabulu iku akana (Album)</h5>
                            <p class="card-text lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="row">
                              <div class="col">
                                <a href="Paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">
                                  <svg xmlns="imagens/icons/arrow-down-circle.svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                  </svg>
                                  BAIXAR
                                </a>
                              </div>
                              <div class="col">
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Escute nas Seguintes Plataformas</h5>
                                        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-danger" type="button">
                                            <svg xmlns="imagens/icons/music-note-list.svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                              <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>       
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Youtube Music</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-warning" type="button">
                                            <span> <i class="fa-brands fa-facebook"></i></span> <span>SoundCloud</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-success" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span> <i class="fa-brands fa-instagram"></i> </span> <span>Spotify</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-primary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                                            </svg>
                                            <span><i class="fa-brands fa-youtube"></i></span> <span>Deezer</span>
                                          </button>
                                        </div>
                                        <div class="dropdown mt-3">
                                          <button class="btn btn-outline-info" type="button">
                                            <span><i class="fa-brands fa-twitter text-info"></i></span><span class="text-info">Tidal</span>
                                          </button>   
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center">
                                        <figcaption class="figure-caption">
                                          <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                        </figcaption>
                                      </div>
                                    </div>
                                  </div>
                                </div>                     
                                <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                  <svg xmlns="imagens/icons/music-note-list.svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16"> 
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/> 
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                  ESCUTAR
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col justify-content-center">
                            <span class="text-info small text-center"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body justify-content-center">
                <div class="col">
                  <div class="box">
                    <ul class="pagination justify-content-center">
                      <li class="page-item  disabled"><a class="page-link bg-dark text-warning" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                      <li class="page-item"><a class="page-link bg-dark text-warning" href="#">1</a></li>
                      <li class="page-item"><a class="page-link bg-dark text-warning" href="#">2</a></li>
                      <li class="page-item"><a class="page-link bg-dark text-warning" href="#">3</a></li>
                      <li class="page-item"><a class="page-link bg-dark text-warning" href="#">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10 bg-light">	
        <div class="box text-center  bg-primary">
          <div class="box">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3 bg-dark">
                    <div class="card-body justify-content-center">
                      <h2 class="d-block p-2 text-warning" id="Artistas">Loja VVM</h2>
                    </div>
                    <div class="card-body">
                      <div class="box">
                        <div class="box">
                          <div class="card-body ">
                            <div class="box">
                              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="imagens/loja/vvm-Amarelo.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Camiseta vvm SPLENDAR</h5>
                                      <p>Some representative T-shirts outhere, placeholder content for the first slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="imagens/loja/venda-t-shirts.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Second slide label</h5>
                                      <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-cinza.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-outra1.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-outra2.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-preta.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-rosa rocho.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-rosa.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-verde.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-vermelha.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-violeta.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="imagens/loja/vvm-violeta1.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block text-primary">
                                      <h5 class="text-primary">Third slide label</h5>
                                      <p class="text-primary">Some representative placeholder content for the third slide.</p>
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                                <br>
                                <div class="card-body bg-dark justify-content-center">
                                  <h2 class="d-block p-2 text-white" ID="LOJA_VVM">Artigos Disponíveis</h2>
                                </div>
                              </div>
                              <br>
                              <a href="paginas/Loja-vvm.php" class="btn btn-outline-warning" style="border-radius: 30px;">VISITE AGORA</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-3 bg-dark">
                    <div class="card-body justify-content-center">
                      <h2 class="d-block p-2 text-warning" id="Artistas">Artistas</h2>
                    </div>
                    <div class="card-body">
                      <div class="box">
                        <div class="box">
                          <div class="card-body ">
                            <div class="box">
                              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="imagens/artistas/D-CRY vvm.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5 class="text-warning">D'Cry</h5>
                                      <p class="text-warning">Some representative T-shirts outhere, placeholder content for the first slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="imagens/artistas/D-CRY vvm.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Second slide label</h5>
                                      <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                                <br>
                                <div class="card-body bg-dark justify-content-center">
                                  <h2 class="d-block p-2 text-white">Os Artistas da VVM</h2>
                                </div>
                              </div>
                              <br>
                              <a href="paginas/Artistas.php" class="btn btn-outline-warning" style="border-radius: 30px;">SOBRE</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-3 bg-dark">
                    <div class="card-body justify-content-center">
                      <h2 class="d-block p-2 text-warning" id="Artistas">Enventos</h2>
                    </div>
                    <div class="card-body">
                      <div class="box">
                        <div class="box">
                          <div class="card-body ">
                            <div class="box">
                              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="Imagens/enventos/dcry-cartaz.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h3 class="text-warning">Hip Hop Live Music</h3>
                                      <p>Some representative T-shirts outhere, placeholder content for the first slide.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="Imagens/enventos/dcry-cartaz.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Second slide label</h5>
                                      <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                                <br>
                                <div class="card-body bg-dark justify-content-center">
                                  <h2 class="d-block p-2 text-white" ID="LOJA_VVM">Não perca!</h2>
                                </div>
                              </div>
                              <br>
                              <a href="paginas/Enventos.php" class="btn btn-outline-warning" style="border-radius: 30px;">SABER MAIS</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10 bg-light">	
        <div class="box text-center  bg-primary">
          <div class="box">
            <div class="card-body">
              <div class="card-body bg-dark justify-content-center">
                <h2 class="d-block p-2 text-warning">Vídeos</h2>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box">
                      <div class="card-body bg-dark">
                        <figure class="figure">
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lcfiUTLgTew" allowfullscreen></iframe>
                          </div>
                          <h4 class="text-warning">D'Cry lanca o video clip da musica Lirandu la male</h4>
                          <p class="lead text-white" >Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                        </figure>                         
                        <hr class="bg-primary">
                        <figcaption class="figure-caption">
                          <div class="row">
                            <div class="col-sm-6">
                              <span class="text-muted small">Por :<i class="fas fa-user"></i> Delcio Bimbe</span>
                            </div>
                            <div class="col-sm-6">
                              <span class="text-muted small"><i class="far fa-closck"></i>12/02/2023</span>
                            </div>
                          </div>
                          <br>
                          <p class="text-white">www.vvm.co.mz</p>		
                        </figcaption>
                        <a href="paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">LER MAIS</a>
                      </div> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body bg-dark">
                      <figure class="figure">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lcfiUTLgTew" allowfullscreen></iframe>
                        </div>
                        <h4 class="text-warning">D'Crylanca o video clip da musica Lirandu la male</h4>
                        <p class="lead text-white" >Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                      </figure>                         
                      <hr class="bg-primary">
                      <figcaption class="figure-caption">
                        <div class="row">
                          <div class="col-sm-6">
                            <span class="text-muted small">Por :<i class="fas fa-user"></i> Delcio Bimbe</span>
                          </div>
                          <div class="col-sm-6">
                            <span class="text-muted small"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                        <br>
                        <p class="text-white">www.vvm.co.mz</p>		
                      </figcaption>
                      <a href="paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">LER MAIS</a>
                    </div>
                  </div>
                </div>
                <hr class="bg-primary">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box">
                      <div class="card-body bg-dark">
                        <figure class="figure">
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lcfiUTLgTew" allowfullscreen></iframe>
                          </div>
                          <h4 class="text-warning">D'Cry lanca o video clip da musica Lirandu la male</h4>
                          <p class="lead text-white" >Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                        </figure>                         
                        <hr class="bg-primary">
                        <figcaption class="figure-caption">
                          <div class="row">
                            <div class="col-sm-6">
                              <span class="text-muted small">Por :<i class="fas fa-user"></i> Delcio Bimbe</span>
                            </div>
                            <div class="col-sm-6">
                              <span class="text-muted small"><i class="far fa-closck"></i>12/02/2023</span>
                            </div>
                          </div>
                          <br>
                          <p class="text-white">www.vvm.co.mz</p>		
                        </figcaption>
                        <a href="paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">LER MAIS</a>
                      </div> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body bg-dark">
                      <figure class="figure">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lcfiUTLgTew" allowfullscreen></iframe>
                        </div>
                        <h4 class="text-warning">D'Cry lanca o video clip da musica Lirandu la male</h4>
                        <p class="lead text-white" >Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                      </figure>                         
                      <hr class="bg-primary">
                      <figcaption class="figure-caption">
                        <div class="row">
                          <div class="col-sm-6">
                            <span class="text-muted small">Por :<i class="fas fa-user"></i> Delcio Bimbe</span>
                          </div>
                          <div class="col-sm-6">
                            <span class="text-muted small"><i class="far fa-closck"></i>12/02/2023</span>
                          </div>
                        </div>
                        <br>
                        <p class="text-white">www.vvm.co.mz</p>		
                      </figcaption>
                      <a href="paginas/baixar.php" class="btn btn-outline-warning" style="border-radius: 30px;">LER MAIS</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <!-- Footer -->   
      <footer class="text-center text-lg-start text-muted">
        <div class="box">
          <div class="box">
            <!-- Section: Social media -->
            <section class="bg-dark">
              <!-- Left -->
              <div class="row">
                <div class="col-md-4">
                  <br>
                  <div class="box">
                    <div class="card-body bg-dark">
                      <h3>Redes Sociais:</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="me-4">
                  <br>
                  <br>
                    <button class="btn bg-primary bg-gradient" type="button">
                    <span> <i class="fa-brands fa-facebook text-white"></i></span> <span class="text-white">Facebook</span>
                    </button>
                    <button class="btn bg-danger bg-gradient" type="button">
                      <span> <i class="fa-brands fa-instagram text-white"></i> </span> <span class="text-white">instagram</span>
                    </button>
                    <button class="btn bg-success bg-gradient" type="button">
                      <span> <i class="fa-brands fa-whatsapp text-white"></i> </span> <span class="text-white">Whatsapp</span>
                    </button>
                  </div>
                  <br>
                  <br>
                </div>
              </div>
            </section>
            <!-- Section: Social media -->
            <!-- Section: Links  -->
            <div class="box justify-content-center bg-dark">
              <div class="card-body justify-content-center">
                <!-- Grid row -->
                <div class="row justify-content-center text-center bg-dark">
                  <!-- Grid column -->
                  <div class="col-md-6">
                    <hr class="bg-warning">
                    <!-- Content -->
                    <h6 class="text-white fw-bold mb-4">VAFANA-VA-MWANI</h6>
                    
                    <p class="lead">A <strong>V-V-M</strong> é uma empresa de tecnologia e media online, com o foco na cultura Chope, produzindo e publicando conteúdo digital, que visa promover a cultura Chope, numa era de transformação digital;</p>
                    <p class="lead">Os Chopes são um povo do sul na província de Inhambene, nos distritos de Zavala e Inharrime, e o distrito de Manjacaze, na zona norte da província de Gaza.</P>
                    <div class="col-md-4 mx-auto mb-md-0 mb-4">
                      <!-- Links -->
                      <h6 class="text-white fw-bold mb-4">CONTACTOS</h6>
                      <p><i class="fas fa-home "></i> Maputo, Zimpeto, Bairro Kumbeza</p>
                      <p><i class="fas fa-envelope "></i>info@vvm.com</p>
                      <p><i class="fas fa-phone "></i> + 258 842578376</p>
                      <p><i class="fas fa-print "></i> + 258 855578376</p>
                    </div>
                  </div>
                  <!-- Grid column -->
                  
                  <div class="col-md-2">
                    <div class="box">
                      <div class="card-body bg-dark">
                        <h6 class="text-white fw-bold mb-4">INSCREVA-TE!</h6>
                        <p><i class="fas fa-phone "></i>Seja Membro</p>
                        <hr class="bg-warning">
                        <form>
                          <!-- Name input -->
                          <div class="form-outline">
                            <label class="text-white form-label" for="form4Example1">Nome</label>
                              <input type="text" id="form4Example1" class="form-control" />  
                          </div>
                          <br>
                          <!-- Email input -->
                          <div class="form-outline">
                            <label class="text-white form-label" for="form4Example2">Seu Email</label>
                            <input type="email" id="form4Example2" class="form-control" />
                            </div>
                            <br>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-light btn-block mb-4">Enviar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center p-4 bg-dark">Web page by:
              <a class="text-reset fw-bold" href="https://vvm.com/">Delcio Bimbe</a>
            </div>
            <!-- Copyright -->
            <div class="text-center p-4 bg-dark">© 2023 Copyright:
              <a class="text-reset fw-bold" href="https://vvm.com/">VVM.com</a>
            </div>
            <!-- Copyright -->
          </div>
          <!-- Section: Links  -->  
        </div>
      </footer>
    </div>
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="controlos/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>