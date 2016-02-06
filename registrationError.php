  <?php 
    class registrationError{
      
      public function getRegistrationErrorPages($errorMessage){
        print '<table width="600" border="0" align="center">';
        print '  <tr>';
        print '    <td>';
        print '      <h1>登録画面</h1>';
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
        print '       <form name="loginForm" method="POST" action="registrationResultPage.php">';
        print '          <table width="300" border="0">';
        print '            <tr>';
        print '              <td class="label">';
        print '              名前';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td>';
        print '              <input  name="name" class="input" type="text" value="名前を入力してください">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td class="label">';
        print '              新しいID';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td>';
        print '              <input  name="id" class="input" type="text" value="IDを入力してください">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td class="label">';
        print '              Password作成';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td>';
        print '              <input name="password" class="input" type="password">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td class="label">';
        print '              Passwordを再入力';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td>';
        print '              <input name="password2" class="input" type="password">';
        print '              </td>';
        print '            </tr>';
        print '            <tr>';
        print '              <td align="center">';
        print '              <input name="login" class="submitBtn" type="submit" value="登録">';
        print '              </td>';
        print '            </tr>';
        print '          </table>';
        print '        </td>';
        print '      </tr>';
        print '    </table>';
      }

    }
  ?>
