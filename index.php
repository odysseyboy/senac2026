<?php 
$pageTitle = "OrbitaSenac - Home";
include 'inc/header.inc.php';
?>
    <link rel="stylesheet" href="css/style.css">
    <section class="busca">
        <h2>Buscar Startup</h2>
        <from>
            <input type="search" name="busca"placeholder="Digita algo ai">
            <button>Busca</button>
        </from>
    </section>
    <section>
        <h2>repositorios</h2>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="topnav" id="myTopnav">
            <nav class="menu_start">
                <ul>
                    <li><a href="https://www.youtube.com/?reload=9">Concluidos</a></li>
                    <li><a href="#">iniciados</a></li>
                    <li><a href="#">Confirmados</a></li>
                    <li><a href="#">Cancelados</a></li>
                    <li><a href="#">Evidencia</a></li>
                    <li><a href="#">Maio Laranja</a></li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> </a>
                    
                </ul>
             </nav>
        </div>
    </section>
    <section class="destaque">
       <div class="carrossel">
            <div class="slides">
                
                <img src="img/maiolaranja.jpg">
                <img src="img/startup.jpg">  
            </div>
        </div>
    </section>
    <div class="flex-container">
        <div class="portifolio esq">
            conteudo1
            <img src="img/naruto.webp">
            <p>texto sobre a 1 startup <a href="gamelancer.php">Clique aqui</a>
            </p>
            
        </div>
            
        <div class="portifolio meio">
            conteudo2
            <img src="img/giphy.gif">
            <p>texto sobre a 2 startup <a href="gamelancer.php">Clique aqui</a></p>
            
        </div>

        <div class="portifolio dir">
            conteudo3
            <img src="img/corgi.webp">
            <p>texto sobre a 3 startup <a href="gamelancer.php">Clique aqui</a>
            </p>
            
        </div>
    </div>

<div onclick="subirtela()" class="scrollbutton"></div>
<script type="text/javascript" src="js/script.js"></script>
<?php 
include 'inc/footer.inc.php';
?>

   