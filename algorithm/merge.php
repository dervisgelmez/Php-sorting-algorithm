<?php

$timeon4 = microtime(true);
function merge($values)
{
    if(count($values)>1)
    {
        $middle  = round(count($values)/2);
        $left    = merge(array_slice($values, 0, $middle));
        $right   = merge(array_slice($values, $middle, count($values)));

        $left    = merge($left);
        $right    = merge($right);


        return mergeSlice($left, $right);
    }

    return $values;

}

function mergeSlice($l, $r)
{
    $merge = array();
    $lIndex=0;
    $rIndex=0;

    while($lIndex<count($l) && $rIndex<count($r))
    {
        if($l[$lIndex]>$r[$rIndex])
        {

            $merge[]=$r[$rIndex];
            $rIndex++;
        }
        else
        {
            $merge[]=$l[$lIndex];
            $lIndex++;
        }
    }
    while($lIndex<count($l))
    {
        $merge[]=$l[$lIndex];
        $lIndex++;
    }
    while($rIndex<count($r))
    {
        $merge[]=$r[$rIndex];
        $rIndex++;
    }

    return $merge;

}
usleep(1000);
$timeoff4 = microtime(true);
$mergetime = sprintf('%.6f', $timeoff4 - $timeon4);

?>