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

for ($i = 0; $i < 15; $i++) {
    echo  "On y arrive presque." ."<br>";
}

echo "<br><br>";

for ($i = 20; $i >= 0; $i--) {
    echo  "C'est presque bon." ."<br>";
}

echo "<br><br>";

for ($i = 1; $i <= 100; $i+=15) {
    echo  "On tient le bon bout." ."<br>";
}

for ($i = 200; $i >= 0; $i-=12) {
    echo  "Enfin !!!!" ."<br>";
}

