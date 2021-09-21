<?php
    $nome = 'Fulano da Silva';

    /*o file_put_contents: cria um novo arquivo com o conteúdo passado
      caso o arquivo já exista, ele vai apenas substituir o texto que já
      estava anteriormente
    */
    file_put_contents('nome.txt', $nome);

    echo 'Arquivo criado com sucesso!';
?>