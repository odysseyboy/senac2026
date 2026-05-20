<?php 
    $pageTitle = "OrbitaSenac - inscrição";
    include 'inc/header.inc.php';
?>
<link rell ="stylesheet" type="text/css" href="css/inscricao.css">

<script type = "text/javascript" src="js/jquery-4.0.0.min.js"></script>
<script type = "text/javascript" src="js/inscrever.js"></script>
<form>
    <fieldset>
        <legend>
            Se inscreva e um projeto
        </legend>

        <fieldset>
            <legend>
                inscrição
            </legend>
            <label>
                Nome:
            </label><br>
            <input type ="text" name="nome" id="nm" autofocus required = "required" autocomplete="off"><br><br>

            <label>
                Sobrenome:
            </label><br>
            <input type ="text" name="sobrenome" id="sm"autocomplete="on"><br><br>

            <label>
                Sexo:
            </label><br>
            <input type ="text" name="sexo" id="sx" autocomplete="on"><br><br>

            <input type="radio" name="gender" value="masculino" id="idmasc" checked>Masculino<br> 
            <input type="radio" name="gender" value="Feminino" id="idfem" >Feminino<br> 
            <input type="radio" name="gender" value="hatsunemiku" id="idhats" >hatsune miku<br> 

            Se voce tem 1 MEI, informe o CNPJ ou informe seu CPF <br>
                <label>
                    <input type="radio" name="opt" value="cpf" id ="radiocpf" checked>CPF 
                    <input type="radio" name="opt" value="cnpj" id ="radiocnpj" >CNPJ 
                </label>
                <div id="divcpf">
                    <label for="cpf">
                        CPF:</label>
                        <input type="text" name="cpf"  id="cpf" checked>
                </div>

                <div id="divcnpj">
                    <label for="cnpj">
                        CNPJ:</label>
                        <input type="text" name="cnpj"  id="cnpj">
                </div>
                <label>
                    Email
                </label>
                <input type="Email" name="email" id="mail" required>
        </fieldset>
    </fieldset>
</form>
<h1>hello world!</h1>


<?php 
    include 'inc/footer.inc.php';
?>