<div class="container">   
      <div class="row">
          <h2 class=" -header">Seleccione Usuario</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>Nombre y Apellidos</th>
                  <th>Departamento</th>
                  <th>Puesto</th>
                  <th>Ext.</th>                            
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_pers,n_pers,ubi_pers,pue_pers,ext_pers,id_dep,n_dep FROM pers_".$tutu." inner join depto_".$tutu." on ubi_pers = id_dep order by n_pers ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $row['n_pers'];?></td>                                                                
                            <td><?php echo $row['n_dep'];?></td>
                            <td><?php echo $row['pue_pers'];?></td>                                
                            <td><?php echo $row['ext_pers'];?></td>                                                                
                            <td>
                                <a class="btn btn-success btn-info-full" href="?alm=_9&sal=<?php echo $row['id_pers'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>                     
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