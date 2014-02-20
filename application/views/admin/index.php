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
	    	background: url(public/imgs/admin.jpg);
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
      <img src="public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">
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
        <img src="public/imgs/logo1.jpg" alt="" title="This is an example of a HTML caption with link" />
        <img src="public/imgs/logo2.jpg" alt="" title="This is an example of a caption" />         
        <img src="public/imgs/logo3.jpg" alt="" title="This is an example of a HTML caption with link" />          
        <img src="public/imgs/logo4.jpg" alt="" title="This is an example of a caption" />
     </div>       
  </div>
</div>
</div>


	<!---->
	<h1>Lista de Administrador</h1>
	<a href="<?php echo base_url(); ?>admin/add" class="button large success">Adicionar Administrador</a><br><br>

       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Documento</th>
               <th class="text-left">Nombre</th>
               <th class="text-left">Apellido</th>
               <th class="text-left">Telefono</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
		   <?php foreach ($lu as $row ): ?>
		   <?php if ($row->rol_us != "Usuario" && $row->rol_us != "Empleado" && $row->rol_us != "Diseñador"): ?>
           <tr <?php if ($row->state_us == 'Inactivo') { echo 'class="danger"';} ?>>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->document_us; ?></td>
              <td class="right"><?php echo $row->firstName_us; ?></td>
              <td class="right"><?php echo $row->lastName_us; ?></td>
              <td class="right"><?php echo $row->phone_us; ?></td>
              <td class="right">
                  <a href="<?php echo base_url(); ?>admin/lst/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small danger">
				  <i class="icon-search"></i></a>

				  <a href="<?php echo base_url(); ?>admin/upd/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small primary">
				  <i class="icon-pencil"></i></a>

				  <?php if ($row->state_us == "Activo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updina/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small warning">
				  <i class="icon-key"></i></a>
				  <?php endif ?>

				  <?php if ($row->state_us == "Inactivo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updhab/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small inverted">
				  <i class="icon-key-2"></i></a>
				  <?php endif ?>

				 <!--  <a onclick="borrar();" type="button" class="btn btn-xs btn-danger"  
				 data-toggle="tooltip" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a> -->
				  <button type="button" class="btn button small info btn-delete" data-id="<?php echo $row->id_us; ?>">
				  <i class="icon-box-remove"></i></button>
              </td>
           </tr>
           <?php endif ?>
		   <?php endforeach ?>
		   <tr>
			  <td colspan="6" class="text-center">
				 <?php echo $this->pagination->create_links(); ?>
			  </td>
		   </tr>
           </tbody>
           <tfoot></tfoot>
       </table>
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
<script>

	/*===================*/
	/*eliminar con javascript*/
	/*===================*/

	/*function borrar(){
		var res = confirm('Realmente quiere eliminar este usuario');

		if (res == true) {
			window.location.replace('<?php echo base_url(); ?>index.php/user/del/<?php echo $row->id_us; ?>');
		};
	}*/

	/*===================*/
	/*eliminar con jquery*/
	/*===================*/

	$(document).ready(function() {
		$(".btn").tooltip();

		$('table.table').on('click', '.btn-delete', function(event) {
			event.preventDefault();
			
			$res = confirm("Realmente desea eliminar este usuario");

			if ($res == true) {
				$id_us = $(this).attr('data-id');
				window.location.replace('<?php echo base_url(); ?>user/del/'+$id_us+'');
			}
		});
	});
</script>
</body>
</html>