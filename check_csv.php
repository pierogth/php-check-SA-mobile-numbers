<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

var_dump($_FILES);
$tmpName = $_FILES['csv']['tmp_name'];
$csvAsArray = fgetcsv(fopen($tmpName,"r"));

print_r($csvAsArray);

foreach($csvAsArray as $line){

    $result="";

    //get the nuber typed by the user
    $number = $line;
    echo $number."\n";
    //check if is present +27 prefix, in case not, adding it 
    $lenght = strlen($number);
    echo $lenght;
   
    if($lenght==9){
        $number = "+27".$number;
    }elseif($lenght==11){
    echo "entrato11";
    $number="+".$number;
    
    }
    
    if( preg_match( "/^\+27[0-9]{9}$/", $number ) ){
        
        $result =  "Valid number";
      
      } else {
        
        $result = "Invalid number";
      
      }

      echo "\n".$result;
}











