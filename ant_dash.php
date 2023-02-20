<style>
.table{
      margin:10px 0px;
       box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
      transition: all 0.2s ease-in-out;
      padding:20px;
    }   
    .tt{
        text-align: center;
    }
    .t1{
        background-color: red;
    }    
    .t2{
        background-color: green;
    }    
    .t3{
        background-color: orange;
    }    
    .t4{
        background-color: black;
     }    
    
</style>
<div class="container-fluid">   
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"><br>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Categor&iacute;as </a></li>
          </ul>
          <ul class="list-group">
                        <?php   
                         $query = "SELECT id_cat,cat FROM cat_".$tutu." order by cat ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $depo = $row['id_cat'] ;
                         ?>                     
              <li class="list-group-item">
                          <?php   
                            if ($resulta = mysqli_query($mysqli, "SELECT id_pro,cat_pro,id_cat,cat FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat where cat_pro like '$depo' ")) {
                            $row_cnta = mysqli_num_rows($resulta);
                            ?>  
                        <span class="badge"><stron>&nbsp;&nbsp;<?php printf($row_cnta); ?>&nbsp;&nbsp;</stron></span>
                            <?php                       
                            mysqli_free_result($resulta);
                            }                      
                        ?>
                <?php echo $row['cat'];?> 
              </li>                        
                    <?php
                            }
                        }
                        mysqli_free_result($result);
                        ?>              
          </ul>            
         </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            

                <h2 class="text-center">Inventario General</h2>
            
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>            
            

            
            
            
                    <div class="table-responsive">          
              <table class="table table-bordered table-hover table-list-search">
                <thead>
                  <tr>
                  <th class="tt">C&oacute;digo</th>
                  <th class="tt">Categor&iacute;a</th>
                  <th>Producto</th>
                  <th>Presentaci&oacute;n</th>
                  <th class="tt">L&iacute;m. M&iacute;nimo</th>                            
                  <th class="tt">saldo Actual</th>  
                  <th></th>                        
                  </tr>
                </thead>
                <tbody>
						<?php   
                         $query = "SELECT cod_pro,cat_pro,pres_pro,pres_pro,limin_pro,act_pro,id_cat,cat,id_pres,pres_pres FROM prod_".$tutu." inner join cat_".$tutu." on cat_pro = id_cat inner join pres_".$tutu." on pres_pro = id_pres order by cod_pro ASC";
                        $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td class="tt"><?php echo $row['cod_pro'];?></td>
                            <td class="tt"><?php echo $row['cat'];?></td>
                            <td><?php echo $row['pres_pres'];?></td>                                
                            <td><?php echo $row['pres_pro'];?></td>     
                            <td class="tt"><?php echo $row['limin_pro'];?></td>                                
                            <td class="tt">
                         <?php echo $row['act_pro'];?>
                             </td> 
                              <?php  
                                
                            if ($row['act_pro'] <= 0 ) 
                            {
                                ?>
                                <td class="t4">                                
                              <?php                                          
                                    }  
                                elseif ($row['act_pro'] > $row['limin_pro']) {
                                ?>
                                <td class="t2">                                                                    
                                <?php 
                                }   
                                elseif ($row['act_pro'] == $row['limin_pro']) {
                                ?>
                                <td class="t3">                                                                    
                                <?php 
                                }    
                                elseif ($row['act_pro'] < $row['limin_pro']) {
                                ?>
                                <td class="t1">                                                                    
                                <?php 
                                }                                    
                                ?>
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
            
            
   <script >
            
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Filtrar tabla: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">Ningun Relustado.</td></tr>');
        }
    });
});            
</script>         
            
            
      </div>
</div> 
</div>    
