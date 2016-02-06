  <?php 
    class loginError{
      
      public function getLoginErrorPages($errorMessage){
        print '<table width="600" border="0" align="center">';
        print '  <tr>';
        print '    <td>';
        print '      <h1>ログイン画面</h1>';
        print '    </td>';
        print '  </tr>';
        print '  <tr>';
        print '    <td>';
        print '      <hr width="100%" noshade>';
        print '    </td>';
        print '  </tr>';
        print '  <tr>';
        print '    <td class="messageSpace" align="center">';
        print '    <div>'.$errorMessage.'</div>';
        print '    </td>';
        print '  </tr>';
        print '  <tr>';
        print '    <td align="center">';
        print '       <form name="loginForm" method="POST" action="loginResultPage.php">';
        print '          <table width="300" border="0">';
        print '            <tr>';
        print '              <td class="label">';
        print '              ID';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td>';
        print '              <input  name="id" class="input" type="text" value="IDを入力してください">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td class="label">';
        print '              Password';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td>';
        print '              <input name="password" class="input" type="password">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td align="center">';
        print '              <input name="login" class="submitBtn" type="submit" value="ログイン">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td align="right">';
        print '              <a href="registrationPage.html">会員登録<a>';
        print '              </td>';
        print '            </tr>';
        print '          </table>';
        print '        </td>';
        print '      </tr>';
        print '    </table>';
      }

    }
  ?>
