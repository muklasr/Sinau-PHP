<?php
for($i=0; $i<31; $i++){
    $bilangan[$i] = $i;
}
$i = 0;
while($i<count($bilangan)) {
    if ($bilangan[$i]%2!=0) echo $bilangan[$i]." ";
    $i++;
}
echo "<br>";
$i = 0;
do{
    if ($bilangan[$i]%2!=0) echo $bilangan[$i]." ";
    $i++;
} while($i<count($bilangan));
?>