<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<link rel="stylesheet" href="tablo/buttons.bootstrap.min.css" />            
<link rel="stylesheet" href="tablo/dataTables.bootstrap.min.css" />                           
                   
<script src="tablo/buttons.bootstrap.min.js"></script>                
<script src="tablo/buttons.colVis.min.js"></script>                
<script src="tablo/buttons.html5.min.js"></script>                
<script src="tablo/buttons.print.min.js"></script>                
<script src="tablo/dataTables.bootstrap.min.js"></script>                
<script src="tablo/dataTables.buttons.min.js"></script>                
<script src="tablo/jszip.min.js"></script>                
<script src="tablo/pdfmake.min.js"></script>                                                                                                                                   
<script src="tablo/vfs_fonts.js"></script>  
    
<div class="container-fluid">   
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
           <h3>Consumo mensual por producto a&ntilde;o 2021</h3>
<hr>           
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class=" -header">Consulta de Ingresos/Egresos</h2>
          <br><br><br><br><br><br><br><br>
          <div class="table-responsive">

                       
                          
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>C&oacute;digo</th>                        
                          <th class="telo">Produtco</th>
                                <?php              
//                                    for ($x = 1; $x <= $ingtoday2 ; $x++) { 
                                    for ($x = 1; $x <= 12 ; $x++) {                                         
                                    if ($x == 1) { $xxx = 'Enero' ; } 
                                    elseif  ($x == 2) { $xxx = 'Febrero' ; } 
                                    elseif  ($x == 3) { $xxx = 'Marzo' ; } 
                                    elseif  ($x == 4) { $xxx = 'Abril' ; } 
                                    elseif  ($x == 5) { $xxx = 'Mayo' ; } 
                                    elseif  ($x == 6) { $xxx = 'Junio' ; } 
                                    elseif  ($x == 7) { $xxx = 'Julio' ; } 
                                    elseif  ($x == 8) { $xxx = 'Agosto' ; }                                     
                                    elseif  ($x == 9) { $xxx = 'Septiembre' ; }
                                    elseif  ($x == 10) { $xxx = 'Octubre' ; }
                                    elseif  ($x == 11) { $xxx = 'Noviembre' ; }
                                    elseif  ($x == 12) { $xxx = 'Diciembre' ; }                                        
          
                                ?>    
                            <th>                                <?php echo $xxx ;?>                                                                                          

                            </th>     
                                <?php                                                               
                                } 
                                ?>                                                                                          
                      <th>
                          Total Entregados
                      </th>                                 
                      <th>
                          Prom
                      </th>
                     
                      <th>
                          Total en Bodega
                      </th>
                                                                                                     
                                                                                                      
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM prod_".$tutu." inner join pres_".$tutu." on pres_pro = id_pres order by cod_pro ASC ";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                       
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                                    $soko = 0 ;                                 
                                $idiota = $row['id_pro'] ;
                         ?> 
                            <tr>
                            <td ><?php echo $row['cod_pro'];?></td>                                                                                            
                            <td><?php echo $row['pro_pro'];?> - <span class="chula"><?php echo $row['pres_pres'];?></span></td>                                                                
                                <?php 
                                     $anso=0; 
                                    $laputa=0;
                                 
//                                for ($x = 1; $x <= $ingtoday2 ; $x++) {
                                for ($x = 1; $x <= 12 ; $x++) {                                
                                ?>                            
                            <td>      
                                <?php          
                                                                 
                                    if ($x == 1) { $xx = '01' ; } 
                                    elseif  ($x == 2) { $xx = '02' ; } 
                                    elseif  ($x == 3) { $xx = '03' ; } 
                                    elseif  ($x == 4) { $xx = '04' ; } 
                                    elseif  ($x == 5) { $xx = '05' ; } 
                                    elseif  ($x == 6) { $xx = '06' ; } 
                                    elseif  ($x == 7) { $xx = '07' ; } 
                                    elseif  ($x == 8) { $xx = '08' ; }             
                                    elseif  ($x == 9) { $xx = '09' ; }
                                    else  { $xx = $x ; }     
                                    $isabelita = '2021' ;
                                    $todoculo = $isabelita.'-'.$xx ;

                                        $sqla = "SELECT id_mov,kar_mov,tip_mov,prod_mov,cant_mov,fech_mov,st_mov,sum(cant_mov) as totosa from mov_".$tutu." where prod_mov like '".$row['id_pro']."' and tip_mov like 'EGR' and st_mov like '1' and fech_mov like '%".$todoculo."%' ";
                                        $resulta = mysqli_query($mysqli, $sqla) or trigger_error("Query Failed! SQL: $sqla - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        if($resulta) { 
                                        while($rowa = mysqli_fetch_assoc($resulta)) {
                                                if ( $rowa["totosa"] == 0)
                                                {
                                                    echo "0" ;

                                                } else {
                                                echo  $rowa["totosa"] ;
                                                    $anso = $anso + 1 ; 
                                                        }
                                                $tuku = $rowa["totosa"] ;
                                            $laputa = $laputa + $tuku ;                                                                             

                                        }
                                        }
                                        mysqli_free_result($resulta);                                    
                                    
                              //      $resulta->close();                                     
                                    
                                    
                                    
                                ?>                                                                
                            </td>     
                                <?php       
                                     
                                    $soko= $soko + $tuku ;
                                } 
                                ?>                            
                               <td>
                            
                                <?php      
                                
                                    echo  $laputa ; 
                                   ?>   
                               </td>                               
                                
                               <td>
                                <?php      
                                if ($anso > '0'){
                                    $soko = $soko / $anso;
                                }else{
                                    $anso = 0;
                                }

                                         
                                   ?>   
<?php echo number_format($soko, 2);?>                                                                  
                               </td>
                                <td>
<?php  
$querys = "SELECT id_mov,tip_mov,prod_mov,cant_mov,st_mov FROM mov_".$tutu." where prod_mov like '".$row['id_pro']."' and st_mov like '1' order by id_mov ASC";
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
                            </tr>
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
</div>    
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
</script>   


