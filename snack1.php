<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php


$partite = [
    $partita,
    [
      'home' => 'cavaliers',
      'guest' => 'sixers',
      'homeScore' => 50,
      'guestScore' => 150,
    ],
    [
        'home' => 'raptors',
        'guest' => 'celtics',
        'homeScore' => 450,
        'guestScore' => 120,
    ],
    [
        'home' => 'dragons',
        'guest' => 'minions',
        'homeScore' => 830,
        'guestScore' => 570,
    ],
    [
        'home' => 'heat',
        'guest' => 'bulls',
        'homeScore' => 50,
        'guestScore' => 70,
    ]
];

?>

<ul>
    <?php 
    for ($i = 0; $i < count($partite); $i++) {
        $match =  $partite[$i];
     ?>
     <li>
        <?php 
          echo "{$match['home']} - {$match['guest']} | ";
        ?>
        <span>
            <?php 
            echo "{$match['homeScore']} - {$match['guestScore']}";
            ?>
        </span>
     </li> 
     <?php
    }
    ?>
</ul>