<?php
/*import class and functions required */
require('utils.php');
require('mobile_sa_number.php');


displyDebugInfo();
/* istanciate the class mobileSANubmer and call the method for check single number */
$mobileNumber = new mobileSANumber();
echo $mobileNumber->check_number($_POST["number"]);











