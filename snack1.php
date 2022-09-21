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