<?php

$timeon1 = microtime(true);
function bubble($values)
{
    $tmp = 0;
    $ln = count($values);
    for ($i=0; $i<$ln;$i++)
    {
        for ($j=$ln-1;$j>$i;$j--)
            {
                if ($values[$j-1] > $values[$j]){

                    $values = swap($values, ($j-1), $j);
                }
            }
    }

    return $values;
}
usleep(1000);
$timeoff1 = microtime(true);
$bubbletime = sprintf('%.6f', $timeoff1 - $timeon1);

?>


