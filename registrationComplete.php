  <?php 
    class registrationComplete{
      
      public function getRegistrationCompletePages($message){

        print '<table width="600" border="0" align="center">';
        print '  <tr>';
        print '    <td>';
        print '      <h1>登録完了</h1>';
        print '    </td>';
        print '    <td align="right" valign="bottom">';
        print '      <a href="loginMenu.html">ログイン画面へ<a>';
        print '    </td>';
        print '  </tr>';
        print '  <tr>';
        print '    <td colspan="2">';
        print '      <hr width="100%" noshade>';
        print '    </td>';
        print '  </tr>';
        print '  <tr>';
        print '    <td class="messageSpace" colspan="2" align="center">';
        print '    <div>'.$message.'</div>';
        print '    </td>';
        print '  </tr>';
        print '    </table>';

      }

    }
  ?>
