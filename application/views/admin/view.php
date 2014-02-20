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
	    	background: url(../../public/imgs/admin.jpg);
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
      <img src="../../public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">
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
        <li class="active stick bg-blue">
           <a href="<?php echo base_url(); ?>admin">
           <i class="icon-earth"> Administrador</i></a>
        </li>
        <li class="stick bg-red">
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
        <img src="../../public/imgs/logo1.jpg" alt="" title="This is an example of a HTML caption with link" />
        <img src="../../public/imgs/logo2.jpg" alt="" title="This is an example of a caption" />         
        <img src="../../public/imgs/logo3.jpg" alt="" title="This is an example of a HTML caption with link" />          
        <img src="../../public/imgs/logo4.jpg" alt="" title="This is an example of a caption" />
     </div>       
  </div>
</div>
</div>
	<!---->
	<h1>Consultar Administrador</h1>

		<table class="table">
		<tr class="primary">
			<th class="text-left" colspan="2">Datos de Administrador</th>
		</tr>
		<?php foreach ($lu as $row ): ?>
		<tr>
			<th class="text-left">Documento</th>
			<td><?php echo $row->document_us; ?></td>
		</tr>
		<tr>
			<th class="text-left">Nombre</th>
			<td><?php echo $row->firstName_us; ?></td>
		</tr>
		<tr>
			<th class="text-left">Apellido</th>
			<td><?php echo $row->lastName_us; ?></td>
		</tr>
		<tr>
			<th class="text-left">Telefono</th>
			<td><?php echo $row->phone_us; ?></td>
		</tr>
		<tr>
			<th class="text-left">Correo Electronico</th>
			<td><?php echo $row->email_us; ?></td>
		</tr>
		<tr>
			<th class="text-left">Usuario</th>
			<td><?php echo $row->user_us; ?></td>
		</tr>
		<tr>
			<th class="text-left">Rol</th>
			<td><?php echo $row->rol_us; ?></td>
		</tr>
		<?php endforeach ?>
		<tfoot></tfoot>
		</table>
		<a class="button large danger" href="<?php echo base_url(); ?>">Volver Atras</a>
	</div>
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