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
        padding: 210px 0px 0px 0px;
        width: 750px;
        margin: auto;
    }
    .noso{
        padding: 172px 0px 0px 0px;
    }
    .nolos{
        padding: 0px 0px 0px 0px;
        width: 750px;
        margin: auto;
      
    }
    
    .tulu img{
        height: 60px;
        margin: 0px auto 16px auto;
    }
    .a{
        float: left;
        width: 60%;
        border: 0px solid #000;
        margin:0px;
        padding: 2px 8px 2px 86px;
        font-weight: bold;
        color: black;
        font-size: 12px;
       
    }    
    .b{
        float: left;
        width: 40%;
        border: 0px solid #000;
        margin:0px;
        padding: 2px 8px 2px 160px;
        font-weight: bold;        
        color: black;     
        font-size: 12px;  
        text-align: left;
     
    }    
    .c{
        float: left;
        width: 100%;
        border: 0px solid #000;
        margin:0px;
        padding: 4px 8px 2px 210px;
        font-weight: bold;        
        color: black;     
        font-size: 12px;  
        text-align: left;
         
    }    
    .d{
        float: left;
        width: 100%;
        border: 0px solid #000;
        margin:0px;
        padding: 4px 8px 2px 250px;
        font-weight: bold;        
        color: black;     
        font-size: 12px;  
        text-align: left;
         
    }    
    .e{
        float: left;
        width: 38%;
        border: 0px solid #000;
        margin:0px;
        padding: 0px 0px 0px 4px;
        font-weight: bold;        
        color: black;     
        font-size: 12px;  
        line-height: 22px;
        text-align: left;
    } 
    .ff{
        float: left;
        width: 15%;
        border: 0px solid #000;
        margin:0px;
        padding: 0px 0px 0px 4px;
        font-weight: bold;        
        color: black;     
        font-size: 13px;  
        line-height: 20px;
        text-align: center;
    }   
    .f{
        float: left;
        width: 10%;
        border: 0px solid #000;
        margin:0px;
        padding: 0px 0px 0px 4px;
        font-weight: bold;        
        color: black;     
        font-size: 13px;  
        line-height: 20px;
        text-align: left;
    }       

    .baco{
        background-color: beige;
    }
    
    @page  {
         size: auto;     
         /* auto es el valor inicial */
      margin: 0.5cm 1cm 1.5cm 1cm;
        

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

#boton1 {
        position:absolute;
        left: 80%;
    }

#boton2 {
        position:absolute;
        left: 15%;
    }




  
</style>
<br>
<td>
<button onclick="myFunction()" type="button" id="boton1" class="btn btn-primary">Imprimir Kardex</button>

<?php   
 $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,kar_desc,id_pers,n_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDates FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep  where stat_kar like '1' and id_kar like '".htmlspecialchars($_GET['kar'])."'";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    if($result) {
        $tota = 0;
        while($row = mysqli_fetch_assoc($result)) {
        if ($tota == 0) {
                        $depo= $row['ubi_pers'];
                        $fec= $row['niceDates'];
                        $nom= $row['n_pers'];            
                        $depos= $row['n_dep']; 
                        $des= $row['kar_desc']; 
                        $ido= $row['id_kar']; 
                        }
        }
    }
    mysqli_free_result($result);
?>
<div id="yesprint" class="nolo"> 
    <div id="yesprint" class="a"><?php echo $fec;?></div>
    <div id="yesprint" class="b">&nbsp;&nbsp;&nbsp;<?php echo $depo;?></div>
    <div id="yesprint" class="c"><?php echo $nom;?></div> 
    <div id="yesprint" class="d">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $depos;?></div>   
    <div id="yesprint" class="d">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $des;?></div>            
</div> 
<div id="yesprint" class="noso"> 
<?php   
 $querya = "SELECT id_movprob,kar_movprob,tip_movprob,prod_movprob,cant_movprob,id_pro,cod_pro,pro_pro FROM movprob_".$tutu." inner join prod_".$tutu." on prod_movprob = id_pro where tip_movprob like 'EGR' and kar_movprob like '".htmlspecialchars($_GET['kar'])."' ";
    $resulta = mysqli_query($mysqli, $querya) or trigger_error("Query Failed! SQL: $querya - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    if($resulta) {
        while($rowa = mysqli_fetch_assoc($resulta)) {
?>  
<table id="yesprint" class="nolos" border="0">
    <tr>
        <td id="yesprint" class="e"><?php echo substr($rowa['pro_pro'], 0, 39) ;?>...</td>
        <td id="yesprint" class="ff"><?php echo $rowa['cant_movprob'];?></td>        
        <td id="yesprint" class="ff"><?php   

    
                $sql = "SELECT id_mov,kar_mov,tip_mov,prod_mov,cant_mov FROM mov_".$tutu." where kar_mov like '".$rowa['kar_movprob']."' and tip_mov like 'EGR' and prod_mov like '".$rowa['prod_movprob']."'";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo $row['cant_mov'];
                  }
                } else {
                  echo "0 results";
                }                                                     
            mysqli_free_result($result);                                                     
            ?>
        </td>
        <td id="yesprint" class="f">&nbsp;&nbsp;&nbsp;<?php echo $rowa['cod_pro'];?></td>
        <td id="yesprint" class="f">&nbsp;</td>        
    </tr>
</table>
<?php              
        }
    }
    mysqli_free_result($resulta);
?>  

</div> 
</style>
<button onclick="myFunction()" type="button" id="boton1" class="btn btn-primary">Imprimir Kardex</button>
<input type="button" id="boton2" class="btn btn-primary" onclick="history.back()" name=" Página anterior " value=" Página anterior ">

<script>
function myFunction() {
    window.print();
}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>