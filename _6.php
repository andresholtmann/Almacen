<br><br><br>
<style>
    .muda{
        background-color: crimson !important;
        color: white !important;
    }
</style>
<?php
if( isset($_POST['razo_fac'])  )
     {
        $sql = "UPDATE fac_".$tutu." SET razo_fac='$_POST[razo_fac]' WHERE id_fac like '".$_POST['ida']."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }    
    
            ?>
                <script language="Javascript">
                    window.location = "?alm=_6";
                </script>
         <?php     
    }
if( isset($_GET['add'])  )
     {
        $sql = "UPDATE fac_".$tutu." SET  stat_fac='1' WHERE id_fac like '".htmlspecialchars($_GET['add'])."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }    
    
            ?>
                <script language="Javascript">
                    window.location = "?alm=_6";
                </script>
         <?php     
    }
if( isset($_GET['del'])  )
     {
        $sql = "UPDATE fac_".$tutu." SET  stat_fac='99' WHERE id_fac like '".htmlspecialchars($_GET['del'])."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "1H eliminado - ";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }    
        $sql = "UPDATE mov_".$tutu." SET  st_mov='99' WHERE fac_mov like '".htmlspecialchars($_GET['del'])."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "Registros anulados";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }        
    
            ?>
                <script language="Javascript">
                    window.location = "?alm=_6";
                </script>
         <?php     
    } 
    else {}


    if( isset($_POST['ingresano']) )
         { 
         $add = "INSERT INTO fac_".$tutu." (prov_fac,uni_fac,num_fac,unoh_fac,ser_fac,norec_fac,stat_fac,fecho_fac,useing) VALUES ('$_POST[prov_fac]','$_POST[uni_fac]','$_POST[num_fac]','$_POST[unoh_fac]','$_POST[ser_fac]','$_POST[norec_fac]','0','$_POST[fecho_fac]','$ide')";
            if ($mysqli->query($add) === TRUE) 
                    {
                echo "New record created successfully";
                    } else {
                        echo "Error: " . $add . "<br>" . $mysqli->error;
                    }
 //       exit ();

    ?>
            <script language="Javascript">
                window.location = "?alm=_6";
            </script>
     <?php   
         }
            elseif ( isset($_POST['cato']) )
        {	 

                $sql = "UPDATE fac_".$tutu." SET  prov_fac='$_POST[prov_fac]', uni_fac='$_POST[uni_fac]', num_fac='$_POST[num_fac]', unoh_fac='$_POST[unoh_fac]', ser_fac='$_POST[ser_fac]', norec_fac='$_POST[norec_fac]', fecho_fac='$_POST[fecho_fac]', useing='$ide' WHERE id_fac like '".$_POST['id_fac']."' ";    
                if ($mysqli->query($sql) === TRUE) {
                echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $mysqli->error;
                }
                //exit();
    ?>
            <script language="Javascript">
                window.location = "?alm=_6";
            </script>
     <?php 
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
                                     $query = "SELECT * FROM fac_".$tutu." where id_fac like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>           
                               <form role="form" method="post" action="?alm=_6">
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
                                    <label>Unidad</label>                           
                                    <select class="form-control" name="uni_fac">
                                        <?php                    
                                             $queryad = "SELECT id_uni,uni_uni FROM Uni_".$tutu." order by uni_uni ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_uni'] == $row['uni_fac'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_uni'];?>" selected><?php echo $rowad['uni_uni'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_uni'];?>"><?php echo $rowad['uni_uni'];?></option>
                                            <?php                        
                                            }     
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="ser_fac" value="<?php echo $row['ser_fac'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>                                                                      
                                <div class="form-group">
                                <input type="text" name="num_fac" value="<?php echo $row['num_fac'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>     
                                <div class="form-group">
                                <input type="text" name="norec_fac" value="<?php echo $row['norec_fac'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>                                                                     
                                <div class="form-group">
                                <input type="text" name="unoh_fac" value="<?php echo $row['unoh_fac'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>                                                                     
                                 
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Ingreso</label>
                                    <input class="form-control" id="date" name="fecho_fac" value="<?php echo $row['fecho_fac'];?>" type="text"/>
                                  </div>                                  
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_fac'];?>" name="id_fac" class="form-control" id="exampleInputEmail1" >
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
                            <li class="active"><a href="#">Ingresar Factura <span class="sr-only">(current)</span></a></li>
                          </ul>
                            <form role="form" method="post" action="?alm=_6">
                                <div class="form-group">                                                                            
                                </div>
                               <div class="form-group">               
                                    <label>Proveedor</label>                           
                                    <select class="form-control" name="prov_fac">
                                        <?php                    
                                             $queryad = "SELECT id_prov,n_prov FROM prov_".$tutu." order by n_prov ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                      <option value="<?php echo $rowad['id_prov'];?>"><?php echo $rowad['n_prov'];?></option>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div> 
                               <div class="form-group">               
                                    <label>Unidad</label>                           
                                    <select class="form-control" name="uni_fac">
                                        <?php                    
                                             $queryad = "SELECT id_uni,uni_uni FROM uni_".$tutu." order by uni_uni ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                                <option value="<?php echo $rowad['id_uni'];?>"><?php echo $rowad['uni_uni'];?></option>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                                                   
                                <div class="form-group">
                                <input type="text" name="ser_fac" class="form-control" id="exampleInputEmail1" placeholder="Serie"  required > 
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="num_fac" class="form-control" id="exampleInputEmail1" placeholder="No. Factura"  required > 
                                </div>  
                                <div class="form-group">
                                <input type="text" name="norec_fac" class="form-control" id="exampleInputEmail1" placeholder="No. Requi."  required > 
                                </div>
                                <div class="form-group">
                                <input type="text" name="unoh_fac" class="form-control" id="exampleInputEmail1" placeholder="1H"  required > 
                                </div>                                                                   
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Ingreso</label>
                                    <input class="form-control" type="date" id="date" name="fecho_fac" value="<?php echo $feiyo2;?>"  />
                                  </div> 
                                <input type="hidden" name="ingresano" >                                 
                                <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                            </form>          
            <script>
                $(document).ready(function(){
                  var date_input=$('input[name="fecho_fac"]'); //our date input has the name "date"
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
          <h2 class=" -header">Ingreso/Edici&oacute;n de facturas</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>Proveedor</th>
                  <th>Serie</th>                  
                  <th>No. factura</th>
                  <th>Requi.</th>
                  <th>1H</th>                  
                  <th>de fecha</th>
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_fac,prov_fac,num_fac,unoh_fac,ser_fac,norec_fac,stat_fac,razo_fac,id_prov,n_prov,nit_prov,DATE_FORMAT(fecho_fac,'%d/%m/%Y') AS niceDate FROM fac_".$tutu." inner join prov_".$tutu." on prov_fac = id_prov where stat_fac not like '00' order by fecho_fac DESC limit 150";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            $abc=0;
                            while($row = mysqli_fetch_assoc($result)) {
                                if ( $row['razo_fac'] == 'ANULADA') {
                         ?>      
                            <tr class="muda">                                                
						<?php                           
                                } else { 
                         ?> 
                            <tr>                        
						<?php                                   
                                }
                         ?> 
                            
                            <td><?php echo $row['n_prov'];?></td>
                             <td><?php echo $row['ser_fac'];?></td>                               
                            <td><?php echo $row['num_fac'];?></td>
                            <td><?php echo $row['norec_fac'];?></td> 
                            <td><?php echo $row['unoh_fac'];?></td>                                                        
                            <td><?php echo $row['niceDate'];?></td>                                
                            <td>
                                <?php 
                                 if ($row['stat_fac'] == '99' ) {
                                ?>
                                <a class="btn btn-warning btn-info-full" href="http://66.69.72.103/almacen/_print1h_2.php?fac=<?php echo $row['id_fac'];?>" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                                <a class="btn btn-danger btn-info-full" href="?alm=_6&add=<?php echo $row['id_fac'];?>" target="_self">Reactivar</a>
                                <a class="btn btn-info btn-info-full"  target="_self" data-toggle="modal" data-target="#myModal_<?php echo $abc; ?>">Razonar</a>
                                    <div id="myModal_<?php echo $abc; ?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Razonar 1H n&uacute;mero - <?php echo $row['unoh_fac'];?></h4>
                                          </div>
                                          <div class="modal-body">
                                              <strong>
                                              <?php echo $row['n_prov'];?><br>
                                              <?php echo $row['ser_fac'];?>-<?php echo $row['num_fac'];?><br>
                                              Requi. - <?php echo $row['norec_fac'];?> 1H - <?php echo $row['unoh_fac'];?><br>                                              
                                              </strong>                                                  
                                              <hr>
                                            <form role="form" method="post" action="?alm=_6">
                                                <label>Razonamiento</label>
                                                <div class="form-group">                                                                            
                                                    <textarea class="form-control" id="form-field-12" name="razo_fac" placeholder="Razonar 1H"><?php echo $row['razo_fac'] ; ?></textarea>
                                                    <input type="hidden" name="ida" value="<?php echo $row['id_fac'] ; ?>">
                                                </div>                                                    
                                                <div class="form-group">                                                                                                                   
                                                    <button type="submit" class="btn btn-success btn-info-full">Ingresar o Editar Razon</button>                                                    
                                                </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>                                
                                    <!-- Trigger the modal with a button -->
                                    <!-- Modal -->
                                <?php                                      
                                 } else {
                                ?>                                     
                                <a class="btn btn-success btn-info-full" href="?alm=_6&edit=<?php echo $row['id_fac'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>                 
                                <a class="btn btn-info btn-info-full" href="?alm=_7&fac=<?php echo $row['id_fac'];?>" target="_self"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>  
                                <a class="btn btn-warning btn-info-full" href="http://66.69.72.103/almacen/_print1h.php?fac=<?php echo $row['id_fac'];?>" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a> 
                                <a class="btn btn-danger btn-info-full" href="?alm=_6&del=<?php echo $row['id_fac'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
                                <?php                                      
                                 }
                                ?>
                                    </td>                                
                            </tr>

						<?php
                                $abc ++;
                            } 
                        }
                        mysqli_free_result($result);?>           
                    </tbody>
                </table>   
          </div>
        </div>
      </div>
    </div>