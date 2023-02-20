<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM mov_".$tutu." WHERE id_mov like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
            ?>
                <script language="Javascript">
                    window.location = "?alm=_7&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>";
                </script>
         <?php             
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
    
    } 
                elseif ( isset($_GET['acctt']) )
            {
                    $sql = "UPDATE fac_".$tutu." SET  stat_fac='1' WHERE id_fac like '".htmlspecialchars($_GET['fac'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
        ?>
                <script language="Javascript">
                    window.location = "?alm=_7&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>";
                </script>
         <?php                              
                    } 
    }                     
    else {


        if( isset($_POST['ingresano']) )
             { 

             $faci = strip_tags($_POST['fac_mov']); 
             $prodi = strip_tags($_POST['prod_mov']);             

             $fac = $mysqli->real_escape_string($faci);
             $prod = $mysqli->real_escape_string($prodi);
             $check = $mysqli->query("SELECT id_mov,fac_mov,prod_mov FROM mov_".$tutu." WHERE fac_mov='$fac' and prod_mov='$prod' and tip_mov='ING'");
             $coun=$check->num_rows;     
            
            
            
                     if ( $coun == 1 ) {
                      $msg = "<div class='alert alert-danger'>
                         <span class='glyphicon glyphicon-info-sign'></span> &nbsp; No puede duplicar productos en la Factura !!!
                        </div>";
                     } else {
                     $add = "INSERT INTO mov_".$tutu." (fac_mov,tip_mov,prod_mov,cant_mov,preu_mov,useing) VALUES ('$_POST[fac_mov]','ING','$_POST[prod_mov]','$_POST[cant_mov]','$_POST[preu_mov]','$ide')";
                        if ($mysqli->query($add) === TRUE) 
                                {
                            echo "New record created successfully";
                            $pivo = $_POST['fac_mov'] ;
                                } else {
                                    echo "Error: " . $add . "<br>" . $mysqli->error;
                                }   
                       //  exit();
                ?>
                <script language="Javascript">
                    window.location = "?alm=_7&fac=<?php echo $pivo;?>";
                </script>
         <?php                    
             }
            
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE mov_".$tutu." SET  prov_fac='$_POST[prov_fac]', num_fac='$_POST[num_fac]', fech_fac='$_POST[fech_fac]', useing='$ide' WHERE id_fac like '".$_POST['id_fac']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
        ?>
                <script language="Javascript">
                    window.location = "?alm=_7";
                </script>
         <?php                         
                    }              
                    
            }  
                    
                    elseif ( isset($_POST['descu_fac']) )
            {	 

                         $sql = "UPDATE fac_".$tutu." SET  descu_fac='$_POST[descu_fac]' WHERE id_fac like '".htmlspecialchars($_GET['fac'])."' ";    
                                            if ($mysqli->query($sql) === TRUE) {
                                            echo "Record updated successfully";
                                ?>
                                        <script language="Javascript">
                                            window.location = "?alm=_7&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>";
                                        </script>
                                 <?php                                               
                    }
                    else {
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
                                     $query = "SELECT * FROM mov_".$tutu." where id_fac like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>           
                               <form role="form" method="post" action="?alm=_7">
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
                                    <label class="control-label" for="date">Fecha de Factura</label>
                                    <input class="form-control" id="date" name="fech_fac" value="<?php echo $row['fech_fac'];?>" type="text"/>
                                  </div>                                  
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_fac'];?>" name="id_fac" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                              </form>  
                                <script>
                                    $(document).ready(function(){
                                      var date_input=$('input[name="fech_fac"]'); //our date input has the name "date"
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
                            <li class="active"><a href="#">Proveedor<span class="sr-only">(current)</span></a></li>
                          </ul>
            <style>
                .decu{
                    padding: 6px;
                    background-color: dimgray;
                    color: white;
                }
            </style>
						<?php   
                         $query = "SELECT id_fac,prov_fac,num_fac,fech_fac,stat_fac,descu_fac,id_prov,n_prov,des_prov,nit_prov FROM fac_".$tutu." inner join prov_".$tutu." on prov_fac = id_prov where id_fac like '".htmlspecialchars($_GET['fac'])."'";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <h2 class="text-info"><?php echo $row['n_prov'];?></h2>

                            <hr>
                            <h3><span class="label label-info">Fac. No. <?php echo $row['num_fac'];?></span></h3>
                            <hr>      
                            <p><?php echo $row['des_prov'];?></p>
                            <?php echo $row['fech_fac'];?>

                            <?php
                            if ($row['descu_fac'] == '0') {
                            ?>   
                             <hr>
                            <div class="decu">Aplicar Descuento</div>
                             <hr>                            
                            <form role="form" method="post" action="?alm=_7&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>">
                                <div class="form-group">
                                <input type="text" name="descu_fac" class="form-control" id="exampleInputEmail1" placeholder="ej. 12345.67" >
                                </div>
                                <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                            </form>                                                              

                            <?php                                
                            } 
                            ?>                            
                                                                                
						<?php
                                $st = $row['stat_fac'];
                                $desu = $row['descu_fac'];
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
      min-width: 300px;
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
                <h4>Agregar Producto a la Factura</h4>
                     <form class="form-inline" method="post" action="?alm=_7&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>">
                      <div class="form-group">
                        <section id="intro" >      
                                <select name="prod_mov" class="form-control" >
                                    <?php                    
                                        $queryada = "SELECT id_pro,cod_pro,pro_pro,st_pro FROM prod_".$tutu." where st_pro like '0' order by cod_pro ASC ";
                                        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        if($resultada) {
                                            while($rowada = mysqli_fetch_assoc($resultada)) {
                                        ?> 
                                            <option value="<?php echo $rowada['id_pro'];?>"><?php echo $rowada['cod_pro'];?> &nbsp;&nbsp; <?php echo $rowada['pro_pro'];?></option>
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
                        <input type="text" name="preu_mov" class="form-control" id="exampleInputEmail2" placeholder="Pre. Unitario">
                          <input type="hidden" name="ingresano">
                        <input type="hidden" name="fac_mov" value="<?php echo "".htmlspecialchars($_GET['fac']).""; ?>">                                                                          
                        <input type="hidden" name="tip_mov" value="ING">                                                                            
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
                <h4>Factura Cerrada</h4>
            </div>
    <?php                        
    }  
                ?> 
            

            

            
            <hr>
          <h2 class=" -header">Producto Agregados a la factura</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                  <th>&nbsp;</th>                            
                  <th>Producto</th>
                  <th class="alimano">Cantidad</th>
                  <th class="alimano">Precio Uni.</th>
                  <th class="alimano">Totales.</th>                            
                  <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_mov,fac_mov,tip_mov,prod_mov,preu_mov,cant_mov,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM mov_".$tutu." inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres where tip_mov like 'ING' and fac_mov like '".htmlspecialchars($_GET['fac'])."' order by id_mov DESC";
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
                                            <a class="btn btn-danger btn-info-full" href="?alm=_7&del=<?php echo $row['id_mov'];?>&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
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
                                    <a class="btn btn-success btn-info-full" href="?alm=_7&acctt=true&fac=<?php echo "".htmlspecialchars($_GET['fac'])."";?>" target="_self"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></a>                            
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
                                                           <?php                    
                                if ($desu > 0 )
                                {
                                    $finalo = $tota - $desu ;
                                ?>                         
                            <tr>
                            <td></td>                                                                                                
                            <td></td>                                                                
                            <td></td>
                            <td class="alimano">Descuento - </td>                                
                            <td class="alimano">
                                    Q. <?php echo number_format($desu, 2);?>                            
                            </td>                                
                            <td class="alimano"></td>                                                                
                            </tr> 
                            <tr>
                            <td></td>                                                                                                
                            <td></td>                                                                
                            <td></td>
                            <td class="alimano">Final - </td>                                
                            <td class="alimano">
                                    Q. <?php echo number_format($finalo, 2);?>                            
                            </td>                                
                            <td class="alimano"></td>                                                                
                            </tr>                                
                                <?php                        
                                }
                                    else
                                {
                                ?> 
                                <?php                        
                                }  
                                            ?>                                                                          
                  </tfoot>
                </table>   
          </div>
        </div>
      </div>
    </div>