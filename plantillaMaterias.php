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

			 <div id="semestre1"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 1</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div id="semestre2"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 2</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div id="semestre3"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 3</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div id="semestre4"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 4</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div class="semestre" id="semestre5">
				 <h1 class="titulo_semestre">Semestre 5</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div id="semestre6"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 6</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div id="semestre7"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 7</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
			 <div id="semestre8"  class="semestre">
				 <h1 class="titulo_semestre">Semestre 8</h1>
				 <div id="materias">
					<div class="materia">Calculo 1</div>
					<div class="materia">Calculo 2</div>
					<div class="materia">Calculo 3</div>
					<div class="materia">Calculo 4</div>
				</div>
			 </div>
				<div id="semestre9"  class="semestre">
					<h1 class="titulo_semestre" >Semestre 9</h1>
					<div id="materias">

				 </div>
				</div>
				<div id="semestre10"  class="semestre">
					<h1 class="titulo_semestre" >Semestre 10</h1>
					<div id="materias">
					 <div class="materia">
						 <h3>Calculo 4</h3>
						 <p>creditos: 1</p>
					 </div>
					 <div class="materia">Calculo 2</div>
					 <div class="materia">Calculo 3</div>
					 <div class="materia">Calculo 4</div>
				 </div>
				</div>
		   <i class="fa fa-close strip__close"></i>

	</body>
</html>

</section>
