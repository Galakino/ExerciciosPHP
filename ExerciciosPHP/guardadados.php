<?php
 // Verificar se está vazio os campos "nome" e "mensagem"
  if(!empty($_POST['nome']) && ($_POST['mensagem'])) {

    //Cria variáveis para esses campos com caracteres especiais
    $nome =  htmlspecialchars($_POST['nome']);
    $mensagem =  htmlspecialchars($_POST['mensagem']);

    //Utiliza-se fopen para abrir o arquivo desejado/Criar o arquivo caso ele não existir (documento de texto)
    $file = fopen("guardadados.txt", "a");
    if ($file) {
        //Cria uma variavel para os dados pedidos
        $dados = "Nome: $nome<br>Mensagem: $mensagem<br>---<br>";
        //Escreve os dados pedidos no documento
        fwrite($file, $dados);
        //Fechar o arquivo
        fclose($file);
        echo "Mensagem enviada com sucesso!<br><br>";
    } else {
        echo "Erro ao abrir o arquivo!<br><br>";
    }
}

?>
<a href="index.php">Voltar</a>