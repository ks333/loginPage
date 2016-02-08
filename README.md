#README
loginPageレポジトリのプログラムの説明．

##概要
会員ページにログインするwebページ．IDとパスワードを入力し，それらがもし会員登録されていたら会員画面に移動する．そうでなければエラーメッセージが出る．またログイン画面の”会員登録”をクリックすると，会員登録画面に移動する．既に登録されているIDやパスワードは登録しようとするとエラーメッセージが出る．

##構成
以下の９つから成る．loginMenu.htmlがトップ画面になっている．

  -loginError.php  　　  
  ログインに失敗した時のページ．IDもしくはパスワードが登録されてない場合，loginResultPage.phpからこのプログラムが呼び出される．

  -loginMenu.html  
  ログイン画面のページ．IDとPasswordを入力し，ログインボタンを押すと会員ページにログイン．loginResultPage.phpに移動する．

  -loginMenuStyle.css  
  全てのページで使用されるスタイルシート．

  -loginResultPage.php  
  ログインした結果，会員画面を表示するかエラーメッセージを表示するページ．データベースに登録されている場合，会員画面を表示．そうでない場合，その旨を伝えるメッセージを表示．

  -logoutPage.html  
  ログアウト画面のページ．loginResultPage.phpの会員画面からログアウトのリンクをクリックしたら，このページに移動する．

  -registrationComplete.php  
  会員登録完了画面のページを表示するクラスを持つ．会員登録画面での入力内容に不備がなく，データベースに登録された場合に，registrationResultPage.phpからオブジェクト化され，呼び出される．画面右上のログイン画面へをクリックするとログイン画面に移動する．

  -registrationError.php  
  登録エラーメッセージを表示する画面を表示するクラスを持つ．会員登録画面での入力内容に不備があった場合に，registrationResultPage.phpからオブジェクト化され，呼び出される．

  -registrationPage.html  
  会員登録のページ．ログイン画面，またはログアウト画面で会員登録のリンクをクリックしたら，このページに移動する．名前，新しいIDと新しいパスワードを２回入力して登録ボタンを押すことで，regiregistrationResultPage.phpに移動する．

  -registrationResultPage.php   
  会員登録結果を表示する画面．registrationPage.htmlで入力した内容に不備がなければ，データベースに登録され，registrationComplete.phpを呼び出し登録完了画面を表示する．入力したIDやパスワードが既に登録されている場合や未記入の欄がある場合，入力した2つのパスワードが一致していない場合はregistrationError.phpを呼び出しエラーメッセージを表示．
