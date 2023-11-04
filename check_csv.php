<?php

require('utils.php');
require('mobile_sa_number.php');


displyDebugInfo();
ob_start();


var_dump($_FILES);
$tmpName = $_FILES['csv']['tmp_name'];

$outputArray=[];

$file  = fopen($tmpName,"r");

$mobileNumber = new mobileSANumber();
echo $mobileNumber->check_csv($file);











