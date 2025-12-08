<?php
$names = ['var1', 'var2', 'var3'];
$i = 1;
foreach ($names as $name) {
    $$name = $i;
    echo $name . " = " . $$name . "<br>";
    $i++;
}
?>
