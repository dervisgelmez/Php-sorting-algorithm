<?php

$timeon3 = microtime(true);
function insertion($values)
{
    $ln =count($values);
    $next=null;
    for($i=1; $i<$ln ; $i++)
    {
        $next=$values[$i];
        for($j=$i-1; $j>=0; $j--)
        {
            if( $values[$j]>$next )
            {
                $values[$j+1]=$values[$j];
            }
            else
            {
                break;
            }
        }
        $values[$j+1]=$next;

    }

    return $values;
}
usleep(1000);
$timeoff3 = microtime(true);
$insertiontime = sprintf('%.6f', $timeoff3 - $timeon3);

?>