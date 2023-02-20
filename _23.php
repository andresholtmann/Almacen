<br><br><br>
<?php
if( isset($_GET['upq'])  )
     {
        $sql = "UPDATE kardex_".$tutu." SET stat_kar='1' WHERE id_kar like '".htmlspecialchars($_GET['elu'])."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "Kardex - ";
                }                 
    
        $sql = "UPDATE movprob_".$tutu." SET st_movprob='1' WHERE kar_movprob like '".htmlspecialchars($_GET['elu'])."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "Movimientos - ";
                }                 

        $sql = "UPDATE mov_".$tutu." SET st_mov='1' WHERE kar_mov like '".htmlspecialchars($_GET['elu'])."' ";    
        if ($mysqli->query($sql) === TRUE) {
        echo "Entregados";
                }                 
    //        exit();
?>
                <script language="Javascript">
                    window.location = "?alm=_9";
                </script>
<?php                               
                    
    } 
?>
<style>
    .cabece{
        font-size: 0.8em;
        color: darkgray;
    }    
    .leluca{
        font-size: 1.2em;
        color: coral;
    }
    
</style>
<div class="container-fluid">   
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="cabece">habilitar salida</h2>
            <?php   
                 $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,stat_kar,id_pers,n_pers,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers  where id_kar like '".htmlspecialchars($_GET['hab'])."'";
                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                if($result) {
                    while($row = mysqli_fetch_assoc($result)) 
                            {
                $fecho = $row['fecho_kar'] ;
                $ido = $row['id_pers'] ;                                
            ?> 
        		<h2 class="text-info"><?php echo $row['n_pers'];?></h2>
                No. <strong><?php echo $row['num_kar'];?></strong> de Fecha: <strong>
                        <?php echo $row['niceDate'];?>
                            <?php
                                $st = $row['stat_kar'];
                            }
                        }
                        mysqli_free_result($result);
                        ?></strong>     		
     		<hr>   
     		
          <h2 class="leluca">Producto Agregados</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                  <th>&nbsp;</th>                            
                  <th>Producto</th>
                  <th class="alimano">Saldo Actual.</th>                   
                  <th class="alimano">Solicitado</th>
                  <th class="alimano">A Despachar.</th>
                           
                  <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
<?php   
                         $query = "SELECT id_movprob,kar_movprob,tip_movprob,prod_movprob,preu_movprob,cant_movprob,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM movprob_".$tutu." inner join prod_".$tutu." on prod_movprob = id_pro inner join pres_".$tutu." on pres_pro = id_pres where tip_movprob like 'EGR' and kar_movprob like '".htmlspecialchars($_GET['hab'])."' order by id_movprob DESC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        $conti = 1 ;
                        $tota = 0 ;                        
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
?> 
                            <tr>
                            <td class="alimano"><?php echo $conti;?></td>                                                                                                
                            <td><?php echo $row['cod_pro'];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $row['pro_pro'];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $row['pres_pres'];?></td>                                                 <td class="alimano clo">
                                   <?php  
                             $querys = "SELECT id_mov,tip_mov,prod_mov,cant_mov FROM mov_".$tutu." where prod_mov like '".$row['id_pro']."' order by id_mov ASC";
                                $results = mysqli_query($mysqli, $querys) or trigger_error("Query Failed! SQL: $querys - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                $totoro = 0 ;
                                if($results) {
                                    while($rows = mysqli_fetch_assoc($results)) {
                                $movo = $rows['tip_mov'];                                        
                                        

                                        if ($movo == 'INV') {

                                            $totoro = $totoro + $rows['cant_mov'];

                                        }
                                        if ($movo == 'ING') {

                                            $totoro = $totoro + $rows['cant_mov'];       

                                        }
                                        if ($movo == 'EGR') {

                                            $totoro = $totoro - $rows['cant_mov'];           

                                        }  
                                    }
                                }
                                mysqli_free_result($results);
                            ?>                                                    
                            <?php echo $totoro;?>                                
                            </td>      
                            <td class="alimano"><?php echo $row['cant_movprob'];?></td>
                            <td class="alimano">                                         
                                    <?php                    
                                        $queryadas = "SELECT * FROM mov_".$tutu." where kar_mov like '".$row['kar_movprob']."' and tip_mov like '".$row['tip_movprob']."' and prod_mov like '".$row['prod_movprob']."'  ";
                                        $resultadas = mysqli_query($mysqli, $queryadas) or trigger_error("Query Failed! SQL: $queryadas - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        $totalFilas    =    mysqli_num_rows($resultadas);                                                                       
                                        if($totalFilas > 0) {
                                            while($rowadas = mysqli_fetch_assoc($resultadas)) {
                                              $sabra = $rowadas['cant_mov'] ;
                                              $ideota = $rowadas['id_mov'] ; 
                                                $sta = $rowadas['st_mov'] ; 
                                            }
                                        }  else {
                                            $sabra = '0' ;
                                        }  
                                        mysqli_free_result($resultadas);
                                    ?>                                
                                    <?php   
                                        if ($sabra == '0') {
                                    ?>    
                                           <?php     
                                            
                                                    if ($st == 4 )
                                                        {
                                            ?>                                      
                                           <?php               
                                                    } elseif ($st == 1 ) {
                                            ?>  
                                                        No se Incluy&oacute; este producto
                                       <?php                                                     
                                                    } 
                                            ?>                                                                                                        
                                    <?php                                               
                                        } else{
                                           ?>
                                                       <?php               
                                                                if ($st == 4 )
                                                                    {
                                                        ?>
                                          
                                                       <?php               
                                                                }
                                                        ?>
                                                        <?php 
                                             echo $sabra ;
                                            
                                            if ($sta == 0)
                                            {
                                                        ?>
                                                       <?php     
                                                
                                            }
                                        }                                                                      
                                    ?>                                                                        
                            </td>
                            <td class="alimano">
<?php   
                                     if ($st == 0 )
                                {                           
                                
                                            if ($Roll == 'Admin')
                                        {
?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_10&del=<?php echo $row['id_movprob'];?>&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
<?php                        
                                        }
                                            else
                                        {
?> 
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
<?php                        
                                        }
                                
                                }
?>
                                    </td>                                
                            </tr>
<?php
                                $conti ++ ;
                            }
                        }
                        mysqli_free_result($result);
?>   
                    </tbody>
                    <tfoot>
                            <tr>
                            <td></td>                                                                                                
                            <td></td>                                                                
                            <td></td>
                            <td></td>                                
                            <td class="alimano">&nbsp;</td>                                
                            <td class="alimano">
<?php                    
                                if ($st == 4 )
                                {
?> 
                                    <a class="btn btn-success btn-info-full" href="?alm=_10&acctt=true&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></a>                            
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
                  </tfoot>
                </table>   
          </div>  
            <br><br>
            <a href="?alm=_23&elu=<?php echo htmlspecialchars($_GET['hab']) ; ?>&upq=true" type="button" class="btn btn-success btn-block">habilitar salida</a>   		                      
            
        </div>
      </div>
    </div>