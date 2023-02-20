<?php require_once('fss4dm1n/LALa125.php');
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<style>
    .fonto{
        font-size: 12px;
        margin: 78px 0px 0px 0px;
    }
    .fonto td{
        height: 12px !important;
        line-height: 5px !important;
    }  
    .fonto .cal{
        width: 14%;
    }    
    .fonto .calso{
        width: 60.5%;
    }
    .fonto .calsos{

    }    
    .backdiv{
        background-color: aqua;
        border: 1px solid #000;
        background: url(fondo1h.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        width: 850px;
        height: 1100px;
    }
    .nunoh{
        position: absolute;
        top: 73px;
        width: 850px;
        font-weight: bold;
        text-align: right;
        color: red;
    } 
    .fonta{
        font-size: 10px;
        margin: 20px 0px 0px 0px;
    }
    .fonta td{
        height: 12px !important;
        line-height: 5px !important;
    }     
    ._1{
        width: 3%;
    }
    ._2{
        width: 8%;
    }
    ._3{
        width: 38%;
    }    
    ._4{
        width: 10%;
    }    
    ._5{
        width: 4%;
    }    
    ._6{
        width: 9%;
        text-align: right !important;
        font-size: 8px !important;
        
    } 
    ._7{
        width: 9%;
        font-size: 8px !important;        
    }     
    ._8{
        width: 8%;
    }     
    ._9{
        width: 8%;
    }       
    ._10{
        width: 3%;
    }     
    .divo{
        text-align:justify;
        font-weight: bold;
        line-height: 12px;
        letter-spacing: 1px;
    }
    .divoso{
        margin: 0px 0px;
        text-align:justify;
        line-height: 10px;
        font-size: 10px;
        letter-spacing: 1px;
    }    
</style>
  
<div class="backdiv">
 
 <table width="850px"  cellpadding="6" class="fonto" cellspacing="10" border="0">  
    <?php
        $sqlah = "SELECT *,DATE_FORMAT(fecho_fac,'%d/%m/%Y') AS niceDate FROM fac_".$tutu." inner join prov_".$tutu." on prov_fac = id_prov where id_fac like '".htmlspecialchars($_GET['fac'])."'";
        $resultah = $mysqli->query($sqlah);
        $ll = 1;
        if ($resultah->num_rows > 0) {
            // output data of each row
            while($rowah = $resultah->fetch_assoc()) {
                
        ?>     
   <div class="nunoh"><?php echo $rowah['unoh_fac'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

       <tr>
           <td class="cal"></td> 
      
           <td  class="calso"  >Fondo Social de Solidaridad</td>
                     
           <td  class="calsos"><?php echo $rowah['num_fac'];?> / <?php echo $rowah['ser_fac'];?></td>                               
       </tr>
       <tr>
           <td></td> 
           
           <td >Fondo Social de Solidaridad</td>
                     
           <td ><?php echo $rowah['niceDate'];?></td>                               
       </tr>
       <tr>
           <td></td> 
           <td ><?php echo $rowah['n_prov'];?></td>
                     
           <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowah['norec_fac'];?></td>                      
       </tr>                                                      

        <?php  
        $fazo = $rowah['razo_fac'];                
        $st = $rowah['stat_fac'];
        $desu = $rowah['descu_fac'];
                $ll ++ ;
                 }
        } else {
            echo "0 results";
        }
        mysqli_free_result($resultah);
    ?>     
    </table>
    
<table width="850px"  cellpadding="6" class="fonta" cellspacing="10" border="0">
                   <tbody>
						<?php   
                         $query = "SELECT id_mov,fac_mov,tip_mov,prod_mov,preu_mov,cant_mov,id_pro,cod_pro,codrengasto_pro,pro_pro,pres_pro,id_pres,pres_pres FROM mov_".$tutu." inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres where tip_mov like 'ING' and fac_mov like '".htmlspecialchars($_GET['fac'])."' order by id_mov ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        $conti = 1 ;
                        $tota = 0 ;                        
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td class="_1">&nbsp;</td>                                 
                            <td class="_2"><?php echo $row['cant_mov'];?></td>                                                                                           
                            <td class="_3"><div class="divoso"><?php echo $row['pro_pro'];?></div></td>                                                 
                            <td class="_4"><?php echo $row['codrengasto_pro'];?></td> 
                            <td class="_5">&nbsp;</td>                                 
                            <td class="_6">Q.<?php echo number_format($row['preu_mov'], 4);?></td>
                            <td class="_7"><?php $totalo = $row['cant_mov'] * $row['preu_mov'];?>Q. <?php echo number_format($totalo, 2);?></td>
                            <td class="_8">&nbsp;</td>                                
                            <td class="_9">&nbsp;</td> 
                            <td class="_10">&nbsp;</td>                                                                     
                            </tr>

						<?php
                                $conti ++ ;
                                $tota = $tota + $totalo  ;
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
                            <td class="_6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total - </td> 
                                                            
                            <td class="_7">Q. <?php echo number_format($tota, 2);?></td>   
                          <td></td>                                  
                            <td >
    
                                </td>   
                            <td></td>                                                                                               
                            </tr>
                                                           <?php                    
                                if ($desu > 0 )
                                {
                                    $finalo = $tota - $desu ;
                                ?>                         
                            <tr>
                            <td></td> 
                            <td></td>                                 
                            <td></td>                                                                                                
                            <td></td>                                                                
                            <td></td>

                       
                            <td class="_6">Descuento - </td>                                
                            <td class="_7">
                                    Q. <?php echo number_format($desu, 2);?>                            
                            </td>                                
                            <td></td>                                
                            <td></td>                              
                            <td ></td>                                                                
                            </tr> 
                            <tr>
                            <td></td> 
                            <td></td>                                 
                            <td></td>                                                                                                
                                                            
                            <td></td>
                            <td></td>
                            
                            <td class="_6">Final - </td>                                
                            <td class="_7">
                                    Q. <?php echo number_format($finalo, 2);?>                            
                            </td>     
                            <td></td>                                    
                            <td ></td>  
                            <td></td>                                                                                           
                            </tr> 
                        
                                <?php                        
                                }
                                    else
                                {
                                ?> 
                                <?php                        
                                }  
                                ?>                                                                          
                                <?php                    
                                if ($st == '99' )
                                {
                               
                                ?>                          
                            <tr>
                            <td></td> 
                            <td></td>                
                            <td><div class="divo">
                                <?php echo $fazo ; ?>
                                </div></td>                
                            <td></td>                
                            <td></td>                
                            <td></td>                
                            <td></td>                
                            <td></td>                
                            <td></td>                
                            <td></td>                                                
                            </tr>                         
                        <?php }?>
                  </tfoot>                                                                               
                                                                                                                                                           
                     
                          
                           
                           
                                                                         



</table>
</div>





<?php mysqli_close($mysqli); ?>