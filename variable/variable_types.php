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
        $name = "Francis";
        $age = 15;
        $eyes = "bleux";
        $famille = array('John', 'Bertinant', 'Lasarius');
        $hungry = true;

        echo "<p> Mon nom est ". $name . "<p>"; 
        echo "<p> J'ai " . $age . " ans<p>";
        echo "<p> Mes yeux sont " . $eyes . "</p>";
        echo "<p> La première personne de ma famille est " . $famille[0] . "</p>";

    ?>
</body>
</html>