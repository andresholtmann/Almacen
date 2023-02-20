<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM kardex_".$tutu." WHERE id_kar like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?alm=_9";
                </script>
         <?php     
    } 
    else {


        if( isset($_POST['ingresano']) )
             { 
             $add = "INSERT INTO kardex_".$tutu." (prov_kar,num_kar,stat_kar,fecho_kar,useing) VALUES ('$_POST[prov_kar]','$_POST[num_kar]','0','$_POST[fecho_kar]','$ide')";
                if ($mysqli->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $mysqli->error;
                        }

        ?>
                <script language="Javascript">
                    window.location = "?alm=_9";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE kardex_".$tutu." SET  prov_kar='$_POST[prov_kar]', num_kar='$_POST[num_kar]', fecho_kar='$_POST[fecho_kar]', useing='$ide' WHERE id_kar like '".$_POST['id_kar']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                    //exit();
        ?>
                <script language="Javascript">
                    window.location = "?alm=_9";
                </script>
         <?php 
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
                                     $query = "SELECT * FROM kardex_".$tutu." where id_kar like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>           
                               <form role="form" method="post" action="?alm=_9">
                               <div class="form-group">               
                                    <label>Proveedor</label>                           
                                    <select class="form-control" name="prov_kar">
                                        <?php                    
                                             $queryad = "SELECT id_pers,n_pers,ubi_pers,pue_pers,ext_pers,st_pers,id_dep,n_dep FROM pers_".$tutu." inner join depto_".$tutu." on ubi_pers = id_dep and st_pers like '0' order by n_pers ASC";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_pers'] == $row['prov_kar'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_pers'];?>" selected><?php echo $rowad['n_pers'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_pers'];?>"><?php echo $rowad['n_pers'];?></option>
                                            <?php                        
                                            }     
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="num_kar" value="<?php echo $row['num_kar'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>                                   
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Factura</label>
                                    <input class="form-control" id="date" name="fecho_kar" value="<?php echo $row['fecho_kar'];?>" type="text"/>
                                  </div>                                  
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_kar'];?>" name="id_kar" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                              </form>  
            <script>
                $(document).ready(function(){
                  var date_input=$('input[name="fecho_kar"]'); //our date input has the name "date"
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
                                

<?php                        
            include('_menuacordion.php');
?>	  
                                                                
<!--
                            <li class="active"><a href="#">Nueva Salida <span class="sr-only">(current)</span></a></li>
                          </ul>
                            <form role="form" method="post" action="?alm=_9">
                                <div class="form-group">                                                                            
                                </div>
                               <div class="form-group">               
                                    <label>Seleccionar Receptor</label>                           
                                    <select class="form-control" name="prov_kar">
  
                                        <?php                    
                                         //    $queryad = "SELECT id_pers,n_pers,ubi_pers,pue_pers,ext_pers,id_dep,n_dep FROM pers_".$tutu." inner join depto_".$tutu." on ubi_pers = id_dep and st_pers like '0' order by n_pers ASC ";
                                         //   $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                         //   if($resultad) {
                                        //        while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                      <option value="<?php echo $rowad['id_pers'];?>"><?php echo $rowad['n_pers'];?>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowad['n_dep'];?></option>
                                        <?php                      
                                        //        }
                                        //    }
                                        //    mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                   
                                <div class="form-group">
                                <input type="text" name="num_kar" class="form-control" id="exampleInputEmail1" placeholder="No. de Salida"  required > 
                                </div>                                
                                  <div class="form-group">  Date input 
                                    <label class="control-label" for="date">Fecha de Despacho</label>
                                    <input class="form-control" id="date" type="date" name="fecho_kar" value="<?php echo $feiyo2;?>"/>
                                  </div> 
                                <input type="hidden" name="ingresano" >                                 
                                <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                            </form>          
-->
            <script>
                $(document).ready(function(){
                  var date_input=$('input[name="fecho_kar"]'); //our date input has the name "date"
                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                  var options={
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                  };
                  date_input.datepicker(options);
                })                 
            </script> 
                            <?php
                       }                
                ?>            
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class=" -header">Ingreso/Edici&oacute;n de salidas</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>Receptor</th>
                  <th>No. de Salida</th>
                  <th>de fecha</th>
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers where stat_kar not like '3'  order by fecho_kar DESC limit 150";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $row['n_pers'];?></td>                                                                
                            <td><?php echo $row['num_kar'];?></td>
                            <td><?php echo $row['niceDate'];?></td>                                
                            <td>
                                       
                                                                    
                                                                              
                                       
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                <a class="btn btn-success btn-info-full" href="?alm=_9&edit=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>                     
                                        <?php                        
                                        }
                                            else
                                        {
                                        ?> 
                                            
                                        <?php                        
                                        }
                                        ?>                                
                                    	<?php          
                                            if ($row['stat_kar'] == '4')
                                        {
                                        ?>                                 
                                            <a class="btn btn-warning btn-info-full" href="?alm=_10&ent=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>   

                                                                                                                                                                               <?php                        
                                        } elseif ($row['stat_kar'] == '1') { 
                                                   ?>  
                                             <a class="btn btn-success btn-info-full" href="?alm=_10&ent=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>   
                                             
                                
                                             <a class="btn btn-info btn-info-full" href="?alm=_16&kar=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>                                                
                                      <?php            
                                            }
                                        ?>                                  
                                    	<?php          
                                            if ($Roll == 'User')
                                        {
                                                if ($row['stat_kar'] == '99')
                                        {
?> 
                                           <style>
                                               .botona {
                                                   background-color: dimgrey !important;
                                                   color: #ffffff !important;
                                               }
                                </style>                                                    
                                            <a class="btn  btn-info-full botona" href="?alm=_23&hab=<?php echo $row['id_kar'];?>" target="_self">Rehabilitar</a>       
                                                  <?php  
                                                    }else{
                                        ?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_22&del=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
                                        <?php                        
                                        }
                                                }
                                            else
                                        {
                                        ?> 

                                        <?php                        
                                        }
                                        ?>
                             <?php                    
                                        $queryadas = "SELECT id_mov,kar_mov,tip_mov,st_mov FROM mov_".$tutu." where kar_mov like '".$row['id_kar']."' and st_mov like '0' limit 1  ";
                                        $resultadas = mysqli_query($mysqli, $queryadas) or trigger_error("Query Failed! SQL: $queryadas - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        $totalFilas    =    mysqli_num_rows($resultadas);                                                                       
                                        if($totalFilas > 0) {
                                            while($rowadas = mysqli_fetch_assoc($resultadas)) {
                                    ?>                                                              
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>              
                             <?php                                                        
                                            }
                                        }  else {
                                            $sabra = '0' ;
                                        }  
                                        mysqli_free_result($resultadas);
                                    ?>                                          
                                    </td>                                
                            </tr>

						<?php
                            }
                        }
                        mysqli_free_result($result);?>   
                  
                    </tbody>
                </table>   
          </div>
        </div>
      </div>
    </div>