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
	    	/*background: url(public/imgs/abstract.jpg);*/
        background: -webkit-linear-gradient(left, white, blue);
	    }
		.content{
			width: 100%;
			max-width: 940px;
			margin: 30px auto;
		}
		.panel{
			padding: 10px;
		}
		.panel-default{
			background-color: #fff;
      background: -webkit-linear-gradient(left, white, navy);
		}
		.panel-footer{
			background-color: #fff;
      background: -webkit-linear-gradient(left, white, navy);
		}
    .info{
      width: 700px;
      margin: 0 auto;
      color: black;
    }
    .footer{
      background: -webkit-linear-gradient(left, black, teal);
      height: 100px;
      text-align: center;
    }
    .logo
    {
      margin-bottom: 70px;
    }
	</style>
</head>
<body class="metro">
<div class="content">
  <div class="panel panel-default">
  <div class="panel-body">
    <img src="public/imgs/logo4.fw.png" alt="..." class="logo">
    <img src="public/imgs/desig.png" alt="...">
  </div>
  <div class="panel-footer">

	<?php echo validation_errors(); ?>

   <br><br>
   <form method="post">
       <fieldset>
           <legend><h1>Ingreso de Usuarios</h1></legend>
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
           </div>
           <input type="submit" value="Ingresar" class="large primary">
           <a href="<?php echo base_url(); ?>register" class=" button large danger">Registrarse</a>
       </fieldset>
   </form>
         
  </div>
  </div>

  <div class="login">
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
  </div>

  <div class="info">
  <h1>Info</h1>
  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, tenetur, impedit, illo enim eum sed numquam non dolore quam ad praesentium at hic fuga facilis molestiae facere eius veniam quibusdam.</div>
  <div>Laborum officiis libero autem! Nihil, ratione, temporibus deleniti laborum adipisci nisi necessitatibus amet quia velit fugit ex a quaerat voluptatem saepe asperiores sunt libero minus ea non quisquam inventore atque!</div>
  <div>Excepturi, error tempore accusamus. Nesciunt, dolores, unde voluptas ipsa accusantium quasi ratione architecto quod eum minus. Veritatis, nostrum, quod delectus enim omnis ad ratione quisquam laborum dolorem sunt tenetur aspernatur?</div>
  <div>Placeat, accusamus, rem, voluptatem deleniti dignissimos sapiente harum quos similique autem esse odit minima vitae. Dicta, inventore, voluptatem, quos, officiis ipsam odit fugiat ut nihil architecto quidem esse dolor beatae.</div>
  <div>Excepturi, error tempore accusamus. Nesciunt, dolores, unde voluptas ipsa accusantium quasi ratione architecto quod eum minus. Veritatis, nostrum, quod delectus enim omnis ad ratione quisquam laborum dolorem sunt tenetur aspernatur?</div>
  <div>Placeat, accusamus, rem, voluptatem deleniti dignissimos sapiente harum quos similique autem esse odit minima vitae. Dicta, inventore, voluptatem, quos, officiis ipsam odit fugiat ut nihil architecto quidem esse dolor beatae.</div>
  <div>Dolorum, voluptatum, suscipit, cupiditate, nulla laudantium quod accusantium cum nesciunt sequi perferendis provident incidunt doloremque earum reiciendis enim corporis fuga laboriosam pariatur ratione commodi maxime fugiat alias illum ab rerum.</div>
  <div>Dolorum, voluptatum, suscipit, cupiditate, nulla laudantium quod accusantium cum nesciunt sequi perferendis provident incidunt doloremque earum reiciendis enim corporis fuga laboriosam pariatur ratione commodi maxime fugiat alias illum ab rerum.</div>
</div>
</div>

<div class="footer">
  <h1>footer</h1>
</div>
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