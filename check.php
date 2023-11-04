<?php

require('utils.php');
require('mobile_sa_number.php');


displyDebugInfo();

$result="";

$mobileNumber = new mobileSANumber();
echo $mobileNumber->check_number($_POST["number"]);











