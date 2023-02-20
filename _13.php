<?php
    if( isset($_POST['fechaza']) )
         { 
            $isa = $_POST['fechaza'] ;
        } else {
            $isa = $feiyo2 ;
    }
?>

   <style>
    .tulu{
        width: 100%;
        text-align: center;
    }
    .tulu2{
        margin:0px;
        width: 100%;
        text-align: center;
        font-size: 10px;
        clear: left;
    }    
    .nolo{
        width: 850px;
        margin: auto;
    }
    .nolo2{
        width: 850px;
        margin: auto;
      
    }
    
    .tulu img{
        height: 60px;
        margin: 0px auto 16px auto;
    }
    .a{
        float: left;
        width: 10%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;
        background-color: dimgray;
        color: white;
        font-size: 14px;
       
    }    
    .b{
        float: left;
        width: 30%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;        
        background-color: dimgray;
        color: white;     
        font-size: 14px;  
     
    }    
    .c{
        float: left;
        width: 10%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;        
        background-color: dimgray;
        color: white;  
        font-size: 14px; 
         
    }    
    .d{
        float: left;
        width: 18%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;        
        background-color: dimgray;
        color: white;   
        font-size: 14px;  
         
    }    
    .e{
        float: left;
        width: 8%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;        
        background-color: dimgray;
        color: white;    
        font-size: 14px; 
        text-align: center;

    } 
    .ee{
        float: left;
        width: 12%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;        
        background-color: dimgray;
        color: white;    
        font-size: 14px; 
        text-align: center;

    } 
    .eee{
        float: left;
        width: 12%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        font-weight: bold;        
        background-color: dimgray;
        color: white;    
        font-size: 14px; 
        text-align: center;

    }     
    .f{
        float: left;
        width: 10%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 12px;
        text-align: center;
       
    }    
    .g{
        float: left;
        width: 30%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 10px;  
     
    }    
    .h{
        float: left;
        width: 10%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 12px;
         
    }    
    .i{
        float: left;
        width: 18%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 12px; 
         
    }    
    .j{
        float: left;
        width: 8%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 12px; 
        text-align: center;

    } 
    .k{
        float: left;
        width: 12%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 12px; 
        text-align: right;

    }   
    .kk{
        float: left;
        width: 12%;
        border: 1px solid #000;
        margin:0px;
        padding: 4px 8px;
        color: black;
        font-size: 12px; 
        text-align: right;

    }  
       .noto{
           margin: 0px auto;
           width: 850px;
       }
    @page {
      size: auto;   /* auto es el valor inicial */
      margin: 2cm
    }    
    @media all {        
       div.saltopagina{
          display: none;
       }
    }
    @media print{
        .btn{
            display:  none;
        }        
      all{
          visibility: hidden;
      }
      #yesprint{
          visibility: visible;
          margin: 0px;
          top: 0px;
          left: 0px;
      }   
       div.saltopagina{ 
          display:block; 
          page-break-before:always;
       }
    }   
    .lefano{
        clear: left;
    }    
</style>
<br><br><br>
<button onclick="myFunction()" type="button" class="btn btn-primary btn-block">Imprimir Reporte</button>
<br>
<form class="form-inline" method="post" action="?alm=_13">
    <div class="form-group">
        <input type="date" name="fechaza" class="form-control" value="<?php echo $feiyo2; ?>" id="fechaza" required>
        <button type="submit" class="btn btn-primary">Enviar Fecha</button>
    </div>
</form>
<?php   
 $query = "SELECT id_pro,cod_pro,cat_pro,pres_pro,pres_pro,pro_pro,cosprod_pro,limin_pro,act_pro,st_pro,id_cat,cat,id_pres,pres_pres FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat inner join pres_".$tutu." on pres_pro = id_pres where st_pro like '0' order by cod_pro ASC ";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    $tota = 0 ;
    $pagi = 1 ;

    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            
        if ($tota == 0) {
?> 
    <div id="yesprint" class="tulu lefano"><img id="yesprint" src="assets/img/_logo_nuevo.png"; ></div><br>
    <div id="yesprint" class="tulu">Inventario de Almac&eacute;n a la fecha <strong id="yesprint"><?php echo $isa; ?></strong></div><br>
    <div id="yesprint"  class="tulu2">P&aacute;gina <?php echo $pagi;?></div> <br>    
    <div id="yesprint " class="nolo">
        <div id="yesprint" class="a">C&oacute;digo</div>
        <div id="yesprint" class="b">Producto</div>
        <div id="yesprint" class="c">Cate.</div>
        <div id="yesprint" class="d">Presentaci&oacute;n</div>
        <div id="yesprint" class="e">Cant.</div>   
        <div id="yesprint" class="ee">Cos. Uni.</div>                    
        <div id="yesprint" class="eee">Totales</div>                            
    </div><br>
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
<table id="yesprint" class="noto" border="1">
    <tr>
        <td id="yesprint" style="width:10%"><?php echo $row['cod_pro'];?></td>
        <td id="yesprint" style="width:30%"><?php echo $row['pro_pro'];?></td>        
        <td id="yesprint" style="width:11%"><?php echo $row['cat'];?></td>
        <td id="yesprint" style="width:17%"><?php echo $row['pres_pres'];?></td>
        <td id="yesprint" style="width:9%"><?php echo $totoro;?></td>   
        <td id="yesprint" style="width:11%">Q. <?php echo number_format($row['cosprod_pro'], 2);?></td>
        <td id="yesprint" >Q. <?php $finaluko = $totoro * $row['cosprod_pro'] ;  echo number_format($finaluko, 2);?></td>           
    </tr>
</table>   
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

     <div id="yesprint" class="nolo2">    
        <div id="yesprint" class="f">&nbsp;</div>
        <div id="yesprint" class="g">&nbsp;</div>
        <div id="yesprint" class="h">&nbsp;</div>
        <div id="yesprint" class="i">&nbsp;</div>
        <div id="yesprint" class="j">&nbsp;</div>     
        <div id="yesprint" class="k">Total:</div>    
        <div id="yesprint" class="kk">Q. <?php   echo number_format($finaluka, 2);?></div>                          
   </div>  

<script>
function myFunction() {
    window.print();
}
</script>