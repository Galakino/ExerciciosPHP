<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<style>
    label, textarea {
        display: block;
    }
    textarea {
        margin: 15px 0;
        width: 250px;
        height: 100px
    }
</style>
<body>
    <center>
        <h2>Exercícios práticos de php</h2>
    </center>
    <hr>
    <form action="looping.php" method="POST">
        <h3>Exercicio 1 - Mostrar nome e senha</h3>
        <p>
            <label for="nome">Digite seu nome:(lucas) </label>
            <input type="text" name="nome">
        </p>
        <p>
            <label for="nome">Digite sua senha:(123) </label>
            <input type="password" name="senha">
        </p>
        <p>
            <input type="submit" value="MOSTRAR">
        </p>
    </form>
    <hr>
    <br>
    <form action="index.php" method="POST">
        <h3>Exercicio 2 - Calculadora 4 operações</h3>
        <p>
            <label for="numberone">Primeiro °N: </label>
            <input type="number" name="numberone" required>
        </p>
        <p>
            <select name="operacao" id="operacao">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                </select>
        </p>
        <p>
            <label for="numbertwo">Segundo °N: </label>
            <input type="number" name="numbertwo" required>
        </p>
        <p>
            <input type="submit" value="Calcular">
        </p>
    </form>
    <?php
     if(isset($_POST['operacao']) && isset($_POST['numberone']) && isset($_POST['numbertwo'])) {


    $n1 = $_POST['numberone'];
    $n2 = $_POST['numbertwo'];
    $operacao = $_POST['operacao'];

    if($operacao == "+"){
        $contador = 0;
        do{
            $result = $n1 + $n2;
            echo $result;
            echo " -- ";
            $contador++;
        } while ($contador < 10);
    }

    if($operacao == "-"){
        $contador = 0;
        do{
            $result = $n1 - $n2;
            echo $result;
            echo " -- ";
            $contador++;
        } while ($contador < 10);
    }

    if($operacao == "*"){
        $contador = 0;
        do{
            $result = $n1 * $n2;
            echo $result;
            echo " -- ";
            $contador++;
        } while ($contador < 10);
    }

    if($operacao == "/"){
        $contador = 0;
        do{
            $result = $n1 / $n2;
            echo $result;
            echo " -- ";
            $contador++;
        } while ($contador < 10);
    }
}

?>
    <br>
    <hr>
    <form action="guardadados.php" method="POST">
        <h3>Exercicio 3 - Livro de visitas</h3>
        <p>
            <label for="nome">Deixe seu nome: </label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>Nos mande uma mensagem:</label>
            <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
        </p>
        <p>
            <input type="submit" value="Enviar Mensagem">
        </p>
    </form>
    <?php
        //Verifica se existe o documento de texto
        if (file_exists("guardadados.txt")) {
            //Variável para receber o valor do documento de texto
            $entries = file("guardadados.txt");
            //Looping para verificar o documento e a mensagem, e mostrar a mensagem após isso 
            foreach ($entries as $entry) {
                echo $entry;
            }
        } else {
            echo "Nenhuma mensagem ainda.";
        }
    ?>
    <hr>
    <form action="cadastramento.php" method="POST">
        <h3>Exercicio 4 - Cadastro de usuário</h3>
        <p>
            <label for="nome">Usuário: </label>
            <input type="text" name="nome">
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email">
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="password" name="senha">
        </p>
        <p>
            <input type="submit" value="Enviar Mensagem">
        </p>
    </form>
    <?php
        //Verifica se existe o documento de texto
        if (file_exists("cadastro.txt")) {
            //Variável para receber o valor do documento de texto
            $entries = file("cadastro.txt");
            //Looping para verificar o documento e a mensagem, e mostrar a mensagem após isso 
            foreach ($entries as $entry) {
                echo $entry;
            }
        } else {
            echo "Nenhuma mensagem ainda.";
        }
    ?>
    <hr>
    <form action="randonsenha.php" method="POST">
        <h3>Exercicio 5 - Gerador de senhas aleatórias (parametros)</h3>
        <p>
            <label for="numeroCaracteres">Qual o comprimento da senha?</label>
            <input type="number" name="length" min="1" required>
        </p>
        <p>
            <label for="maiusculas">Conter letras maiúculas? <input type="checkbox" name="maiuscula"></label>
            
        </p>
        <p>
            <label for="minusculas">Conter letras minúsculas? <input type="checkbox" name="minuscula"></label>
            
        </p>
        <p>
            <label for="numero">Conter números? <input type="checkbox" name="number"></label>
            
        </p>
        <p>
            <label for="simbolos">Conter símbolos?  <input type="checkbox" name="simbolos"></label>
           
        </p>
        <p>
            <input type="submit" value="Conferir sua nova senha">
        </p>
    </form>
    <?php
        //Verifica se existe o documento de texto
        if (file_exists("novasenha.txt")) {
            //Variável para receber o valor do documento de texto
            $entries = file("novasenha.txt");
            //Looping para verificar o documento e a mensagem, e mostrar a mensagem após isso 
            foreach ($entries as $entry) {
                echo $entry;
            }
        } else {
            echo "Nenhuma mensagem ainda.";
        }
    ?>
    <hr>
    <form action="calculoimc.php" method="POST">
        <h3>Exercicio 4 - Calculadora de IMC (índice de massa corporal)</h3>
        <p>
            <label for="peso">Digite seu peso: </label>
            <input type="text" name="peso">
        </p>
        <p>
            <label for="email">Digite sua altura: </label>
            <input type="text" name="altura">
        </p>
        <p>
            <input type="submit" value="Descobrir meu IMC">
        </p>
    </form>
    <hr>
    <form action="pesoideal.php" method="POST">
        <h3>Exercicio 4 - Peso ideal</h3>
        <p>
            <label for="peso">Digite seu peso: </label>
            <input type="text" name="peso">
        </p>
        <p>
            <label for="email">Digite sua altura: </label>
            <input type="text" name="altura">
        </p>
        <p>
            <input type="submit" value="Descobrir meu peso ideal">
        </p>
    </form>
</body>
</html>