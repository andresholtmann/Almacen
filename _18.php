<br><br><br><br>
<div class="container-fluid">   
    <div class="row">
        <div class="col-sm-3  col-md-2 sidebar"><br>
           <h3>Seleccione el Receptor</h3>
<hr>           
            <form class="form-inline" action="?alm=_18" method="post">
              <div class="form-group">
                  <label for="sel1">Receptor:</label>
                  <select class="form-control" name="mosco" id="sel1">
                        <?php                    
                             $queryad = "SELECT id_pers,n_pers,ubi_pers,pue_pers,ext_pers,id_dep,n_dep FROM pers_".$tutu." inner join depto_".$tutu." on ubi_pers = id_dep and st_pers like '0'  order by n_pers ASC ";
                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                            if($resultad) {
                                while($rowad = mysqli_fetch_assoc($resultad)) {
                             ?>       
                      <option value="<?php echo $rowad['id_pers'];?>"><?php echo $rowad['n_pers'];?>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowad['n_dep'];?></option>
                        <?php                      
                                }
                            }
                            mysqli_free_result($resultad);
                        ?> 
                  </select>
              </div>

            <hr>              
            <style>
  
                .list-group a{
                    color: black;
                }
                
            </style>             
              <div class="form-group ho">              
                     <button type="submit" class="btn btn-success btn-info-full">Solicitar informaci&oacute;n</button>
              </div>           
            </form>        
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                      <?php
                            $aa = $_POST['mosco'] ;
                        ?>
    		<div class="list-group">
    		    <a href="#" class="list-group-item active">Productos pedidos</a>
                    <?php
                    if( isset($_POST['mosco'])  )
                         {               
                            $sql = "SELECT id_pers,n_pers,id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_mov,kar_mov,tip_mov,prod_mov,cant_mov,fech_mov,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM pers_".$tutu." inner join kardex_".$tutu." on id_pers = prov_kar inner join mov_".$tutu." on id_kar = kar_mov inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres  where id_pers like '".$aa."' group by prod_mov order by cod_pro ASC";
                            $result = $mysqli->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                    ?>       
    		    <a href="?alm=_19&us=<?php echo $row['id_pers']; ?>&co=<?php echo $row['prod_mov']; ?>" class="list-group-item"><?php echo $row['cod_pro']; ?>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<?php echo $row['pro_pro']; ?>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<?php echo $row['pres_pres']; ?></a>             

                    <?php                                    
                                }
                            } else {
                                echo "0 results";
                            }
                            $result->close();  
                        }              
                        ?>    
    		</div>                            
        </div>    
    </div>
</div>    