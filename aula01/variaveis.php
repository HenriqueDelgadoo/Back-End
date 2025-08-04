<?php
//Desenvolva um código com a mesma estrtura abaixo, porém alterando os valores com seus dados  

echo "olá \n";
$nome = "Henrique\n";
$idade = 20;
$ano_atual = 2025;

$data_nasc = $ano_atual - $idade;
echo $nome, "você nasceu em: ", $data_nasc;
?>

<?php 
//Exercicio 1 - aula 01

$nome = "Henrique";
$idade = 19;

echo "Eu sou o ",$nome, " e tenho ",$idade;

?>

<?php 
//Exercicio 2 - aula 01

$frase = "Programação em PHP";
$maisculo = strtoupper (string:$frase);

echo "A frase em maisculo é ",$maisculo, " e em minusculo é ",$frase;

?>

<?php 
//Exercicio 3 - aula 01

$frase = "PHP foi criado em mil novecentos e noventa e cinco";
$alterado = str_replace(search: ['o','i','a'],replace: ['0','1','4'], subject: $frase);
echo $alterado;

?>

<?php 
//Exercicio  4 - aula 01

$num1 = 10;
$num2 = 5;
$som = $num1 + $num2;

echo $som;

?>
<?php 
//Exercicio  5 - aula 01

$num1 = 10 ;
if ($num1 % 2 == 0) {
    echo "Numero par";
}
else {
    echo "numero impar";
}

?>
