<script src="jquery.table2excel.js"></script>
<?php
    if( isset($_POST['fechaza']) )
         { 
            $isa = $_POST['fechaza'] ;
        } else {
            $isa = $feiyo2 ;
    }
?>

   <style>

th {
    background: #E6E6E6;
    border-bottom: 1px solid #000000;
}

#table-container {
    max-width: 850px;
    margin: 50px auto;
}

table#tab {
    border-collapse: collapse;
    width: 100%;
}

table#tab th, table#tab td {
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    text-align: left;
    font-size: 0.95em;
}

.btn {
    padding: 8px 4px 8px 1px;
}

#btnExport {
    padding: 10px 40px;
    background: #499a49;
    border: #499249 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    cursor: pointer;
}

.empty-table {
    border: #e4e4e4 1px solid;
    padding: 20px;
    background: #F0F0F0;
    text-align: center;
    font-size: 1.5em;
    color: #CCC;
}

.svg-icon {
    fill: #CCC;
    margin-bottom: 20px;
}

.svg-icon svg {
    background: #e2e2e2;
    border-radius: 50%;
    padding: 10px;
}  
</style>
<br><br><br>
		
<br>
<form class="form-inline" method="post" action="?alm=_26">
    <div class="form-group">
        <input type="date" name="fechaza" class="form-control" value="<?php echo $feiyo2; ?>" id="fechaza" required>
        <button type="submit" class="btn btn-primary">Enviar Fecha</button>
    </div>
</form>
        <table id="tab" class="table2excel">
            <thead>
                <tr>
        <th>Inventario</th>
        <th>Fecha</th>                    
        <th>C&oacute;digo</th>
        <th>Producto</th>
        <th>Categoria</th>
        <th>Presentaci&oacute;n</th>
        <th>Cantidad.</th>
        <th>Costo Uni.</th>
        <th>Totales</th>                           
                </tr>
            </thead>
            <tbody>
    </div>
<?php   
 $query = "SELECT id_pro,cod_pro,cat_pro,pres_pro,pres_pro,pro_pro,cosprod_pro,limin_pro,act_pro,st_pro,id_cat,cat,id_pres,pres_pres FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat inner join pres_".$tutu." on pres_pro = id_pres where st_pro like '0' order by cod_pro ASC ";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    $tota = 0 ;
    $pagi = 1 ;

    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            
        if ($tota == 0) {
?> 

<?php
        } 
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

<?php                  
//         if ($totoro == 0) { } else {
?>        
   <tr>    
        <td>Inventario</td>
        <td><?php echo $isa;?></td>       
        <td><?php echo $row['cod_pro'];?></td>
        <td><?php echo $row['pro_pro'];?></td>
        <td><?php echo $row['cat'];?></td>
        <td><?php echo $row['pres_pres'];?></td>
        <td>
                                                  
                            <?php echo $totoro;?>
       
       </td>     
        <td>Q. <?php echo number_format($row['cosprod_pro'], 2);?></td>    
        <td>Q. <?php $finaluko = $totoro * $row['cosprod_pro'] ;  echo number_format($finaluko, 2);?></td>
   </tr> 
   
  <?php
            $finaluka = $finaluka + $finaluko ;
  //      } 
?>    
     
   

   
<?php          
        if ($tota == 35) {
?> 
    <div id="yesprint"  class="saltopagina"></div>  
  <?php
        } 
?>        
<?php
    $tota ++ ;  
if ($tota == 36) {
    $tota = 0;
    $pagi = $pagi + 1 ;
    } else {}
?> 
            
  <?php            
        }
    }
    mysqli_free_result($result);
?>

     <tr>    
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>         
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Total:</td>
        <td>Q. <?php   echo number_format($finaluka, 2);?></td>
   </tr>  
            </tbody>
        </table>
<button class="exportToExcel">Exportar a excel</button>


		<script>
			$(function() {
				$(".exportToExcel").click(function(e){
					var table = $(this).prev('.table2excel');
					if(table && table.length){
						var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
						$(table).table2excel({
							exclude: ".noExl",
							name: "Excel Document Name",
							filename: "Inventario Almacen " + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
							fileext: ".xls",
							exclude_img: true,
							exclude_links: true,
							exclude_inputs: true,
							preserveColors: preserveColors
						});
					}
				});
				
			});
		</script>