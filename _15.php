<?php
if( isset($_GET['del'])  )
     {
                    $sql = "UPDATE pers_".$tutu." SET st_pers='1', usu_pers='$ide' WHERE id_pers like '".htmlspecialchars($_GET['del'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
   // exit();
                    //      $deleteada = "DELETE FROM pers_".$tutu." WHERE id_pers like '".htmlspecialchars($_GET['del'])."'";
                    //        if ($mysqli->query($deleteada) === TRUE) {
                    //            echo "Record deleted successfully";
                    //                } else {
                    //                    echo "Error deleting record: " . $mysqli->error;
                    //                }
            ?>
                <script language="Javascript">
                    window.location = "?alm=_15";
                </script>
         <?php     
    } 
elseif( isset($_GET['delo'])  )
     {
                    $sql = "UPDATE pers_".$tutu." SET st_pers='0', usu_pers='$ide' WHERE id_pers like '".htmlspecialchars($_GET['delo'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
    // exit();
            ?>
                <script language="Javascript">
                    window.location = "?alm=_15";
                </script>
         <?php     
    } 
    else {


        if( isset($_POST['ingresano']) )
             { 
             $add = "INSERT INTO pers_".$tutu." (n_pers,pue_pers,ubi_pers,usu_pers) VALUES ('$_POST[n_pers]','$_POST[pue_pers]','$_POST[ubi_pers]','$ide')";
                if ($mysqli->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $mysqli->error;
                        }

            //exit ();    
            
        ?>
                <script language="Javascript">
                    window.location = "?alm=_15";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE pers_".$tutu." SET n_pers='$_POST[n_pers]', pue_pers='$_POST[pue_pers]', ubi_pers='$_POST[ubi_pers]', usu_pers='$ide' WHERE id_pers like '".$_POST['id_pers']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
             //   exit();
        ?>
                <script language="Javascript">
                    window.location = "?alm=_15";
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
                            <li class="active"><a href="#">Editar Pesona <span class="sr-only">(current)</span></a></li>
                          </ul> 
                            <?php                       
                                     $query = "SELECT * FROM pers_".$tutu." where id_pers like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>           
                               <form role="form" method="post" action="?alm=_15">
                                <div class="form-group">
                                <textarea class="form-control" name="n_pers" id="exampleFormControlTextarea1" rows="3" placeholder="Nombre"><?php echo $row['n_pers'];?></textarea>                                             
                                </div>
                               <div class="form-group">               
                                    <label>Depto.</label>                           
                                    <select class="form-control" name="ubi_pers">
                                        <?php                    
                                             $queryad = "SELECT id_dep,n_dep FROM depto_".$tutu." order by n_dep ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_dep'] == $row['ubi_pers'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_dep'];?>" selected><?php echo $rowad['n_dep'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_dep'];?>"><?php echo $rowad['n_dep'];?></option>
                                            <?php                        
                                            }     
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                 
                                <div class="form-group">
                                <textarea class="form-control" name="pue_pers" id="exampleFormControlTextarea1" rows="2" placeholder="Puesto que ocupa"><?php echo $row['pue_pers'];?></textarea>
                                </div>

                               
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_pers'];?>" name="id_pers" class="form-control" id="exampleInputEmail1" >
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
                            <li class="active"><a href="#">Agregar Persona <span class="sr-only">(current)</span></a></li>
                          </ul>
                            <form role="form" method="post" action="?alm=_15">
                                <div class="form-group">                                                                            
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" name="n_pers" id="exampleFormControlTextarea1" rows="3" placeholder="Nombre"></textarea>                                
                                </div>
                               <div class="form-group">               
                                    <label>Depto.</label>                           
                                    <select class="form-control" name="ubi_pers">
                                        <?php                    
                                             $queryad = "SELECT id_dep,n_dep FROM depto_".$tutu." order by n_dep ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                      <option value="<?php echo $rowad['id_dep'];?>"><?php echo $rowad['n_dep'];?></option>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                   
                                <div class="form-group">
                                <textarea class="form-control" name="pue_pers" id="exampleFormControlTextarea1" rows="2" placeholder="Puesto que ocupa"></textarea>
                                </div>
                               <div class="form-group">               
                   
                                <input type="hidden" name="act_pro" class="form-control" value="0">                                    
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
                  <th>Nombre</th>
                  <th>Depto.</th>
                  <th>Puesto</th>
                  <th></th>  
                        </tr>
                    </thead>
                <style>
                    .fondual{
                        background-color: chocolate;
                        color:deeppink;
                    }  
                  </style>                    
                    <tbody>
						<?php   
                         $query = "SELECT * FROM pers_".$tutu." inner join depto_".$tutu." on ubi_pers = id_dep where st_pers like '0' order by n_pers ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                                    	<?php          
                                            if ($row['st_pers'] == '1')
                                        {
                                        ?> 
                                            <tr class="fondual">
                                        <?php                        
                                        }
                                            else
                                        {
                                        ?> 
                                            <tr>
                                        <?php                        
                                        }
                                        ?>                           
                            
                            <td><?php echo $row['n_pers'];?></td>                                
                            <td><?php echo $row['n_dep'];?></td>       
                            <td><?php echo $row['pue_pers'];?></td>                                                                                        
                            <td>
                                  
                                    	<?php          
                                            if ($row['st_pers'] == '1')
                                        {
                                        ?> 
                                            <a class="btn btn-info btn btn-danger" href="?alm=_15&delo=<?php echo $row['id_pers'];?>" target="_self"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a>
                                        <?php                        
                                        }
                                            else
                                        {
                                        ?> <a class="btn btn-success btn-info-full" href="?alm=_15&edit=<?php echo $row['id_pers'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>
                                            <a class="btn btn-info btn-info-full" href="?alm=_15&del=<?php echo $row['id_pers'];?>" target="_self"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></a>
                                        <?php                        
                                        }
                                        ?>               
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_15&del=<?php echo $row['id_pers'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
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
                            }
                        }
                        mysqli_free_result($result);?>   
                  
                    </tbody>
                </table>   
          </div>
        </div>
      </div>
    </div>