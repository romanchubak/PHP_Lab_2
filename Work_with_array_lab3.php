
<?php

include "readMyFileVariant18.php";
include "myBubbleSort.php";

$data = readMyFileVariant18("text.txt");

$lecturers = array();
if($data[0] != null )
{

    for( $i = 0;$i < count($data)-1; $i++)
    {
        $lecturers[$i] = $data[$i][1]." ".$data[$i][0];
    }

    $lecturers = array_unique($lecturers);
    $lecturers[]=count($lecturers);
    array_pop($data);
    usort($data,function($a,$b)
    {
        if($a[5]==$b[5]) return 0;
        return ($a[5]<$b[5])? -1:1;
    });
}


?>