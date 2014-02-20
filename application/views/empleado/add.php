<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content=".5"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap-responsive.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" type="text/css" media="screen" />
	<title>Document</title>
	<style>
	    body{
	    	background: url(../public/imgs/fondo2.jpg);
	    }
		.content{
			width: 100%;
			max-width: 1000px;
			margin: 30px auto;
		}
		.span{
			text-transform: capitalize;
		}
		.panel{
			padding: 10px;
		}
		.panel-default{
			background-color: #fff;
		}
		.panel-footer{
			background-color: #fff;
		}	
		tr.primary{
			background-color: #999;
		}
		.menu
		{
			width: 220px;
			display: inline-block;
		}
		.slide
		{
			width: 740px;
			display: inline-block;
		}
	</style>
</head>
<body class="metro">
<div class="content">
	<!---->
	<div class="panel panel-default">
    <div class="panel-body">
      <img src="../public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">
    </div>
    <div class="panel-footer">

 <nav class="horizontal-menu">
    <ul>
        <li>
           <a class="navbar-brand" href="#">Bienvenido: <span class="span">
           <?php echo $this->session->userdata('name'); ?></span></a>
        </li>
    </ul>
    <ul>
        <li><a href="#">Products</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Buy Now</a></li>
        <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesion</a></li>
    </ul>
</nav>

<div class="principal">
<div class="menu">
<nav class="sidebar dark">
    <ul>
        <li class="title">Tipos de Usuario</li>
        <li class="stick bg-blue">
           <a href="<?php echo base_url(); ?>admin">
           <i class="icon-earth"> Administrador</i></a>
        </li>
        <li class="active stick bg-red">
           <a href="<?php echo base_url(); ?>admin_empleado">
           <i class="icon-stats"> Empleado</i></a>
        </li>
        <li class="stick bg-yellow">
           <a href="<?php echo base_url(); ?>admin_disenador">
           <i class="icon-console"> Diseñador</i></a>
        </li>
        <li class="stick bg-green">
           <a href="<?php echo base_url(); ?>admin_user">
           <i class="icon-user"> Usuario</i></a>
        </li> 
    </ul>
</nav>
</div>

<div class="slide">
<div class="slider-wrapper theme-default">
     <div id="slider" class="nivoSlider">
        <img src="../public/imgs/logo1.jpg" alt="" title="This is an example of a HTML caption with link" />
        <img src="../public/imgs/logo2.jpg" alt="" title="This is an example of a caption" />         
        <img src="../public/imgs/logo3.jpg" alt="" title="This is an example of a HTML caption with link" />          
        <img src="../public/imgs/logo4.jpg" alt="" title="This is an example of a caption" />
     </div>       
  </div>
</div>
</div>


	<form method="post">
       <fieldset>
           <legend><h1>Adicionar Empleado</h1></legend>
           <label>Documento</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Documento" id="document_us" name="document_us"
               value="<?php echo set_value('document_us'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Nombres</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Nombres" id="firstName_us" name="firstName_us"
               value="<?php echo set_value('firstName_us'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Apellidos</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Apellidos" id="lastName_us" name="lastName_us"
               value="<?php echo set_value('lastName_us'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Telefono</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Telefono" id="phone_us" name="phone_us"
               value="<?php echo set_value('phone_us'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Correo Electrónico</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Correo Electrónico" id="email_us" name="email_us"
               value="<?php echo set_value('email_us'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Usuario</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Usuario" id="user_us" name="user_us"
               value="<?php echo set_value('user_us'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Contraseña</label>
           <div class="input-control password" data-role="input-control">
               <input type="password" placeholder="Ingresar Contraseña" autofocus="" id="password_us"
               value="<?php echo set_value('password_us'); ?>" name="password_us">
               <button class="btn-reveal" tabindex="-1" type="button"></button>
               <input type="hidden" id="state_us"  name="state_us" value="Activo">
           </div>
           <label>Rol</label>
           <div class="input-control select">
    			<select name="rol_us" id="rol_us" value="<?php echo set_value('rol_us'); ?>">
    			    <option value="">-- Seleccione -- </option>
		      		<option value="Administrador">Administrador</option>
		      		<option value="Diseñador">Diseñador</option>
		      		<option value="Empleado">Empleado</option>
		      		<option value="Usuario">Usuario</option>
    			</select>
		   </div>
           <input type="submit" value="Adicionar" class="large primary">
           <a href="<?php echo base_url(); ?>" class=" button large danger">Cancelar</a>
       </fieldset>
   </form>
	</div>
</div>
    <script src="<?php echo base_url(); ?>public/js/metro-dropdown.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider(); 
    });
    </script>
</body>
</html>