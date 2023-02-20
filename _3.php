<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM pres_".$tutu." WHERE id_pres like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?alm=_3";
                </script>
         <?php     
    } 
    else {


        if( isset($_POST['cat']) )
             { 
             $add = "INSERT INTO pres_".$tutu." (pres_pres,Useing) VALUES ('$_POST[cat]','$ide')";
                if ($mysqli->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $mysqli->error;
                        }

            
            
        ?>
                <script language="Javascript">
                    window.location = "?alm=_3";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE pres_".$tutu." SET pres_pres='$_POST[catario]', Useing='$ide' WHERE id_pres like '".$_POST[id_pres]."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
        ?>
                <script language="Javascript">
                    window.location = "?alm=_3";
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
                            <li class="active"><a href="#">Editar Presentaci&oacute;n <span class="sr-only">(current)</span></a></li>
                          </ul> 
                            <?php                       
                                     $query = "SELECT * FROM pres_".$tutu." where id_pres like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>           
                               <form role="form" method="post" action="?alm=_3">
                                    <div class="form-group">                                   
                                        <input type="text" value="<?php echo $row['pres_pres'];?>" name="catario" class="form-control" id="exampleInputEmail1" >
                                    </div>
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_pres'];?>" name="id_pres" class="form-control" id="exampleInputEmail1" >
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
                            <li class="active"><a href="#">Agregar Presentaci&oacute;n <span class="sr-only">(current)</span></a></li>
                          </ul>
                            <form role="form" method="post" action="?alm=_3">
                                <div class="form-group">                                                                            

                                </div>
                                <div class="form-group">
                                <input type="text" name="cat" class="form-control" id="exampleInputEmail1" placeholder="Categor&iacute;a" >
                                </div>
                                <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                            </form>          

                            <?php
                       }                
                ?>            
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class=" -header">Ingreso/Edici&oacute;n de las Presentaciones del Producto</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>Nombre</th>
                    <th>El&iacute;minar&nbsp;</th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT * FROM pres_".$tutu." order by pres_pres ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $row['pres_pres'];?></td>
                            <td class="ext">
                                <a class="btn btn-success btn-info-full" href="?alm=_3&edit=<?php echo $row['id_pres'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>                     
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_3&del=<?php echo $row['id_pres'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
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