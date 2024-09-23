<?php
    /*

             !!!!! CÓDIGO QUE EU HAVIA FEITO ANTES E PEDI PARA O CHAT CONSERTAR !!!!!


        if(empty($_POST['maiuscula']) && ($_POST['minuscula']) && ($_POST['number'])) 
    
    {
        
        $caracteres = '';
        if ($caracteres === '') {
            echo "Por favor, selecione pelo menos um tipo de caractere.";
            exit;
        }

    } else if(!empty($_POST['maiuscula']) && ($_POST['minuscula'])  && ($_POST['number'])) 
    
    {

        $length = intval($_POST['length']);
        $maiuscula = $_POST['maiuscula'];
        $minuscula = $_POST['minuscula'];
        $number = $_POST['number'];
    

        $caracteres = '';
        if($maiuscula) {
            $caracteres .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if($minuscula){
            $caracteres .= 'abcdefghijklmnopqrstuvwxyz';
        }
        if($number){
            $caracteres .= '0123456789';
        }

        

        function gerarSenha($length, $caracteres) {
            $password = '';
            $caracteresMaximos = strlen($caracteres) - 1;
            for ($i = 0; $i < $length; $i++) {
                $result = random_int(0, $caracteresMaximos);
                $password = $password . $caracteres[$result];
            }
            return $password;
        }
        $password =  gerarSenha($length, $caracteres);
        

        //Utiliza-se fopen para abrir o arquivo desejado/Criar o arquivo caso ele não existir (documento de texto)
        $file = fopen("novasenha.txt", "a");
        if ($file) {
            //Cria uma variavel para os dados pedidos
            $dados = "Sua nova senha é: ".htmlspecialchars($password)."<br>---<br>";
            //Escreve os dados pedidos no documento
            fwrite($file, $dados);
            //Fechar o arquivo
            fclose($file);
            echo "Senha alterada com sucesso!<br><br>";
        } else {
            echo "Erro ao abrir o arquivo!<br><br>";
        }

    } */

        // Inicializa a variável de caracteres como string vazia
        $caracteres = '';

        // Verifica se pelo menos um tipo de caractere foi selecionado
        if (empty($_POST['maiuscula']) && empty($_POST['minuscula']) && empty($_POST['number']) && empty($_POST['simbolos'])) 
        {
            echo "Por favor, selecione pelo menos um tipo de caractere.";
            exit;

        } else {
            // Obtém o comprimento da senha do formulário e converte para inteiro
            $length = intval($_POST['length']);
            
            // Verifica quais tipos de caracteres foram selecionados e adiciona ao conjunto de caracteres
            if (!empty($_POST['maiuscula'])) {
                $caracteres .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }
            if (!empty($_POST['minuscula'])) {
                $caracteres .= 'abcdefghijklmnopqrstuvwxyz';
            }
            if (!empty($_POST['number'])) {
                $caracteres .= '0123456789';
            }
            if (!empty($_POST['simbolos'])) {
                $caracteres .= '!@^~&*_:,.?';
            }

            // Função para gerar a senha aleatória
            function gerarSenha($length, $caracteres) 
            {
                $password = ''; // Inicializa a variável de senha como string vazia
                $indiceMaximo = strlen($caracteres) - 1; // Calcula o índice máximo dos caracteres
                for ($i = 0; $i < $length; $i++) //Laço de repetição que vai gerar os caracteres de acordo com o compprimento pedido.
                {
                    $result = random_int(0, $indiceMaximo); // Gera um índice aleatório
                    $password .= $caracteres[$result]; // Adiciona o caractere correspondente à senha
                }
                return $password; // Retorna a senha gerada
            }

            // Gera a senha utilizando a função definida
            $password = gerarSenha($length, $caracteres);

            // Abre (ou cria) o arquivo "novasenha.txt" para escrita
            $file = fopen("novasenha.txt", "a");
            if ($file) {
                // Cria uma variável com os dados da nova senha
                $dados = "Sua nova senha é: " . htmlspecialchars($password) . "<br>---<br>";
                // Escreve os dados no arquivo
                fwrite($file, $dados);
                // Fecha o arquivo
                fclose($file);
                echo "Senha alterada com sucesso!<br><br>";
                echo "<a href='index.php'>Voltar</a>";
            } else {
                echo "Erro ao abrir o arquivo!<br><br>";
            }

        }
    
?>
<a href=""></a>

