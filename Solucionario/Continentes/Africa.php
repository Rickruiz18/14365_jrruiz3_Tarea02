
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> ÁFRICA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("DAR ES SALAAM", "KIGALI", "ADDIS ABABA"),
    array("CAIRO", "CASABLANCA", "ACCRA", "KINSHASA"),
    array("JOHANNESBURG", "NAIROBI", "LAGOS")
);

$Africa = array(
    'TANZANIA' => array(
        'Dar es Salaam' => array("DAR ES SALAAM", "ARUSHA", "MBEYA"),
        'Arusha' => $cantones[0],
        'Mwanza' => ["MWANZA"],
        'Dodoma' => array("DODOMA", "IRINGA", "MOROGORO")
    ),

    'EGIPTO' => array(
        'Cairo' => array("CAIRO", "ALEXANDRIA", "LUXOR"),
        'Alexandria' => $cantones[1],
        'Luxor' => ["LUXOR"],
        'Aswan' => array("ASWAN", "EDFU", "KOM OMBO")
    ),

    'SUDÁFRICA' => array(
        'Gauteng' => array("JOHANNESBURG", "PRETORIA", "SOWETO"),
        'Cabo Occidental' => $cantones[2],
        'KwaZulu-Natal' => ["DURBAN", "PIETERMARITZBURG"],
        'Limpopo' => array("POLOKWANE", "TZANEEN", "MOKOPANE")
    ),
);

?>

</body>

</html>
