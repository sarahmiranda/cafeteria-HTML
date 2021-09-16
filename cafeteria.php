<head>
<title>Ice Coffee</title>
<meta charset="utf-8">
<meta	name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/estilos.css">
<link	rel="stylesheet" href="css/reset.css">
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
<div class="container paineis">
<section class="painel novidades">
<ol>
				<?php
					$conexao	=	mysqli_connect("localhost",	"id17077237_id16129144_root",	"M\Tno7K($[iURd{D",	"id17077237_id16129144_ice10");
					$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	LIMIT	0, 15");
					while	($produto	=	mysqli_fetch_array($dados)):
			?>
			<li>
					<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
									<img	src="img/foto<?=	$produto['id']	?>.png"
														alt="<?=	$produto['nome']	?>">
									<figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
							</figure>
					</a>
			</li>
			<?php	endwhile;	?>
			</ol>
</section>
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
