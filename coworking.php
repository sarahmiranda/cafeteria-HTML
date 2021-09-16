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
<div class="panel-heading">
	<h2>Agendamento Espaço Coworking</h2>
</div>
<form class="col-sm-8">
					<fieldset	class="col-md-6">
			
							<legend>Dados	pessoais</legend>
							<div class="form-group">
								<label	for="nome">Nome	completo</label>
								<input	type="text" class="form-control" id="nome" name="nome" autofocus>
							</div>
							<div class="form-group">
								<label	for="email">Email</label>
								<input	type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
							</div>
							<div	class="form-group">
								<label	for="cpf">CPF</label>
								<input	type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99">
							</div>
							<div	class="checkbox">
								<label>
									<input	type="checkbox" value="sim" name="spam" checked>
										estou siente que o valor é de R$ --,-- a hora.
								</label>
							</div>
					</fieldset>
					<fieldset	class="col-md-6">
							<legend>Agendamento</legend>
							<div class="form-group">
								<label	for="Forma de Pagamento">Pagamento</label>
								<select	name="FormaDePagamento" id="FormaDePagament" class="form-control">
									<option	value="Dinheiro">Dinheiro</option>
									<option	value="Cartão">Cartão</option>
								</select>
							</div>
							<div	class="form-group">
								<label	for="Data do Agendamento">Horario Entrada</label>
								<input	type="datetime-local" class="form-control" id="Horario" name="Horario">
							</div>
							<div	class="form-group">
								<label	for="Data do Agendamento">Horario Saida</label>
								<input	type="datetime-local" class="form-control" id="Horario" name="Horario">
							</div>
					</fieldset>
						<button	type="submit" class="btn	btn-primary" class="btn-lg" class="pull-right">
							<span	class="glyphicon	glyphicon-thumbs-up"></span>
							Confirmar Agendamento
						</button>
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
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script	src="js/inputmask-plugin.js"></script>
</body>
</html>
