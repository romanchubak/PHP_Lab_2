<?php
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
       if($NameOfSubject!="" &&
        $NumberOfTerm !="" &&
        $CountOfHours !="" &&
        $FormOfControl !="" &&
        $FirstNameOfLector !="" &&
        $SecondNameOfLector != "") {
           $fp = fopen($filename, 'a+');
           fwrite($fp, $SecondNameOfLector . "\t" . $FirstNameOfLector . "\t".$CountOfHours."\t".$FormOfControl."\t".$NameOfSubject."\t".$NumberOfTerm."\n");
           fclose($fp);
           $data = array();

           if (filesize($filename)>0) {
               $file = fopen($filename, "r");
               while(!feof($file)) {
                   $line = fgets($file);
                   $data[] = explode("\t",$line);
               }
               fclose($file);
           }
    }
}
?>