<?php
function alteradados($nome, $idade){
    $nome = "Sr $nome";
    $idade = "$idade anos";
    return [$nome, $idade];
}

$dados = alteradados("Diego", 34);
print_r ($dados);
echo "<br><br>";

echo "Ola $dados[0] você tem $dados[1]";
?>
