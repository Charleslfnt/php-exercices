<html>
</body>
<?php



function calculator($a, $b)
  {
    $addition = $a+$b;
    $soustraction = $a - $b;
    $multiplication = $a*$b;
    $division = $a/$b;
    $retour = array($multiplication, $additions, $soustractions, $division);
    return $retour; //retourne les valeurs
  }
  $retour = calculator(12,10);

  echo "- multiplication : ".$retour[0]."<br>";
  echo "- additions : ".$retour[1]."<br>";
  echo "- soustractions : ".$retour[2]."<br>";
  echo "- division : ".$retour[3];


  ?>


</body>
  </html>