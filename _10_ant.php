<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM mov_".$tutu." WHERE id_mov like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>";
                </script>
<?php             
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
    
    } 
                elseif ( isset($_GET['acctt']) )
            {
                    $sql = "UPDATE kardex_".$tutu." SET  stat_kar='1' WHERE id_kar like '".htmlspecialchars($_GET['ent'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>";
                </script>
<?php                              
                    } 
    }                     
    else {


        if( isset($_POST['ingresano']) )
             { 

             $faci = strip_tags($_POST['kar_mov']); 
             $prodi = strip_tags($_POST['prod_mov']);             

             $fac = $mysqli->real_escape_string($faci);
             $prod = $mysqli->real_escape_string($prodi);
             $check = $mysqli->query("SELECT id_mov,kar_mov,prod_mov FROM mov_".$tutu." WHERE kar_mov='$fac' and prod_mov='$prod' and tip_mov='EGR'");
             $coun=$check->num_rows;     
                     if ( $coun == 1 ) {
                      $msg = "<div class='alert alert-danger'>
                         <span class='glyphicon glyphicon-info-sign'></span> &nbsp; No puede duplicar productos en el Kardex !!!
                        </div>";
                     } else {
                                $query = "SELECT id_pro,act_pro,cosprod_pro FROM prod_".$tutu." where id_pro like '".$_POST['prod_mov']."'";
                                $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                if($result) {
                                    while($row = mysqli_fetch_assoc($result)) 
                                            {
                                                $costiano = $row['cosprod_pro'];
                                                $actual = $row['act_pro'];                                                
                                            }
                                            }
                                 mysqli_free_result($result);                         

                                        if ( $_POST['cant_mov'] > $actual ) {
                                              $msg = "<div class='alert alert-danger'>
                                                 <span class='glyphicon glyphicon-info-sign'></span> &nbsp; El valor ingresado es mayo al valor actual del inventario para este item !!!
                                                </div>";
                                         } else {
                         
                         
                                            $add = "INSERT INTO mov_".$tutu." (kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,fech_mov,useing) VALUES ('$_POST[kar_mov]','$_POST[tip_mov]','$_POST[prod_mov]','$_POST[cant_mov]','$costiano','$_POST[fech_mov]','$ide')";
                                            if ($mysqli->query($add) === TRUE) 
                                                {
                                            echo "New record created successfully";
                                            $pivo = $_POST['kar_mov'] ;
                                                } else {
                                                    echo "Error: " . $add . "<br>" . $mysqli->error;
                                                }                                               
                                            } 
               //          exit();
?>

                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo $pivo;?>";
                </script>
<?php                    
             }
            
             }
                elseif ( isset($_POST['cato']) )
            {	 
                    $sql = "UPDATE mov_".$tutu." SET  prov_fac='$_POST[prov_fac]', num_fac='$_POST[num_fac]', fecho_fac='$_POST[fecho_fac]', useing='$ide' WHERE id_pers like '".$_POST['id_pers']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_10";
                </script>
<?php                         
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                    //exit();

            }


     }
?>
<div class="container-fluid">   
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
<?php           
                    if(isset($_GET['edit']))
                         {
?>
                          <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Editar Producto <span class="sr-only">(current)</span></a></li>
                          </ul> 
<?php                       
                                     $query = "SELECT * FROM mov_".$tutu." where id_pers like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
?>           
                               <form role="form" method="post" action="?alm=_10">
                               <div class="form-group">               
                                    <label>Proveedor</label>                           
                                    <select class="form-control" name="prov_fac">
                                        <?php                    
                                             $queryad = "SELECT id_prov,n_prov FROM prov_".$tutu." order by n_prov ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_prov'] == $row['prov_fac'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_prov'];?>" selected><?php echo $rowad['n_prov'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_prov'];?>"><?php echo $rowad['n_prov'];?></option>
                                            <?php                        
                                            }     
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="num_fac" value="<?php echo $row['num_fac'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>                                   
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Kardex</label>
                                    <input class="form-control" id="date" name="fecho_fac" value="<?php echo $row['fecho_fac'];?>" type="text"/>
                                  </div>                                  
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_pers'];?>" name="id_pers" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                              </form>  
                                <script>
                                    $(document).ready(function(){
                                      var date_input=$('input[name="fecho_fac"]'); //our date input has the name "date"
                                      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                      var options={
                                        format: 'dd/mm/yyyy',
                                        container: container,
                                        todayHighlight: true,
                                        autoclose: true,
                                      };
                                      date_input.datepicker(options);
                                    })                 
                                </script>             
<?php
                                   }
                                        mysqli_free_result($result);                
                                                }
                        }
            else
                        {                
?>   
                                <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Usuario<span class="sr-only">(current)</span></a></li>
                          </ul>
<?php   
                         $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,stat_kar,id_pers,n_pers,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers  where id_kar like '".htmlspecialchars($_GET['ent'])."'";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) 

                            
                            {
                                                                $fecho = $row['fecho_kar'] ;
?> 
        		<h2 class="text-info"><?php echo $row['n_pers'];?></h2>
        		<p><span class="label label-info">N&uacute;mero</span></p>
        		<hr>
        		<h3><strong>No.</strong> <?php echo $row['num_kar'];?></h3>
        		<hr>      
                        <?php echo $row['niceDate'];?>
                            <?php
                                $st = $row['stat_kar'];
                            }
                        }
                        mysqli_free_result($result);
                        ?>              
                            <?php
                       }                
?>            
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <script src="dist/js/zelect.js"></script>         
  <style>
    #intro .zelect {
      display: inline-block;
      background-color: white;
      min-width: 450px;
      cursor: pointer;
      line-height: 16px;
      border: 1px solid #dbdece;
      border-radius: 6px;
      position: relative;
    }
    #intro .zelected {
      font-weight: bold;
      padding-left: 10px;
      line-height: 30px;        
    }
    #intro .zelected.placeholder {
      color: #999f82;
    }
    #intro .zelected:hover {
      border-color: #c0c4ab;
      box-shadow: inset 0px 5px 8px -6px #dbdece;
    }
    #intro .zelect.open {
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    #intro .dropdown {
      background-color: white;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      border: 1px solid #dbdece;
      border-top: none;
      position: absolute;
      left:-1px;
      right:-1px;
      top: 36px;
      z-index: 2;
      padding: 3px 5px 3px 3px;
    }
    #intro .dropdown input {
      font-family: sans-serif;
      outline: none;
      font-size: 14px;
      border-radius: 4px;
      border: 1px solid #dbdece;
      box-sizing: border-box;
      width: 100%;
      padding: 7px 0 7px 10px;
    }
    #intro .dropdown ol {
      padding: 0;
      margin: 3px 0 0 0;
      list-style-type: none;
      max-height: 150px;
      overflow-y: scroll;
    }
    #intro .dropdown li {
      padding-left: 10px;
    }
    #intro .dropdown li.current {
      background-color: #e9ebe1;
    }
    #intro .dropdown .no-results {
      margin-left: 10px;
    }
      
.alert-message
{
    margin: 10px 0;
    padding: 20px;
    border-left: 3px solid #eee;
}
.alert-message h4
{
    margin-top: 0;
    margin-bottom: 5px;
}
.alert-message p:last-child
{
    margin-bottom: 0;
}
.alert-message code
{
    background-color: #fff;
    border-radius: 3px;
}
.alert-message-success
{
    background-color: #F4FDF0;
    border-color: #3C763D;
}
.alert-message-success h4
{
    color: #3C763D;
}
.alert-message-danger
{
    background-color: #fdf7f7;
    border-color: #d9534f;
}
.alert-message-danger h4
{
    color: #d9534f;
}
.alert-message-warning
{
    background-color: #fcf8f2;
    border-color: #f0ad4e;
}
.alert-message-warning h4
{
    color: #f0ad4e;
}
.alert-message-info
{
    background-color: #f4f8fa;
    border-color: #5bc0de;
}
.alert-message-info h4
{
    color: #5bc0de;
}
.alert-message-default
{
    background-color: #EEE;
    border-color: #B4B4B4;
}
.alert-message-default h4
{
    color: #000;
}
.alert-message-notice
{
    background-color: #FCFCDD;
    border-color: #BDBD89;
}
.alert-message-notice h4
{
    color: #444;
}      
.alimano
{
    text-align: center;
}            
  </style>
  <script>
    $(setup)

    function setup() {
      $('#intro select').zelect({ placeholder:'selecionar producto...' })
    }
  </script>            
<?php
  if(isset($msg)){
   echo $msg;
  }
?>     
<?php                    
    if ($st == 0 )
    {
?> 
            <div class="alert-message alert-message-info">
                <h4>Agregar salida de Producto</h4>
                     <form class="form-inline" method="post" action="?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>">
                      <div class="form-group">
                        <section id="intro" >      
                                <select name="prod_mov" class="form-control" >
                                    <?php                    
                                        $queryada = "SELECT id_pro,cod_pro,pro_pro,act_pro,cosprod_pro,pres_pro,id_pres,pres_pres FROM prod_".$tutu." inner join pres_".$tutu." on pres_pro = id_pres order by cod_pro ASC ";
                                        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        if($resultada) {
                                            while($rowada = mysqli_fetch_assoc($resultada)) {
                                        ?> 
                                            <option value="<?php echo $rowada['id_pro'];?>"><?php echo $rowada['cod_pro'];?> &nbsp;-&nbsp; <?php echo $rowada['pro_pro'];?>&nbsp;&nbsp;-&nbsp; <?php echo $rowada['pres_pres'];?></option>
                                        <?php                        
                                            }
                                        }
                                        mysqli_free_result($resultada);
                                    ?>                  
                                </select>
                        </section>
                      </div>
                      <div class="form-group">
                        <input type="text" name="cant_mov" class="form-control" id="exampleInputEmail2" placeholder="Cantidad">
                      </div>
                      <div class="form-group">

                          <input type="hidden" name="ingresano">
                        <input type="hidden" name="kar_mov" value="<?php echo "".htmlspecialchars($_GET['ent']).""; ?>">    
                        <input type="hidden" name="fech_mov" value="<?php echo $fecho ; ?>">                                                                                                  
                        <input type="hidden" name="tip_mov" value="EGR" >                                                                            
                      </div>                        
                      <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>                  
            </div>                               
<?php                        
    }
        else
    {
?> 
            <div class="alert-message alert-message-success">
                <h4>Kardex Cerrado</h4>
            </div>
<?php                        
    }  
?> 
            <hr>
          <h2 class=" -header">Producto Agregados</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                  <th>&nbsp;</th>                            
                  <th>Producto</th>
                  <th class="alimano">Cantidad</th>
                  <th class="alimano">Costro Prom.</th>
                  <th class="alimano">Totales.</th>                            
                  <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
<?php   
                         $query = "SELECT id_mov,kar_mov,tip_mov,prod_mov,preu_mov,cant_mov,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM mov_".$tutu." inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres where tip_mov like 'EGR' and kar_mov like '".htmlspecialchars($_GET['ent'])."' order by id_mov DESC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        $conti = 1 ;
                        $tota = 0 ;                        
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
?> 
                            <tr>
                            <td class="alimano"><?php echo $conti;?></td>                                                                                                
                            <td><?php echo $row['cod_pro'];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $row['pro_pro'];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $row['pres_pres'];?></td>                                                     
                            <td class="alimano"><?php echo $row['cant_mov'];?></td>
                            <td class="alimano">Q. <?php echo number_format($row['preu_mov'], 2);?></td>
                            <td class="alimano"><?php $totalo = $row['cant_mov'] * $row['preu_mov'];?>Q. <?php echo number_format($totalo, 2);?></td>                                
                            <td class="alimano">
<?php   
                                     if ($st == 0 )
                                {                           
                                
                                            if ($Roll == 'Admin')
                                        {
?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_10&del=<?php echo $row['id_mov'];?>&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
<?php                        
                                        }
                                            else
                                        {
?> 
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
<?php                        
                                        }
                                
                                }
?>
                                    </td>                                
                            </tr>
<?php
                                $conti ++ ;
                                $tota = $tota + $totalo  ;
                            }
                        }
                        mysqli_free_result($result);
?>   
                    </tbody>
                    <tfoot>
                            <tr>
                            <td></td>                                                                                                
                            <td></td>                                                                
                            <td></td>
                            <td></td>                                
                            <td class="alimano">Q. <?php echo number_format($tota, 2);?></td>                                
                            <td class="alimano">
<?php                    
                                if ($st == 0 )
                                {
?> 
                                    <a class="btn btn-success btn-info-full" href="?alm=_10&acctt=true&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></a>                            
<?php                        
                                }
                                    else
                                {
                                ?> 
<?php                        
                                }  
?>                                 
                                </td>                                                                
                            </tr>                  
                  </tfoot>
                </table>   
          </div>
        </div>
      </div>
    </div>