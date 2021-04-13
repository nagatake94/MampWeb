<?php

$emailTo = "kei@nagata.com";
$subject = "コースの修了証について";
$body = "修了証の出力方法を教えてください";
$header = "";

if (mail($emailTo, $subject, $body, $header)){
    echo "送信に成功しました。";
} else{
    echo "送信に失敗しました。";
}

?>