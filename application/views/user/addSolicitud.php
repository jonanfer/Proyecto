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
            color: #fff;
        }   
        tr.primary{
            background-color: #999;
        }
        .slide
        {
            width: 970px;
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
           <a class="navbar-brand" href="#">Bienvenid@: <span class="span">
           <?php echo $this->session->userdata('name'); ?></span></a>
        </li>
    </ul>
    <ul>
        <li><a href="<?php echo base_url(); ?>user">Inicio</a></li>
        <li><a href="#">Disweb</a></li>
        <li><a href="<?php echo base_url(); ?>solicitud">Solicitudes</a></li>
        <li><a href="#">Adelantos</a></li>
        <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesion</a></li>
    </ul>
</nav>

<div class="principal">
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

<form method="post" class="formulario" action="">
       <fieldset>
           <legend><h1>Solicitud de Diseño</h1></legend>
           <label>Usuario</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Documento" id="usuario_id" name="usuario_id"
               value="<?php echo set_value('usuario_id'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Tipo de Solicitud</label>
           <div class="input-control select">
          <select name="tip_solicitud" id="tip_solicitud" value="<?php echo set_value('tip_solicitud'); ?>">
              <option value="">-- Seleccione -- </option>
              <option value="Diseño Web">Diseño Web</option>
              <option value="Diseño Grafico">Diseño Grafico</option>
              <option value="Diseño de Interiores">Diseño de Interiores</option>
          </select>
          </div>
           <label>Fecha Solicitud</label>
           <div class="input-control text" data-role="input-control">
               <input type="date" placeholder="Ingresar Fecha" id="fecha_solicitud" name="fecha_solicitud"
               value="<?php echo set_value('fecha_solicitud'); ?>">
           </div>
           <label>Imagen</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Imagen" id="ima_solicitud" name="ima_solicitud"
               value="<?php echo set_value('ima_solicitud'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Descripción</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Descripción" id="des_solicitud" name="des_solicitud"
               value="<?php echo set_value('des_solicitud'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
               <input type="hidden" id="id_solicitud"  name="id_solicitud">
               <input type="hidden" id="est_solicitud"  name="est_solicitud" value="Pendiente">
           </div>
           <input type="submit" value="Solicitar" class="large primary" name="solicitar">
           <a href="<?php echo base_url(); ?>solicitud" class=" button large danger">Cancelar</a>
       </fieldset>
   </form>
   
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