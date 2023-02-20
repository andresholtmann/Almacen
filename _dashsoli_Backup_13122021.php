<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM kardex_".$tutu." WHERE id_kar like '".htmlspecialchars($_GET['del'])."'";

        if ($mysqli->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?";
                </script>
         <?php     
    } 
    else {


        if( isset($_POST['ingresano']) )
             { 
             $add = "INSERT INTO kardex_".$tutu." (prov_kar,num_kar,stat_kar,fecho_kar,kar_desc,useing) VALUES ('$_POST[prov_kar]','$_POST[num_kar]','3','$_POST[fecho_kar]','$_POST[kar_desc]','$ide')";
                if ($mysqli->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $mysqli->error;
                        }

        ?>
                <script language="Javascript">
                    window.location = "?";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE kardex_".$tutu." SET  prov_kar='$_POST[prov_kar]', num_kar='$_POST[num_kar]', fecho_kar='$_POST[fecho_kar]', useing='$ide' WHERE id_kar like '".$_POST['id_kar']."' ";    
                    if ($mysqli->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $mysqli->error;
                    }
                    //exit();
        ?>
                <script language="Javascript">
                    window.location = "?";
                </script>
         <?php 
            }


     }
?>
<style>
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
</style>
     <div class="container-fluid">   
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Solicitudes</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <?php                         
                            $sql="SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep where id_dep like '$depto' and stat_kar like '1'  order by fecho_kar DESC ";
                            if ($result=mysqli_query($mysqli,$sql))
                              {
                              $rowcount=mysqli_num_rows($result);
                              mysqli_free_result($result);
                              }  
                            $sqla="SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep where id_dep like '$depto' and stat_kar like '3'  order by fecho_kar DESC ";
                            if ($resulta=mysqli_query($mysqli,$sqla))
                              {
                              $rowcounta=mysqli_num_rows($resulta);
                              mysqli_free_result($resulta);
                              }  
                            $sqlaa="SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep where id_dep like '$depto' and stat_kar like '4'  order by fecho_kar DESC ";
                            if ($resultaa=mysqli_query($mysqli,$sqlaa))
                              {
                              $rowcountaa=mysqli_num_rows($resultaa);
                              mysqli_free_result($resultaa);
                              }                              
                            ?>                            
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-th-list text-primary"></span><a >Sin enviar</a>&nbsp;&nbsp;
                                        <span class="badge"><?php echo $rowcounta;?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a >Enviadas</a>&nbsp;&nbsp;
                                        <span class="badge"><?php echo $rowcountaa;?></span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a >Despachadas</a>&nbsp;&nbsp;
                                        <span class="badge"><?php echo $rowcount;?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="?">Nueva solicitud</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
<!--                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>-->
            </div>         
          </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                                <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Nueva Solicitud <span class="sr-only">(current)</span></a></li>
                          </ul>
                            <form role="form" method="post" action="">
                                <div class="form-group">                                                                            
                                </div>
                               <div class="form-group">               
                                    <label>Seleccionar Receptor</label>                           
                                    <select class="form-control" name="prov_kar">
  
                                        <?php                    
                                             $queryad = "SELECT id_pers,n_pers,ubi_pers,pue_pers,ext_pers,id_dep,n_dep FROM pers_".$tutu." inner join depto_".$tutu." on ubi_pers = id_dep and st_pers like '0' where ubi_pers like '$depto' order by n_pers ASC ";
                                            $resultad = mysqli_query($mysqli, $queryad) or trigger_error("Query Failed! SQL: $queryad - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                                            if($resultad) {
                                                while($rowad = mysqli_fetch_assoc($resultad)) {
                                             ?>       
                                      <option value="<?php echo $rowad['id_pers'];?>"><?php echo $rowad['n_pers'];?>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowad['n_dep'];?></option>
                                        <?php                      
                                                }
                                            }
                                            mysqli_free_result($resultad);
                                        ?>        
                                    </select>         
                                </div>                                   
                                <div class="form-group">
                                <textarea class="form-control" name="kar_desc" id="exampleFormControlTextarea1" rows="3" placeholder="Justificaci&oacute;n"></textarea>
                                <input type="hidden" name="num_kar" class="form-control" value="0" id="exampleInputEmail1" placeholder="No. de Salida"  required > 
                                </div>                                
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Solicitud</label>
                                    <input class="form-control" id="date" type="date" name="fecho_kar" value="<?php echo $feiyo2;?>"/>
                                  </div> 
                                <input type="hidden" name="ingresano" >                                 
                                <button type="submit" class="btn btn-primary btn-info-full">Agregar</button>
                            </form>          
            <script>
                $(document).ready(function(){
                  var date_input=$('input[name="fecho_kar"]'); //our date input has the name "date"
                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                  var options={
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                  };
                  date_input.datepicker(options);
                })                 
            </script>          
         
         
          <h2 class=" -header">Ingreso/Edici&oacute;n de salidas</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>Receptor</th>
                  <th>No. de Salida</th>
                  <th>de fecha</th>
                  <th></th>  
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep where id_dep like '$depto'  order by fecho_kar DESC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $row['n_pers'];?></td>                                                                
                            <td><?php echo $row['num_kar'];?></td>
                            <td><?php echo $row['niceDate'];?></td>                                
                            <td>
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                <a class="btn btn-success btn-info-full" href="?alm=_9&edit=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>                     
                                        <?php                        
                                        }
                                            else
                                        {
                                        ?> 
                                            
                                        <?php                        
                                        }
                                        ?>                                
                                    	<?php          
                                            if ($row['stat_kar'] == '1')
                                        {
                                        ?> 
                                <a class="btn btn-success btn-info-full" href="?alm=_s1&ent=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>               
                                        <?php                        
                                        }
                                            elseif ($row['stat_kar'] == '3')
                                        {
                                        ?> 
                                <a class="btn btn-info btn-info-full" href="?alm=_s1&ent=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>                   <a class="btn btn-danger btn-info-full" href="?del=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>                                                  
                                        <?php                        
                                        }
                                            elseif ($row['stat_kar'] == '4')
                                        {
                                        ?> 
                                <a class="btn btn-warning btn-info-full" href="?alm=_s1&ent=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>                   
                                        <?php                        
                                        }

                                        ?>                                  
                                                                  
                                    	<?php          
                                            if ($Roll == 'Admin')
                                        {
                                        ?> 
                                            <a class="btn btn-danger btn-info-full" href="?alm=_9&del=<?php echo $row['id_kar'];?>" target="_self"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>  
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

						<?php
                            }
                        }
                        mysqli_free_result($result);?>   
                  
                    </tbody>
                </table>   
          </div>         
         
         
          </div>
    </div>
</div>    