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
            background: url(public/imgs/user.jpg);
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
        <li><a href="#">Inicio</a></li>
        <li><a href="#">DisWeb</a></li>
        <li><a href="#">Diseños</a></li>
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


    <!---->
    <h1>Datos de Usuario - Diseñador</h1>
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
           <?php if ($row->rol_us != "Administrador" && $row->rol_us != "Empleado" && $row->rol_us != "Usuario"): ?>
           <tr <?php if ($row->state_us == 'Inactivo') { echo 'class="danger"';} ?>>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->document_us; ?></td>
              <td class="right"><?php echo $row->firstName_us; ?></td>
              <td class="right"><?php echo $row->lastName_us; ?></td>
              <td class="right"><?php echo $row->phone_us; ?></td>
              <td class="right">
                  <a href="<?php echo base_url(); ?>user/lst/<?php echo $row->id_us; ?>" type="button" 
                  class="btn button small danger">
                  <i class="icon-search"></i></a>

                  <a href="<?php echo base_url(); ?>user/upd/<?php echo $row->id_us; ?>" type="button" 
                  class="btn button small primary">
                  <i class="icon-pencil"></i></a>
              </td>
           </tr>
           <?php endif ?>
           <?php endforeach ?>
           </tbody>
           <tfoot></tfoot>
       </table>
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