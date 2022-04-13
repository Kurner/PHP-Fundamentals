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

        // SHUFFLE TEXT
        $text = 'According to a researcher (sic) at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.';

        $textArr = explode(" ", $text);

        $textShuffle = [];

        foreach($textArr as $text)
        {
            $wordShuffle = str_shuffle($text);
            array_push($textShuffle, $wordShuffle);
            
        }

        $newText = implode(' ', $textShuffle);

        echo $newText;

        // CAPITLIZE FIRST LETTER
        function capitlizeFirstLetter($word)
        {
            // Conerti pour pouvoir mettre les accents en majuscule
            echo "<p>" . mb_convert_case($word, MB_CASE_TITLE, 'UTF-8') . "</p>";
        }

        
        capitlizeFirstLetter('élie');

        // DATES
        echo "<p>" . date('Y') . "</p>";

        echo "<p>" . date('Y M D h:i:s') . "</p>";

        // SUM NUMBERS
        function sum($a,$b)
        {
            if(!is_numeric($a) OR !is_numeric($b))
            {
                echo "<p> Entrer deux chiffre svp </p>";
            }
            else
            {
                echo "<p>".($a + $b)."</p>";
            }
        }

        sum(2,5);

        // ACRONYM
        function getAcronym($string)
        {
            $words = explode(' ', $string);
            foreach($words as $word)
            {
                $acronym .= $word[0];
            }
            echo "<p> L'acronyme du mot est : " . $acronym . "</p>";
        }

        getAcronym('In Code We Trust');


        // REPLACE LETTERS
        function replaceAE($string)
        {
            $stringChange = str_replace('ae', 'æ', $string);
            echo "<p>" . $stringChange . "</p>";
        }

        replaceAE('aetest');

        function replaceæ($string)
        {
            $stringChange = str_replace('æ', 'ae', $string);
            echo "<p>" . $stringChange . "</p>";
        }

        replaceæ('ætest');


        // RANDOM WORD
        function randomWord(){
            $length1 = rand(1, 5);
            $length2 = rand(7,15);
            $word1 = substr(str_shuffle("abcdefghijklmnopqrstuvw"),0,$length1);
            $word2 = substr(str_shuffle("abcdefghijklmnopqrstuvw"),0,$length2);
            echo "<p>" . $word1 . " " . $word2 ."</p>";
        }

        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
        {
            randomWord();
        }
    ?>

    <form action="functions.php" method="post">
        <input type="submit" name="someAction" value="GO" />
    </form>

    <?php 

        // LOWERCAPS
        function lowerCaps($string)
        {
            echo "<p>" . strtolower($string) . "</p>";
        }
       lowercaps('STOP YELLING I CAN\'T HEAR MYSELF THINKING!!');

       // VOLUME CONE
       function calculate_cone_volume($rayon, $hauteur)
       {
            echo "<p>Le volume du cone est de " . ($rayon * $rayon * (3.14) * $hauteur * (1/3)) . ' cm<sup>3</sup></p>';
       }

       calculate_cone_volume(5, 2); 
    ?>

</body>
</html>