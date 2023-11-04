<?php
/*import class and functions required */
require('utils.php');
require('mobile_sa_number.php');


displyDebugInfo();
//this function is needed to keep clean the output for CSV file
ob_start();

$tmpName = $_FILES['csv']['tmp_name'];

$outputArray=[];

$file  = fopen($tmpName,"r");
/* istanciate the class mobileSANubmer and call the method for check CSV */
$mobileNumber = new mobileSANumber();
echo $mobileNumber->check_csv($file);











