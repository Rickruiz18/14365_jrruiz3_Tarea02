<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> EUROPA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("MADRID", "BARCELONA", "VALENCIA"),
    array("PARÍS", "MARSELLA", "LYON", "NIZA"),
    array("ROMA", "MILÁN", "NÁPOLES")
);

$Europa = array(
    'ESPAÑA' => array(
        'Comunidad de Madrid' => array("MADRID", "BARCELONA", "VALENCIA"),
        'Cataluña' => $cantones[1],
        'Comunidad Valenciana' => ["VALENCIA"],
        'Andalucía' => array("SEVILLA", "MÁLAGA", "GRANADA"),
        'Galicia' => array("SANTIAGO DE COMPOSTELA", "A CORUÑA")
    ),

    'FRANCIA' => array(
        'Île-de-France' => array("PARÍS", "MARSELLA", "LYON", "NIZA"),
        'Provenza-Alpes-Costa Azul' => $cantones[1],
        'Lacio' => ["ROMA"],
        'Bretaña' => array("RENNES", "BREST", "VANNES")
    ),

    'ITALIA' => array(
        'Lacio' => array("ROMA", "MILÁN", "NÁPOLES"),
        'Lombardía' => $cantones[1],
        'Véneto' => ["VENECIA", "VERONA"]
    ),
);

?>

</body>

</html>