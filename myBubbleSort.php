<?php
    function myBubbleSort($arr)
    {
        if (is_array($arr) )
        {

            for ($i = 0; $i < count($arr); $i++)
            {
                for ($j = 0; $j < count($arr)-$i-2; $j++)
                {

                    if ($arr[$j][5] > $arr[$j+1][5]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
        }
        return $arr;
    }
?>