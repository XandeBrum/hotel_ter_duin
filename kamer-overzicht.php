<?php

require_once 'database.php';
$db = new database();

$geboekte_kamers = $db->select("SELECT COUNT(*) FROM reservering WHERE van = CURRENT_DATE");

$totale_kamers = $db->select("SELECT COUNT(*) FROM kamers");

foreach($geboekte_kamers as $geboek) {
    foreach($geboek as $geboekte) {

    }
}
foreach($totale_kamers as $totale) {
    foreach($totale as $totaal) {
        
    }
}
$beschikbare_kamers = $totaal - $geboekte;

echo "Totaal beschikbare kamers van vandaag = " . $beschikbare_kamers;


$act = $db->select("SELECT * 
FROM kamers
WHERE kamer_code NOT IN (SELECT kamer_code from reservering WHERE van = CURRENT_DATE)");


include 'table_generator/table_generator_kamers.php';

create_table($act, 'kamer');

?>
    <a href="log_out.php" class="btn btn-danger">Log Out</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
