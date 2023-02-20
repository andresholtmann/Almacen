
<style>
.btn-sq-lg {
  width: 100% !important;

    font-size: 1.2em;
    margin: 4px;
}
.btn-sq-lg span{
  
    font-size: 0.8em;
  
}    

.btn-sq {
  width: 100px !important;
  height: 100px !important;
  font-size: 10px;
}

.btn-sq-sm {
  width: 50px !important;
  height: 50px !important;
  font-size: 10px;
}

.btn-sq-xs {
  width: 25px !important;
  height: 25px !important;
  padding:2px;
}

    .babo {
        background-color: black !important;
        color: white;
    }

</style>
                        <?php   
//                         $query = "SELECT id_cat,cat FROM cat_".$tutu." order by cat ASC";
//                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
//
//                        if($result) {
//                            while($row = mysqli_fetch_assoc($result)) {
  //                              $depo = $row['id_cat'] ;
                         ?>                     
                              <?php   
    //                        if ($resulta = mysqli_query($mysqli, "SELECT id_pro,cat_pro,id_cat,cat FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat where cat_pro like '$depo' ")) {
      //                      $row_cnta = mysqli_num_rows($resulta);
                            ?>  
                    <!--      <span class="badge"><stron>&nbsp;&nbsp;<?php// printf($row_cnta); ?>&nbsp;&nbsp;</stron></span>-->
                            <?php                       
//                            mysqli_free_result($resulta);
  //                          }                      
                        ?>
                <?php// echo $row['cat'];?> 
    
                    <?php
    //                        }
      //                  }
        //                mysqli_free_result($result);
                        ?> 
<div class="container-fluid">   
      <div class="row">

        <div class=" main">
          <ul class="nav nav-sidebar">
          <li class="active"><a href="#">Resumen General</a></li>
          </ul>      
	<div class="row">
        <div class="col-lg-12">
            
            
          <h2 class=" -header">Productos con saldo mayor a 0</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>C&oacute;digo</th>
                  <th>Producto</th>                  
                  <th>Categor&iacute;a</th>
                  <th>Presentaci&oacute;n</th>
                  <th>Limite</th>                  
                  <th>Saldo</th>
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                            $query = "SELECT p.id_pro,p.cod_pro,p.cat_pro,p.pres_pro,p.pres_pro,p.pro_pro,p.limin_pro,p.act_pro,p.st_pro,c.id_cat,c.cat,pr.id_pres,pr.pres_pres,(SELECT SUM(m.cant_mov) FROM mov_".$tutu." as m where m.prod_mov = p.id_pro and m.tip_mov in ('INV','ING') and m.st_mov = '1') as ING,(SELECT SUM(m.cant_mov) FROM mov_".$tutu." as m where m.prod_mov = p.id_pro and m.tip_mov = 'EGR' and m.st_mov = '1') as EGR FROM prod_".$tutu." as p inner join cat_".$tutu." as c on p.cat_pro = c.id_cat inner join pres_".$tutu." as pr on p.pres_pro = pr.id_pres where p.st_pro like '0' order by p.cod_pro ASC ";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $totoro = $row['ING'] - $row['EGR'];
                                //$totoro=0;
                            if ($totoro == 0 ) 
                            {
                                ?>
                        <tr>
                        <td><?php echo $row['cod_pro'];?></td>
                        <td><?php echo $row['pro_pro'];?></td>
                        <td><?php echo $row['cat'];?></td>
                        <td><?php echo $row['pres_pres'];?></td>                        
                        <td><?php echo $row['limin_pro'];?></td>                                           
                        <td>
                            <?php echo $totoro;?> 
                        </td>
                        <td>
                            <a href="?alm=_24&pro=<?php echo $row['id_pro'];?>" target="_blank" class="btn btn-sq-lg btn-success babo"> Kardex
                            </a>                                
                        </td>
                        </tr>                        
                              <?php                                          
                                    }  
                                elseif ($totoro > $row['limin_pro']) {
                                ?>
                        <tr>
                        <td><?php echo $row['cod_pro'];?></td>
                        <td><?php echo $row['pro_pro'];?></td>
                        <td><?php echo $row['cat'];?></td>
                        <td><?php echo $row['pres_pres'];?></td>                        
                        <td><?php echo $row['limin_pro'];?></td>                                           
                        <td>
                            <?php echo $totoro;?> 
                        </td>
                        <td>
                            <a href="?alm=_24&pro=<?php echo $row['id_pro'];?>" target="_blank" class="btn btn-sq-lg btn-success"> Kardex
                            </a>                                
                        </td>
                        </tr>
                                <?php 
                                }   
                                elseif ($totoro == $row['limin_pro']) {
                                ?>
                        <tr>
                        <td><?php echo $row['cod_pro'];?></td>
                        <td><?php echo $row['pro_pro'];?></td>
                        <td><?php echo $row['cat'];?></td>
                        <td><?php echo $row['pres_pres'];?></td>                        
                        <td><?php echo $row['limin_pro'];?></td>                                           
                        <td>
                            <?php echo $totoro;?> 
                        </td>
                        <td>
                            <a href="?alm=_24&pro=<?php echo $row['id_pro'];?>" target="_blank" class="btn btn-sq-lg btn-warning">                                                   Kardex
                            </a>                                
                        </td>
                        </tr>                        

                                <?php 
                                }    
                                elseif ($totoro < $row['limin_pro']) {
                                ?>
                        <tr>
                        <td><?php echo $row['cod_pro'];?></td>
                        <td><?php echo $row['pro_pro'];?></td>
                        <td><?php echo $row['cat'];?></td>
                        <td><?php echo $row['pres_pres'];?></td>                        
                        <td><?php echo $row['limin_pro'];?></td>                                           
                        <td>
                            <?php echo $totoro;?> 
                        </td>
                        <td>
                            <a href="?alm=_24&pro=<?php echo $row['id_pro'];?>" target="_blank" class="btn btn-sq-lg btn-danger">                                                    Kardex
                            </a>                                
                        </td>
                        </tr>                          
                            <?php 
                                }                                    
                                ?>
                                 
   						<?php
                            }
                        }
                        mysqli_free_result($result);
                    ?>  
                        
                        
                        
          
                    </tbody>
                </table>   
          </div>
            
            
            

        </div>
	</div>           
            <br>
      </div>
</div> 
</div>    
