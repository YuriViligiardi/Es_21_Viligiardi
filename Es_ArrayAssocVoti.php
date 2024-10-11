<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo e voti</title>
</head>
<body>
    <?php
        $cognome = "Viligiardi";
        $nome = "Yuri";
        $listVoti = array(rand(2,10), rand(2,10), rand(2,10), rand(2,10));
        $student = array("cognome" => $cognome, "nome" => $nome, "listVoti" => $listVoti);
        createList($student);

        function createList($s){
            $media = 0;
            echo "<ul>";
                echo "<li>$s[cognome]</li>"; 
                echo "<li>$s[nome]</li>";
                echo "<li>Lista voti:";
                    echo "<ol>";
                        foreach ($s["listVoti"] as $key) {
                            echo "<li>$key</li>";
                            $media = $media + $key;
                        }
                    echo "</ol>";
                echo "</li>";
            echo "</ul>";
            $media = $media / count($s["listVoti"]);
            echo "<span>La media dei voti è $media</span>";
        }
    ?>
</body>
</html>