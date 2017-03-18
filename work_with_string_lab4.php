<?php
include "readMyFileVariant18.php";

$subjects = array();
if(isset($_POST["button_for_lab4"])) {
    $myString = $_POST["string_for_lab4"];
    $data = readMyFileVariant18("text.txt");

    if ($data[0] != null)
    {
        for($i = 0; $i < count($data)-1; $i++)
        {
            if(mb_strstr($data[$i][4],$myString))
                $subjects[] = $data[$i];

        }
    }
}

?>