<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>EXEMPLO BUTTON DROPDOWN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="dropdwon">
					<button class="btn btn-default dropdown-toggle" type="button" id="btnDropDown01" data-toggle="dropdown" >
						Menu DropDown

						<!-- é a seta que fica no botão -->
						<span class="caret"></span>
						
					</button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="btnDropDown01">

						<!--cabeçalho do menu-->
						<li role="presentation" class="dropdown-header" >OPÇÕES DE NAVEGAÇÃO</li>


						<li role="presentation">
							<a href="#" role="menuitem">Demandas do Dia</a>
						</li>
						<li role="presentation">
							<a href="#" role="menuitem">Demandas Gerais</a>
						</li>
						<li role="presentation">
							<a href="#" role="menuitem">Lista M.A</a>
						</li>
						<li role="presentation">
							<a href="#" role="menuitem">Lista M.J</a>
						</li>
						<li role="presentation">
							<a href="#" role="menuitem">Lista K</a>
						</li>
						<li role="presentation" class="disabled">
							<a href="#" role="menuitem">Orientações</a>
						</li>
					</ul>	
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="estilos/bootstrap/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="estilos/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="estilos/bootstrap/js/main.js"></script>
</body>
</html>