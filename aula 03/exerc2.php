<?php 
$nota = readline ("Digite a nota:");

if ($nota >= 9 ) {
    echo "Excelente";
}elseif ($nota >= 7){
    echo "Bom";
}else {
    echo "Reprovado";
}

?>