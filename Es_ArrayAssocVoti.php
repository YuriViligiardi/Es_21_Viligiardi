<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo e voti</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>
    <?php
        $listCognomi = array("Viligiardi", "Ballerini", "Petrini") ;
        $listNome = array("Yuri", "Cosimo", "Giacomo");
        $s1 = array("cognome" => $listCognomi[0], "nome" => $listNome[0], "listVoti" => array(rand(2,10), rand(2,10), rand(2,10)));
        $s2= array("cognome" => $listCognomi[1], "nome" => $listNome[1], "listVoti" => array(rand(2,10), rand(2,10), rand(2,10)));
        $s3 = array("cognome" => $listCognomi[2], "nome" => $listNome[2], "listVoti" => array(rand(2,10), rand(2,10), rand(2,10)));

        $s1 = createList($s1);
        $s2 = createList($s2);
        $s3 = createList($s3);

        $listStudents = array($s1, $s2, $s3);
        createTable($listStudents);
        
        function createList($s){
            $media = 0;
            $votoMax = 0;
            echo "<ul>";
                //echo "<li>$s[cognome]</li>"; 
                //echo "<li>$s[nome]</li>";
                echo "<h2>" . $s["cognome"] . " " . $s["nome"] . "</h2>";
                echo "<li>Lista voti:";
                    echo "<ol>";
                        foreach ($s["listVoti"] as $key) {
                            echo "<li>$key</li>";
                            $media = $media + $key;
                            if ($key > $votoMax) {
                                $votoMax = $key;
                            }
                        }
                    echo "</ol>";
                echo "</li>";
            echo "</ul>";
            $media = $media / count($s["listVoti"]);
            $s["media"] = number_format($media,2);
            $s["votoMax"] = $votoMax;
            //echo "<span>La media dei voti è $media</span>";
            return $s;
        }
        
        function createTable($ls){
            echo "<table>";
                //intestazione della tabella
                echo "<tr>";
                    foreach ($ls[0] as $key => $value) {
                        if ($key != "listVoti") {
                            echo "<th>$key</th>";
                        }
                    }
                echo "</tr>";
                //singole righe degli studenti nella tabella
                for ($i=0; $i < 3; $i++) { 
                    echo "<tr>";
                        foreach ($ls[$i] as $key => $value) {
                            if ($key != "listVoti") {
                                echo "<td>$value</td>";
                            }
                        }
                    echo "</tr>";
                }
            echo "</table>";
        }
    ?>
</body>
</html>