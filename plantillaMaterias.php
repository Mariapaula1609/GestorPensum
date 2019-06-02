<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/materias.css" />
		<title>Administrador Pensum</title>
		<script src="javaScript.js"></script>
	</head>
	<body>
		<?php
				$codigo=0;
						if(isset($_POST["codigoText"])){
							$codigo=$_POST["codigoText"];
							echo "<script>";
							echo "enviarCodigoServer($codigo)";
							echo "</script>";
						}
		 ?>

		 <div class="content">
		     <div class="semestre">
		       <h1 class="titulo_semestre" data-name="Lorem">Semestre 1</h1>
		 			<div class="materia">Calculo 1</div>
		 			<div class="materia">Calculo 2</div>
		 			<div class="materia">Calculo 3</div>
		 			<div class="materia">Calculo 4</div>
		     </div>
		     <div class="semestre1">
		       <h1 class="titulo_semestre" data-name="Ipsum">Semestre 2</h1>
		 			<div class="materia">Calculo 1</div>
		 			<div class="materia">Calculo 2</div>
		 			<div class="materia">Calculo 3</div>
		 			<div class="materia">Calculo 4</div>
		     </div>
		     <div class="semestre2">
		       <h1 class="titulo_semestre" data-name="Dolor">Semestre 3</h1>
		 			<div class="materia">Calculo 1</div>
		 			<div class="materia">Calculo 4</div>
		     </div>
		 		<div class="semestre3">
		       <h1 class="titulo_semestre" data-name="Sit">Semestre 4</h1>
		 			<div class="materia">Calculo 1</div>
		 			<div class="materia">Calculo 3</div>
		 			<div class="materia">Calculo 4</div>

		     </div>
		 		<div class="semestre4">
		 			<h1 class="titulo_semestre" data-name="Sit">Semestre 4</h1>
		 			<div class="materia">Calculo 1</div>
		 			<div class="materia">Calculo 3</div>
		 			<div class="materia">Calculo 4</div>

		 		</div>

		   <i class="fa fa-close strip__close"></i>

	</body>
</html>

</section>
