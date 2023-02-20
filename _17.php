
<div class="container-fluid">   
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
           <h3>Seleccione el mes y el a&ntilde;o para realizar su consulta</h3>
<hr>           
            <form class="form-inline" action="?alm=_17" method="post">
              <div class="form-group">
                  <label for="sel1">Mes:</label>
                  <select class="form-control" name="mes" id="sel1">
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Nobiembre</option>
                    <option value="12">Diciembre</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="sel1">A&ntilde;o:</label>
                  <select class="form-control" name="ano" id="sel2s">
                    <option value="2017">2017</option>   
                    <option value="2018">2018</option>
                    <option value="2019">2019</option> 
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>  
                    <option value="2022" selected>2022</option>                      
                  </select>
              </div>
            <hr>              
            <style>
                .ho{
                    text-align: center;
                }    
                .chula{
                    color: dodgerblue;
                }  
                .chulb{
                    color:crimson;
                }  
                .chulc{
                    color:fuchsia;
                }  
                .chulc{
                    color:deeppink;
                }                  
                .telo{
                    text-align: center;
                }
            </style>             
              <div class="form-group ho">              
                     <button type="submit" class="btn btn-success btn-info-full">Solicitar informaci&oacute;n</button>
              </div>           
            </form>        
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class=" -header">Consulta de Ingresos/Egresos</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>Producto</th>                        
                  <th class="telo">Ingreso</th>
                  <th class="telo">Egreso</th>
                  <th class="telo">Cantidad</th>                  
                  <th class="telo">Precio U.</th>                                    
                  <th class="telo">Movimiento</th>                                                      

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if( isset($_POST['mes'])  )
                         {               
                                $todoculo = $_POST['ano'].'-'.$_POST['mes'] ;
                             $query = "SELECT id_mov,fac_mov,kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,fech_mov,st_mov,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS niceDate FROM mov_".$tutu." inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres where fech_mov like '".$todoculo."%' and st_mov like '1'  order by fech_mov DESC";
                            $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                            if($result) {
                                while($row = mysqli_fetch_assoc($result)) {
                             ?> 
                                <tr>
                                <td><?php echo $row['cod_pro'];?> - <?php echo $row['pro_pro'];?> - <span class="chula"><?php echo $row['pres_pres'];?></span></td>                                                                
                                    <?php                                       
                                        if ($row['tip_mov'] ==  'ING' ) {
                                                 $queryad = "SELECT id_fac,num_fac,unoh_fac FROM fac_".$tutu." where id_fac like '".$row['fac_mov']."'    ";
                                                $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                                if($resultad) {
                                                    while($rowad = mysqli_fetch_assoc($resultad)) {
                                                ?> 
                                                    <td class="telo">fac. <span class="chulb"><?php echo $rowad['num_fac'];?></span> - 1H. <span class="chulc"><?php echo $rowad['unoh_fac'];?></span></td>                     
                                                <?php                        
                                  
                                                    }
                                                }
                                                mysqli_free_result($resultad);                                            
                                            
                                        }   elseif ($row['tip_mov'] ==  'INV' ) {
                                            
                                                ?> 
                                                    <td class="telo">Inventario</td>                                                   
                                                <?php                        
                                            
                                        }     else {
                                                ?> 
                                                    <td class="telo">-</td>                                                   
                                                <?php                        
                                        }             
                                    ?>                                     

                                    <?php                                       
                                        if ($row['tip_mov'] ==  'EGR' ) {
                                            
                                                 $queryad = "SELECT id_kar,num_kar,prov_kar FROM kardex_".$tutu." where id_kar like '".$row['kar_mov']."' ";
                                                $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                                if($resultad) {
                                                    while($rowad = mysqli_fetch_assoc($resultad)) {
                                                ?> 
                                                    <td class="telo"><span class="chuld"><?php echo $rowad['num_kar'];?></span></td>                                                   
                                                <?php                        
                                                    }
                                                }
                                                mysqli_free_result($resultad);                                             
                                            
                                        }     else {
                                                ?> 
                                                    <td class="telo"> -</td>                                                   
                                                <?php                        
                                        }             
                                    ?>

                                <td class="telo"><?php echo $row['cant_mov'];?></td>                                                            
                                <td class="telo"><?php echo $row['preu_mov'];?></td>                                                                                        
                                <td class="telo"><?php echo $row['niceDate'];?></td>                                                                                                                    
                            
                                </tr>
                            <?php
                                }
                            }
                            mysqli_free_result($result);
                        }                         
                        ?>   
                  
                    </tbody>
                </table>   
          </div>
        </div>    
    </div>
</div>    