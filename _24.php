<?php
$tota = 0 ;
?>
<style>
    
    .baco{
        background-color: beige;
    }
table { 
    width: 1400px;
    margin: 0px auto;
    border-collapse: separate; 
}
.tablo td, th { 
    border: solid 1px rgba(0, 0, 0, 1); 
}
.tablo tr td, th { 
    border-top-right-radius: 0;               
    border-top-left-radius: 0; 
    border-bottom-left-radius: 0; 
    border-bottom-right-radius: 0; 
}
.tablo th:first-child { 
    border-top-left-radius: 10px; 
}
.tablo th:last-child {   
    border-top-right-radius: 10px; 
}
.tablo tr:last-child td:first-child { 
    border-bottom-left-radius: 10px; 
}
.tablo tr:last-child td:last-child { 
    border-bottom-right-radius: 10px; 
}
    .yana {
        text-align: center;
        vertical-align: middle;
    }
    .siki{
        width: 6.5%;
        text-align: center;
    }
    .sikis{
        text-align: center;
    }    
    .siko{
        width: 20%;
    }
    .capa{
        width: 1400px;
        margin: 4px auto;
        text-align: center;
        font-size: 11.5px;
        color: #000;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 4px;
    }
    .gg{
        width: 33.33333%;
    }.ojjo { max-width: 66px;}
    @page  {
        size: landscape;
         /* auto es el valor inicial */
      margin: 0.5cm 1cm 1cm 1cm;
        

    }    
    @media all {        
       div.saltopagina{
          display: none;
       }
    }
    @media print{
body {
  padding-top: 0px;
} 
        .tablo{
            
        }
    .tabloaa{
        margin:-200px auto 0 auto;
    }        
        
        .btn{
            display:  none;
        }        
      * {
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
    .momo{
        margin: 38px;
        width: 80%;
        text-align:right;
    }
    .puta{
        position: absolute;
        z-index: 101;
    }
    .puta img{
        width: 20px;
    }
    .chichirica{
        position: fixed;
        left: 79.1%;
    }
    .lino { color: #000; text-decoration: none; }
    .lino:visited { color: #000; text-decoration: none; }    
    .tlineas{
        position: absolute;
        left: 6px;
    }
    .ojjo { max-width: 60px;}
</style>
<?php  $putas = htmlspecialchars($_GET['pro']); ?>
<br><br><br>
<button onclick="myFunction()" type="button" class="btn btn-primary btn-block">Imprimir Kardex</button>

<br><br>
<style>

</style>


    <?php   

     $query = "SELECT id_pro,cod_pro,st_pro,cat_pro FROM prod_".$tutu."  where st_pro like '0' and id_pro like '".htmlspecialchars($_GET['pro'])."' ";
        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
        if($result) {
            while($row = mysqli_fetch_assoc($result)) {
            if ($tota == 0) {
        
                                $codo = $row['cod_pro'] ;
                                $cat = $row['cat_pro'] ;  
                                $ido = $row['id_pro'] ;   
                            }
            }
        }
        mysqli_free_result($result);
    
    ?>     
<?php   
 $query = "SELECT id_pro,cod_pro,cat_pro,pres_pro,pro_pro,st_pro,id_pres,pres_pres FROM prod_".$tutu." inner join pres_".$tutu." on pres_pro = id_pres where st_pro like '0' and id_pro like '".htmlspecialchars($_GET['pro'])."'";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
        if ($tota == 0) {
                         $pro= $row['pro_pro'];
                         $cod= $row['cod_pro'];
                         $ale= $row['id_pro'];
                         $pres= $row['pres_pres'];            
                        }
        }
    }
    mysqli_free_result($result);

if ($resulta = $mysqli->query("SELECT id_mov,fac_mov,kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS niceDate FROM mov_".$tutu." where prod_mov like '".$ale."' and st_mov like '1' order by fech_mov,id_mov ASC")) {
    /* determinar el número de filas del resultado */
    $row_cnta = $resulta->num_rows;
  //  echo $row_cnta;
 
  //    echo $mamirica;                                             
    /* cerrar el resultset */
    $resulta->close();
}

?>
<table class="tabloaa" border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">&nbsp;</td>
    <td id="yesprint" class="gg yana">FONDO SOCIAL DE SOLIDARIDAD
    <br>
    <span id="yesprint">TARJETA KARDEX DE CONTROL DEL ALMACEN</span>
    </td>
    <td id="yesprint" class="gg yana"><img id="yesprint" src="logo_contra.png" class="ojjo"><br>Correlativo C.G.C. - No. 90-2019 
    </td>
    
</tr>
</table>  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">Art&iacute;culo:&nbsp;&nbsp;<?php echo $pro;?></td>
    <td id="yesprint" class="gg yana">C&oacute;digo de Producto:&nbsp;&nbsp;<?php echo $cod;?></td>
    <td id="yesprint" class="gg yana">Viene de Tarjeta No. ___________________<br>Pasa a Tarjeta No. ___________________&nbsp;</td>        
</tr>
</table>   
 <table class="tablo " border="0" id="yesprint">
  <tr>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
    <th colspan="3" class="yana" id="yesprint">ENTRADAS</th>
    <th colspan="3" class="yana" id="yesprint">SALIDAS</th>
    <th colspan="3" class="yana" id="yesprint">SALDO</th>            
  </tr> 
  <tr>
    <th class="yana siki" id="yesprint">Fecha</th>
    <th class="yana siko" id="yesprint">Concepto</th>
    <th class="yana" id="yesprint">Unidad de Medida</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
  </tr>  
<?php  
 $query = "SELECT id_mov,fac_mov,kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,st_mov,DATE_FORMAT(fech_mov,'%Y') AS niceDate,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS movo FROM mov_".$tutu." where prod_mov like '".$ale."' and st_mov like '1' and fech_mov between '2017-07-31' and '2018-12-31' order by fech_mov,id_mov ASC";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    $tota = 0 ;
    $toto = 0 ;
    $pagi = 1 ;
    $pogo = 0 ;
    $toto2 = 0 ;
    $canto =0 ;
    if (isset($preco)) { } else { $preco = 0 ; };
$soso = 1 ;
$t_lineas = $row_cnta;
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
        if ($row['tip_mov'] == 'INV') {
            $canto=$row['cant_mov'];
            $preco=$row['preu_mov'];            
?> 
  <tr>
    <td id="yesprint" class="siki"><?php echo $row['niceDate'];?></td>
    <td id="yesprint">Inventario</td> 
    <td id="yesprint" ><?php echo $pres;?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="siki"><?php echo $canto;?></td>
    <td id="yesprint" class="siki">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="siki"><?php $toto = $canto * $preco;?> Q. <?php echo number_format($toto, 2);?></td>        
  </tr>       
<?php
              
        } else { }
?>        
<?php               
        if ($row['tip_mov'] == 'ING') {
        $queryada = "SELECT id_fac,num_fac,fecho_fac,ser_fac,unoh_fac,tip_fac,stat_fac FROM fac_".$tutu." where id_fac like '".$row['fac_mov']."' and stat_fac like '1'";
        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
          //  $canto = 0 ;
        if($resultada) {
            while($rowada = mysqli_fetch_assoc($resultada)) {
                $ab=$rowada['fecho_fac'];
                $cd=$rowada['num_fac'];
                $ef=$rowada['ser_fac'];                
                $unoh=$rowada['unoh_fac']; 
                $tipo=$rowada['tip_fac']; 

                      
            }
        }
        mysqli_free_result($resultada);
    ?>
  <tr>
    <td id="yesprint" class="siki"><?php echo $row['niceDate'];?></td>
          <?php 
                if ($tipo  == 'FAC' ) {
          ?>                    
            <td id="yesprint">Fac - <?php echo $ef;?>-<?php echo $cd;?> / 1H -<?php echo $unoh;?></td>                
          <?php                         
                } else {
          ?>                    
            <td id="yesprint">Acta admin.<?php echo $cd;?></td>                
          <?php                         
                }
          ?>    
    <td id="yesprint" ><?php echo $pres;?></td>
    <td id="yesprint" class="siki"><?php echo $row['cant_mov'];?></td>
    <td id="yesprint" class="siki">Q. <?php echo number_format($row['preu_mov'], 3);?></td> 
    <td id="yesprint" class="siki"><?php $totato= $row['cant_mov'] * $row['preu_mov'];?> Q. <?php echo number_format($totato, 2);?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="siki"><?php $canto = $canto + $row['cant_mov']; echo $canto; $toto = $toto + $totato; $sipirili = $toto/$canto ?></td>
    <td id="yesprint" class="siki">Q. <?php  echo number_format($sipirili, 2);?></td> 
    <td id="yesprint" class="siki">Q. <?php  echo number_format($toto, 2);?></td>        
  </tr>       
<?php
                            $preco=$sipirili;  
              
        } 
?>        
<?php               
        if ($row['tip_mov'] == 'EGR') {
        
        $queryada = "SELECT id_kar,num_kar,fecho_kar,tip_kar,stat_kar FROM kardex_".$tutu." where id_kar like '".$row['kar_mov']."' and stat_kar like '1'";
        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
        if($resultada) {
            while($rowada = mysqli_fetch_assoc($resultada)) {
                $ab=$rowada['fecho_kar'];
                $cd=$rowada['num_kar'];
                $isa=$rowada['tip_kar'];
                      
            }
        }
        mysqli_free_result($resultada);
    ?>  
  <tr>
    <td id="yesprint" class="siki"><?php echo $row['niceDate'];?></td>
          <?php 
                if ($isa  == 'KAR' ) {
          ?>                    
    <td id="yesprint">Sal. - <?php echo $cd;?></td>
          <?php                         
                } else {
          ?>                    
    <td id="yesprint">Act. Admin.<?php echo $cd;?></td>
          <?php                         
                }
          ?>    
    <td id="yesprint" ><?php echo $pres;?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" ><?php echo $row['cant_mov'];?></td>
    <td id="yesprint" >Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" ><?php $totato2= $row['cant_mov'] * $preco;?> Q. <?php echo number_format($totato2, 2);?></td>
    <td id="yesprint" ><?php $canto = $canto - $row['cant_mov']; echo $canto;?></td>
    <td id="yesprint" >Q. <?php if ($canto == '0') { echo '0.00' ;} else { echo number_format($preco, 2); } ?></td> 
        <td id="yesprint" >Q. <?php $toto = $canto * $preco;?> <?php echo number_format($toto, 2);?></td>        
  </tr>              

<?php
               
        } 
?>   

 
    
<?php          
        if ($tota == 27) {
?> 
   
  <tr id="yesprint">
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">VAN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" ><?php echo $canto;?></td>
    <td id="yesprint" >Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" >Q. <?php $toto3 = $canto * $preco;?> <?php echo number_format($toto3, 2);?></td>        
  </tr> 
  </table> 
  <div id="yesprint"  class="saltopagina">
&nbsp;
  </div> 
  <br><br><br><br><br>
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">&nbsp;</td>
    <td id="yesprint" class="gg yana">FONDO SOCIAL DE SOLIDARIDAD
    <br>
    <span id="yesprint">TARJETA KARDEX DE CONTROL DEL ALMACEN</span>
    </td>
    <td id="yesprint" class="gg yana"><img id="yesprint" src="logo_contra.png" class="ojjo">
    </td>
    
</tr>
</table>  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">Art&iacute;culo:&nbsp;&nbsp;<?php echo $pro;?></td>
    <td id="yesprint" class="gg yana">C&oacute; de Producto:&nbsp;&nbsp;<?php echo $cod;?></td>
    <td id="yesprint" class="gg yana">Viene de Tarjeta No. ___________________<br>Pasa a Tarjeta No. ___________________&nbsp;</td>        
</tr>
</table>    
  <table class="tablo nolo" border="0" id="yesprint">
  <tr>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
    <th colspan="3" class="yana" id="yesprint">ENTRADAS</th>
    <th colspan="3" class="yana" id="yesprint">SALIDAS</th>
    <th colspan="3" class="yana" id="yesprint">SALDO</th>            
  </tr> 
  <tr>
    <th class="yana siki" id="yesprint">Fecha</th>
    <th class="yana siko" id="yesprint">Concepto</th>
    <th class="yana" id="yesprint">Unidad de Medida</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
  </tr> 
  <tr>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">VIENEN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" ><?php echo $canto;?></td>
    <td id="yesprint" >Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" >Q. <?php $toto4 = $canto * $preco;?> <?php echo number_format($toto4, 2);?></td>        
  </tr>                
  
<?php
        } 
           
?>
        
<?php
    $tota ++ ; 
    $pogo ++ ;             
if ($tota == 28) {
    $tota = 1;
    $pagi = $pagi + 1 ;
    } else {}
$soso ++ ;  
$t_lineas --  ;            
        }
        ?>
<?php        
    }
    mysqli_free_result($result);
?>
</table> 
  <div id="yesprint"  class="saltopagina">
&nbsp;
  </div> 
  

<table class="tabloaa" border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">&nbsp;</td>
    <td id="yesprint" class="gg yana">FONDO SOCIAL DE SOLIDARIDAD
    <br>
    <span id="yesprint">TARJETA KARDEX DE CONTROL DEL ALMACEN</span>
    </td>
    <td id="yesprint" class="gg yana"><img id="yesprint" src="logo_contra.png" class="ojjo"><br>Correlativo C.G.C. - No. 90-2019 
    </td>
    
</tr>
</table>  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">Art&iacute;culo:&nbsp;&nbsp;<?php echo $pro;?></td>
    <td id="yesprint" class="gg yana">C&oacute; de Producto:&nbsp;&nbsp;<?php echo $cod;?></td>
    <td id="yesprint" class="gg yana">Viene de Tarjeta No. ___________________<br>Pasa a Tarjeta No. ___________________&nbsp;</td>        
</tr>
</table>   
 <table class="tablo " border="0" id="yesprint">
  <tr>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
    <th colspan="3" class="yana" id="yesprint">ENTRADAS</th>
    <th colspan="3" class="yana" id="yesprint">SALIDAS</th>
    <th colspan="3" class="yana" id="yesprint">SALDO</th>            
  </tr> 
  <tr>
    <th class="yana siki" id="yesprint">Fecha</th>
    <th class="yana siko" id="yesprint">Concepto</th>
    <th class="yana" id="yesprint">Unidad de Medida</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
  </tr>  
<?php  
 $query = "SELECT id_mov,fac_mov,kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,st_mov,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS niceDate,DATE_FORMAT(fech_mov,'%Y') AS movo FROM mov_".$tutu." where prod_mov like '".$ale."' and st_mov like '1' and fech_mov between '2019-01-01' and '2021-12-05' order by fech_mov,id_mov ASC";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    $tota = 0 ;
    $toto = 0 ;
    $pagi = 1 ;
    $pogo = 0 ;
    //$preco = 0 ;     
    $toto2 = 0 ;
         //$canto = 0 ;
$soso = 1 ;
$t_lineas = $row_cnta;
    if($result) {
?>             
  <tr>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis">VIENEN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis">Q. <?php $toto4 = $canto * $preco;?> <?php echo number_format($toto4, 2);?></td>        
  </tr>              
 <?php         
        while($row = mysqli_fetch_assoc($result)) {
          
        if ($row['tip_mov'] == 'INV') {
            $canto=$row['cant_mov'];
            $preco=$row['preu_mov'];            
?> 
  <tr>
    <td id="yesprint" class="sikis"><?php echo $row['niceDate'];?></td>
    <td id="yesprint" class="sikis">Inventario</td> 
    <td id="yesprint" class="sikis"><?php echo $pres;?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis"><?php $toto = $canto * $preco;?> Q. <?php echo number_format($toto, 2);?></td>        
  </tr>       
<?php
              
        } else { }
?>        
<?php        
            $tipo="";
        if ($row['tip_mov'] == 'ING') {
        $queryada = "SELECT id_fac,num_fac,fecho_fac,ser_fac,unoh_fac,tip_fac,stat_fac FROM fac_".$tutu." where id_fac like '".$row['fac_mov']."' and stat_fac like '1'";
        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
        if($resultada) {
            while($rowada = mysqli_fetch_assoc($resultada)) {
                $ab=$rowada['fecho_fac'];
                $cd=$rowada['num_fac'];
                $ef=$rowada['ser_fac'];                
                $unoh=$rowada['unoh_fac']; 
                $tipo=$rowada['tip_fac']; 

                      
            }
        }
        mysqli_free_result($resultada);
    ?>
  <tr>
    <td id="yesprint" class="sikis"><?php echo $row['niceDate'];?></td>
          <?php 
                if ($tipo  == 'FAC' ) {
          ?>                    
            <td id="yesprint" class="siko">Fac - <?php echo $ef;?>-<?php echo $cd;?> / 1H -<?php echo $unoh;?></td>                
          <?php                         
                } else {
          ?>                    
            <td id="yesprint">Acta admin.<?php echo $cd;?></td>                
          <?php                         
                }
          ?>    
    <td id="yesprint" class="sikis"><?php echo $pres;?></td>
    <td id="yesprint" class="sikis"><?php echo $row['cant_mov'];?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($row['preu_mov'], 3);?></td> 
    <td id="yesprint" class="sikis"><?php $totato= $row['cant_mov'] * $row['preu_mov'];?> Q. <?php echo number_format($totato, 2);?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php $canto = $canto + $row['cant_mov']; echo $canto; $toto = $canto * $row['preu_mov'];  $sipirili = $toto/$canto ?></td>
    <td id="yesprint" class="sikis">Q. <?php  echo number_format($sipirili, 2);?></td> 
    <td id="yesprint" class="sikis">Q. <?php  echo number_format($toto, 2);?></td>        
  </tr>       
<?php
                            $preco=$sipirili;  
              
        } 
?>        
<?php               
        if ($row['tip_mov'] == 'EGR') {
        
        $queryada = "SELECT id_kar,num_kar,fecho_kar,tip_kar,stat_kar FROM kardex_".$tutu." where id_kar like '".$row['kar_mov']."' and stat_kar like '1'";
        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
        if($resultada) {
            while($rowada = mysqli_fetch_assoc($resultada)) {
                $ab=$rowada['fecho_kar'];
                $cd=$rowada['num_kar'];
                $isa=$rowada['tip_kar'];
                      
            }
        }
        mysqli_free_result($resultada);
    ?>  
  <tr>
    <td id="yesprint" class="sikis"><?php echo $row['niceDate'];?></td>
          <?php 
                if ($isa  == 'KAR' ) {
          ?>                    
    <td id="yesprint"class="siko">Sal. - <?php echo $cd;?></td>
          <?php                         
                } else {
          ?>                    
    <td id="yesprint">Act. Admin.<?php echo $cd;?></td>
          <?php                         
                }
          ?>    
    <td id="yesprint" class="sikis"><?php echo $pres;?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $row['cant_mov'];?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis"><?php $totato2= $row['cant_mov'] * $preco;?> Q. <?php echo number_format($totato2, 2);?></td>
    <td id="yesprint" class="sikis"><?php $canto = $canto - $row['cant_mov']; echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php if ($canto == '0') { echo '0.00' ;} else { echo number_format($preco, 2); } ?></td> 
        <td id="yesprint" class="sikis">Q. <?php $toto = $canto * $preco;?> <?php echo number_format($toto, 2);?></td>        
  </tr>              

<?php
               
        } 
?>   

 
    
<?php          
        if ($tota == 27) {
?> 
   
  <tr id="yesprint">
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis">VAN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis">Q. <?php $toto3 = $canto * $preco;?> <?php echo number_format($toto3, 2);?></td>        
  </tr> 
  <tr>              
  <td colspan="12">
<div id="yesprint" class="capa">
          Forma autorizada: SM./000488 GESTION:309589 de fecha 17-12-2018 No. Correlativo. 90-2019 de fecha 26-02-2019 Envio Fiscal: 4-ASCC 16152 de fecha 26-02-2019, RANGO de la 1 a la 1,000 sin serie<br>
          FONDO SOCIAL DE SOLIDARIDAD, NIT: 6576643-1, LIBRO 4-ASCC FOLIO 57, No de Cuenta: F1-147
    
</div>
</td>
</tr>    
  </table> 
  <div id="yesprint"  class="saltopagina">
&nbsp;
  </div> 
  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">&nbsp;</td>
    <td id="yesprint" class="gg yana">FONDO SOCIAL DE SOLIDARIDAD
    <br>
    <span id="yesprint">TARJETA KARDEX DE CONTROL DEL ALMACEN</span>
    </td>
    <td id="yesprint" class="gg yana"><img id="yesprint" src="logo_contra.png" class="ojjo">
    </td>
    
</tr>
</table>  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">Art&iacute;culo:&nbsp;&nbsp;<?php echo $pro;?></td>
    <td id="yesprint" class="gg yana">C&oacute; de Producto:&nbsp;&nbsp;<?php echo $cod;?></td>
    <td id="yesprint" class="gg yana">Viene de Tarjeta No. ___________________<br>Pasa a Tarjeta No. ___________________&nbsp;</td>        
</tr>
</table>    
  <table class="tablo nolo" border="0" id="yesprint">
  <tr>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
    <th colspan="3" class="yana" id="yesprint">ENTRADAS</th>
    <th colspan="3" class="yana" id="yesprint">SALIDAS</th>
    <th colspan="3" class="yana" id="yesprint">SALDO</th>            
  </tr> 
  <tr>
    <th class="yana siki" id="yesprint">Fecha</th>
    <th class="yana siko" id="yesprint">Concepto</th>
    <th class="yana" id="yesprint">Unidad de Medida</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
  </tr> 
  <tr>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis">VIENEN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis" >Q. <?php $toto4 = $canto * $preco;?> <?php echo number_format($toto4, 2);?></td>        
  </tr>  

<?php
        } 
           
?>
      
<?php
    $tota ++ ; 
    $pogo ++ ;             
if ($tota == 28) {
    $tota = 1;
    $pagi = $pagi + 1 ;
    } else {}
$soso ++ ;  
$t_lineas --  ;            
        }
        ?>
  <tr>              
  <td colspan="12">
<div id="yesprint" class="capa">
          Forma autorizada: SM./000488 GESTION:309589 de fecha 17-12-2018 No. Correlativo. 90-2019 de fecha 26-02-2019 Envio Fiscal: 4-ASCC 16152 de fecha 26-02-2019, RANGO de la 1 a la 1,000 sin serie<br>
          FONDO SOCIAL DE SOLIDARIDAD, NIT: 6576643-1, LIBRO 4-ASCC FOLIO 57, No de Cuenta: F1-147
    
</div>
</td>
</tr>        
<?php
                 
    }
    mysqli_free_result($result);
?>
</table> 
<div id="yesprint"  class="saltopagina">
&nbsp;
  </div> 
  <br><br><br><br><br>
<table class="tabloaa" border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">&nbsp;</td>
    <td id="yesprint" class="gg yana">FONDO SOCIAL DE SOLIDARIDAD
    <br>
    <span id="yesprint">TARJETA KARDEX DE CONTROL DEL ALMACEN</span>
    </td>
    <td id="yesprint" class="gg yana"><img id="yesprint" src="logo_contra.png" class="ojjo"><br>Correlativo C.G.C. - No. 896-2021 
    </td>
    
</tr>
</table>  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">Art&iacute;culo:&nbsp;&nbsp;<?php echo $pro;?></td>
    <td id="yesprint" class="gg yana">C&oacute; de Producto:&nbsp;&nbsp;<?php echo $cod;?></td>
    <td id="yesprint" class="gg yana">Viene de Tarjeta No. ___________________<br>Pasa a Tarjeta No. ___________________&nbsp;</td>        
</tr>
</table>   
 <table class="tablo " border="0" id="yesprint">
  <tr>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
    <th colspan="3" class="yana" id="yesprint">ENTRADAS</th>
    <th colspan="3" class="yana" id="yesprint">SALIDAS</th>
    <th colspan="3" class="yana" id="yesprint">SALDO</th>            
  </tr> 
  <tr>
    <th class="yana siki" id="yesprint">Fecha</th>
    <th class="yana siko" id="yesprint">Concepto</th>
    <th class="yana" id="yesprint">Unidad de Medida</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
  </tr>  
<?php  
 $query = "SELECT id_mov,fac_mov,kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,st_mov,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS niceDate,DATE_FORMAT(fech_mov,'%Y') AS movo FROM mov_".$tutu." where prod_mov like '".$ale."' and st_mov like '1' and fech_mov between '2021-12-06' and '2025-12-31' order by fech_mov,id_mov ASC";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    $tota = 0 ;
    $toto = 0 ;
    $pagi = 1 ;
    $pogo = 0 ;
    //$preco = 0 ;     
    $toto2 = 0 ;
         //$canto = 0 ;
$soso = 1 ;
$t_lineas = $row_cnta;
    if($result) {
?>             
  <tr>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis">VIENEN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis">Q. <?php $toto4 = $canto * $preco;?> <?php echo number_format($toto4, 2);?></td>        
  </tr>              
 <?php         
        while($row = mysqli_fetch_assoc($result)) {
          
        if ($row['tip_mov'] == 'INV') {
            $canto=$row['cant_mov'];
            $preco=$row['preu_mov'];            
?> 
  <tr>
    <td id="yesprint" class="sikis"><?php echo $row['niceDate'];?></td>
    <td id="yesprint" class="sikis">Inventario</td> 
    <td id="yesprint" class="sikis"><?php echo $pres;?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis"><?php $toto = $canto * $preco;?> Q. <?php echo number_format($toto, 2);?></td>        
  </tr>       
<?php
              
        } else { }
?>        
<?php        
            $tipo="";
        if ($row['tip_mov'] == 'ING') {
        $queryada = "SELECT id_fac,num_fac,fecho_fac,ser_fac,unoh_fac,tip_fac,stat_fac FROM fac_".$tutu." where id_fac like '".$row['fac_mov']."' and stat_fac like '1'";
        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
        if($resultada) {
            while($rowada = mysqli_fetch_assoc($resultada)) {
                $ab=$rowada['fecho_fac'];
                $cd=$rowada['num_fac'];
                $ef=$rowada['ser_fac'];                
                $unoh=$rowada['unoh_fac']; 
                $tipo=$rowada['tip_fac']; 

                      
            }
        }
        mysqli_free_result($resultada);
    ?>
  <tr>
    <td id="yesprint" class="sikis"><?php echo $row['niceDate'];?></td>
          <?php 
                if ($tipo  == 'FAC' ) {
          ?>                    
            <td id="yesprint" class="siko">Fac - <?php echo $ef;?>-<?php echo $cd;?> / 1H -<?php echo $unoh;?></td>                
          <?php                         
                } else {
          ?>                    
            <td id="yesprint">Ingreso Anulado.<?php // echo $cd;?></td>                
          <?php                         
                }
          ?>    
    <td id="yesprint" class="sikis"><?php echo $pres;?></td>
    <td id="yesprint" class="sikis"><?php echo $row['cant_mov'];?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($row['preu_mov'], 3);?></td> 
    <td id="yesprint" class="sikis"><?php $totato= $row['cant_mov'] * $row['preu_mov'];?> Q. <?php echo number_format($totato, 2);?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php $canto = $canto + $row['cant_mov']; echo $canto; $toto = $canto * $row['preu_mov'];  $sipirili = $toto/$canto ?></td>
    <td id="yesprint" class="sikis">Q. <?php  echo number_format($sipirili, 2);?></td> 
    <td id="yesprint" class="sikis">Q. <?php  echo number_format($toto, 2);?></td>        
  </tr>       
<?php
                            $preco=$sipirili;  
              
        } 
?>        
<?php               
        if ($row['tip_mov'] == 'EGR') {
        
        $queryada = "SELECT id_kar,num_kar,fecho_kar,tip_kar,stat_kar FROM kardex_".$tutu." where id_kar like '".$row['kar_mov']."' and stat_kar like '1'";
        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
        if($resultada) {
            while($rowada = mysqli_fetch_assoc($resultada)) {
                $ab=$rowada['fecho_kar'];
                $cd=$rowada['num_kar'];
                $isa=$rowada['tip_kar'];
                      
            }
        }
        mysqli_free_result($resultada);
    ?>  
  <tr>
    <td id="yesprint" class="sikis"><?php echo $row['niceDate'];?></td>
          <?php 
                if ($isa  == 'KAR' ) {
          ?>                    
    <td id="yesprint"class="siko">Sal. - <?php echo $cd;?></td>
          <?php                         
                } else {
          ?>                    
    <td id="yesprint">Act. Admin.<?php echo $cd;?></td>
          <?php                         
                }
          ?>    
    <td id="yesprint" class="sikis"><?php echo $pres;?></td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td> 
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $row['cant_mov'];?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis"><?php $totato2= $row['cant_mov'] * $preco;?> Q. <?php echo number_format($totato2, 2);?></td>
    <td id="yesprint" class="sikis"><?php $canto = $canto - $row['cant_mov']; echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php if ($canto == '0') { echo '0.00' ;} else { echo number_format($preco, 2); } ?></td> 
        <td id="yesprint" class="sikis">Q. <?php $toto = $canto * $preco;?> <?php echo number_format($toto, 2);?></td>        
  </tr>              

<?php
               
        } 
?>   

 
    
<?php          
        if ($tota == 27) {
?> 
   
  <tr id="yesprint">
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis">VAN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis">Q. <?php $toto3 = $canto * $preco;?> <?php echo number_format($toto3, 2);?></td>        
  </tr> 
  <tr>              
  <td colspan="12">
<div id="yesprint" class="capa">
Forma autorizada: F.O.-ES-152-2021 003131 GESTION: 590326 de fecha 17/08/2021. No. Correlativo 896-2021 de fecha 06-12-2021. Envio Fiscal: 4-ASCC 18943 de fecha 06/12/2021. Rango: de la 1,001 a la 10,000<br>sin serie
Fondo Social de Solidaridad, NIT: 6576643-1. LIBRO 4ASCC FOLIO 125. No. De cuenta : F1-147
    
</div>
</td>
</tr>    
  </table> 
  <div id="yesprint"  class="saltopagina">
&nbsp;
  </div> 
  <br><br><br><br><br>
  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">&nbsp;</td>
    <td id="yesprint" class="gg yana">FONDO SOCIAL DE SOLIDARIDAD
    <br>
    <span id="yesprint">TARJETA KARDEX DE CONTROL DEL ALMACEN</span>
    </td>
    <td id="yesprint" class="gg yana"><img id="yesprint" src="logo_contra.png" class="ojjo">
    </td>
    
</tr>
</table>  
<table class="tablo0 " border="0" id="yesprint">
<tr>
    <td id="yesprint" class="gg yana">Art&iacute;culo:&nbsp;&nbsp;<?php echo $pro;?></td>
    <td id="yesprint" class="gg yana">C&oacute; de Producto:&nbsp;&nbsp;<?php echo $cod;?></td>
    <td id="yesprint" class="gg yana">Viene de Tarjeta No. ___________________<br>Pasa a Tarjeta No. ___________________&nbsp;</td>        
</tr>
</table>    
  <table class="tablo nolo" border="0" id="yesprint">
  <tr>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
    <th colspan="3" class="yana" id="yesprint">ENTRADAS</th>
    <th colspan="3" class="yana" id="yesprint">SALIDAS</th>
    <th colspan="3" class="yana" id="yesprint">SALDO</th>            
  </tr> 
  <tr>
    <th class="yana siki" id="yesprint">Fecha</th>
    <th class="yana siko" id="yesprint">Concepto</th>
    <th class="yana" id="yesprint">Unidad de Medida</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
    <th class="yana siki" id="yesprint">Cantidad</th>
    <th class="yana siki" id="yesprint">Valor Unitario</th>
    <th class="yana siki" id="yesprint">Valor Total</th>
  </tr> 
  <tr>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis">VIENEN</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint">&nbsp;</td>
    <td id="yesprint" class="sikis"><?php echo $canto;?></td>
    <td id="yesprint" class="sikis">Q. <?php echo number_format($preco, 2);?></td> 
    <td id="yesprint" class="sikis" >Q. <?php $toto4 = $canto * $preco;?> <?php echo number_format($toto4, 2);?></td>        
  </tr>  

<?php
        } 
           
?>
      
<?php
    $tota ++ ; 
    $pogo ++ ;             
if ($tota == 28) {
    $tota = 1;
    $pagi = $pagi + 1 ;
    } else {}
$soso ++ ;  
$t_lineas --  ;            
        }
        ?>
  <tr>              
  <td colspan="12">
<div id="yesprint" class="capa">
Forma autorizada: F.O.-ES-152-2021 003131 GESTION: 590326 de fecha 17/08/2021. No. Correlativo 896-2021 de fecha 06-12-2021. Envio Fiscal: 4-ASCC 18943 de fecha 06/12/2021. Rango: de la 1,001 a la 10,000<br>sin serie
Fondo Social de Solidaridad, NIT: 6576643-1. LIBRO 4ASCC FOLIO 125. No. De cuenta : F1-147
    
</div>
</td>
</tr>        
<?php
                 
    }
    mysqli_free_result($result);
?>
</table> 



<script>
function myFunction() {
    window.print();
}
    

    
</script>
<br><br><br><br><br><br><br>
<?php
                    $sql = "UPDATE prod_".$tutu." SET cosprod_pro='$preco' WHERE id_pro like '".htmlspecialchars($_GET['pro'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                 //   sleep(1);

                  //  $tuculo = htmlspecialchars($_GET['pro']) + 1; 

?>
<!--
    <script language="Javascript">
        window.location = "?alm=_24&pro=<?php// echo $tuculo;?>";
    </script>
-->
