<?php

function readMyFileVariant18($filename)
{
    $data= array();
    if (filesize($filename)>0) {
        $file = fopen($filename, "r");
        while(!feof($file)) {
            $line = fgets($file);
            $data[] = explode("\t",$line);
        }
        fclose($file);
    }
    return $data;
}


?>