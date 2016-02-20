<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>登録画面</title>
    <link rel="stylesheet" type="text/css" href="loginMenuStyle.css">
  </head>
  <body>
  <?php
    $name=$_POST["name"];
    $id=$_POST["id"];
    $password=$_POST["password"];
    $password2=$_POST["password2"];
    require "registrationError.php";//外部のphp読み込み
    $errorPage=new registrationError();//オブジェクト化
    require "registrationComplete.php";//外部のphp読み込み
    $completePage=new registrationComplete();//オブジェクト化

    if($name==''||$id==''||$password==''||$password2==''){
      $errorPage->getRegistrationErrorPages("未入力の箇所があります");//登録エラーページの表示
    }else if($password!=$password2){//もし入力した２つのパスワードがことなっていたら、エラーページに移行
      $errorPage->getRegistrationErrorPages("入力したPasswordが一致していません");//登録エラーページの表示
    }else{
      $dsn='mysql:dbname=phpkiso;host=localhost';
      $user='root';
      $pass='';
      $dbh=new PDO($dsn, $user, $pass);
      $dbh->query('SET NAMES utf8');
      $sql='SELECT * FROM registeredmembers WHERE 1';
      $stmt=$dbh->prepare($sql);//指令を出す準備
      $stmt->execute();//指令を出す

      /*
       *　IDとPasswordが既に登録されているか判定
       */

      $registered=0;//登録されているかどうかを表す変数(登録されている場合1、そうでない場合0)
      while(1){
         $rec=$stmt->fetch(PDO::FETCH_ASSOC);//1レコード分のデータを取り出す
         if($rec==false){//
             break;
         }
         if($id==$rec['id']||$password==$rec['password']){
             $registered=1;//登録判定の変数を1にセット
             break;
         }
      }

      /*
       *　IDまたはPasswordが登録されているかどうかで、処理を変える
       */

      if($registered==1){
      $errorPage->getRegistrationErrorPages("入力したIDまたはPasswordが既に登録されています");//登録エラーページの表示
      }else{
      $sql='INSERT INTO registeredmembers (id,password,name) VALUES ("'.$id.'","'.$password.'","'.$name.'")';
      $stmt=$dbh->prepare($sql);//指令を出す準備
      $stmt->execute();//指令を出す
      $completePage->getRegistrationCompletePages("登録完了しました");//登録完了ページの表示
      }
    }


  ?>
  </body>
</html>
