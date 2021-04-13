<?php
$myArray = array("Kei","Rob","Tommy","Ralphie");
print_r($myArray);
echo "<br><br>";
echo $myArray[1];
echo "<br><br>";

$anotherArray[0]="pizza";
$anotherArray[1]="chocolate";
$anotherArray[0]="coffee";

print_r($anotherArray);
echo "<br><br>";

$anotherArray["myFavorite"]="ice cream";

print_r($anotherArray);

$thirdArray = array("France" => "French",
                    "USA" => "English",
                    "Germany" => "German");

echo "<br><br>";
print_r($thirdArray);

echo "<br><br>";
echo sizeof($thirdArray);

unset($thirdArray["France"]);
echo "<br><br>";
print_r($thirdArray);
echo sizeof($thirdArray);

?>