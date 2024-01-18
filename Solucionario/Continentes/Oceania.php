<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> OCEANÍA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("SYDNEY", "MELBOURNE", "BRISBANE"),
    array("AUCKLAND", "WELLINGTON", "CHRISTCHURCH", "HAMILTON"),
    array("PORT MORESBY", "LAE", "MADANG")
);

$Oceania = array(
    'AUSTRALIA' => array(
        'New South Wales' => array("SYDNEY", "NEWCASTLE", "WOLLONGONG"),
        'Queensland' => $cantones[1],
        'Victoria' => ["MELBOURNE", "GEELONG"],
        'Western Australia' => array("PERTH", "FREMANTLE", "BUNBURY")
    ),

    'NEW ZEALAND' => array(
        'North Island' => array("AUCKLAND", "WELLINGTON", "HAMILTON"),
        'South Island' => $cantones[1],
        'Chatham Islands' => ["WAITANGI", "KAIKOURA"],
        'Subantarctic Islands' => array("DUNEDIN", "INVERCARGILL", "BLUFF")
    ),

    'PAPUA NEW GUINEA' => array(
        'Papua Region' => array("PORT MORESBY", "LAE", "MADANG"),
        'Momase Region' => $cantones[1],
        'Highlands Region' => ["MT. HAGEN", "GOROKA"],
        'Islands Region' => array("ALOTAU", "KAVIENG", "MANUS")
    ),
);

?>

</body>

</html>
