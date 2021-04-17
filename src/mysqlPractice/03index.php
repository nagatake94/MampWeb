<?php
    //phpからMySQLデータベースに接続する関数
    //サーバー名、データベース名、パスワード
    $link = mysqli_connect("localhost","root","root","memberapp");

    if(mysqli_connect_error()){
        die("データベースの接続に失敗しました");

    }

    //$query = "SELECT * FROM users WHERE id = 1";
    $query = "SELECT * FROM users WHERE name LIKE '%P%'";


    if($result = mysqli_query($link,$query)){
        echo "クエリの発行に成功しました";
    }

    while($row = mysqli_fetch_array($result)){
        print_r($row);  
    }



    //print_r($row);
    //echo "あなたのメールアドレスは".$row['email']."パスワードは".$row['password']."です。";
    // echo "あなたのメールアドレスは".$row[1]."パスワードは".$row[2]."です。";
    // echo "<p>";
    // echo "あなたのIDは".$row["id"]."です。";

?>