<?php
    function doTable($arrayOfHeaders,$arrayOFValues)
    {
        $table="";
        if(is_array($arrayOfHeaders) && is_array($arrayOFValues))
        {
            $table.='<table border cellspacing="0"><thead><tr>';

            foreach($arrayOfHeaders as $column)
            {
                $table.='<th width="14%">'.$column.'</th>';
            }

            $table.='</tr></thead><tbody>';

            foreach ($arrayOFValues as $rows)
            {

                if (is_array($rows)&&$rows[0]!=null)
                {
                    $table .= '<tr>';

                    foreach ($rows as $value)
                    {
                        $table .= '<td align="center">' . $value . '</td>';
                    }
                    $table .= '</tr>';
                }
                else if(!is_array($rows)&& $rows!=null)
                {
                    $table .= '<tr>';
                    $table .= '<td align="center">' . $rows . '</td>';
                    $table .= '</tr>';
                }

            }
            $table .= '</tbody></table>';
        }
        return $table;
    }
?>