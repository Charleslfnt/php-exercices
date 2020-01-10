<html>
<body>

<table><thead><tr></tr></thead></table>
    <?php
echo"<table><thead><tr><th></th>";  //appel d'un tableau html
    for ($i=0; $i<=12; $i++) {      //première lignée du tableau 
        echo"<th>".$i."</th>";      
    }
    echo"</thead></tr></tbody>"; //fermeture de la tete du tableau, de la rangée et l'autre truc je sais plus
   
    for($i=0; $i <=12; $i++) { //i va aller de 0 à 12
        echo"<tr><td>".$i."</td>";  //ouverture de tr/ ouverture de td avec i et fermeture de td
         for ($j=0; $j<=12; $j++){ // j va de 0 à 12
             echo"<td>".($i*$j)."</td>"; // ouverture de td avec les multi à l'intérieur
         }
         echo "</tr>"; //fermeture de tr
    }
    echo "</tbody></table>"; //fin du tableau
   
   
   ?>



</body>
</html>