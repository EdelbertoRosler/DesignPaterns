<?php
require_once "html/header.php";
require_once "html/buttons.php";
?>
<p><h2>O arquivo Main.php é o arquivo de teste</h2></p>
<p><h3>veja o projeto no <a href="https://github.com/EdelbertoRosler/DesignPaterns" target="_blank">github.</a></p>
<p>Para testar voçê pode usar o docker para subir um servidor utilizando o seguinte comando dentro da pasta Design Patterns:</h3></p>
<h3>``docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:8.0-apache``</h3>

Você pode verificar se o container está de pé, usando o comando do docker:
``docker ps -a``

Agora basta digitar em seu navegador: 
<h3>http://localhost:3000/</h3>

Alguns designs são baseados no seguinte reposiorio: https://github.com/DesignPatternsPHP/DesignPatternsPHP


<?php
require_once "html/footer.php";



