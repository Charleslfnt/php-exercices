<html>
<body>
    <!--formulaire-->
<form action="fonctions01.php" method="POST">
<label for="chiffre1"></label><input type="text" name="chiffre1">Chiffre 1 </input>
<label for="chiffre2"></label><input type="text" name="chiffre2">Chiffre 2 </input>
<select name="Opérateur"> 
    <option value="+">Addition</option>
    <option value="-">Soustraction</option>
    <option value="*">Multiplication</option>
    <option value="/">Division</option>
</select> 
<button type="submit" id="submit" value="envoyer" class="btn btn-default">Envoyer</button>




</form>

<?php 




function calculator($chiffre1, $chiffre2,$resultat) //fonction
{

    $chiffre1 = $_POST["chiffre1"]; //recupère les chiffres
$chiffre2 = $_POST["chiffre2"];
$operator = $_POST["Opérateur"]; //récupère l'opérateur
$resultat = 0;

    switch ($operator) {
        case "+" : 
            $resultat = $chiffre1 + $chiffre2;
        break;
       
        case "-" :
            $resultat = $chiffre1 - $chiffre2;
            break;
    
        case "*" :
            $resultat = $chiffre1 * $chiffre2;
            break;
    
        case "/" :
            $resultat = $chiffre1 / $chiffre2;
            break;
        
    }
    echo$resultat;
}



?>







</body>
</html>