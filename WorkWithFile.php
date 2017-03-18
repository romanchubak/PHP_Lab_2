<?php
include  "readMyFileVariant18.php";

$filename = "text.txt";
$data=null;
$NameOfSubject = "";
$NumberOfTerm ="";
$CountOfHours = "";
$FormOfControl ="";
$FirstNameOfLector="";
$SecondNameOfLector="";

if(isset($_POST["Add"])){
    $NameOfSubject=$_POST["NameOfSubject"];
    $NumberOfTerm = $_POST["NumberOfTerm"];
    $CountOfHours = $_POST["CountOfHours"];
    $FormOfControl = $_POST["FormOfControl"];
    $FirstNameOfLector = $_POST["FirstNameOfLector"];
    $SecondNameOfLector = $_POST["SecondNameOfLector"];
       if($NameOfSubject!="" && ctype_alpha($NameOfSubject)&&
        $NumberOfTerm !="" && is_numeric($NumberOfTerm)&&
        $CountOfHours !="" && is_numeric($CountOfHours) &&
        $FormOfControl !="" &&  ctype_alpha($FormOfControl)&&
        $FirstNameOfLector !="" && ctype_alpha($FirstNameOfLector)&&
        $SecondNameOfLector != ""&& ctype_alpha($SecondNameOfLector)) {
           $fp = fopen($filename, 'a+');
           fwrite($fp, $SecondNameOfLector . "\t" . $FirstNameOfLector . "\t" . $CountOfHours . "\t" . $FormOfControl . "\t" . $NameOfSubject . "\t" . $NumberOfTerm . "\n");
           fclose($fp);
           $data = array();
           $data = readMyFileVariant18($filename);
       }
}
$data = array();
$data = readMyFileVariant18($filename);
?>