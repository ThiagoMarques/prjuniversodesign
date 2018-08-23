<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Principal</title>
	<meta charset="utf-8">
	<link href="estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/teste.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
		<div class="container" align="right">
			<div class="row-fluid">
				<!---área de input superior de Login para acesso a área restrita - 12 colunas no grid -->
				<div class="col col-md-12 divTeste">
				<label>Login</label><input type="text" name="iptEmail" placeholder="Email">
				<label>Senha</label><input type="password" name="iptSenha" placeholder="Senha">
				<button type="submit" class="btn btn-primary">Entrar</button>
				<img src=""><label>Esqueci minha senha</label>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row-fluid">
			<!--- área da logo - 02 colunas no grid -->
			<div class="col col col-md-2 text-center divTeste" style="height: 50px">
				LOGOTIPO
			</div>

			<!---área de input de buscas no site - 08 colunas no grid-->
			<div class="col col-md-8 text-center divTeste"  style="height: 50px">
				INPUTS DE PESQUISA
			</div>

			<!--área de cadastro de clientes - 02 colunas no grid-->
			<div class="col col-md-2 text-center divTeste"  style="height: 50px">
				CADASTRO DE CLIENTES
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row-fluid divTeste">
			<ul class="col col-md-12">
				<li class="col-md-1 divTeste">Item 1</li>
				<li class="col-md-1 divTeste">Item 2</li>
				<li class="col-md-1 divTeste">Item 3</li>
				<li class="col-md-1 divTeste">Item 4</li>
				<li class="col-md-1 divTeste">Item 5</li>
				<li class="col-md-1 divTeste">Item 6</li>
				<li class="col-md-1 divTeste">Item 7</li>
				<li class="col-md-1 divTeste">Item 8</li>
				<li class="col-md-1 divTeste">Item 9</li>
				<li class="col-md-1 divTeste">Item 10</li>
				<li class="col-md-1 divTeste">Item 11</li>
				<li class="col-md-1 divTeste">Item 12</li>
			</ul>
		</div>
	</div>

			<!-- slider princpal - 12 colunas no grid-->
			<div class="container center">
            <div class="row">
                <div class="col-md-12">
                    
                    <div id="carousel01" class="carousel slide" data-ride="carousel" data-interval="3000">
                        
                        <ol class="carousel-indicators">
                            <li data-target="#carousel01" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel01" data-slide-to="1"></li>
                            <li data-target="#carousel01" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="imagens/01.jpg" alt="Imagem escrito Foto1" >
                                <div class="carousel-caption">
                                    <h3>CASA 01</h3>
                                    <p>IMÓVEL USADO</p>
                                </div>
                                
                            </div>

                            <div class="item">
                                <img src="imagens/01.jpg" alt="Imagem escrito Foto2">
                                <div class="carousel-caption">
                                     <h3>CASA 02</h3>
                                    <p>IMÓVEL USADO</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="imagens/01.jpg" alt="Imagem escrito Foto3">
                             <div class="carousel-caption">
                                  <h3>CASA 03</h3>
                                   <p>IMÓVEL USADO</p>
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
    </div>

	<div class="container">
		<div class="row-fluid text-center">
				<!--- menu lateral - 02 colunas no grid -->
				<ul class="col-md-2 divTeste" style="height: 650px">
				<label>MENU LATERAL</label>
				<li>Item 1</li>
				<li>Item 2</li>
				<li>Item 3</li>
				<li>Item 4</li>
				<li>Item 5</li>
				<li>Item 6</li>
				<li>Item 7</li>
				<li>Item 8</li>
				<li>Item 9</li>
				<li>Item 10</li>
				<li>Item 11</li>
				<li>Item 12</li>
				<li>Item 13</li>
				<li>Item 14</li>
				<li>Item 15</li>
				<li>Item 16</li>
				<li>Item 17</li>
				<li>Item 18</li>
				<li>Item 19</li>
				<li>Item 20</li>
				<li>Item 21</li>
				<li>Item 22</li>
				<li>Item 23</li>
				<li>Item 24</li>
				<li>Item 25</li>
				<li>Item 26</li>
				<li>Item 27</li>
				<li>Item 28</li>
				<li>Item 29</li>
				<li>Item 30</li>
			</ul>

			<!-- área de imagens com conteúdo principal do site - 10 colunas no grid -->
			<div class="col col-md-10 divTeste text-justify" style="height: 650px">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat nisl gravida, consequat velit id, dictum nulla. Sed mauris dui, iaculis sit amet suscipit id, auctor in sem. Sed eget enim sit amet tellus consectetur bibendum. Etiam metus elit, tempor vitae gravida vitae, hendrerit non ante. Nam rutrum felis quis ante euismod, in consectetur enim ultrices. Ut eget pharetra dolor, vitae aliquet sapien. Proin feugiat iaculis maximus.

				Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse ut mauris eu arcu elementum ullamcorper at a diam. Morbi pretium imperdiet lacus, ut semper neque laoreet nec. Suspendisse potenti. Aliquam erat volutpat. Nulla feugiat tincidunt dui, in viverra tellus ultricies at. Nullam viverra a dolor tincidunt congue. Etiam vitae tellus et ligula tempus scelerisque eget et urna. Nam placerat sapien lectus, id pellentesque arcu volutpat in.

				Aenean ultrices porttitor turpis, nec laoreet odio volutpat et. Proin porta mi eu lorem interdum viverra. Praesent luctus elit vitae mattis condimentum. Ut aliquet purus quis porta molestie. Quisque varius est et nulla tristique vehicula. Aliquam eget viverra lacus. Etiam elementum elit sit amet malesuada dictum. Praesent non leo a libero pellentesque cursus. Sed sed finibus quam, sed hendrerit tortor. Nulla facilisis sem elit. Quisque ante nunc, cursus sit amet venenatis et, aliquet eu leo. Mauris consequat justo urna, vitae pulvinar nisi euismod et. Curabitur fringilla at nisi in scelerisque. Vivamus sagittis, diam vel dictum sagittis, ex ante sodales augue, eu eleifend ipsum dolor sit amet diam. Quisque id hendrerit justo. Maecenas auctor cursus tortor, et laoreet arcu sagittis nec.

				Vestibulum vitae ipsum ex. Cras tristique ex ligula, in rhoncus turpis aliquet et. Vestibulum sagittis, diam efficitur mollis pulvinar, quam elit ornare quam, quis tempor lorem leo ut arcu. Nullam vitae eros erat. Praesent bibendum felis non lectus gravida blandit. Nullam eget pharetra lacus, non volutpat diam. Sed semper orci a odio viverra tincidunt. Donec scelerisque augue eu lorem mollis euismod. Quisque tristique massa porttitor, suscipit nibh ut, lobortis lacus. Donec vitae nisi sem. Vestibulum lacinia pulvinar ante quis scelerisque. Mauris condimentum sapien sit amet rhoncus tempor. Cras a aliquet nisl, ut pharetra sapien. Suspendisse at libero at dolor iaculis efficitur.

				Sed tincidunt mattis sem, id lobortis dolor hendrerit tempor. Sed at cursus lectus. Duis in tincidunt massa. Sed ultricies, turpis nec placerat dictum, massa ligula tempus quam, vitae iaculis nunc ipsum ac purus. Nam facilisis sodales elit, vitae gravida nunc hendrerit vel. Donec aliquet et risus commodo tincidunt. Praesent eget neque est. Nullam felis est, sollicitudin aliquam pharetra vel, fermentum at arcu.
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
