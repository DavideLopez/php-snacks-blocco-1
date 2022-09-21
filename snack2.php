<?php
$name = $_GET['name'];
var_dump($name);

$age = $_GET['age'];
var_dump($age);

$mail = $_GET['mail'];
var_dump($mail);

if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail,'.')) {
  echo 'ACCESSO RIUSCITO';
}else {
  echo 'ACCESSO NEGATO';
}

?>