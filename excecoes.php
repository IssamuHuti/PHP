<?php

    function f1()
    {
        echo "F1 está antes da exceção"."<br/>";
    }

    function f2($int)
    {
        if(!is_int($int)){
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
        try {
            
            if ($divisor == 0){
                throw new RangeException("O número não pode ser dividido por 0");
            }

            $resultado = $dividendo / $divisor;

            echo "O resultado é: " . $resultado;
            }catch(Exception){
                echo "O número não pode ser dividido por 0"; // "catch" informa quando o "try" não der certo
            }
            finally{
                echo "<br/>Tratando as exceções"; // "finally" exibe independente da exceção
            }
    }

    divisao(10,0);

?>