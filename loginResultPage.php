<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" type="text/css" href="loginMenuStyle.css">
  </head>
  <body>
  <?php 
    $id=$_POST["id"];
    $password=$_POST["password"];

    $dsn='mysql:dbname=phpkiso;host=localhost';
    $user='root';
    $pass='';
    $dbh=new PDO($dsn, $user, $pass);
    $dbh->query('SET NAMES utf8');

    $sql='SELECT * FROM registeredmembers WHERE 1';
    $stmt=$dbh->prepare($sql);//指令を出す準備
    $stmt->execute();//指令を出す

    /*
     *　IDとPasswordが登録されているか判定
     */

    $registered=0;//登録されているかどうかを表す変数(登録されている場合1、そうでない場合0)
    while(1){
       $rec=$stmt->fetch(PDO::FETCH_ASSOC);//1レコード分のデータを取り出す
       if($rec==false){//
           break;
       }
       if($id==$rec['id']&&$password==$rec['password']){
           $registered=1;//登録判定の変数を1にセット
           $name=$rec['name'];
           break;
       }
    }
  
    /*
     *　IDとPasswordが登録されている場合会員ページを、そうでない場合元のログイン画面を開く
     */

    if($registered==1){
      print '<table width="600" border="0" align="center">';
      print '  <tr>';
      print '    <td>';
      print '      <h1>会員ページ</h1>';
      print '    </td>';
      print '    <td align="right" valign="bottom">';
      print '      <a href="logoutPage.html">ログアウト<a>';
      print '    </td>';
      print '  </tr>';
      print '  <tr>';
      print '    <td colspan="2">';
      print '      <hr width="100%" noshade>';
      print '    </td>';
      print '  </tr>';
      print '  <tr>';
      print '    <td class="messageSpace" colspan="2" align="center">';
      print 'ようこそ'.$name.'さん';
      print '    </td>';
      print '  </tr>';
      print '    </table>';
    }else{
      require "loginError.php";//外部のphp読み込み
      $errorPage=new loginError();//オブジェクト化
      $errorPage->getloginErrorPages("IDまたはPasswordが違います");//登録エラーページの表示
    }
    $dbh=null;//DBから切断
  ?>
  </body>
</html>
