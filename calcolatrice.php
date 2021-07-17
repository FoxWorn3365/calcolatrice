<?php
// Calcolatrice in PHP, by FoxWorn3365
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$do = $_GET["do"];

// Filtro le variabili
$num1 = filter_var($num1, FILTER_SANITIZE_NUMBER_INT);
$num2 = filter_var($num2, FILTER_SANITIZE_NUMBER_INT);

// Verifico che l'operazione contenuta in $do sia valida
if ($do != "+" && $do != "-" && $do != "x" && $do != ":") {
   // Ritorna una stringa in JSON
   die('{"status":400,"error":"L operazione NON e valida! Operazioni valide: +,-,x,:"}');
}

// Ora eseguo l'operazione
if ($do == "+") {
  $result = ($num1 + $num2);
} elseif ($do == "-") {
  $result = ($num1 - $num2);
} elseif ($do == "x") {
  $result = ($num1 * $num2);
} else {
  $result = ($num1 / $num2);
}

// Ecco che ho finito e ritorno con il risultato
die('{"status":200,"result":' .$result. '}');


