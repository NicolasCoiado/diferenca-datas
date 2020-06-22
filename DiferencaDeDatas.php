<?php //Author:Nicolas Coiado;
    $data1 = $_GET['date1']; //Recebendo o primeiro valor do formulário de HTML;
    $data2 = $_GET['date2']; //Recebendo o segundo valor do formulário de HTML;

    $data1= explode('/', $data1); //Retirando todos os "/", para deixar a data1 no formato americano;
    $data2= explode('/', $data2); //Retirando todos os "/", para deixar a data2 no formato americano;

    $d1= strtotime("$data1[2]-$data1[1]-$data1[0]"); //Usando a função "strtotime" para transformar a data 1 em segundos;
    $d2= strtotime("$data2[2]-$data2[1]-$data2[0]"); //Usando a função "strtotime" para transformar a data 2 em segundos;

    $dataFinal= ($d2-$d1)/86400; //Convertendo o valor da diferença de segundos para dias;

    if($dataFinal<0) //Caso o valor seja negativo, ou seja, a data1 seja > que a data 2;
        $dataFinal= $dataFinal * -1; //Convertendo o valor para se tornar positivo;
    
    echo "A diferença das duas datas são $dataFinal dias" //Exibindo a diferença em dias.
?>