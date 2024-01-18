<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> ASIA </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("TOKYO", "BEIJING", "BANGKOK"),
    array("NEW DELHI", "MUMBAI", "BANGALORE", "KOLKATA"),
    array("BEIJING", "SHANGHAI", "HONG KONG")
);

$Asia = array(
    'JAPÓN' => array(
        'Kanto' => array("TOKYO", "YOKOHAMA", "CHIBA"),
        'Kansai' => $cantones[1],
        'Chubu' => ["NAGOYA"],
        'Tohoku' => array("SENDAI", "AOMORI", "AKITA")
    ),

    'INDIA' => array(
        'North' => array("NEW DELHI", "JAIPUR", "LUCKNOW"),
        'West' => $cantones[1],
        'South' => ["BANGALORE", "CHENNAI"],
        'East' => array("KOLKATA", "BHUBANESWAR", "GUWAHATI")
    ),

    'CHINA' => array(
        'North' => array("BEIJING", "TIANJIN", "SHIJIAZHUANG"),
        'East' => $cantones[1],
        'South' => ["GUANGZHOU", "SHENZHEN"],
        'West' => array("CHENGDU", "CHONGQING", "XI'AN")
    ),
);

?>

</body>

</html>
