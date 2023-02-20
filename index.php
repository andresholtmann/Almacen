    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="dist/js/jquery-1.12.3.js"></script> 
<link rel="stylesheet" href="dist/css/jquery.dataTables.min.css">
<script type="text/javascript" src="dist/js/jquery.dataTables.min.js"></script>      
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="dist/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="dist/css/bootstrap-datepicker3.css"/>
<?php 
include("dbconfig.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
$password=mysqli_real_escape_string($dbconfig,$_POST['password']);

$sql_query="SELECT id,roll FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($dbconfig,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
     if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                            $rolado = $row['roll'];
                            }
                        }
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;
header("location: alfss.php");
}
else
{
$error="Username or Password is invalid";
    echo "$error";
}
}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Almac&eacute;n</title>
<style>
body {
    background-size: cover;

}

.logo {
    width: 240px;
    margin: 30px auto;
}
    
.logo img{
    width: 100%;
    
}    

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #3498DB;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #3498DB;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #3498DB;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #2874A6;
    color: #fff;
    font-weight: bold;  
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #5DADE2;
}
    .seno{
        width: 100%; text-align: center;}
</style>
</head>

<body>

<div class="logo">
    <img src="assets/img/_logo_nuevo.png"><br><br>
    <div class="seno">
    <a href="_video.php" class="btn btn-info" target="_blank" role="button">Video Tutorial</a>
    </div>    
    </div>
<div class="login-block">
    <h1>Sistema de Almac&eacute;n</h1>
    <form method="post" action="login.php" name="loginform">
    <input type="text"  placeholder="Usuario" id="username" name="username" />
    <input type="password" placeholder="Contrase&ntilde;a" id="password" name="password" /> 
    <button type="submit">Ingresar</button>
    </form>
</div>




</body>

</html>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>