<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
  [
    'name' => 'Valentino',
    'lastname' => 'Rossi',
    'vote' => [10,6,9,8,7,5,6]
  ],
  [
    'name' => 'Max',
    'lastname' => 'Biaggi',
    'vote' => [6,6,7,8,4,5,6]
  ],
  [
    'name' => 'Marc',
    'lastname' => 'Marquez',
    'vote' => [6,9,7,8,4,8,6]
  ],
  [
    'name' => 'Enea',
    'lastname' => 'Bastianini',
    'vote' => [6,7,7,5,4,5,6]
  ],
  [
    'name' => 'Fabio',
    'lastname' => 'Quartararo',
    'vote' => [7,6,7,8,4,5,7]
  ],
];

for ($i=0; $i < count($students) ; $i++) {
  $vote = $students[$i]['vote'];
  $name = $students[$i]['name'];
  $lastname = $students[$i]['lastname'];

  $media = array_sum($vote) / count($vote);

  echo "L'alunno ". $name ." " . $lastname . " ha una media di " . $media . "<br>";
  
}


?>