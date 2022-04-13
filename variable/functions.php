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

        function capitlizeFirstLetter($word)
        {
            // Conerti pour pouvoir mettre les accents en majuscule
            echo "<p>" . mb_convert_case($word, MB_CASE_TITLE, 'UTF-8') . "</p>";
        }

        capitlizeFirstLetter('élie');

        echo "<p>" . date('Y') . "</p>";

        echo "<p>" . date('Y M D h:i:s') . "</p>";

        function sum($a,$b)
        {
            if(is_numeric($a) )
            echo "<p>".($a + $b)."</p>";
        }

        sum(2,5);


    ?>
</body>
</html>