<?php
    if( isset($_POST['fechaza']) )
         { 
            $isa = $_POST['fechaza'] ;
        } else {
            $isa = $feiyo2 ;
    }
?>
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
<br>
<form class="form-inline" method="post" action="?alm=_25">
    <div class="form-group">
        <input type="date" name="fechaza" class="form-control" value="<?php echo $feiyo2; ?>" id="fechaza" required>
        <button type="submit" class="btn btn-primary">Enviar Fecha</button>
    </div>
</form>          
       
<hr>           
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <br><br><br><br><br><br><br><br>
          <div class="table-responsive">

<?php 
$newDate = date("d-m-Y", strtotime($isa));
              ?>
                       
                   <h2 class=" -header">Inventario de Almac&eacute;n a la fecha <strong id="yesprint"><?php echo $newDate; ?></strong></h2>       
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>C&oacute;digo</th>                        
                          <th class="telo">Produtco</th>
                          <th>Categor&iacute;a</th>                                 
                          <th>Presentaci&oacute;n</th>                                 
                          <th>Cantidad</th>
                          <th>Cost Uni.</th>
                          <th>Totales</th>
                        </tr>
                    </thead>
                    <tbody>
                   
<?php   
 $query = "SELECT id_pro,cod_pro,cat_pro,pres_pro,pres_pro,pro_pro,cosprod_pro,limin_pro,act_pro,st_pro,id_cat,cat,id_pres,pres_pres FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat inner join pres_".$tutu." on pres_pro = id_pres where st_pro like '0' order by cod_pro ASC ";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    $tota = 0 ;
    $pagi = 1 ;

    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            

?> 

<?php  
$querys = "SELECT id_mov,tip_mov,prod_mov,cant_mov,st_mov,fech_mov FROM mov_".$tutu." where prod_mov like '".$row['id_pro']."' and st_mov like '1' and fech_mov between '2017-07-31' and '".$isa."' order by id_mov ASC";
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

   <tr>    
        <td><?php echo $row['cod_pro'];?></td>
        <td><?php echo $row['pro_pro'];?></td>
        <td><?php echo $row['cat'];?></td>
        <td><?php echo $row['pres_pres'];?></td>
        <td><?php echo $totoro;?></td>     
        <td>Q. <?php echo number_format($row['cosprod_pro'], 2);?></td>    
        <td>Q. <?php $finaluko = $totoro * $row['cosprod_pro'] ;  echo number_format($finaluko, 2);?></td>                          
   </tr> 
   
  <?php
            $finaluka = $finaluka + $finaluko ;
  //      } 
?>                                            
                    
   <?php            
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
        <td></td>     
        <td>Total:</td>    
        <td>Q. <?php   echo number_format($finaluka, 2);?></td>                          
   </tr>
   </tfoot>  
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


