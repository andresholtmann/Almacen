<?php
if( isset($_GET['upd'])  )
     {
        

                    $sql = "UPDATE mov_".$tutu." SET  st_mov='1' WHERE kar_mov like '".htmlspecialchars($_GET['ent'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>";
                </script>
<?php                               
                    }     
    
    
    

    } 
?>
<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM mov_".$tutu." WHERE id_mov like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>";
                </script>
             
<?php             
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
    
    } 
                elseif ( isset($_GET['acctt']) )
            {
                    $sql = "UPDATE kardex_".$tutu." SET  stat_kar='1' WHERE id_kar like '".htmlspecialchars($_GET['ent'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_9";
                </script>
<?php                               
                    } 
    }   
                elseif ( isset($_GET['acctta']) )
            {
                    $sql = "UPDATE kardex_".$tutu." SET  stat_kar='3' WHERE id_kar like '".htmlspecialchars($_GET['ent'])."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_9";
                </script>
<?php                              
                    } 
    }   
    else {


        if( isset($_POST['ingresano']) )
             { 

             $faci = strip_tags($_POST['kar_mov']); 
             $prodi = strip_tags($_POST['prod_mov']);             

             $fac = $mysqli->real_escape_string($faci);
             $prod = $mysqli->real_escape_string($prodi);
             $check = $mysqli->query("SELECT id_mov,kar_mov,prod_mov FROM mov_".$tutu." WHERE kar_mov='$fac' and prod_mov='$prod' and tip_mov='EGR'");
             $coun=$check->num_rows;     
                     if ( $coun == 1 ) {
                      $msg = "<div class='alert alert-danger'>
                         <span class='glyphicon glyphicon-info-sign'></span> &nbsp; No puede duplicar productos en el Kardex !!!
                        </div>";
                     } else {
  
                         

                         
                                         $querys = "SELECT id_mov,tip_mov,prod_mov,cant_mov FROM mov_".$tutu." where prod_mov like '".$_POST['prod_mov']."'  and st_mov like '1' order by id_mov ASC";
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

                                        
                                                $actual = $totoro;                          
                         

                                        if ( $_POST['cant_mov'] > $actual ) {
                                              $msg = "<div class='alert alert-danger'>
                                                 <span class='glyphicon glyphicon-info-sign'></span> &nbsp; El valor ingresado es mayor al valor actual del inventario para este item !!!
                                                </div>";
                                            $pivo = $_POST['kar_mov'] ;                                            
    ?>

                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo $pivo;?>";
                </script>
<?php                                          
                                         } else {
                                            $add = "INSERT INTO mov_".$tutu." (kar_mov,tip_mov,prod_mov,cant_mov,preu_mov,fech_mov,useing) VALUES ('$_POST[kar_mov]','$_POST[tip_mov]','$_POST[prod_mov]','$_POST[cant_mov]','$_POST[preu_mov]','$_POST[fech_mov]','$ide')";
                                            if ($mysqli->query($add) === TRUE) 
                                                {
                                            echo "New record created successfully";
                                            $pivo = $_POST['kar_mov'] ;
                                                } else {
                                                    echo "Error: " . $add . "<br>" . $mysqli->error;
                                                }                                               
                                            } 
               //          exit();
?>
                <script language="Javascript">
                    window.location = "?alm=_10&ent=<?php echo $pivo;?>";
                </script>
<?php                    
             }
            
             }
                elseif ( isset($_POST['cato']) )
            {	 
                    $sql = "UPDATE mov_".$tutu." SET  prov_fac='$_POST[prov_fac]', num_fac='$_POST[num_fac]', fecho_fac='$_POST[fecho_fac]', useing='$ide' WHERE id_pers like '".$_POST['id_pers']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
?>
                <script language="Javascript">
                    window.location = "?alm=_10";
                </script>
<?php                         
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                    //exit();

            }
                    elseif ( isset($_POST['momo']) )
            {	 

                         $sql = "UPDATE kardex_".$tutu." SET  num_kar='$_POST[num_kar]' WHERE id_kar like '".htmlspecialchars($_GET['ent'])."' ";    
                                            if ($mysqli->query($sql) === TRUE) {
                                            echo "Record updated successfully";
                                ?>
                                        <script language="Javascript">
                                            window.location = "?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>";
                                        </script>
                                 <?php                                               
                    }
                    else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                    //exit();

            }

     }
?>
<div class="container-fluid">   
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
<?php           
                    if(isset($_GET['edit']))
                         {
?>
                          <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Editar Producto <span class="sr-only">(current)</span></a></li>
                          </ul> 
<?php                       
                                     $query = "SELECT * FROM mov_".$tutu." where id_pers like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
?>           
                               <form role="form" method="post" action="?alm=_10">
                               <div class="form-group">               
                                    <label>Proveedor</label>                           
                                    <select class="form-control" name="prov_fac">
                                        <?php                    
                                             $queryad = "SELECT id_prov,n_prov FROM prov_".$tutu." order by n_prov ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                                if ($rowad['id_prov'] == $row['prov_fac'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_prov'];?>" selected><?php echo $rowad['n_prov'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowad['id_prov'];?>"><?php echo $rowad['n_prov'];?></option>
                                            <?php                        
                                            }     
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="num_fac" value="<?php echo $row['num_fac'];?>" class="form-control" id="exampleInputEmail1" placeholder="Proveedor" >
                                </div>                                   
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Kardex</label>
                                    <input class="form-control" id="date" name="fecho_fac" value="<?php echo $row['fecho_fac'];?>" type="text"/>
                                  </div>                                  
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_pers'];?>" name="id_pers" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                              </form>  
                                <script>
                                    $(document).ready(function(){
                                      var date_input=$('input[name="fecho_fac"]'); //our date input has the name "date"
                                      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                      var options={
                                        format: 'dd/mm/yyyy',
                                        container: container,
                                        todayHighlight: true,
                                        autoclose: true,
                                      };
                                      date_input.datepicker(options);
                                    })                 
                                </script>             
<?php
                                   }
                                        mysqli_free_result($result);                
                                                }
                        }
            else
                        {                
?>   
                                <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Usuario<span class="sr-only">(current)</span></a></li>
                          </ul>
<?php   
                         $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,stat_kar,id_pers,n_pers,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers  where id_kar like '".htmlspecialchars($_GET['ent'])."'";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) 

                            
                            {
                                                                $fecho = $row['fecho_kar'] ;
$ido = $row['id_pers'] ;                                
?> 
        		<h2 class="text-info"><?php echo $row['n_pers'];?></h2>
<?php 
                                if ($row['num_kar'] == '0' )
                                    {
                                        function frm_trigger_entry_update($atts)
                                        {
                                        //here i have some php code which run properly
                                            ?>
                                           <script>
                                             jQuery(document).ready(function($){
                                                alert("<?php echo $atts;?>");
                                               });
                                            </script>
                                            <?php
                                        }
                                        //calling the function and passing a simple string
                                        frm_trigger_entry_update("Favor ingresar el No. de Orden correspondiente a esta solicitud, Gracias.");
                                        ?>   
                                         <hr>
                                        <div class="decu">Agregar N&uacute;mero</div>
                                        <form role="form" method="post" action="?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>">
                                            <div class="form-group">
                                            <input type="text" name="num_kar" class="form-control" id="exampleInputEmail1" placeholder="ej. 12345" >
                                            <input type="hidden" name="momo" value="momo">
                                            </div>
                                        </form>                                                              

                                        <?php                                     
                                    } else {
                                        ?>
        		<hr><div class="decu">Editar N&uacute;mero</div>
                                        <form role="form" method="post" action="?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>">
                                            <div class="form-group">
                                            <input type="text" name="num_kar" class="form-control" value="<?php echo $row['num_kar'];?>" id="exampleInputEmail1" placeholder="ej. 12345" >
                                            <input type="hidden" name="momo" value="momo">
                                            </div>
                                        </form>             		
                                        <?php                                    
                                }                                       
 ?>        		
        		<hr>      
                        <?php echo $row['niceDate'];?>
                            <?php
                                $st = $row['stat_kar'];
                            }
                        }
                        mysqli_free_result($result);
                        ?>              
                            <?php
                       }                
?>            
<!-- Large modal -->

        
    <br>
<hr>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">&Uacute;ltimos Pedidos</button>

                             
                    
                                
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!-- Large modal -->
<style>
    .des{
        font-size: 0.8em;
    }    
    .nnn a:hover{
        color: black;
        
    }
    .nnn a:visited{
        color: orange;
        
    }
    
</style>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12"><h2>&Uacute;ltimos Pedidos</h2><hr></div>
<?php   
                         $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,stat_kar,id_pers,n_pers,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS nuku FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers  where prov_kar like '".$ido."' order by id_kar DESC limit 1,3";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) 

                            
                            {
?> 
                          <div class="col-md-4">
                              Kardex: <strong><?php echo $row['num_kar'];?></strong><br>
                              Fecha:  <strong><?php echo $row['nuku'];?></strong>
                              <hr>
   		<div class="list-group nnn">
    		    <a href="#" class="list-group-item active">Productos</a>



                                <?php   
                                         $ery = "SELECT id_mov,kar_mov,tip_mov,prod_mov,cant_mov,id_pro,cod_pro,pro_pro FROM mov_".$tutu." inner join prod_".$tutu." on prod_mov = id_pro  where kar_mov like '".$row['id_kar']."' order by cod_pro DESC ";
                                        $res = mysqli_query($mysqli, $ery) or trigger_error("Query Failed! SQL: $ery - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        if($res) {
                                        while($rono = mysqli_fetch_assoc($res)) 


                                        {
                                ?>       
    		    <a href="?alm=_14&pro=<?php echo $rono['id_pro'];?>" class="list-group-item"><?php echo $rono['cod_pro'];?><span class="badge"><?php echo $rono['cant_mov'];?></span><br><span class="des"><?php echo $rono['pro_pro'];?></span></a>                                                               
                                        
                                <?php
                                        }        
                                        mysqli_free_result($res);                            
                                        }                                      
                                ?>          
                                                           
    		</div>                                                                                                                              

                                                           </div>
                                                            <?php
                                                            }        
                                                        mysqli_free_result($result);                            
                                                       }                                      
                                ?>                   
            </div>
        </div>           
    </div>
  </div>
</div>

   <script src="dist/js/zelect.js"></script>         
  <style>
    #intro .zelect {
      display: inline-block;
      background-color: white;
      min-width: 450px;
      cursor: pointer;
      line-height: 16px;
      border: 1px solid #dbdece;
      border-radius: 6px;
      position: relative;
    }
    #intro .zelected {
      font-weight: bold;
      padding-left: 10px;
      line-height: 30px;        
    }
    #intro .zelected.placeholder {
      color: #999f82;
    }
    #intro .zelected:hover {
      border-color: #c0c4ab;
      box-shadow: inset 0px 5px 8px -6px #dbdece;
    }
    #intro .zelect.open {
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    #intro .dropdown {
      background-color: white;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      border: 1px solid #dbdece;
      border-top: none;
      position: absolute;
      left:-1px;
      right:-1px;
      top: 36px;
      z-index: 2;
      padding: 3px 5px 3px 3px;
    }
    #intro .dropdown input {
      font-family: sans-serif;
      outline: none;
      font-size: 14px;
      border-radius: 4px;
      border: 1px solid #dbdece;
      box-sizing: border-box;
      width: 100%;
      padding: 7px 0 7px 10px;
    }
    #intro .dropdown ol {
      padding: 0;
      margin: 3px 0 0 0;
      list-style-type: none;
      max-height: 150px;
      overflow-y: scroll;
    }
    #intro .dropdown li {
      padding-left: 10px;
    }
    #intro .dropdown li.current {
      background-color: #e9ebe1;
    }
    #intro .dropdown .no-results {
      margin-left: 10px;
    }
      
.alert-message
{
    margin: 10px 0;
    padding: 20px;
    border-left: 3px solid #eee;
}
.alert-message h4
{
    margin-top: 0;
    margin-bottom: 5px;
}
.alert-message p:last-child
{
    margin-bottom: 0;
}
.alert-message code
{
    background-color: #fff;
    border-radius: 3px;
}
.alert-message-success
{
    background-color: #F4FDF0;
    border-color: #3C763D;
}
.alert-message-success h4
{
    color: #3C763D;
}
.alert-message-danger
{
    background-color: #fdf7f7;
    border-color: #d9534f;
}
.alert-message-danger h4
{
    color: #d9534f;
}
.alert-message-warning
{
    background-color: #fcf8f2;
    border-color: #f0ad4e;
}
.alert-message-warning h4
{
    color: #f0ad4e;
}
.alert-message-info
{
    background-color: #f4f8fa;
    border-color: #5bc0de;
}
.alert-message-info h4
{
    color: #5bc0de;
}
.alert-message-default
{
    background-color: #EEE;
    border-color: #B4B4B4;
}
.alert-message-default h4
{
    color: #000;
}
.alert-message-notice
{
    background-color: #FCFCDD;
    border-color: #BDBD89;
}
.alert-message-notice h4
{
    color: #444;
}      
.alimano
{
    text-align: center;
}  
      .clo{
          
          background-color: darkseagreen;
          color: white;
      }
  </style>
  <script>
    $(setup)

    function setup() {
      $('#intro select').zelect({ placeholder:'selecionar producto...' })
    }
  </script>            
<?php
  if(isset($msg)){
   echo $msg;
  }
?>     
<?php                    
    if ($st == 0 )
    {
?> 
<br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br>        
            <div class="alert-message alert-message-info">
                
                <h4>Agregar salida de Producto</h4>
                     <form class="form-inline" method="post" action="?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>">
                      <div class="form-group">
                        <section id="intro" >      
                                <select name="prod_mov" class="form-control" >
                                    <?php                    
                                        $queryada = "SELECT id_pro,cod_pro,pro_pro,act_pro,cosprod_pro,pres_pro,id_pres,pres_pres FROM prod_".$tutu." inner join pres_".$tutu." on pres_pro = id_pres order by cod_pro ASC ";
                                        $resultada = mysqli_query($mysqli, $queryada) or trigger_error("Query Failed! SQL: $queryada - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                        if($resultada) {
                                            while($rowada = mysqli_fetch_assoc($resultada)) {
                                        ?> 
                                            <option value="<?php echo $rowada['id_pro'];?>"><?php echo $rowada['cod_pro'];?> &nbsp;-&nbsp; <?php echo $rowada['pro_pro'];?>&nbsp;&nbsp;-&nbsp; <?php echo $rowada['pres_pres'];?></option>
                                        <?php                        
                                            }
                                        }
                                        mysqli_free_result($resultada);
                                    ?>                  
                                </select>
                        </section>
                      </div>
                      <div class="form-group">
                        <input type="text" name="cant_mov" class="form-control" id="exampleInputEmail2" placeholder="Cantidad">
                      </div>
                      <div class="form-group">

                          <input type="hidden" name="ingresano">
                        <input type="hidden" name="kar_mov" value="<?php echo "".htmlspecialchars($_GET['ent']).""; ?>">    
                        <input type="hidden" name="fech_mov" value="<?php echo $fecho ; ?>">  
                        <input type="hidden" name="preu_mov" value="<?php echo $rowada['codprod_pro'];?>">                                                                                                                          
                        <input type="hidden" name="tip_mov" value="EGR" >                                                                            
                      </div>                        
                      <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>                  
            </div> 
           
<?php                        
    }
                elseif ($st == 1 )
    {
?> 
            <div class="alert-message alert-message-success">
                <h4>Solicitud Despachada</h4>
            </div>                            
<?php                                   
    }                    
        else
    {
?> 
            <div class="alert-message alert-message-success">
<?php               
                if ($st == 4 )
                    {
?>                     
                <h4>Solicitud Recibida</h4><a class="btn btn-success btn-info-full" href="?alm=_10&acctta=true&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></a>
<?php                
                }
?>        
<?php               
                if ($st == 3 )
                    {
?>               
<h4>Solicitud Retornada</h4>      
<?php                
                }
?>                   
            </div>
<?php                        
    }  
?>
            
            <hr>
          <h2 class=" -header">Producto Agregados</h2>
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
                         $query = "SELECT id_movprob,kar_movprob,tip_movprob,prod_movprob,preu_movprob,cant_movprob,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM movprob_".$tutu." inner join prod_".$tutu." on prod_movprob = id_pro inner join pres_".$tutu." on pres_pro = id_pres where tip_movprob like 'EGR' and kar_movprob like '".htmlspecialchars($_GET['ent'])."' order by id_movprob DESC";
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
                             $querys = "SELECT id_mov,tip_mov,prod_mov,cant_mov FROM mov_".$tutu." where prod_mov like '".$row['id_pro']."' and st_mov like '1' order by id_mov ASC";
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
                                                <form class="form-inline" method="post" action="?alm=_10&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>">
                                                  <div class="form-group">
                                                   <input type="text" name="cant_mov" class="form-control" value="<?php echo $row['cant_movprob'];?>" id="exampleInputEmail2" placeholder="Cantidad">
                                                  </div>
                                                  <div class="form-group">
                                                    <input type="hidden" name="ingresano">
                                                    <input type="hidden" name="kar_mov" value="<?php echo $row['kar_movprob']; ?>">                                         
                                                    <input type="hidden" name="tip_mov" value="<?php echo $row['tip_movprob']; ?>">                                         
                                                    <input type="hidden" name="prod_mov" value="<?php echo $row['prod_movprob']; ?>"> 
                                                    <input type="hidden" name="preu_mov" value="<?php echo $row['preu_movprob']; ?>">                                            
                                                    <input type="hidden" name="fech_mov" value="<?php echo $fecho ; ?>">                                                                                                  
                                                    <input type="hidden" name="tip_mov" value="EGR" >                                                                            
                                                  </div>                        
                                                </form>  
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
                                                       &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger btn-info-full" href="?alm=_10&del=<?php echo $ideota;?>&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
                                                       <?php               
                                                                }
                                                        ?>
                                                        <?php 
                                             echo $sabra ;
                                            
                                            if ($sta == 0)
                                            {
                                                        ?>
                                                       &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning btn-info-full" href="?alm=_10&upd=<?php echo "".htmlspecialchars($_GET['ent'])."";?>&ent=<?php echo "".htmlspecialchars($_GET['ent'])."";?>" target="_self"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>  
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
        </div>
      </div>
    </div>