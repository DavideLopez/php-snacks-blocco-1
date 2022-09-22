<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
$text = "Si trovava scritto sù di essa. Io sono Ozymandias. Il Re dei Re. Se qualcuno vuole sapere. quanto grande io sia. e dove giaccio. Superi qualcuna delle mie imprese";
$newText = explode('.', $text);
?>

<h1>Ozymandias</h1>
<p><?= $text ?></p>


<?php 
for ( $i = 0; $i < count($newText); $i++) {
  $paragraph = $newText[$i];
  ?>
  <p>
    <?php 
      echo "$paragraph";
    ?>
  </p>
  <?php
}
?>
