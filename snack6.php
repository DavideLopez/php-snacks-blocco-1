<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->


<?php
 
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Snack6</title>
</head>
<body>
  <div class="gray container">
    <ul>
      <?php 
        for($i = 0; $i < count($db['teachers']); $i++) {
          $teacher = $db['teachers'][$i];
          ?>
          <li>
            <?php echo "{$teacher['name']} {$teacher['lastname']}"?>
          </li> 
          <?php
        }
      ?>
    </ul>
  </div>
  <div class="green container">
    <ul>
      <?php 
        for($i = 0; $i < count($db['pm']); $i++) {
          $student = $db['pm'][$i];
          ?>
          <li>
            <?php echo "{$student['name']} {$student['lastname']}"?>
          </li> 
          <?php
        }
      ?>
    </ul>
  </div>
  
</body>
</html>
