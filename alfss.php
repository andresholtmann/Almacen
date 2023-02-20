<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('fss4dm1n/LALa125.php');
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php 
include("dbconfig.php");
session_start();
    $query = "SELECT username,roll,id,Nombre,Apellido,depto FROM user where username like '".$_SESSION['login_user']."' ";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $Roll = $row['roll'];
            $ide = $row['id'];
            $nom = $row['Nombre'];
            $ape = $row['Apellido'];
            $depto = $row['depto'];
        }
    }
    mysqli_free_result($result);
if(!isset($_SESSION['login_user']))
	{
	header("Location: index.php");
	}
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
      <?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="avicon.ico">

    <title>Almac&eacute;n</title>

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
  </head>

  <body>
      
    
 	<?php       
      include('_menuno.php');   
     ?>    

  	<?php
             
        if ($Roll == 'Admin')
        {      
              if (! isset($_GET['alm']))
                {
               // include 'newsport.php';
              //include('_1.php');
            } else {    
                $page = $_GET['alm'];  
                switch($page)
                {
                       
                }

            }
        }                  
    ?>      
    
  	<?php
        if ($Roll == 'User')
        {      
              if (! isset($_GET['alm']))
                {
              include('_dash.php');
              } else {    
                $page = $_GET['alm'];  
                switch($page)
                {

                    case '_2':
                        include('_2.php');
                        break;   
                    case '_3':
                        include('_3.php');
                        break;                   
                    case '_4':
                        include('_4.php');
                        break;                     
                    case '_5':
                        include('_5.php');
                        break;  
                    case '_6':
                        include('_6.php');
                        break;  
                    case '_7':
                        include('_7.php');
                        break;  
                    case '_8':
                        include('_8.php');
                        break;    
                    case '_9':
                        include('_9.php');
                        break;       
                    case '_10':
                        include('_10.php');
                        break;   
                    case '_11':
                        include('_11.php');
                        break;
                    case '_12':
                        include('_12.php');
                        break;
                    case '_13':
                        include('_13.php');
                        break;  
                    case '_14':
                        include('_14.php');
                        break;
                    case '_14_1':
                        include('_14_1.php');
                        break;   
                    case '_14_3':
                        include('_14_3.php');
                        break;                           
                    case '_15':
                        include('_15.php');
                        break;   
                    case '_16':
                        include('_16.php');
                        break;   
                    case '_17':
                        include('_17.php');
                        break;                           
                    case '_18':
                        include('_18.php');
                        break; 
                    case '_19':
                        include('_19.php');
                        break;                         
                    case '_20':
                        include('_20.php');
                        break;  
                    case '_21':
                        include('_21.php');
                        break;
                    case '_22':
                        include('_22.php');
                        break;
                    case '_23':
                        include('_23.php');
                        break;  
                    case '_24':
                        include('_24.php');
                        break;    
                    case '_25':
                        include('_25.php');
                        break;
                    case '_26':
                        include('_26.php');
                        break; 
                    case '_27':
                        include('_27.php');
                        break;  
                    case '_28':
                        echo"<br><br><br><br><br><br><br><br><br><br><br>";
                             $querys = "
                             SELECT id_mov, tip_mov, prod_mov, cant_mov, st_mov
                                FROM (
                                SELECT id_mov, prod_mov, tip_mov, cant_mov, st_mov,
                                  CASE 
                                    WHEN (@ARTICULO = '' OR @ARTICULO = prod_mov) AND tip_mov = 'INV' THEN @TOTAL = @TOTAL + cant_mov  
                                    WHEN (@ARTICULO = '' OR @ARTICULO = prod_mov) AND tip_mov = 'ING' THEN @TOTAL = @TOTAL + cant_mov
                                    WHEN (@ARTICULO = '' OR @ARTICULO = prod_mov) AND tip_mov = 'EGR' THEN @TOTAL = @TOTAL - cant_mov
                                    END AS saldo,
                                  @ARTICULO = prod_mov FROM mov_".$tutu." order by id_mov ASC
                                ) mov_".$tutu." where prod_mov like '1' ";

                                $results = mysqli_query($mysqli, $querys) or trigger_error("Query Failed! SQL: $querys - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                $totoro = 0 ;
                                if($results) {
                                    while($rows = mysqli_fetch_assoc($results)) {
           
           

                                            echo $rows['@ARTICULO'];

           
                                    }
                                }
                                mysqli_free_result($results);
                        break;                          
                }

            }
        }                  
    ?>       
  	<?php
        if ($Roll == 'Soli')
        {      
              if (! isset($_GET['alm']))
                {
               // include 'newsport.php';
              include('_dashsoli.php');
            } else {    
                $page = $_GET['alm'];  
                switch($page)
                {
                    case '_s1':
                        include('_s1.php');
                        break;  
                    case '_s2':
                        include('_s2.php');
                        break;                          
                        
                }

            }
        }                  
    ?>         
      
    	<?php
        if ($Roll == 'Asis')
        {      
              if (! isset($_GET['alm']))
                {
              include('_dash.php');
            } else {    
                $page = $_GET['alm'];  
                switch($page)
                {
                    case '_24':
                        include('_24.php');
                        break;                            
                        
                }

            }
        }                  
    ?>    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').dataTable(
    {
        "paging":   false,
        "ordering": false,
        "info":     true
    });
});
</script>
  </body>
</html>
<?php mysqli_close($dbconfig); ?>
