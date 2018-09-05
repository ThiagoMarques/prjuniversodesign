<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Principal</title>
	<meta charset="utf-8">
	<link href="estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap/teste.css">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap/css/personalizado.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="laco()">
		<div class="container" align="right">
			<div class="row-fluid">
				<!---área de input superior de Login para acesso a área restrita - 12 colunas no grid -->
				<div class="col-md-12" id="divLogin">
					<form  class="form-inline" method="post">	
						<div class="form-group">
						<label class="glyphicon glyphicon-user" for="login">Usuário</label>&nbsp;<input class="form-control" id="login" type="text" name="iptEmail" placeholder="Email">
						&nbsp;&nbsp;&nbsp;<label class="glyphicon glyphicon-lock" for="senha">Senha </label>&nbsp;<input class="form-control" id="senha" type="password" name="iptSenha" placeholder="Senha">
						<button type="submit" class="btn btn-primary">Entrar <label class="glyphicon glyphicon-log-in"></label></button>
						&nbsp;&nbsp;&nbsp;&nbsp;<img src=""><label>Esqueci minha senha</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	
	<div class="container">
		<div class="row-fluid">
			<!--- área da logo - 02 colunas no grid -->
			<div class="col-md-2">
				<a href="#" class="navbar-brand">
					<img src="imagens/logo.png" alt="logo">
				</a>
			</div>

			<!---área de input de buscas no site - 08 colunas no grid-->
					<form method="post" class="form-inline">
					<div class="form-group col-md-8" align="right">
						<br><br>
						<input class="form-control" type="text" size="50">&nbsp;
						<button type="submit" class="btn btn-info"><label class="glyphicon glyphicon-search"></label></button>
					</div>
					</form>

			<!--área de cadastro de clientes - 02 colunas no grid-->
			<div class="col col-md-2 text-center" style="height: 50px">
				<br><br>
				<a href="#"><span class="label label-success">Já é nosso Cliente?</span></a>
				<a href="#"><span class="label label-danger">Cadastre-se aqui.</span></a>
			</div>
		</div>
	</div>
	
	<br>
	<br>
	<div class="container">
		<div class="row-fluid">
			<div class="col-md-12">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#">Item 1</a></li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 1</a></li>
			</ul>
			</div>
			<!-- Pills
			<div class="col-md-12">
				
				<ul class="nav nav-pills">
					<li class="active"><a href="#">Item 1</a></li>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 1</a></li>
				</ul>
			</div>-->

		</div>
	</div>
			<!-- slider princpal - 12 colunas no grid-->
	<div class="container center">
        <div class="row">
            <div class="col-md-12">
                    
                <div id="carousel01" class="carousel slide" data-ride="carousel">
			<div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div id="carousel01" class="carousel slide" data-ride="carousel" data-interval="400000000">
                 
                        <ol class="carousel-indicators">
                            <li data-target="#carousel01" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel01" data-slide-to="1"></li>
                            <li data-target="#carousel01" data-slide-to="2"></li>
                        </ol>
                        
                    <div class="carousel-inner">

                            <div class="item active">
                                <img src="imagens/01.jpeg" alt="Imagem escrito Foto1" >
                                <div class="carousel-caption">
                                   <!--<h3>ENTRE EM CONTATO</h3>
                                    <p>FAÇA SEU ORÇAMENTO</p>-->
                                </div>
                                
                            </div>

                            <div class="item">
                                <img src="imagens/01.jpeg" alt="Imagem escrito Foto2">
                                <div class="carousel-caption">
                                     <!--<h3>ENTRE EM CONTATO</h3>
                                    <p>FAÇA SEU ORÇAMENTO</p>-->
                                </div>
                            </div>

                            <div class="item">
                                <img src="imagens/01.jpeg" alt="Imagem escrito Foto3">
                             	<div class="carousel-caption">
                                   <!--<h3>ENTRE EM CONTATO</h3>
                                    <p>FAÇA SEU ORÇAMENTO</p>-->
                            	</div>
                        	</div>
                            </div>
                        </div>
                        </div>
                        <a class="left carousel-control" href="#carousel01" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel01" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                </div>
            </div>
        </div>
    </div>

	<div class="container">
		<div class="row-fluid text-center">
			<div class="col-md-2" style="height: 650px">

				<!--- menu lateral - 02 colunas no grid -->
				<div class="dropdown">
					<!--BOTÃO 01	-->
					<button class="btn btn-default dropdown-toggle" type="button" id="btndropdown01" data-toggle="dropdown">
						Item 1
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu" aria-labelledby="btndropdow01">
						<li role="presentation">
							<a href="#" class="menu-item">Produto 01</a>
						</li>

						<li role="presentation">
							<a href="#" class="menu-item">Produto 02</a>
						</li>
						
						<li role="presentation">
							<a href="#" class="menu-item">Produto 03</a>
						</li>
					</ul>
				</div>

				<div class="dropdown">
					<!--BOTÃO 02	-->
					<button class="btn btn-default dropdown-toggle" type="button" id="btndropdown02" data-toggle="dropdown">
						Item 1
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu" aria-labelledby="btndropdow02">
						<li role="presentation">
							<a href="#" class="menu-item">Produto 01</a>
						</li>

						<li role="presentation">
							<a href="#" class="menu-item">Produto 02</a>
						</li>
						
						<li role="presentation">
							<a href="#" class="menu-item">Produto 03</a>
						</li>
					</ul>
				</div>

				<div class="dropdown">
					<!--BOTÃO 03	-->
					<button class="btn btn-default dropdown-toggle" type="button" id="btndropdown03" data-toggle="dropdown">
						Item 1
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu" aria-labelledby="btndropdow03">
						<li role="presentation">
							<a href="#" class="menu-item">Produto 01</a>
						</li>

						<li role="presentation">
							<a href="#" class="menu-item">Produto 02</a>
						</li>
						
						<li role="presentation">
							<a href="#" class="menu-item">Produto 03</a>
						</li>
					</ul>
				</div>

				<div class="dropdown">
					<!--BOTÃO 04	-->
					<button class="btn btn-default dropdown-toggle" type="button" id="btndropdown04" data-toggle="dropdown">
						Item 1
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu" aria-labelledby="btndropdow04">
						<li role="presentation">
							<a href="#" class="menu-item">Produto 01</a>
						</li>

						<li role="presentation">
							<a href="#" class="menu-item">Produto 02</a>
						</li>
						
						<li role="presentation">
							<a href="#" class="menu-item">Produto 03</a>
						</li>
					</ul>
				</div>

				<div class="dropdown">
					<!--BOTÃO 05	-->
					<button class="btn btn-default dropdown-toggle" type="button" id="btndropdown05" data-toggle="dropdown">
						Item 1
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu" aria-labelledby="btndropdow05">
						<li role="presentation">
							<a href="#" class="menu-item">Produto 01</a>
						</li>

						<li role="presentation">
							<a href="#" class="menu-item">Produto 02</a>
						</li>
						
						<li role="presentation">
							<a href="#" class="menu-item">Produto 03</a>
						</li>
					</ul>
				</div>	


			</div>

			<!-- área de imagens com conteúdo principal do site - 10 colunas no grid -->
			<div class="col-md-10 divTeste text-justify" style="height: 650px">
					<div class="container">
						<div class="row-fluid">
							<div class="col-md-12" style="height: 600px; width: 900px">
							<div class="container">
								<div class="row-fluid">
									<div class="col-md-8" align="center">
										<ul class="nav nav-tabs nav-justified" role="tablist">
											<li><a href="view/destaques.php" target="produto">Destaques</a></li>
											<li><a href="view/maisvendidos.php" target="produto">Mais vendidos</a></li>
											<li><a href="view/promocionais.php" target="produto">Promocionais</a></li>
										</ul>
									</div>			
								</div>
							</div>
							<iframe name="produto" scrolling="no" width= "900" height= "600" form-border="1">	
							</iframe>
							</div>
						</div>
					</div>
				
				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<!-- área de newsletter - 12 colunas no grid -->
			<div class="col col-md-12 divTeste text-center" style="height: 100px">
				<br>
				<br>
				<br>
				NEWSLETTER 
			</div>
		</div>
	</div>

	
	<div class="container">
		<div class="row-fluid">
			<!--- área de contatos telefonicos - 04 colunas no grid -->
			<div class="col col-md-4 divTeste text-center" style="height: 250px">
				<br>
				<br>
				<br>
				<br>
				TELEFONES
				BLOG
				FAQ
				INSTITUCIONAL
			</div>

			<!-- área de contatos via rede social - 04 colunas no grid -->
			<div class="col col-md-4 divTeste text-center" style="height: 250px">
				<br>
				<br>
				<br>
				<br>
				REDES SOCIAIS
				FACEBOOK TWITTER GOOGLE+ YOUTUBE
				FORMAS DE PAGAMENTO
			</div>

			<!-- área de contatos diversos e promocional - 04 colunas no grid -->
			<div class="col col-md-4 divTeste text-center" style="height: 250px">
				<br>
				<br>
				<br>
				<br>
				CURTIR PÁGINA NO FACEBOOK 
				CERTIFICADOS DE SEGURANÇA
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<!-- rodapé - 12 colunas no grid -->
			<div class="col col-md-12 text-center divTeste" style="height: 30px">
				RODAPÉ
			</div>
		</div>
	</div>	

	<script src="estilos/bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="estilos/bootstrap/js/bootstrap.min.js"></script>
    <script src="estilos/bootstrap/js/main.js"></script>
</body>
</html>
