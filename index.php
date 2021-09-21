<?php
    //lendo o arquivo
    $text = file_get_contents('text.txt');

    //add um conteúdo no arquivo que está sendo lido
    /*
    OBS: note que, a variável text ela está sendo concatenada
         e ao mesmo tempo sendo atribuído um valor nela, que
         no caso é mais uma string
    */
    $text .= "\nBeltrano da Costa Farias";

    //escrevendo no arquivo
    file_put_contents('text.txt', $text);

    echo "Arquivo escrito com sucesso!";
?>