<style>
 *,
:after,
:before {
  box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
  content: '';
  display: table
}

.clearfix:after {
  clear: both;
  display: block
}
ul{
	list-style:none;
	margin: 0;
	padding: 0;
}
 .exo-menun a, a:hover, a.active, a:active, a:visited, a:focus{
	color:#fff;
	text-decoration:none;
}
.contentA{
	margin: 0px 0px;
}

.exo-menun{
    top: 0px;
    left: 0px;
	width: 100%;
	list-style: none;
	position:fixed;
	background: #3B7BB5;
    z-index: 1001;
}
.exo-menun > li {	display: inline-block;float:left;}
.exo-menun > li > a{
	color: #fff;
	text-decoration: none;
	text-transform: uppercase;
	border-right: 1px #365670 dotted;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}
.exo-menun > li > a.active,
.exo-menun > li > a:hover,
li.drop-down ul > li > a:hover{
	background:#696969;
	color:#fff;
}
.exo-menun i {
  float: left;
  font-size: 18px;
  margin-right: 6px;
  line-height: 20px !important;
}
li.drop-down,
.flyout-right,
.flyout-left{position:relative;}
li.drop-down:before {
  content: "\f103";
  color: #fff;
  font-family: FontAwesome;
  font-style: normal;
  display: inline;
  position: absolute;
  right: 6px;
  top: 20px;
  font-size: 14px;
}
li.drop-down>ul{
	left: 0px;
	min-width: 230px;

}
.drop-down-ul{display:none;}
.flyout-right>ul,
.flyout-left>ul{
  top: 0;
  min-width: 230px;
  display: none;
  border-left: 1px solid #365670;
  }

li.drop-down>ul>li>a,
.flyout-right ul>li>a ,
.flyout-left ul>li>a {
	color: #fff;
	display: block;
	padding: 20px 22px;
	text-decoration: none;
	background-color: #696969;
	border-bottom: 1px dotted #547787;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}
.flyout-right ul>li>a ,
.flyout-left ul>li>a {
	border-bottom: 1px dotted #B8C7BC;
}


/*Flyout Mega*/
.flyout-mega-wrap {
	top: 0;
	right: 0;
	left: 100%;
	width: 100%;
	display:none;
	height: 100%;
	padding: 15px;
	min-width: 742px;

}
h4.row.mega-title {
  color:#eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid #ccc;
 }
.flyout-mega ul > li > a {
  font-size: 90%;
  line-height: 25px;
  color: #fff;
  font-family: inherit;
}
.flyout-mega ul > li > a:hover,
.flyout-mega ul > li > a:active,
.flyout-mega ul > li > a:focus{
  text-decoration: none;
  background-color: transparent !important;
  color: #ccc !important
}
/*mega menu*/

.mega-menu {
  left: 0;
  right: 0;
  padding: 15px;
  display:none;
  padding-top: 0;
  min-height: 100%;

}
h4.row.mega-title {
  color: #eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid #547787;
  padding-top: 15px;
  background-color: #365670
  }
 .mega-menu ul li a {
  line-height: 25px;
  font-size: 90%;
  display: block;
}
ul.stander li a {
    padding: 3px 0px;
}

ul.description li {
    padding-bottom: 12px;
    line-height: 8px;
}

ul.description li span {
    color: #ccc;
    font-size: 85%;
}
a.view-more{
  border-radius: 1px;
  margin-top:15px;
  background-color: #696969;
  padding: 2px 10px !important;
  line-height: 21px !important;
  display: inline-block !important;
}
a.view-more:hover{
	color:#fff;
	background:#0DADEF;
}
ul.icon-des li a i {
    color: #fff;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    text-align: center;
    background-color: #009FE1;
    line-height: 35px !important;
}

ul.icon-des li {
    width: 100%;
    display: table;
    margin-bottom: 11px;
}
/*Blog DropDown*/
.Blog{
	left:0;
	display:none;
	color:#fefefe;
	padding-top:15px;
	background:#547787;
	padding-bottom:15px;
}
.Blog .blog-title{
	color:#fff;
	font-size:15px;
	text-transform:uppercase;

}
.Blog .blog-des{
	color:#ccc;
	font-size:90%;
	margin-top:15px;
}
.Blog a.view-more{
	margin-top:0px;
}
/*Images*/
.Images{
	left:0;
   width:100%;
	 display:none;
	color:#fefefe;
	padding-top:15px;
	background:#547787;
	padding-bottom:15px;
}
.Images h4 {
  font-size: 15px;
  margin-top: 0px;
  text-transform: uppercase;
}
/*common*/
.flyout-right ul>li>a ,
.flyout-left ul>li>a,
.flyout-mega-wrap,
.mega-menu{
	background-color: #696969;
}

/*hover*/
.Blog:hover,
.Images:hover,
.mega-menu:hover,
.drop-down-ul:hover,
li.flyout-left>ul:hover,
li.flyout-right>ul:hover,
.flyout-mega-wrap:hover,
li.flyout-left a:hover +ul,
li.flyout-right a:hover +ul,
.blog-drop-down >a:hover+.Blog,
li.drop-down>a:hover +.drop-down-ul,
.images-drop-down>a:hover +.Images,
.mega-drop-down a:hover+.mega-menu,
li.flyout-mega>a:hover +.flyout-mega-wrap{
	display:block;
}
    .lulu {
    -webkit-column-count: 8; /* Chrome, Safari, Opera */
    -moz-column-count: 8; /* Firefox */
    column-count: 8;
}
.lulu li{

}  
.lulu li a{
    text-align: center;
}      
    
.lulu li a:hover{
    
    background-color: coral;
    

}      
/*responsive*/
 @media (min-width:767px){

	.exo-menun > li > a{
	display:block;
	padding: 20px 22px;
 }
.mega-menu, .flyout-mega-wrap, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:absolute;
}
 .flyout-right>ul{
	left: 100%;
	}
	.flyout-left>ul{
	right: 100%;
}
 }
@media (max-width:767px){

	.exo-menun {
		min-height: 58px;
		background-color: #23364B;
		width: 100%;
	}
	
	.exo-menun > li > a{
		width:100% ;
	    display:none ;
	
	}
	.exo-menun > li{
		width:100%;
	}
	.display.exo-menun > li > a{
	  display:block ;
	  	padding: 20px 22px;
	}
	
.mega-menu, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:relative;
}

}
a.toggle-menua{
    position: absolute;
    right: 0px;
    padding: 20px;
    font-size: 27px;
    background-color: #ccc;
    color: #23364B;
    top: 0px;
}
</style>
<script>
$(function () {
 $('.toggle-menua').click(function(){
	$('.exo-menun').toggleClass('display');
	
 });
 
});

</script>

	<div class="contentA"> 
		<ul class="exo-menun">

            <li class="drop-down"><a href="?"><i class="fa fa-cogs"></i>Alamacen</a></li>
<?php
    if ($Roll == 'User')
    {      
?>   			
			<li class="mega-drop-down"><a href="#"><i class="fa fa-list"></i>Generales</a>
				<div class="animated fadeIn mega-menu">
					<div class="mega-menu-wrap">
						<div class="row">
								<ul  >
                        <li><a href="?alm=_2">Categor&iacute;as</a></li>
                        <li><a href="?alm=_3">Presentaciones</a></li>
                        <li><a href="?alm=_4">Proveedores</a></li>
                        <li><a href="?alm=_5">Productos</a></li>
                        <li><a href="?alm=_12">Unidades</a></li> 
                        <li><a href="?alm=_15">Personal</a></li>  
                        <li><a href="?alm=_6">Ing. Facturas</a></li>
                        <li><a href="?alm=_9">Entrega de Producto</a></li>
                        <li><a href="?alm=_13">Inv. Por Fecha</a></li>                                          
                        <li><a href="?alm=_25">Inv. a la Fecha</a></li>                                                                  
                        <li><a href="?alm=_27">Inv. a la Fecha Prod. Con Saldo</a></li>  								                                                                        
                        <li><a href="?alm=_26">Inv. Por Fecha Excel</a></li>                                                                                                      
                        <li><a href="?alm=_17">Ingresos y Egresos</a></li> 
                        <li><a href="?alm=_18">Personal/Pedidos/Producto</a></li>                         
                        <li><a href="?alm=_20">Consolidado por Dep.</a></li>                                                 
                        <li><a href="?alm=_21">Reporte por consumo.</a></li>  								

								</ul>
						</div>
					</div>	
				</div>
			</li>

<?php                        
          }
?>				
<!--
    <li ><a href="?">Solicitar Suministros</a></li>                 			        
    <li ><a href="?alm=_s2">Solicitar Bienes o Servicios</a></li>          
-->

			
				     <ul class="nav navbar-nav navbar-right">
<?php
	if(isset($_SESSION['login_user']))
	{
	$login_session=$_SESSION['login_user'];
//	echo ' Bienvenido/a '.$login_session.' ';
?>																											
 			<li><a ><i class="fa fa-envelope"></i><?php echo ''.$nom.' '.$ape.' ';?>	</a>
				<div class="contact">
			
				</div>
			</li>
<?php        	
	}
?>				
			<li><a href="logout.php"><i class="fa fa-envelope"></i> Cerrar</a>
				<div class="contact">
			
				</div>
			</li>
			<li>&nbsp;&ndash;&nbsp;
			</li>

    </ul>	
	</ul>

</div>