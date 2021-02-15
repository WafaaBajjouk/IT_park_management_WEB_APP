<?php
session_start();
$host = "localhost"; 
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "dataSSICw";

$con = mysqli_connect($host, $user, $password,$dbname);
//  connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: acceille.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  href="style_login.css" >
</head>
<body> 

    <h1>Gestion des opérations de maintenance du parc Informatique SSIC</h1>
<div class="container">
    <form method="post" action="acceille.html" >  <!-- login.php ? -->
        <div id="div_login">
              <div class="totalbox border">
      <h2>veuillez s'identifier</h2>
            <div class="loginForm">
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
    
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="valider"  id="but_submit" />
            </div>
        </div>
    </form>
</div>
</body>
</html>