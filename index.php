<?php
    require_once 'Funcionario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        .center {
        margin: auto;
        width: 20%;
        border: 0px;
        padding: 10px;
        }

        .form-submit-button {
        background: #0066A2;
        color: white;
        border-style: outset;
        border-color: #0066A2;
        height: 30px;
        width: 170px;
        font: bold 15px arial, sans-serif;
        text-shadow:none;
        }

        .center1{
        margin: auto;
        width: 20%;
        border: 0px;
        padding: 10px;
        }    

    </style>
    <title>Menu de Cadastramento</title>
</head>
<body bgcolor="#B0C4DE">
    <div class="center">
        <form method="post">
            <h2><span style="color:#2F4F4F;">Nome:</span></h2>
            <input type="text" name="nome" id="nome"><br/>
            <h2><span style="color:#2F4F4F;">Cidade:</span></h2>
            <input type="text" name="cidade" id="cidade"><br/>
            <h2><span style="color:#2F4F4F;">Salário p/Hora:</span></h2>
            <input type="number" name="salHora" id="salHora"><br/>
            <h2><span style="color:#2F4F4F;">Horas Trabalhadas:</span></h2>
            <input type="text" name="hrsTrab" id="hrsTrab"><br/>
            <h2><span style="color:#2F4F4F;">Aumento:</span></h2>
            <input type="number" name="aumento" id="aumento"><br/><br>

            <div class ='form-submit-button'><input type="submit" class="form-submit-button" value="Cadastrar Usuário" name="btnCadastrar"></div>
            <div class ='form-submit-button'><input type="submit" class="form-submit-button" value="Calcular o Salário" name="btnCalcular"></div>
            <div class ='form-submit-button'><input type="submit" class="form-submit-button" value="Mostrar os Dados" name="btnMostrar"></div> 
            <div class ='form-submit-button'><input type="submit" class="form-submit-button" value="Aumento do Salário" name="btnAumentar"></div>  
    </form>
    </div>    
</body>
</html>
<?php 
    require_once "Funcionario.php";
    $funcionario = new Funcionario();
    
    if(isset($_POST["btnCadastrar"]))
    {
        $funcionario->setNome($_POST['nome']);
        $funcionario->setCidade($_POST['cidade']);
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['hrsTrab']);
        $funcionario->setSalarioFinal($funcionario->calcularSalario());

        echo "<div class='center1'><span style = 'color:red;'><h2>Usuário Cadastrado!</span></h2></div>";
    }

    if(isset($_POST["btnCalcular"]))
    {
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['hrsTrab']);
        $salario = $funcionario->calcularSalario();
        echo "<div class='center1'><span style = 'color:red;'><h2>Salário do Funcionário: R$ $salario</span></h2></div>";
    }

    if(isset($_POST["btnMostrar"]))
    {
        $funcionario->setNome($_POST['nome']);
        $funcionario->setCidade($_POST['cidade']);
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['hrsTrab']);
        $funcionario->setSalarioFinal($funcionario->calcularSalario());
        $dados = $funcionario->mostrarDados();
        echo "<div class='center1'><span style = 'color:red;'><h2>$dados</h2></span></div>";
    }

    if(isset($_POST["btnAumentar"]))
    {
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['hrsTrab']);
        $funcionario->setSalarioFinal($funcionario->calcularSalario());
        $aumento = $funcionario->darAumento($_POST['aumento']);
        echo "<div class='center1'><span style = 'color:red;'><h2>Salário com aumento: R$ $aumento</h2></span></div>";
    }

?>