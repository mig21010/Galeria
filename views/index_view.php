<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Mi Increible Galeria en PHP y MySQL</h1>

		</div>
		
	</header>
	<section class="fotos">
		<div class="contenedor">
			<?php foreach ($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['ID']?>">
						<img src="fotos/<?php echo $foto['imagen']?>">
					</a>
				</div>
			<?php endforeach;?>
			<div class="paginacion">
				<?php if($pagina_actual >1):?>
					<a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<?php endif ?>
					<?php if($total_paginas != $pagina_actual):?>
					<a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i> </a>
				<?php endif ?>
				    <a class="button" href="subir.php">Añadir nueva imagen</a>
			</div>
		</div>
		</section>		
	
		<footer>
		<p class="copyright">Galería creada por Miguel Escamilla</p>
		</footer>
</body>
</html>