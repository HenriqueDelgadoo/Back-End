<?php
require_once __DIR__ . '/../controller/BebidaController.php';

$controller = new BebidaController();

// Ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

$lista = $controller->ler();
?>

<!-- Formulário em HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background-color: lightcyan;
        text-align: center;
    }
    h1{
        margin-top: 5vh;
        font-family: Arial, sans-serif;
        font-weight: bold;
    }
    input{
border: solid 1.5px #9e9e9e;
 border-radius: 1rem;
 background: none;
 padding: 1rem;
 font-size: 1rem;
 color: #817d7dff;
 transition: border 150ms cubic-bezier(0.4,0,0.2,1);
    }
    input:focus, input:valid {
            outline: none;
        border: 1.5px solid #1a73e8;
        }
    select{
        border: solid 1.5px #9e9e9e;
        border-radius: 1rem;
        background: none;
        padding: 1rem;
        font-size: 1rem;
        color: #817d7dff;
        transition: border 150ms cubic-bezier(0.4,0,0.2,1);
    }
    select:focus, input:valid{
         outline: none;
        border: 1.5px solid #1a73e8;
    }
    option{
        font-family: Arial, sans-serif;
        font-size: medium;
    }
    button{
        border: none;
        width: 15em;
         height: 5em;
        border-radius: 3em;
        margin: 0 auto;
        margin-top: 10em;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        background: #1C1A1C;
        cursor: pointer;
        transition: all 450ms ease-in-out;
        color: white;
    }
    button:hover {
  background: linear-gradient(0deg,#A47CF3,#683FEA);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
  inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
  0px 0px 0px 4px rgba(255, 255, 255, 0.2),
  0px 0px 180px 0px #9917FF;
  transform: translateY(-2px);
}

</style>
<body>
<h1>Gerenciamento de bebidas</h1>
<br>
<hr>
    <form method="POST">
    <input type="hidden" name="acao" value="criar">
    <input type="text" name="nome" placeholder="Nome da bebida:" required>
    <select name="categoria" required>
        <option value="">Selecione a categoria</option>
        <option value="Refrigerante">Refrigerante</option>
        <option value="Cerveja">Cerveja</option>
        <option value="Vinho">Vinho</option>
        <option value="Destilado">Destilado</option>
        <option value="Água">Água</option>
        <option value="Suco">Suco</option>
        <option value="Energético">Energético</option>
    </select>
    <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
    <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
    <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
    <button type="submit">Cadastrar</button>
    </form>

</body>
</html>

