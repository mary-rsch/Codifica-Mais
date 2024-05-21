<?php

// Exercício 3 da lista de lógica de programação


echo"Digite sua idade: " . PHP_EOL;
$idadeDoUsuario=fgets(STDIN);

if ($idadeDoUsuario>= "18"){
    echo "O usuário é maior de idade.". PHP_EOL;
} else {
    echo "O usuário é menor de idade.". PHP_EOL;
}

/* Código alternativo:
<?php

echo"Digite sua idade: " . PHP_EOL;
$idadeDoUsuario=fgets(STDIN);

$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;
*/