<html>
<body>
    <?php
    echo $_SERVER["SERVER_NAME"]; 
    echo $_SERVER["REMOTE_ADDR"];
    echo $_SERVER["SERVER_ADDR"];

    $legume = "aubergines";

switch($legume)
{
 case 'salade':
  echo'Vous avez acheté de la salade !';
  break;

 case 'Carotte':
  echo'Vous avez acheté de la Carotte !';
  break;

 case 'poivrons':
  echo'Vous avez acheté des poivrons!';
  break;

 case 'aubergines':
  echo'Vous avez acheté des aubergines!';
  break;

 default :
  echo 'Vous avez acheté un autre légume' ;
  break;
}
    ?>



</body>


</html>