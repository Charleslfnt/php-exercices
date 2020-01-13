<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
 
    <title>Calculatrice façon Fodé</title>
</head>
<div class="conntainer">
<div class="box">
    <div class="container is-full">
    <h3>Magnifique calculatrice pour Fodé</h3>

    <form name="calculatrice" method="POST" action="../fonctions/calculator.php">

    <p>premier chiffre : <input name ="chiffre1" id="number1" type="text" ></p>
    <p>deuxième chiffre : <input name="chiffre2" id="number2" type="text"></p>


    <select name="opérateur" id="opé">
        <option value="addition"> + </option>
        <option value="soustration"> - </option>
        <option value="multiplication"> * </option>
        <option value="division"> / </option>
    </select>

    <br><br>

    <input type="submit" class="button is-primary" value="calculer">
    <input type="reset" class="button is-danger" value="annuler"><br>
    </form>
</div>
</div>
<body>
    
</body>
</html>