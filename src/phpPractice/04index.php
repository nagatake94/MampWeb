<?php

$role = "admin";
$position = "manager";

if($role == "admin" || $position == "director"){
    echo "<p>管理者画面に進んでください</p>";
} else{
    echo "<p>あなたは管理者ではないので、ここから先には進めません</p>";
}

?>