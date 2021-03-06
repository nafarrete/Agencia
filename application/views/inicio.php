<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agencia Única | Uniendo empresas</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/text.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/blue.css" />
<link type="text/css" href="<?php echo base_url(); ?>css/smoothness/ui.css" rel="stylesheet" />
    <link href='<?php echo base_url(); ?>css/cupertino/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.10.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/inicio.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
  	<!--LOGO-->
	<div class="grid_8" id="logo"><a href="http://nicetheme.net" target="_blank" style="color: #FFFFFF"><img src="<?php echo base_url();?>images/logo_AU.png" height="100" width="200"></a></div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><?php echo $sesion; ?></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="<?php echo base_url(); ?>index.php" class="main current"><span class="outer"><span class="inner dashboard">Inicio</span></span></a></li>
        <li class="item middle" id="two"><a href="<?php echo base_url(); ?>index.php/cliente/" class="main menutop"><span class="outer"><span class="inner content">Cliente</span></span></a></li>
        <li class="item middle" id="three"><a href="<?php echo base_url(); ?>index.php/proveedor/" class="main menutop"><span class="outer"><span class="inner proveedor png">Proveedor</span></span></a></li>
        <li class="item middle" id="four"><a href="#" class="main"><span class="outer"><span class="inner empresas">Empresas</span></span></a></li>
		<li class="item middle" id="five"><a href="#" class="main"><span class="outer"><span class="inner productos">Cat.Productos</span></span></a></li>        
		<!--<li class="item middle" id="six"><a href="#" class="main"><span class="outer"><span class="inner event_manager">Agenda</span></span></a></li>-->        
		<li class="item middle" id="eight"><a href="<?php echo base_url(); ?>index.php/herramientas" class="main menutop"><span class="outer"><span class="inner settings">Herramientas</span></span></a></li>
		<li class="item last" id="seven"><a href="<?php echo base_url(); ?>index.php/ayuda" class="main menutop"><span class="outer"><span class="inner acerca">Ayuda</span></span></a></li>        
		
    </ul>
</div>
<!-- MENU END -->
</div> 

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--<div style="background-image: url("<?php echo base_url();?>images/icon_new.png");"></div>-->
    
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Bienvenido</h1>
    <div style="color:#333; margin: 0px 0px 0px 20px;">
    	<p>Agencia Única es un sistema para empresas, diseñado para obtener precios bajos y conocer al mejor proveedor de los productos que deseamos comprar.</p>
    	<p>Toda empresa compra y vende, por lo que en Agencia Única ambos perfiles pueden ser manejados.</p>
    	
    	<p>¿Como funciona?</p>
    	<p>Simplemente registra tu empresa, y una vez validada, podras especificar uno o varios productos que deseas adquirir y una serie de ofertas de diferentes proveedores llegaran a ti.</p>
    	   	
    	
    </div>
    <div><img src="<?php echo base_url();?>images/logo_AU.png"></div>
    
    
    </div>
    
    
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_calendar">No tienes ninguna licitación programa para el dia de hoy</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    

    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
  
<div class="clear"> </div>

</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Agencia Unica Copyright<a href="http://nicetheme.net/"> AU 2011</a></div>
<!-- FOOTER END -->
<div id="dia" title="Iniciar Sesión"></div>
<div id="dia_reg" title="Registrarse"></div>
<div id="dia_mod" title="Modificar datos"></div>
</body>
</html>
