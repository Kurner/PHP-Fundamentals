<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="excuse.php" method="post">
        <p>Nom de l'enfant : <input type="text" name="nomEnfant" /></p>
        <p>Sexe de l'enfant : 
                <input type="radio" name="Genre" value="femme">Une femme
                <input type="radio" name="Genre" value="homme">Un homme</p>
                <p>Nom du professeur : <input type="text" name="nomProf"></p>
                <p>Raison de l'absence :
                    <p><input type="radio" name="raison" value="maladie">Maladie</p>
                    <p><input type="radio" name="raison" value="mort d'un animal de compagnie">Mort d'un animal de compagnie</p>
                    <p><input type="radio" name="raison" value="poussée d'acnée">Poussée d'acnée</p>
                    <p><input type="radio" name="raison" value="full flemme en vrai">Full flemme en vrai</p>
        <input type="submit" value="OK"></p>
        </p>
    </form>

    <?php 
        
        if (isset($_POST['nomEnfant']) && isset($_POST["Genre"]) && isset($_POST["nomProf"]) && isset($_POST["raison"])) 
        {
            echo "<p>" . $_POST['nomEnfant'] . " , " . $_POST["Genre"] . ", éléve de " . $_POST["nomProf"] . " est absent(e) pour cause de " . $_POST["raison"] . "</p>";         

            switch ($_POST["raison"])
            {
                case "maladie" :
                    echo "Veuillez pardonner l'absence de mon enfant mais l'étron que j'ai trouvé dans mes toilettes m'inquiéte à propos de sa santé !";
                    break;

                case "mort d'un animal de compagnie" : 
                    echo "Veuillez excuser l'absence de mon enfant mais j'ai écrasé son animal de compagnie favori, sorry mdr";
                    break;

                case "poussée d'acnée" :
                    echo "Mon enfant sera absent ajd, sauf si vous aviez prévu de repeindre les murs avec son pu lol";
                    break;
                
                case "full flemme en vrai" :
                    echo "C'est qu'un petit con.";
                    break;
            }
        }

    ?>

</body>
</html>