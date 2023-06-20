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
    <link rel="stylesheet" href="../Controlos/css/estilos.css"/>

    <!-- Bootstrap CSS -->
    <link href="../controlos/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>VVM-Portal da Música Moçambicana</title>
    <script src="Controls/js/jquery-3.2.0.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="logo justify-content-center">
          <img src="../imagens/logo.png" class="mx-auto d-block">
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
                <a class="nav-link active text-warning" aria-current="page" href="../index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-warning" href="Sobre.php">Sobre Nóse</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle text-warning" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Conteúdo 
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-warning" href="Musica.php">Música </a></li>
                  <li><a class="dropdown-item text-warning" href="Loja-vvm.php">Loja VVM</a></li>
                  <li><a class="dropdown-item text-warning" href="Artistas.php">Artistas</a></li>
                  <li><a class="dropdown-item text-warning" href="Videos.php">Vídeos</a></li>
                  <li><a class="dropdown-item text-warning" href="Enventos.php">Enventos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-warning" href="Contactos.php" tabindex="-1" aria-disabled="true">Contactos</a>
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
              <h2 class="d-block p-2 text-warning">REPRESENT WHAT YOU REPRESENT</h2>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Início</a></li>
            <li class="breadcrumb-item"><a href="#Artistas">Artistas</a></li>
            <li class="breadcrumb-item"><a href="#D'Cry">D'Cry</a></li>
          </ol>
        </nav>
        <form class="d-flex" action="">
          <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Procurar</button>
        </form>
      </div>
	  </nav>
    <div class="row justify-content-center"style="background-color:#D1C4E9">
      <div class="col-lg-10">	
        <div class="box text-center">
          <div class="box">
            <div class="card-body bg-primary">
              <div class="card bg-primary">
                <div class="card-body text-center">
                  <div class="card-body bg-dark justify-content-center">
                    <h2 class="d-block p-2 text-warning">Artistas | VVM</h2>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-4 bg-primary">
                      <div class="card bg-dark">
                        <div id="list-example" class="list-group">
                          <div class="card-body bg-dark">
                            <h5 class="list-group-item list-group-item-action" href="#D'Cry">D'Cry</h5>
                          </div>
                          <div class="card-body bg-dark">
                            <h5 class="text-warning" href="#BMG">Biografia</h5>
                            <h5 class="text-warning" href="#BMG">Discografia</h5>
                            <h5 class="text-warning" href="#BMG">Lifestyle</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card bg-dark">
                        <div class="card-body bg-dark">
                          <h5 class="text-warning" id="D'Cry"></h5>
                        </div>
                        <div class="card-body">
                          <img src="../imagens/artistas/D-CRY vvm.jpg" class="figure-img img-fluid rounded" style="height: 600px; border-radius: 50px;" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                        </div>
                        <div class="card-body">
                          <div class="card-body">
                            <p class="card-text lead text-white">Repper nascido asos 08 de A abril de 1995, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt excepturi autem aperiam necessitatibus..</p>
                            <div class="box">
                              <a class="btn btn-outline-warning" style="border-radius: 30px;" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                Ler Mais
                              </a>
                              <br>
                              <br>
                              <br>
                              <div class="modal-footer justify-content-center">
                                <figcaption class="figure-caption">
                                  <p class="text-white"> © 2023 Copyright: www.vvm.co.mz</p>		
                                </figcaption>
                              </div>
                            </div>
                          </div>
                          </div>                        
                        </div>
                      </div>
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
                        <h6 class="text-white fw-bold mb-4">INSCREVA-TE</h6>
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
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../controlos/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>