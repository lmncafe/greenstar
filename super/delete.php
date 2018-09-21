<?php

$tcode = $_GET['id'];


include 'zebradb/zebra.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('mysql.hostinate.com', 'u923235092_green', 'pji85377', 'u923235092_green');


$db->query("DELETE FROM tdetails WHERE tid = '$tcode'");



print "Delete was successful";
?>