<?php
file_put_contents("testeput.txt", "Dentro do PHP", FILE_APPEND);

$file = fopen("teste2.txt", "a+");
fwrite($file, "Modo dificil");
fclose($file);
?>