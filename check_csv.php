<?php
ob_start();
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

var_dump($_FILES);
$tmpName = $_FILES['csv']['tmp_name'];


$outputArray=[];

$file  = fopen($tmpName,"r");
                
$i=0;

while(!feof($file)){
    $csvAsArray = fgetcsv($file);
    $i++;
foreach($csvAsArray as $line){

    $result="";
    $action="";

    //get the nuber typed by the user
    $number = $line;
    echo $number."\n";
    //check if is present +27 prefix, in case not, adding it 
    $lenght = strlen($number);
    echo $lenght;
   
    if($lenght==9){
        $number = "+27".$number;
        $action="CORRECTED adding +27";
    }elseif($lenght==11){
    
    $number="+".$number;
    $action="CORRECTED adding just +";

    }
    
    if( preg_match( "/^\+27[0-9]{9}$/", $number ) ){
        
        $result =  "Valid number";
      
      } else {
        
        $result = "Invalid number";
      
      }

      echo "\n".$result;
      
      array_push($outputArray, array($number, $result, $action));
      
}
}
var_dump($outputArray);


echo "<script>
location='index.html';
</script>";

ob_clean();



$data=[];
// Create an array of data
foreach($outputArray as $line)
array_push($data, $line);

//var_dump($data);
// Open a file handle for writing
$fp = fopen('data.csv', 'w');

// Write the data to the file
foreach ($data as $row) {
  fputcsv($fp, $row);
}

// Close the file handle
fclose($fp);


// download file
header('Content-type: text/csv');
header('Content-disposition:attachment; filename="data.csv"');
readfile("data.csv");









