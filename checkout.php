<!doctype	html>
	<html>
		<head>
			<title>Ice Coffee</title>
			<meta charset="utf-8">
			<meta	name="viewport" content="width=device-width">
			<link rel="stylesheet/less" href="css/estilos.css">
			<link	rel="stylesheet" href="css/bootstrap.css">
			<link	rel="stylesheet" href="css/reset.css">
			<link	rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
			<link	rel="stylesheet/less" type="text/css" href="styles.less"	/>
			<link	href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
</head>
	<body bgcolor=503530>
		<div	class="jumbotron">
			<div	class="container">
				<h1> Obrigado	por	comprar	na	Ice coffee! </h1>
				<p>
					Falta apenas um passo para essa delicia ser sua!
					Preencha seus	dados	para	efetivar	a	compra.
				</p>
			</div>
		</div>
		<div class="container">
			<div	class="row">
			<form action="finalização.php" method="POST"> 
				<div	class="col-sm-4">
					<div class="panel panel-default">       
						<div class="panel-heading">
							<h2>Sua	compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/foto<?=	$_POST['id']	?>.png" class="img-thumbnail	img-responsive">
							<dl>
								<dt>Produto</dt>
									<dd><?=	$_POST["nome"]	?></dd>
								<dt>Preço</dt>
									<dd	id="preco">R$ <?= $_POST["preco"] ?></dd>
							</dl>
							<div	class="form-group">
								<label	for="qt">Quantidade</label>
								<input	id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label	for="total">Total</label>
								<dd	id="preco">R$ <?= $_POST["preco"] ?></dd>
								<output	for="qt	preco" id="total" class="form-control">
									<?=	$_POST["preco"]	?>
								</output>
								<script	src="js/total.js"></script>
							</div>
						</div>
					</div>
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
										Quero	receber	as promoções da ice coffee por e-mail
								</label>
							</div>
						</fieldset>
						<fieldset	class="col-md-6">
							<legend>Horario para buscar o Pedido</legend>
							<div class="form-group">
								<label	for="Forma de Pagamento">Pagamento</label>
								<select	name="FormaDePagamento" id="FormaDePagament" class="form-control">
									<option	value="Dinheiro">Dinheiro</option>
									<option	value="Cartão">Cartão</option>
								</select>
							</div>
							<div	class="form-group">
								<label	for="Data do Agendamento">Horario</label>
								<input	type="datetime-local" class="form-control" id="Horario" name="Horario">
							</div>
						</fieldset>
						<button	type="submit" class="btn	btn-primary" class="btn-lg" class="pull-right">
							<span	class="glyphicon	glyphicon-thumbs-up"></span>
							Confirmar	Pedido
						</button>
					</form>
			</form>
			</div>
		</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script	src="js/inputmask-plugin.js"></script>
	</body>
</html>
