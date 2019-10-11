<?php
    $ganjil = array();
    
    $i=0;
    while ($i <= 30) {
        if ($i%2==1) {
            array_push($ganjil, $i);
        }
        $i++;
    }
    print_r($ganjil);
?>