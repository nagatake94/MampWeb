<?php

    /**
     * 1. Eメールとパスワードの入力フォーム、「登録する」ボタンを配置する
     * 2. データが入力されているかどうかをチェックする
     * 3. メールアドレスが既に使用されていないかチェックする
     * 4. 重複がなければユーザ登録（データベーステーブルに追加する）を実行する
     * 5. ユーザ登録に成功しました。
     */


    session_start();
    echo $_SESSION['username'];


    //phpからMySQLデータベースに接続する関数
    //サーバー名、データベース名、パスワード
    $link = mysqli_connect("localhost","root","root","memberapp");

    if(mysqli_connect_error()){
        die("データベースの接続に失敗しました");
    }

    if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)){
        //print_r($_POST);
        if($_POST['email'] == ''){
            echo "Eメールアドレスを入力してしてください";
        } else if($_POST['password'] == '') {
            echo "パスワードを入力してしてください";
        } else {
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
                echo "そのメールアドレスは使用されています";
            } else {
                //未使用の場合の処理
                $query = "INSERT INTO `users` (`email`,`password`,`name`) VALUES 
                ('".mysqli_real_escape_string($link,$_POST['email'])."',
                '".mysqli_real_escape_string($link,$_POST['password'])."',
                '".mysqli_real_escape_string($link,$_POST['name'])."')";
                
                if(mysqli_query($link,$query)){
                    //echo "登録されました";

                    $_SESSION["email"] = $_POST['email'];
                    header("Location: 06index.php");
                } else {
                    echo "登録に失敗しました";
                }
            }
        }
    }

  
   
?>

<form method="post">
    <input name="email" type="text" placeholder="メールアドレス">
    <input name="password" type="password" placeholder="パスワード">
    <input name="name" type="name" placeholder="名前">
    <input type="submit" value="登録する">
</form>