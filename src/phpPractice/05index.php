<?php


for ($i = 0; $i<10; $i++ ){
    echo $i."<br>";
};

// for ($i = 2; $i<30; $i++ ){
//     echo $i.",";
// };

for ($i = 10; $i>=0; $i-- ){
    if($i == 0){
        echo $i;
    } else {
        echo $i.",";
    }
};

echo "<br><br>";

$family = array("Kei", "Kirsten", "Tommy", "Ralphie");

for ($i = 0; $i < sizeof($family); $i++){
    echo $family[$i].",";
}

echo "<br><br>";

foreach ($family as $key => $value){
    //echo $key.": ".$value.",";
    $family[$key] = $value." Percival";
    echo $family[$key].",";
}




?>