<?php

$timeon2 = microtime(true);
function counter($values)
{
    $ln = count($values);
    $index = array_fill(0, max($values)+1 ,0);
    $places = array_fill(1, $ln, 0);

    for ($i = 0; $i<$ln; $i++)
    {
        $index[$values[$i]]++;
    }

    for($i=1; $i<count($index); $i++)
    {
        $index[$i] = $index[$i] + $index[$i-1];
    }

    for ($i = 0; $i<$ln; $i++)
    {
        $places[$index[$values[$i]]] = $values[$i];
        $index[$values[$i]] = $index[$values[$i]]-1;
    }

    return $places;
}
usleep(1000);
$timeoff2 = microtime(true);
$countingtime = sprintf('%.6f', $timeoff2 - $timeon2);

?>


