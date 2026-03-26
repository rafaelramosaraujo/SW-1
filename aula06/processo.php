<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

// email: rafaelcitiboy@email.com
// senha: 6767


if ($email == 'rafaelcitiboy@email.com' && $senha == 6767) {
    // echo "Vamos para a area restrita";

    $nome = "Ramos";

    header('Location: restrita.php?nome='.$nome);
} else {
    // echo "De volta para o formulário";
    header('Location: formulario.php');
}


?>