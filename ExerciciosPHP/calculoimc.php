<?php
    if(empty($_POST['peso']) && empty($_POST['altura'])){
        echo "Digite seu peso e sua altura, por favor! ";

    } else if(!empty($_POST['peso']) && !empty($_POST['altura'])) {

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $calculo = ($peso/($altura**2));

        echo "<div class='box'>"
        .
        round($calculo,2)
        .
        "</div>"
        .
        "</br></br>";


        if($calculo <= 17){
    ?>
        <style>
            #result1 {
                background-color: #eceac9;
            }
        </style>
    <?php
        echo '
                <h2>Tabela de resultados IMC</h2>
                    <table>
                        <tr id="titulo">
                            <th>Resultado</th>
                            <th>Situação</th>
                        </tr>
                        <tr id="result1">
                            <td>Abaixo de 17</td>
                            <td>Muito abaixo do peso</td>
                        </tr>
                        <tr id="result2">
                            <td>Entre 17 e 18,49</td>
                            <td>Abaixo do peso</td>
                        </tr>
                        <tr id="result3">
                            <td>Entre 18,5 e 24,99</td>
                            <td>Peso normal</td>
                        </tr>
                        <tr id="result4">
                            <td>Entre 25 e 29,99</td>
                            <td>Acima do peso</td>
                        </tr>
                        <tr id="result5">
                            <td>Entre 30 e 34,99</td>
                            <td>Obesidade I</td>
                        </tr>
                        <tr id="result6">
                            <td>Entre 35 e 39,99</td>
                            <td>Obesidade II (severa)</td>
                        </tr>
                        <tr id="result7">
                            <td>Acima de 40</td>
                            <td>Obesidade III (mórbida)</td>
                        </tr>
                    </table>
            
            ';
        }
    ?>
<?php
        if($calculo > 17 && $calculo <= 18.49){
            ?>
            <style>
                #result2 {
                    background-color: #eceac9;
                }
            </style>
            <?php
                echo '
                        <h2>Tabela de resultados IMC</h2>
                            <table>
                                <tr id="titulo">
                                    <th>Resultado</th>
                                    <th>Situação</th>
                                </tr>
                                <tr id="result1">
                                    <td>Abaixo de 17</td>
                                    <td>Muito abaixo do peso</td>
                                </tr>
                                <tr id="result2">
                                    <td>Entre 17 e 18,49</td>
                                    <td>Abaixo do peso</td>
                                </tr>
                                <tr id="result3">
                                    <td>Entre 18,5 e 24,99</td>
                                    <td>Peso normal</td>
                                </tr>
                                <tr id="result4">
                                    <td>Entre 25 e 29,99</td>
                                    <td>Acima do peso</td>
                                </tr>
                                <tr id="result5">
                                    <td>Entre 30 e 34,99</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr id="result6">
                                    <td>Entre 35 e 39,99</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr id="result7">
                                    <td>Acima de 40</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                            </table>
                    
                    ';
                }
    ?>

<?php
        if($calculo >= 18.5 && $calculo <= 24.99){
            ?>
            <style>
                #result3 {
                    background-color: #eceac9;
                }
            </style>
            <?php
                echo '
                        <h2>Tabela de resultados IMC</h2>
                            <table>
                                <tr id="titulo">
                                    <th>Resultado</th>
                                    <th>Situação</th>
                                </tr>
                                <tr id="result1">
                                    <td>Abaixo de 17</td>
                                    <td>Muito abaixo do peso</td>
                                </tr>
                                <tr id="result2">
                                    <td>Entre 17 e 18,49</td>
                                    <td>Abaixo do peso</td>
                                </tr>
                                <tr id="result3">
                                    <td>Entre 18,5 e 24,99</td>
                                    <td>Peso normal</td>
                                </tr>
                                <tr id="result4">
                                    <td>Entre 25 e 29,99</td>
                                    <td>Acima do peso</td>
                                </tr>
                                <tr id="result5">
                                    <td>Entre 30 e 34,99</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr id="result6">
                                    <td>Entre 35 e 39,99</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr id="result7">
                                    <td>Acima de 40</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                            </table>
                    
                    ';
                }
    ?>

<?php
        if($calculo >= 25 && $calculo <= 29.99){
            ?>
            <style>
                #result4 {
                    background-color: #eceac9;
                }
            </style>
            <?php
                echo '
                        <h2>Tabela de resultados IMC</h2>
                            <table>
                                <tr id="titulo">
                                    <th>Resultado</th>
                                    <th>Situação</th>
                                </tr>
                                <tr id="result1">
                                    <td>Abaixo de 17</td>
                                    <td>Muito abaixo do peso</td>
                                </tr>
                                <tr id="result2">
                                    <td>Entre 17 e 18,49</td>
                                    <td>Abaixo do peso</td>
                                </tr>
                                <tr id="result3">
                                    <td>Entre 18,5 e 24,99</td>
                                    <td>Peso normal</td>
                                </tr>
                                <tr id="result4">
                                    <td>Entre 25 e 29,99</td>
                                    <td>Acima do peso</td>
                                </tr>
                                <tr id="result5">
                                    <td>Entre 30 e 34,99</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr id="result6">
                                    <td>Entre 35 e 39,99</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr id="result7">
                                    <td>Acima de 40</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                            </table>
                    
                    ';
                }
    ?>

<?php
        if($calculo >= 30 && $calculo <= 34.99){
            ?>
            <style>
                #result5 {
                    background-color: #eceac9;
                }
            </style>
            <?php
                echo '
                        <h2>Tabela de resultados IMC</h2>
                            <table>
                                <tr id="titulo">
                                    <th>Resultado</th>
                                    <th>Situação</th>
                                </tr>
                                <tr id="result1">
                                    <td>Abaixo de 17</td>
                                    <td>Muito abaixo do peso</td>
                                </tr>
                                <tr id="result2">
                                    <td>Entre 17 e 18,49</td>
                                    <td>Abaixo do peso</td>
                                </tr>
                                <tr id="result3">
                                    <td>Entre 18,5 e 24,99</td>
                                    <td>Peso normal</td>
                                </tr>
                                <tr id="result4">
                                    <td>Entre 25 e 29,99</td>
                                    <td>Acima do peso</td>
                                </tr>
                                <tr id="result5">
                                    <td>Entre 30 e 34,99</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr id="result6">
                                    <td>Entre 35 e 39,99</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr id="result7">
                                    <td>Acima de 40</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                            </table>
                    
                    ';
                }
    ?>

<?php
        if($calculo >= 35 && $calculo <= 39.99){
            ?>
            <style>
                #result6 {
                    background-color: #eceac9;
                }
            </style>
            <?php
                echo '
                        <h2>Tabela de resultados IMC</h2>
                            <table>
                                <tr id="titulo">
                                    <th>Resultado</th>
                                    <th>Situação</th>
                                </tr>
                                <tr id="result1">
                                    <td>Abaixo de 17</td>
                                    <td>Muito abaixo do peso</td>
                                </tr>
                                <tr id="result2">
                                    <td>Entre 17 e 18,49</td>
                                    <td>Abaixo do peso</td>
                                </tr>
                                <tr id="result3">
                                    <td>Entre 18,5 e 24,99</td>
                                    <td>Peso normal</td>
                                </tr>
                                <tr id="result4">
                                    <td>Entre 25 e 29,99</td>
                                    <td>Acima do peso</td>
                                </tr>
                                <tr id="result5">
                                    <td>Entre 30 e 34,99</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr id="result6">
                                    <td>Entre 35 e 39,99</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr id="result7">
                                    <td>Acima de 40</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                            </table>
                    
                    ';
                }
    ?>

<?php
        if($calculo >= 40){
            ?>
            <style>
                #result7 {
                    background-color: #eceac9;
                }
            </style>
            <?php
                echo '
                        <h2>Tabela de resultados IMC</h2>
                            <table>
                                <tr id="titulo">
                                    <th>Resultado</th>
                                    <th>Situação</th>
                                </tr>
                                <tr id="result1">
                                    <td>Abaixo de 17</td>
                                    <td>Muito abaixo do peso</td>
                                </tr>
                                <tr id="result2">
                                    <td>Entre 17 e 18,49</td>
                                    <td>Abaixo do peso</td>
                                </tr>
                                <tr id="result3">
                                    <td>Entre 18,5 e 24,99</td>
                                    <td>Peso normal</td>
                                </tr>
                                <tr id="result4">
                                    <td>Entre 25 e 29,99</td>
                                    <td>Acima do peso</td>
                                </tr>
                                <tr id="result5">
                                    <td>Entre 30 e 34,99</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr id="result6">
                                    <td>Entre 35 e 39,99</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr id="result7">
                                    <td>Acima de 40</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                            </table>
                    
                    ';
                }
    ?>

<?php
}
?>


