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
        $arrayTest = array('zizi', 'coin coin', 'pamplemousse', 'JCVD');

        print_r($arrayTest);
    ?>

    <p>ZIM ZAM ZOUM</p>

    <?php
        var_dump($arrayTest);
    ?>

    <p>ZIM ZAM ZOUM</p>

    <?php
        $me = array(
            'firstname' => "Patrick",
            'lastname' => "Johnson",
            'age' => 15,
            'ville' => "Jean-E-Rienafoutre",
        );

        
    ?>

    <p> ZIM ZAM ZOUM </p>

    <?php 
        $me['hobbies'] = array("Video", "Games", "Women", "mdr");

        $mother = array(
            'firstname' => "Jean",
            'lastname' => "Johnson",
            'age' => 599,
            'ville' => "Jean-E-Rienafoutre",
            'hobbies' => array('fils', 'pere', 'vaiselle', 'sorrylol', 'un5éme')
        );

        $me['motherStat'] = $mother;

        // Methode 1 pour ajouter un élément dans un array
        // $me['hobbies'][] = 'Taxidermy';
        
        // Methode 2 pour ajouter un élément dans un array
        array_push($me['hobbies'], "Taxidermy");
        
        // Remplace le contenu de lastname
        $me['lastname'] = 'Picolo';

        echo '<pre>';
        print_r($me);
        echo '</pre>';

        echo "<p>L'enfant a " . (count($me['hobbies'])) . ' hobbies.</p>';

        echo "<p>La mère a " . (count($me['motherStat']['hobbies'])) . " hobbies.</p>";

        echo "<p>Le total de hobbies dans le tableau est de " . (count($me['hobbies']) + count($me['motherStat']['hobbies'])) . " !</p>";

        $soulmate = array(
            'firstname' => "Jacqueline",
            'lastname' => "Esquimo",
            'age' => 21,
            'ville' => "Jean-E-Quelechoseafoutremdr",
            'hobbies' => array('homme', 'Video', 'Games', 'sorrylol', 'un5émeMaispalaMer')
        );

        $filsIntersection = array_intersect($me['hobbies'], $soulmate['hobbies']);


        echo '<pre>';
        print_r($filsIntersection);
        echo '</pre>';

        $filsFusion = array_merge($me['hobbies'], $soulmate['hobbies']);

        echo '<pre>';
        print_r($filsFusion);
        echo '</pre>';

        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

        foreach($pronouns as $pronoun )
        {
            if($pronoun == "He/She")
            {
                echo "<p>".$pronoun." codes</p>";
            }
            else
            {
                echo "</p>".$pronoun." code</p>";
            }
        }

        $i = 1;

        while($i <= 120)
        {
            echo $i . " ";
            $i++;
        }

        for($j = 1; $j <= 120; $j++)
        {
            echo $j . " ";
        }

    $countries = array('BE' => 'Belgique', 'FR' => 'France', 'DE' => 'Allemagne','IT' => 'Italie', 'PT' => 'Portugal', 'ES' => 'Espagne', 'HR' => 'Croatie', 'RU' => 'Russie', 'UA' => 'Ukraine', 'CH' => 'Suisse');
    ?>

    <p>SELECT BOX</p>

    <select name="countrie" id="countrie">
        <?php 
            foreach($countries as $key => $value)
            {
                echo '<option value='.$key.'>' . $value . '</option>';
            }
        ?>
    </select>
</body>
</html>