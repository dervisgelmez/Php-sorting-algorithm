<?php
    include 'bubble.php';
    include 'count.php';
    include 'insertion.php';
    include 'merge.php';
    include 'selection.php';



    function swap($values, $i,$j)
    {
        $tmp = $values[$i];
        $values[$i] = $values[$j];
        $values[$j] = $tmp;

        return $values;
    }