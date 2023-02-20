<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM prod_".$tutu." WHERE id_pro like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?alm=_5";
                </script>
         <?php     
    } 
    else {


        if( isset($_POST['ingresano']) )
             { 
            $propro = $mysqli->real_escape_string($_POST['pro_pro']);            
             $add = "INSERT INTO prod_".$tutu." (cod_pro,codrengasto_pro,cat_pro,pro_pro,pres_pro,limin_pro,act_pro,ing_pro) VALUES ('$_POST[cod_pro]','$_POST[codrengasto_pro]','$_POST[cat_pro]','$propro','$_POST[pres_pro]','$_POST[limin_pro]','$_POST[act_pro]','$ide')";
                if ($mysqli->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $mysqli->error;
                        }

            
            
        ?>
                <script language="Javascript">
                    window.location = "?alm=_5";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 
                $propro = $mysqli->real_escape_string($_POST['pro_pro']);            
                    $sql = "UPDATE prod_".$tutu." SET cod_pro='$_POST[cod_pro]', codrengasto_pro='$_POST[codrengasto_pro]', cat_pro='$_POST[cat_pro]', pro_pro='$propro', pres_pro='$_POST[pres_pro]', limin_pro='$_POST[limin_pro]', ing_pro='$ide' WHERE id_pro like '".$_POST['id_pro']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                    //exit();
        ?>
                <script language="Javascript">
                    window.location = "?alm=_5";
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
                                     $query = "SELECT * FROM prod_".$tutu." where id_pro like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>           
                               <form role="form" method="post" action="?alm=_5">
                                <div class="form-group">
                                <input type="text" name="cod_pro" value="<?php echo $row['cod_pro'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>
                                <div class="form-group">
                                <input type="text" name="codrengasto_pro" value="<?php echo $row['codrengasto_pro'];?>" class="form-control" id="exampleInputEmail1" placeholder="Cod. Renglon del Gasto" >
                                </div>                                   
                               <div class="form-group">               
                                    <label>Categor&iacute;a</label>                           
                                    <select class="form-control" name="cat_pro">
                                        <?php                    
                                             $queryad = "SELECT id_cat,cat FROM cat_".$tutu." order by cat ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_cat'] == $row['cat_pro'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_cat'];?>" selected><?php echo $rowad['cat'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_cat'];?>"><?php echo $rowad['cat'];?></option>
                                            <?php                        
                                            }     
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="pro_pro" value="<?php echo $row['pro_pro'];?>" class="form-control" id="exampleInputEmail1" placeholder="Tel&eacute;fono" > 
                                </div>
                               <div class="form-group">               
                                    <label>Presentaci&iacute;on</label>                           
                                    <select class="form-control" name="pres_pro" >
                                        <?php                    
                                             $queryad = "SELECT id_pres,pres_pres FROM pres_".$tutu." order by id_pres ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_pres'] == $row['pres_pro'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_pres'];?>" selected><?php echo $rowad['pres_pres'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_pres'];?>"><?php echo $rowad['pres_pres'];?></option>
                                            <?php                        
                                            }                    
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>     
                                <div class="form-group">
                                <input type="text" name="limin_pro" value="<?php echo $row['limin_pro'];?>" class="form-control" id="exampleInputEmail1" placeholder="Tel&eacute;fono" > 
                                </div>                                   
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_pro'];?>" name="id_pro" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                              </form>       
                            <?php
                                   }
                                        mysqli_free_result($result);                
                                                }
                        }
            else
                        {                
                            ?>   
                                <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Agregar Producto <span class="sr-only">(current)</span></a></li>
                          </ul>
                            <form role="form" method="post" action="?alm=_5">
                                <div class="form-group">                                                                            
                                </div>
                                <div class="form-group">
                                <input type="text" name="cod_pro" class="form-control" id="exampleInputEmail1" placeholder="C&oacute;digo"  required > 
                                </div>
                                <div class="form-group">
                                <input type="text" name="codrengasto_pro" class="form-control" id="exampleInputEmail1" placeholder="Cod. Renglon del Gasto"  required > 
                                </div>                                
                               <div class="form-group">               
                                    <label>Categor&iacute;a</label>                           
                                    <select class="form-control" name="cat_pro">
                                        <?php                    
                                             $queryad = "SELECT id_cat,cat FROM cat_".$tutu." order by cat ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                      <option value="<?php echo $rowad['id_cat'];?>"><?php echo $rowad['cat'];?></option>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                   
                                <div class="form-group">
                                <input type="text" name="pro_pro" class="form-control" id="exampleInputEmail1" placeholder="Producto" required > 
                                </div>
                               <div class="form-group">               
                                    <label>Presentaci&iacute;on</label>                           
                                    <select class="form-control" name="pres_pro" >
                                        <?php                    
                                             $queryad = "SELECT id_pres,pres_pres FROM pres_".$tutu." order by id_pres ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                      <option value="<?php echo $rowad['id_pres'];?>"><?php echo $rowad['pres_pres'];?></option>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                <input type="hidden" name="act_pro" class="form-control" value="0">                                    
                                </div>
                                <div class="form-group">
                                <input type="text" name="limin_pro" class="form-control" id="exampleInputEmail1" placeholder="Cant. M&iacute;nima" required > 
                                </div>                                
                                <input type="hidden" name="ingresano" >                                 
                                <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                            </form>          

                            <?php
                       }                
                ?>            
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class=" -header">Ingreso/Edici&oacute;n de Productos</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>C&oacute;digo</th>
                  <th>Renglon</th>                            
                  <th>Categor&iacute;a</th>
                  <th>Producto</th>
                  <th>Presentaci&oacute;n</th>
                  <th>L&iacute;m. M&iacute;nimo</th>                            
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT * FROM prod_".$tutu." order by cod_pro ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $row['cod_pro'];?></td>
                            <td><?php echo $row['codrengasto_pro'];?></td>                                
                            <td>
                                        <?php                    
                                             $queryad = "SELECT id_cat,cat FROM cat_".$tutu." where id_cat like '".$row['cat_pro']."' ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                echo $rowad['cat'] ;
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>                                  
                            </td>
                            <td><?php echo $row['pro_pro'];?></td>                                
                            <td>
                                        <?php                    
                                             $queryad = "SELECT id_pres,pres_pres FROM pres_".$tutu." where id_pres like '".$row['pres_pro']."' ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                            <?php echo $rowad['pres_pres'];?>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>                                  
                            </td>     
                            <td><?php echo $row['limin_pro'];?></td>                                
                            <td>
                                <a class="btn btn-success btn-info-full" href="?alm=_5&edit=<?php echo $row['id_pro'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>                     
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_5&del=<?php echo $row['id_pro'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
                                        <?php                        
                                        }
                                            else
                                        {
                                        ?> 
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
                                        <?php                        
                                        }
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