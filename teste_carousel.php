<!DOCTYPE html>
<html>
<head>
	<title>TESTE CAROUSEL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="container">
            <div class="row">
                <div class="col-md-4">
                    
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
                                <img src="imagens/02.jpg" alt="Imagem escrito Foto2">
                                <div class="carousel-caption">
                                     <h3>CASA 02</h3>
                                    <p>IMÓVEL USADO</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="imagens/03.jpg" alt="Imagem escrito Foto3">
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
 	<script src="estilos/bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="estilos/bootstrap/js/bootstrap.min.js"></script>
    <script src="estilos/bootstrap/js/main.js"></script>
</body>
</html>