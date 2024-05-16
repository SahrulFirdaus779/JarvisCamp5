<?php 

require_once ("lib/function.php");

salam ("Sahrul","Happy");
// for loop

for ($i = 1; $i < 10; $i ++){
    echo "$i";
}

echo "<br>";

//while loop

$a = 1;
while ($a < 10){
    echo "$a";
    $a++;
}
echo "<br>";
//do while loop
$b=0;
do {
    echo "$b";
    $b++;
} while ($b <=10);
echo "<br>";
//foreach loop

$array=["sahr","erik","virgi"];
foreach($array as $key => $value){
    $no= $key + 1;
    echo "$no. - $value <br>";
}
?>