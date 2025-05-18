<?php

    function f1()
    {
        echo "F1 está antes da exceção"."<br/>";
    }

    function f2($int)
    {
        if(!is_int($int)){
            // throw é o comando necessário para criar uma função exception
            throw new Exception("O argumento não é do tipo esperado"); // "new" serve para instanciar classes
        } else {
            echo "F2 está na exceção";
        }

        f3();
    }

    function f3()
    {
        echo "F3 está depois da exceção";
    }

    f1();
    f2(int: 5.5);
    
?>

<?php

    function divisao($dividendo, $divisor)
    {
        try { // 
            
            if ($divisor == 0){
                throw new RangeException("O número não pode ser dividido por 0");
            }

            $resultado = $dividendo / $divisor;

            echo "O resultado é: " . $resultado;
            } catch (Exception $e) { // "catch" captura excessão quando o "try" rodar porém não tiver informações válidas
                echo "O número não pode ser dividido por 0"; 
                echo $e->getMessage(); // exibe a mensagem da excessão
            }
            finally{ // "finally" exibe se ocorrer do try não retornar excessão independente da exceção
                echo "<br/>Tratando as exceções"; 
            }
    }

    divisao(10,0);

?>
