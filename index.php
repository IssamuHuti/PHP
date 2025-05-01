<!-- para gerar o site precisa informar o "localhost" -->
<!-- se quiser abrir qualquer arquivo no navegador, informar "localhost/nomeArquivo.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "Curso na DIO";
        $numeros = 50;
        $cursos = array("JAVA", "PHP", "HTML", "PYTHON");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i:s");
    ?>
    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, sequi illum. Mollitia aliquid, itaque quos quas assumenda quo voluptas suscipit enim, nobis error quibusdam iste, ipsum laborum quae illum dolore?
        <?php
            print $string;
        ?>
    </h4>

    <h4>
        será informada núemros do tipo integer
        <?php
            echo $numeros;
        ?>
    </h4>

    <h4>
        Variável com array 
        <?php
            print_r($cursos);
            print_r($cursos[1]);
        ?>
    </h4>

    <h4>
        será informada data: 
        <?php
            echo $data;
        ?>
    </h4>

</body>
</html>
