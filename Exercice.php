<?php

$budget = 75;
$total = 100;

function pouvoirAchat($budget, $total) {
    return $budget >= $total;
}

    if (pouvoirAchat ($budget, $total)) {
        echo "Je peux payer";
    } else {
        echo "Je ne peux pas payer";
    }

var_dump(pouvoirAchat($budget ,$total));

?>

<form method="GET">
    <input type="number" name="nombre1">
    <input type="number" name="nombre2">

    <button type="submit">Calculer</button>
</form>

<?php



    if (isset($_GET["nombre1"]) 
        && isset($_GET["nombre2"])
        && is_numeric(($_GET["nombre1"]))
        && is_numeric(($_GET["nombre2"]))) {

    $nombre1 = $_GET["nombre1"];
    $nombre2 = $_GET["nombre2"];

    $somme = $nombre1 + $nombre2;
    
    echo $somme;
    }

    $students = [
        ["firstName" => "Basma", "lastName" => "IBN HAJAR"],
        ["firstName" => "Imane", "lastName" => "BSISS"],
        ["firstName" => "Sekou", "lastName" => "SYLLA"]
    ];

    $i = 1;

    foreach ($students as $student) {
        echo $i . " - ";
        echo $student["lastName"] . " " . $student["firstName"] . "<br>";
        $i++;

    }

?>


<script>

        let a = 2
        let b = 5

        function multiplier (a, b) {
            return a * b;
        }
        
        let resultat = multiplier(a, b);
            console.log(resultat);

</script>
