<?php
         
    $sql = "SELECT id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres FROM  prod_".$tutu." inner join pres_".$tutu." on pres_pro = id_pres  where  id_pro like '".htmlspecialchars($_GET['co'])."' ";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pro = $row['cod_pro'] ;
            $pros = $row['pro_pro'] ;  
            $pres = $row['pres_pres'] ;              
        }
    } else {
        echo "0 results";
    }
    $result->close();  
             
?>   




<script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "<?php echo $pro; ?> - <?php echo $pros; ?> - <?php echo $pres; ?>"
            },
            axisY: {
                title: "cantidad",
                suffix: "",
                includeZero: false
            },
            axisX: {
                title: ""
            },
            data: [{
                type: "bar",
                yValueFormatString: "",
                dataPoints: [
<?php
         
    $sql = "SELECT id_pers,n_pers,id_kar,prov_kar,num_kar,stat_kar,fecho_kar,id_mov,kar_mov,tip_mov,prod_mov,cant_mov,fech_mov,id_pro,cod_pro,pro_pro,pres_pro,id_pres,pres_pres,DATE_FORMAT(fech_mov,'%d/%m/%Y') AS niceDate FROM pers_".$tutu." inner join kardex_".$tutu." on id_pers = prov_kar inner join mov_".$tutu." on id_kar = kar_mov inner join prod_".$tutu." on prod_mov = id_pro inner join pres_".$tutu." on pres_pro = id_pres  where id_pers like '".htmlspecialchars($_GET['us'])."' and prod_mov like '".htmlspecialchars($_GET['co'])."' order by fech_mov ASC";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
?>       
                        { label: "<?php echo $row['niceDate']; ?>", y: <?php echo $row['cant_mov']; ?> },                    
<?php                                    
        }
    } else {
        echo "0 results";
    }
    $result->close();  
             
?>                     
                    { label: "", y: 0 }
                ]
            }]
        });
        chart.render();
    }
</script>
<style>
    .ff{
    width: 90%;
        margin: 10px auto;
    }    
    .aa{
        height: 370px; 
        width: 100%; 
    }
    .canvasjs-chart-credit{display: none;}
</style>
<div class="ff">
    <div id="chartContainer" class="aa"></div>
<a href="?alm=_18" class="btn btn-info" role="button">Regresar</a>    
</div>       
        <script src="canvasjs.min.js"></script>