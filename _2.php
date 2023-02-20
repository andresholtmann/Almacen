<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM cat_".$tutu." WHERE id_cat like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?alm=_2";
                </script>
         <?php     
    } 
    else {


        if( isset($_POST['cat']) )
             { 
             $add = "INSERT INTO cat_".$tutu." (cat,Useing) VALUES ('$_POST[cat]','$ide')";
                if ($mysqli->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $mysqli->error;
                        }

            
            
        ?>
                <script language="Javascript">
                    window.location = "?alm=_2";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE cat_".$tutu." SET cat='$_POST[catario]', Useing='$ide' WHERE id_cat like '".$_POST[id_cat]."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
        ?>
                <script language="Javascript">
                    window.location = "?alm=_2";
                </script>
         <?php 
            }


     }
?>



<div class="container-fluid">   
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Agregar Usuario <span class="sr-only">(current)</span></a></li>
          </ul>
<form role="form" method="post" action="?alm=_2">
              <div class="form-group">                                                                            
                                
                                </div>
                                <div class="form-group">
                                <input type="text" name="cat" class="form-control" id="exampleInputEmail1" placeholder="Categor&iacute;a" >
                                </div>
                                
             
  
    <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                </form>
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class=" -header">Ingreso/Edici&oacute;n de Categor&iacute;as</h2>
          <div class="table-responsive">
              
              
                          <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Filtrar por" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
              
              <table class="table table-list-search table-striped">
                    <thead>
                        <tr>
                           <th>Nombre</th>
                    <th>Editar&nbsp;</th>
                    <th>El&iacute;minar&nbsp;</th> 
                        </tr>
                    </thead>
                    <tbody>
						<?php                    
                         $query = "SELECT * FROM cat_".$tutu." order by cat ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                  <form role="form" method="post" action="?alm=_2">
                            <tr>
                               
                                <td><input type="text" value="<?php echo $row['cat'];?>" name="catario" class="form-control" id="exampleInputEmail1" ><span class="blanco"><?php echo $row['cat'];?></span></td>
                                <td ><button type="submit" class="btn btn-primary btn-info-full"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></button></td>
                                <td >
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_2&del=<?php echo $row['id_cat'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
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
                      <input type="hidden" value="<?php echo $row['id_cat'];?>" name="id_cat" class="form-control" id="exampleInputEmail1" >
                      <input type="hidden" name="cato" value="">
                      </form>
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