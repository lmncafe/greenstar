<?php

$tcode = $_GET['id'];


include 'zebradb/zebra.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('127.6.253.130', 'adminHK68l7y', 'Gy_1Xeuaw-Jr', 'express');


$db->query("DELETE FROM tdetails WHERE tid = '$tcode'");



print "Delete was successful";
?>