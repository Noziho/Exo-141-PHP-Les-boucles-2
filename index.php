<?php
$myVar = 0;

for ($i = 0; $i <= 10; $i++) {
    echo $myVar ."<br>";
    $myVar ++;
}

$myVar2 = 0;
$myVar3 = 55;

for ($myVar2 = 0; $myVar2 <= 20; $myVar2++) {
    echo $myVar2 * $myVar3 . "<br>";
}


$myVar5 = 55;
echo "<br><br>";
for ($myVar4 = 100; $myVar4 >= 10; $myVar4--){
    echo $myVar4 * $myVar5 ."<br>";
}

echo "<br><br>";
for ($myVar6 = 1; $myVar6 <= 10; $myVar6+= 0.5) {
    echo $myVar6 ."<br><br>";
}

