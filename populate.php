<?php

include "database.php";

$sql = "INSERT INTO medewerker VALUES (:medewerker_code, :medewerker_naam, :username, :password)";
$placeholder = [
    'medewerker_code'=> NULL,
    'medewerker_naam'=> 'medewerker',
    'username'=> 'medewerker',
    'password'=> password_hash('medewerker', PASSWORD_DEFAULT),
]; 

$sql_scnd = "INSERT INTO klant VALUES (:klant_code, :username, :password, :klant_naam, :adres, :plaats, :postcode, :telefoon)";
$placeholder2 = [
    'klant_code'=> NULL,
    'username'=> 'klant',
    'password'=> password_hash('klant', PASSWORD_DEFAULT),
    'klant_naam'=> 'test',
    'adres'=> 'test',
    'plaats'=> 'test',
    'postcode'=> 'test',
    'telefoon'=> 'test',
]; 

$db = new database();
$db->insert($sql, $placeholder);

$db = new database();
$db->insert($sql_scnd, $placeholder2);

?> 