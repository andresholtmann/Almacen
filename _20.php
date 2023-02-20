<div class="container-fluid">   
      <div class="row">
            <br><br><br><br>
        <div class=" main">
          <ul class="nav nav-sidebar">
          <li class="active"><a href="#"><h1>Reporte de pedidos por Usuaio</h1></a></li>
          </ul>    
               <form class="form-inline" action="?alm=_20" method="post">
                <div class="form-group">
                  <label for="sel1">Receptor:</label>
                  <select class="form-control" name="poso" id="sel1">
                        <?php                    
                             $queryad = "SELECT id_dep,n_dep FROM depto_".$tutu."  order by n_dep ASC ";
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
            <hr>     
        <?php  
                if( isset($_POST['poso'])  )
                     {            
            $query = "SELECT id_dep,n_dep from  depto_".$tutu." where id_dep like '".$_POST['poso']."' ";
            $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
            if($result) {
            while($row = mysqli_fetch_assoc($result)) 
                {
                    $nomo = $row['n_dep'] ;
        ?>     
              <h3>Reporte consolidado por Departamento: <?php echo $row['n_dep'];?></h3>
        <?php                                         
                }  
            mysqli_free_result($result);                            
            }   
                    }                      
        ?>              
        
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Salida</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>                
            </tr>
        </thead>
        <tbody>              
                <?php
                if( isset($_POST['poso'])  )
                     {
                    $ido = $_POST['poso'] ; 
                ?>
                 
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

                <script>
                $(document).ready(function() {
                    $('#example').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            
                            {
                                extend: 'csv',
                                extend: 'print',
                                messageTop: 'Reporte consolidado por Departamento: <?php echo $nomo ;?>'
                            }
                        ]
                    } );
                } );
                </script>                   
                    <?php   
                        $query = "SELECT id_mov,kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,fech_mov,id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,ubi_pers,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS pornoco from  mov_".$tutu." inner join kardex_".$tutu." on kar_mov = id_kar inner join pers_".$tutu." on prov_kar = id_pers inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres where ubi_pers like '".$ido."' and num_kar not like '0' order by id_mov DESC ";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            $a = 1 ;
                            $cantada = 0 ;
                        while($row = mysqli_fetch_assoc($result)) 
                            {
                            ?> 
                            <tr>
                                <td><?php echo $a;?></td>                               
                                <td><?php echo $row['num_kar'];?></td>
                                <td><?php echo $row['pornoco'];?></td>
                                <td><?php echo $row['cod_pro'];?><br><small> - <?php echo $row['pres_pres'];?> - <?php echo $row['pro_pro'];?></small></td>
                                <td><?php echo $row['cant_mov'];?></td>
                                <td>Q. <?php echo number_format($row['preu_mov'], 2) ; ?></td>                                
                                <td>Q. <?php $yy = $row['cant_mov'] * $row['preu_mov'] ; echo number_format($yy, 2); $cantada = $cantada + $yy ;?></td>
                            </tr>                               
                            <?php
                            $a ++ ;                            
                            }  
                        mysqli_free_result($result);                            
                        }                                      
                    ?>   <?php             
                    }                      
                  ?>   
                            <tr>
                                <td><?php echo $a  ;?></td>                               
                                <td>&nbsp;</td>                               
                                <td>&nbsp;</td>                               
                                <td>&nbsp;</td>                               
                                <td>&nbsp;</td>                               
                                <td>Total</td>                                
                                <td>Q. <?php echo number_format($cantada, 2) ;?></td>
                            </tr>                  
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Salida</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>         
            </tr>
        </tfoot>
    </table>                                      
          </div>
    </div>
</div>




