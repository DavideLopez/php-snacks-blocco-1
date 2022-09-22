<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
var_dump($name);

$age = $_GET['age'];
var_dump($age);

$mail = $_GET['mail'];
var_dump($mail);

if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail,'.')) {
  echo 'ACCESSO RIUSCITO!';
}else {
  echo 'ACCESSO NEGATO!';
}

?>