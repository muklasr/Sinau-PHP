<?php
    date_default_timezone_set("Asia/Jakarta");
    echo date("d M Y H i s")."<br>";
    // $date = date_create("2019-09-17");
    $date = date_create(date("Y-m-d H:i:s"));
    $birth = date_create("2000-09-17");
    echo date_format($date, "d M Y H i s");
    echo "<br>";

    $result = date_diff($date, $birth);
    print_r($result);
    echo "<br>";
    echo $result->y." tahun, ".$result->m." bulan, ".$result->d." hari (".$result->days." hari)";