<!DOCTYPE html>
<html>
<head>
<title>Ice Coffee</title>
<meta charset="utf-8">
<meta	name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/estilos.css">
<link	rel="stylesheet" href="css/reset.css">
<link	rel="stylesheet" href="css/bootstrapCo.css">
<link	rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
</head>
<body bgcolor=503530>
<header	class="container">
<h1><img src="img/logo.png" alt="Ice Coffee" width="200" height="200"></h1>
<p class="sacola">
Nenhum item na sacola de compras
</p>
<nav class="menu-opcoes">
<ul>
<li><a	href="cafeteria.php">Cafeteria</a></li>
<li><a	href="coworking.php">Coworking</a></li>
<li><a	href="sobre.php">Sobre</a></li>
<li><a	href="ajuda.php">Ajuda</a></li>
</ul>
</nav>
</header>


<div class="container">
<div	class="row">
<form action="finalização.php" method="POST"> 
<input type="hidden" name="recipient" value="testeiseuemail@gmail.com"> <!-- Pode ser qualquer endereço de email -->
 <input type="hidden" name="redirect" value="http://seudominio"> <!-- Após o envio, o usuário será redirecionado para a página configurada aqui -->
 <input type="hidden" name="subject" value="teste de assunto">  <!-- Assunto da mensagem -->
 <input type="hidden" name="email" value="sarahm.miranda@outlook.com">   <!-- Deve ser uma conta de email ativa em seu domínio -->
 
<div class="panel-heading">
	<h2>Envie seu comentario</h2>
</div>
<form class="col-sm-8">
					<fieldset	class="col-md-6">
							<div class="form-group">
								<label	for="nome">Nome	completo</label>
								<input	type="text" class="form-control" id="nome" name="nome" autofocus>
							</div>
							<div class="form-group">
								<label	for="email">Email</label>
								<input	type="email" class="form-control" id="email" name="replyto" placeholder="email@exemplo.com">
							</div>
							<div	class="form-group">
								<label	for="cpf">Comentario</label>
								<input	type="text" class="form-control" id="comentario" name="comentario" size="200">
							</div>
						<button	type="submit" class="btn	btn-primary" class="btn-lg" class="pull-right">
							<span	class="glyphicon	glyphicon-thumbs-up"></span>
							Enviar
						</button>
					</form>

</form>
</form>
<footer>
<div class="container">
<img src="img/logoroda.png" alt="Ice Coffee">
<ul class="social">
<li><a href="http://facebook.com/icecoffee">Facebook</a></li>
<li><a href="http://twitter.com/icecoffee">Twitter</a></li>
<li><a href="http://plus.google.com/icecoffee">Google+</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
</body>
</html>
