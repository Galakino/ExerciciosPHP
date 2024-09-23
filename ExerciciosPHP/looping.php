<?php
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        define('NOME', 'lucas');
        define('SENHA', '123');

        $contador = 0;
        do{
            if(NOME == $nome && SENHA == $senha){
                echo $nome;
                echo "</br>";
                echo $senha;
                echo "<hr>";
            }
            $contador++;
        } while ($contador < 5);

?>