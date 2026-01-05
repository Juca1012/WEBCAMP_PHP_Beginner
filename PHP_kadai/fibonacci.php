<?php

$fibonacci = [0,1];

while (true) {
    $count = count ($fibonacci);
    $next = $fibonacci [count ($fibonacci)-1]
          + $fibonacci [count ($fibonacci)-2];

        $fibonacci [] = $next;

        if ($next > 10000) {
            break;
        }
    }

    foreach ($fibonacci as $value) {
        echo $value . "\n";
    }