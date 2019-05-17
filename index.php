<?php

    require 'algorithm/base.php';
    $numbers = [24,55,34,81,10,44];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorting Algorithm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 text-dark offset-md-3 bg-light my-5 shadow">
                <h3 class="">Orjinal Dizi: <span class="text-muted px-3">24,55,34,81,10,44</span></h3>
                <h5 class="">Bubble Sort: <span class="text-muted px-3"><pre><?php print_r(bubble($numbers)); echo $bubbletime; ?></pre></span></h5>
                <h5 class="">Count Sort: <span class="text-muted px-3"><pre><?php print_r(counter($numbers)); echo $countingtime; ?></pre></span></h5>
                <h5 class="">Insertion Sort: <span class="text-muted px-3"><pre><?php print_r(insertion($numbers)); echo $insertiontime; ?></pre></span></h5>
                <h5 class="">Merge dizi: <span class="text-muted px-3"><pre><?php print_r(merge($numbers)); echo $mergetime; ?></pre></span></h5>
                <h5 class="">Selection dizi: <span class="text-muted px-3"><pre><?php print_r(selection($numbers)); echo $selectiontime; ?></pre></span></h5>

            </div>
        </div>
    </div>

</body>


</html>