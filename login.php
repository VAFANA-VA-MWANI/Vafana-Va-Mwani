<!DOCTYPE html>
<HTML>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="vvm.com e um blog de musica desenvolvida para exaltar a cultura xopi"/>
		<meta name="keywords" content="cultura, inen boss, bigzenny, d-cry, young-G"/>
		<meta name="author" content="Delcio Bimbe"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="../controls/css/estilos.css"/>
		<link rel="stylesheet" href="../controls/css/bootstrap.min.css">
		<link rel="stylesheet" href="../controls/css/csss.css">
		<link rel="stylesheet" href="../controls/css/bulma.min.css" />
		<link rel="stylesheet" type="text/css" href="../Controls/css/login.css">
		<link rel="stylesheet" href="../controls/css/xSobreestilos.css">

		<title>VVM-Sobre</title>
		
		<link rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="jquery-3.2.0.min.js"></script>
	</head>
	<body>
		<nav class="navbar-nav navbar-expand-sm bg-dark navbar-dark sticky-top justify-content-center">
			<div class="row">
				<div class="d-flex bg-dark navbar-dark sticky-top justify-content-center">
					<div class="p-2">
						<div class="logo justify-content-center">
							<img src="../imagens/logo.png" class="mx-auto d-block">
							<div class="legenda">
								<P>O universo da nossa cultura.</P>
							</div>	
						</div>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto w-100 justify-content-center">
						<li class="nav-item active">
							<a class="nav-link pr-itn-1" href="inicio.php">Início</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link pr-itn-1" href="Sobre.php">Sobre</a>
						</li>
						<li class="nav-items active">
							<a class="nav-link pr-itn-1" href="servicos.php">Servicos</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link pr-itn-1" href="contactos.php">Contactos</a>
						</li>
					</ul>
				</div>
			</div
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>	
			</div>
		</nav>
		<section class="hero bg-light">
			<div class="hero-body">
				<div class="container-fluid has-text-centered" style="background-color:#283593">
					<div class="column is-4 is-offset-4" >
						<div class="box" >
							<div class="notification is-info">
								<p><strong>Nota!</strong><br>Ao se inscrever, o usuário ira ter acesso ao conteudo exclusivo, e que e informado logo que o conteudo e partilhado no nosso site.</p>
							</div>
							<form action="../methods/processalogin.php" method="POST">
								<div class="card">
									<div class="box" style="background-color:#283593;border-radius: 20px;">	
										<img src="../imagens/logo2.png" alt="Avatar" style="height: 40%; width:50%;">
									</div>
								</div>
								<br>
								<h3>Login</h3>
								<div class="field">
									<div class="control">
										<label for="email1">Email</label>
										<input name="email" class="input is-large" type="text" placeholder="Seu Email">
									</div>
								</div>
								<div class="field">
									<div class="control">
										<label for="password">Senha</label>
										<input name="password" class="input is-large" type="password" placeholder="Senha">
									</div>
								</div>
								<div class="form-check d-flex  mb-4">
									<input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" checked />
									<label class="form-check-label" for="form5Example3">I have read and agree to the terms</label>
								</div>
								<button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
								<br>
							</form>
							<br>
							<a href="../index.php" class="btn btn-info">Voltar ao Inicio</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<!-- Footer -->   
		<footer class="text-center text-lg-start text-muted bg-dark">
			<!-- Section: Social media -->
			<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
				<!-- Left -->
				<div class="me-6 is-6 ">
				<span>Entre em contacto conosco nas redes sociais:</span>
				</div>
				<!-- Left -->
				<!-- Right -->
				<div class="is-6">
				<!-- Add font awesome icons -->
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-whatsapp"></a>
				<a href="#" class="fa fa-linkedin"></a>
				</div>
				<!-- Right -->
			</section>
			<!-- Section: Social media -->
			<!-- Section: Links  -->
			<section class="">
				<div class="container text-center text-md-start mt-5">
				<!-- Grid row -->
				<div class="row mt-3">
					<!-- Grid column -->
					<div class="col">
					<!-- Content -->
					<h6 class="text-white fw-bold mb-4">VAFANA-VA-MWANI</h6>
					<hr class="bg-warning">
									<p class="lead">A <strong>V-V-M</strong> é uma empresa de tecnologia e media online, com o foco na cultura Chope, produzindo e publicando conteúdo digital, que visa promover a cultura Chope, numa era de transformação digital;</p>
									<p class="lead">Os Chopes são um povo do sul na província de Inhambene, nos distritos de Zavala e Inharrime, e o distrito de Manjacaze, na zona norte da província de Gaza.</P>
					</div>
					<br>
					<!-- Grid column -->
					<div class="row mt-6">
					<!-- Grid column -->
					<div class="col">
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
						</form>
					</div>
					<!-- Grid column -->
					<div class="col-md-4  mx-auto mb-md-0 mb-4">
					<!-- Links -->
					<h6 class="text-white fw-bold mb-4">CONTACTOS</h6>
						<p><i class="fas fa-home "></i> Maputo, Zimpeto, Bairro Kumbeza</p>
						<p><i class="fas fa-envelope "></i>info@vvm.com</p>
						<p><i class="fas fa-phone "></i> + 258 842578376</p>
						<p><i class="fas fa-print "></i> + 258 855578376</p>
					</div>
				</div>
				</div>
			</section>
			<!-- Section: Links  -->
			<!-- Copyright -->
			<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
				© 2023 Copyright:
				<a class="text-reset fw-bold" href="https://vvm.com/">VVM.com</a>
			</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>					
</HTML>