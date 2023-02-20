<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
     { 
     $add = "INSERT INTO user (Nombre,Apellido,username,password,roll,status) VALUES ('$_POST[Nombre]','$_POST[Apellido]','$_POST[username]','$_POST[password]','$_POST[roll]','$_POST[status]')";
                                if ($mysqli->query($add) === TRUE) 
                                        {
                                    echo "New record created successfully";
                                        } else {
                                            echo "Error: " . $add . "<br>" . $mysqli->error;
                                        }
?>
<script language="Javascript">
    window.location = "?alm=_1";
</script>
 <?php   
	 }
else 	 
    {	 

    
    }
?>




<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Agregar Usuario <span class="sr-only">(current)</span></a></li>
          </ul>
<form role="form" method="post" action="?alm=_1">
              <div class="form-group">                                                                            
                                
                                </div>
                                <div class="form-group">
                                <input type="text" name="Nombre" class="form-control" id="exampleInputEmail1" placeholder="Nombre" >
                                </div>
                                <div class="form-group">                                    
                                    <input type="text" name="Apellido" class="form-control" id="exampleInputEmail1" placeholder="Apellido" >                                    
                                </div>
                                <div class="form-group">                                    
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Usuario" >
                                </div>
                                <div class="form-group">                                    
                                    <input type="password" type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password" >                                    
                                </div>
                                <div class="form-group">                                    
                                <input type="hidden" name="status" class="form-control" value="1" id="exampleInputEmail1">
                                </div>    
                                <div class="form-group">             
                                  <label>Roll</label>
                                <select name="roll" id="category" class="form-control" required>
                                <option value="User">Usuario General</option>                                                                        
                                <option value="Admin">Administrador</option>
                                <option value="Soli">Solicitante</option>                                
                                </select> 
                                </div>      
    <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
    
            </form>
             
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Usuarios</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Usuario</th>
                  <th>Roll</th>
                    <th>&#64;</th>
                </tr>
              </thead>
              <tbody>
						<?php                    
                         $query = "SELECT id,Nombre,Apellido,username,roll,status FROM user order by id ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                       $a = 1 ; 
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                                <td><?php echo $a ;?></td>
                                <td><?php echo $row['Nombre'];?></td>
                                <td><?php echo $row['Apellido'];?></td>
                                <td><?php echo $row['username'];?></td>                                
                                <td><?php echo $row['roll'];?></td>                                
                                <td class="ext"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;&nbsp;<?php echo $row['status'];?></td>
                            </tr>
						<?php
                                $a ++ ;
                            }
                        }
                        mysqli_free_result($result);?>                   
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>