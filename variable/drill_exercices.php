<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $room_is_filthy = true;
        
        $possible_states = ['healt hazard', 'filthy', 'dirty', 'clean', 'immaculate'];

        $room_filthiness = $possible_states[0];


        if( $room_filthiness == $possible_states[0]){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if( $room_filthiness == $possible_states[2]){
            echo "Yuk, Room is dirty : let's clean it up !";
        // ...
        } else {
            echo "<br>Nothing to do, room is neat.";
        }

        $now = time();
        $morningStart = "05:00:00";
        $morningEnd = "09:00:00";

        $dayStart = "09:01:00";
        $dayEnd = "12:00:00";

        $afternoonStart = "12:01:00";
        $afternoonEnd = "16:00:00";

        $eveningStart = "16:01:00";
        $eveningEnd = "21:00:00";

        $nightStart = "21:01:00";
        $nightEnd = "04:59:00";


        if(strtotime($morningStart) < $now && $now < strtotime($morningEnd))
        {
            echo "<p>Good morning !</p>";
        }
        else if (strtotime($dayStart) < $now && $now < strtotime($dayEnd))
        {
            echo "<p>Good day !</p>";
        }
        else if(strtotime($afternoonStart) < $now && $now < strtotime($afternoonEnd))
        {
            echo "<p>Good afternoon !</p>";
        }
        else if(strtotime($eveningStart) < $now && $now < strtotime($eveningEnd))
        {
            echo "<p>Good evening !</p>";
        }
        else if(strtotime($nightStart) < $now && $now < strtotime($nightEnd))
        {
            echo "<p>Good night !</p>";
        }
        echo (date("h:i:s A", $now));      
    ?>

    <form action="drill_exercices.php" method="get">
    <p>Votre âge : <input type="text" name="age" /></p>
    <p><input type="submit" value="OK"></p>
    </form>

    <?php 
        // Si les données "GET" ont été envoyées
        if (isset($_GET['age'])){
            // Form processing
            echo "<p>Tu as " . (int)$_GET['age'] . " ans<p>";
            
            if($_GET['age'] < 12)
            {
                echo "<p>Hello Kiddo !</p>";
            }
            else if ($_GET['age'] >= 12 && $_GET['age'] <= 18)
            {
                echo "<p>Hello Teenager !</p>";
            }
            else if ($_GET['age'] >= 18 && $_GET['age'] <= 115)
            {
                echo "<p>Hello adult !</p>";
            }
            else if ($_GET['age'] > 115)
            {
                echo "<p>Wow! Still alive ? Nice</p>";
            }
        }
    ?>

    <form action="drill_exercices.php" method="get">
            <input type="radio" name="Genre" value="Femme">Une femme
            <input type="radio" name="Genre" value="Homme">Un homme
            <input type="submit" value="Envoyer">
    </form>

    <?php 
       if($_GET["Genre"] == "Femme")
       {
           echo "<p>Votre place est à la cuisine !</p>";
       } 
       else if($_GET['Genre'] == "Homme")
       {
           echo "<p>Vous etes un homme ! HOURRA !</p>";
       }

       $note = 3;

       switch ($note){
           case 0 :
                echo "This work is really bad. What a dumb kid !";
                break;

            case 1 :
                echo "This work is really bad. What a dumb kid !";
                break;

            case 2 :
                echo "This work is really bad. What a dumb kid !";
                break;

            case 3 :
                echo "This work is really bad. What a dumb kid !";
                break;

            case 5 :
                echo "This is not sufficient. More studying is required.";
                break;
       };

       // TERNARY OPERATORS 

       $gender = "F";

       $hello = ($gender == 'M') ? "HELLO MY DUDE !": "HELLO MY GARLS !";

       echo $hello;

              
    ?>
</body>
</html>