<div class="container">   
    <div class="row">
          <h2 class=" -header">Inventario General</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>C&oacute;digo</th>
                  <th>Categor&iacute;a</th>
                  <th>Producto</th>
                  <th>Presentaci&oacute;n</th>
                  <th>L&iacute;m. M&iacute;nimo</th> 
                  <th>En Bodega</th>                             
                  <th>Costo Prom.</th>                                                         
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_pro,cod_pro,cat_pro,pro_pro,pres_pro,limin_pro,act_pro,cosprod_pro,id_cat,cat,id_pres,pres_pres FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat inner join pres_".$tutu." on pres_pro = id_pres order by cod_pro ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $row['cod_pro'];?></td>
                            <td>
                            <?php echo $row['cat'];?>
                            </td>
                            <td><?php echo $row['pro_pro'];?></td>                                
                            <td>
                            <?php echo $row['pres_pres'];?>                            </td>     
                            <td><?php echo $row['limin_pro'];?></td>                                
                                      <td><?php echo $row['act_pro'];?></td>     
                                      <td><?php echo $row['cosprod_pro'];?></td>                                     
           
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