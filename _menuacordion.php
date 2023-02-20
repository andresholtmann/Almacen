<style>
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
</style>
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
                            $sql="SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep where  stat_kar like '1'  order by fecho_kar DESC ";
                            if ($result=mysqli_query($mysqli,$sql))
                              {
                              $rowcount=mysqli_num_rows($result);
                              mysqli_free_result($result);
                              }  
                            $sqlaa="SELECT id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_pers,n_pers,pue_pers,ubi_pers,id_dep,n_dep,DATE_FORMAT(fecho_kar,'%d/%m/%Y') AS niceDate FROM kardex_".$tutu." inner join pers_".$tutu." on prov_kar = id_pers inner join depto_".$tutu." on ubi_pers = id_dep where  stat_kar like '4'  order by fecho_kar DESC ";
                            if ($resultaa=mysqli_query($mysqli,$sqlaa))
                              {
                              $rowcountaa=mysqli_num_rows($resultaa);
                              mysqli_free_result($resultaa);
                              }                              
                            ?>                            
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a >Pendientes</a>&nbsp;&nbsp;
                                        <span class="badge"><?php echo $rowcountaa;?></span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a >Despachadas</a>&nbsp;&nbsp;
                                        <span class="badge"><?php echo $rowcount;?></span>
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