<!DOCTYPE html>
<html>
<head>
<title>Ice Coffee</title>
<meta charset="utf-8">
<meta	name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/estilos.css">
<link	rel="stylesheet" href="css/reset.css">
<link	rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
<link	rel="stylesheet" href="css/produto.css">
<script>

	var inputTamanho = document.querySelector('[name=tamanho]')
	var outputTamanho = document.querySelector('[name=valortamanho]')
	function mostraTamanho(){
		outputTamanho.value = inputTamanho.value
	}
	inputTamanho.oninput = mostraTamanho
	inputTamanho.onchange = mostraTamanho
</script>
<?php
		$conexao	=	mysqli_connect("localhost",	"id17077237_id16129144_root",	"M\Tno7K($[iURd{D",	"id17077237_id16129144_ice10");
		$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	LIMIT	0, 15");
		while	($produto	=	mysqli_fetch_array($dados)):
?>

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


<div class="produto-back">
		<div class="container">
			<div class="produto">
				<h1><?=	$produto['nome']	?></h1>
				<p>por apenas R$ <?=	$produto['preco']	?></p>
				<form	action="checkout.php" method="POST">
					<input	type="hidden" name="nome" value="Bolo Red Velvet">
					<input	type="hidden" name="preco" value="4,90">
					<div class="panel-body">
					<img	src="img/foto<?=	$produto['id']	?>.png" class="img-thumbnail	img-responsive">
					</div>
					<input type="submit" class="comprar" value="Comprar">
					<input type="hidden" name="nome" value="<?=	$produto['nome']	?>">
					<input type="hidden" name="preco" value="<?=	$produto['preco']	?>">
					<input	type="hidden"	name="id"	value="<?=	$produto['id']	?>">
				</form>
			</div>
				<div	class="detalhes">
					<h2>Descrição</h2>
					<?=	$produto['descricao']	?>
					<table>
						<thead>
							<tr>
								<th>Contem</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Leite e derivados</td>
							</tr>
							<tr>
								<td>Cacau</td>
							</tr>
							<tr>
								<td>Ovo</td>
							</tr>
							<tr>
								<td>Açúcar</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>


<footer>
<div class="container">
<img src="img/logoroda.png" alt="Ice Coffee">
<ul class="social">
<li><a href="http://facebook.com/icecoffee">Facebook</a></li>
<li><a href="http://twitter.com/icecoffee">Twitter</a></li>
<li><a href="http://plus.google.com/icecoffee">Google+</a></li>
</ul>
</div>
</footer>
</body>
</html>
