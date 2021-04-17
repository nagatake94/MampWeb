<?php

  setcookie("customerId","test",time() + 60 * 60 * 24);

  echo $_COOKIE["customerId"];
   
?>

<form method="post">
    <input name="email" type="text" placeholder="メールアドレス">
    <input name="password" type="password" placeholder="パスワード">
    <input name="name" type="name" placeholder="名前">
    <input type="submit" value="登録する">
</form>