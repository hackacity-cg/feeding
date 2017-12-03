<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($theme['title']) ? $theme['title'] : 'Feeding - Dashboard'; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <?php echo $this->Html->css('AdminLTE./bootstrap/css/bootstrap.min'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <?php echo $this->Html->css('AdminLTE.skins/skin-'. Configure::read('Theme.skin') .'.min'); ?>

  <?php echo $this->fetch('css'); ?>
  <?php echo $this->element('header-feeding'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-<?php echo Configure::read('Theme.skin'); ?> layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo $this->Url->build('/'); ?>" class="navbar-brand"><b>Feeding</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
              <?php
                    if(!empty($user_logado->doador_id)):
              ?>
              <li>
                  <?=$this->Html->link('Doar',['controller'=>'doacao', 'action'=>'add']) ?>
              </li>
                        <li>
                            <?= $this->Html->link('Reservados',['controller'=>'doacao', 'action'=>'index','r'=>'r']) ?>
                        </li>
              <?php
                    elseif (!empty($user_logado->voluntario_id)):
              ?>
                        <li>
                            <?=$this->Html->link('Reservas',['controller'=>'doacao', 'action'=>'index','r'=>'r']) ?>
                        </li>
              <?php
                    endif;

              ?>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <?php echo $this->Html->image('avatar.png', array('class' => 'user-image', 'alt' => 'User Image')); ?>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                <?php echo $this->Html->image('avatar.png', array('class' => 'user-image', 'alt' => 'User Image')); ?>

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <?= $this->Html->link('Meu Cadastro',['controller'=>'Users','edit', $user_logado->id],['class' => 'btn btn-default btn-flat']) ?>
                  </div>
                  <div class="pull-right">
                      <?php
                        echo $this->Html->link('Sair',['controller' => 'Users', 'action' =>'logout'],['class' => 'btn btn-default btn-flat'])
                      ?>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper content-feeding">
    <div class="container">
      <?php echo $this->fetch('content'); ?>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $this->element('footer'); ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.2-->
<?php echo $this->Html->script('AdminLTE./plugins/jQuery/jquery-2.2.3.min'); ?>
<?php echo $this->element('footer-feeding'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('AdminLTE./bootstrap/js/bootstrap.min'); ?>
<!-- SlimScroll -->
<?php echo $this->Html->script('AdminLTE./plugins/slimScroll/jquery.slimscroll.min'); ?>
<!-- FastClick -->
<?php echo $this->Html->script('AdminLTE./plugins/fastclick/fastclick'); ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('AdminLTE./js/app.min'); ?>
<!-- AdminLTE for demo purposes -->
<?php echo $this->fetch('script'); ?>
<?php echo $this->fetch('scriptBottom'); ?>


</body>
</html>
