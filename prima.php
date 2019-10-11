<?php
    for($i=0; $i<=30; $i++){
        $x=0;
        for($j=1; $j<$i; $j++){
            if ($i % $j==0) {
                echo "i = $i x = $x <br>";
                $x++;
            }
        }
    }
?>