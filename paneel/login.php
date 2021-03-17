<?php
//login
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "core.php";
require PATH_LIB . "page-top.php"; 






// $ip =  $_SERVER['REMOTE_ADDR'];

// $date = date("Y/m/d");

// $sql = "SELECT * FROM `pro_statusertrack` WHERE `ip` = '$ip' AND `date` = '$date'";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result)){
// }else {

//   $ip =  $_SERVER['REMOTE_ADDR'];

//   $date = date("Y/m/d");

//   $sql = "INSERT INTO `pro_statusertrack` (`ip`, `date`) VALUES ('$ip', '$date');";






?>

<!-- javascript sessie aanmaken -->
<script>
function login () {
  admin.ajax({
    url : "ajax-session.php",
    data : {
      req : "in",
      email : document.getElementById("user_email").value,
      password : document.getElementById("user_password").value
    },
    ok : function () { location.href = "home.php"; }
  });
  return false;
}
</script>
    <!-- style voor het login formulier -->
    <style>
      /* login form styling */
      #login-form {
        max-width: 340px;
        margin: 50px auto 0 auto;
        padding: 10px 20px 20px 20px;
        background: #eee;
        border: 1px solid #ccc;
        text-align: center;
      }
      /* input styling login form */
      #login-form input {
        width: 100%;
        margin-top: 20px;
        text-align: center;
      }
    </style>
    <!-- het login formulier zelf( -->
    <div>
    <form id="login-form" onsubmit="return login();">
      <h1>Inloggen</h1>
      <input type="email" placeholder="Email" id="user_email" required />
      <input type="password" placeholder="Password" id="user_password" required />
      <input type="submit" value="Sign In"/>
    </form>
    </div>
<?php require PATH_LIB . "page-bottom.php"; ?>