<?php
$tutu = "alma";
$fechita = date("Y-m-d  /  G:i:s");
$ingtoday = date("d");
$ingtoday2 = date("m");
$ingtoday3 = date("Y");
$fecho = date("Y-m-d  /  G:i");
    $feiyo = date("d/m/Y");
$feiyo2 = date("Y-m-d");
$fechidioy = date("d-m-Y");
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "fss.123**2017**");
define('DB_TABLE', "fss_almacen");

// The procedural way
$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_TABLE);

if (mysqli_connect_errno($mysqli)) {
    trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}
?>


