<?php

$timeon5  = microtime(true);
function selection($values)
{
    $ln = count($values);
    for ($i=0; $i<$ln;$i++)
    {
        for ($j = $i+1; $j<$ln; $j++)
        {
            if ($values[$i] > $values[$j])
            {
                $values = swap($values, $i,$j);
            }
        }
    }

    return $values;
}
usleep(1000);
$timeoff5 = microtime(true);
$selectiontime = sprintf('%.6f', $timeoff5 - $timeon5);


?>


