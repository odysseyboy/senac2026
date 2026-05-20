<?php include 'inc/header.inc.php'; ?>
$pageTitle = "OrbitaSenac - Gamelancer"; 
<h1> qualquer coisa interessante sobre startups</h1>
<link rel="stylesheet" type="text/css" href="css/startup.css">
<div class="startup">
    <h1>Sobre a startup</h1>
    <p>Saiba como a minha startup está sendo desenvolvida</p>
    <form method="POST" action="inscrever.php">
        <fieldset class="modelo">
            <legend>conehça nossa startup</legend>
            <input type="radio" name="modelo" value="preto" id="preto" checked>
            <label for="preto"><img src="img/japao01.webp">
        
                <div class="texto">
                <h3>Nossa politica</h3>
                <p>
                    Tecnicas: Scrum, Prototype <br>
                    Linguagens Front: HTML, CSS, JS <br>
                    Linguagens Back: PHP, Python, C# <br>
                    Framework Front: React, Bootstrap, Taiwind <br>
                    Framework Back: Larave, Node <br>
                    Banco de dados: Mysql, Postgres<br>
                </p>
        
                </div>
            </label>

            
            <input type="radio" name="modelo" value="azul" id="azul" >
            <label for="azul"><img src="img/cristo.jpg">
                    <div class="texto01">
                        <h3>teste</h3>
                        <p>
                            Viage com segurança para qualquer lugar que voce queira <br>
                            com segurança <br>
                            qualidade <br>
                        </p>
                    </div>
            </label>

            
            <input type="radio" name="modelo" value="amarelo" id="amarelo" >
            <label for="amarelo"><img src="img/basilica.jpg">
                    <div class="texto02">
                        <h3>teste</h3>
                        <p>
                            planejamos os melhores locais <br>
                            baseado nos seus gostos <br>
                            e sua vontade de descobrir coisas novas <br>
                        </p>
                    </div>
            </label>
            
            <div class="inscricao">
                <input type="submit" value="incrição" name="inscricao">
            </div>
        </fieldset>

    </form>
</div>
<?php include 'inc/footer.inc.php'; ?>