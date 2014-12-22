 <head>
<link rel="stylesheet" type="text/css" href="css/svg_animate.css">
</head>
<a href="Contact" >
<svg width="500" height="350" viewBox="0 0 500 350">


<svg viewBox="0 0 160 160" width="160" height="160">
  <circle cx="80" cy="80" r="50" />
  <g transform=" matrix(0.866, -0.5, 0.25, 0.433, 80, 80)">
    <path d="M 0,70 A 65,70 0 0,0 65,0 5,5 0 0,1 75,0 75,70 0 0,1 0,70Z" fill="#FFF">
      <animateTransform attributeName="transform" type="rotate" from="360 0 0" to="0 0 0" dur="1s" repeatCount="indefinite" />
    </path>
  </g>
  <path d="M 50,0 A 50,50 0 0,0 -50,0Z" transform="matrix(0.866, -0.5, 0.5, 0.866, 80, 80)" />
</svg>


  <path id="myPath" fill="none" stroke="#000000" stroke-miterlimit="10" d="M91.4,104.2c3.2-3.4,18.4-0.6,23.4-0.6c5.7,0.1,10.8,0.9,16.3,2.3
	c13.5,3.5,26.1,9.6,38.5,16.2c12.3,6.5,21.3,16.8,31.9,25.4c10.8,8.7,21,18.3,31.7,26.9c9.3,7.4,20.9,11.5,31.4,16.7
	c13.7,6.8,26.8,9.7,41.8,9c21.4-1,40.8-3.7,61.3-10.4c10.9-3.5,18.9-11.3,28.5-17.8c5.4-3.7,10.4-6.7,14.8-11.5
	c1.9-2.1,3.7-5.5,6.5-6.5"/>
  <text>
    <textpath xlink:href="#myPath">
        Customers-Simon Beaudry
    </textpath>
  </text>
</svg></a>
<?php if(!Configure::read('Application.maintenance')){?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
            
		<?php echo $this->Html->link(
			Configure::read('Application.name'),
			AuthComponent::user('id') ? "/home" : "/"
			, array('class' => 'navbar-brand')) ?>
			<?php echo $this->I18n->flagSwitcher(array(
                'class' => 'dropdown-menu',
                'id' => 'language-switcher'
                ));?>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<?php if(AuthComponent::user('id')){?>
			<ul class="nav navbar-nav side-nav"> 
				<li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo __('Users')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>users"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>users/add"><i class="fa fa-plus"></i> <?php echo __('Register new user')?></a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'adresses' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo __('Adresses')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>adresses"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>adresses/add"><i class="fa fa-plus"></i> <?php echo __('Add new adress')?></a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'customers' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo __('Customers')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>customers"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>customers/add"><i class="fa fa-plus"></i> <?php echo __('Add new customer')?></a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'payment_informations' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo __('Payment information')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>payment_informations"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>payment_informations/add"><i class="fa fa-plus"></i> <?php echo __('Add new payment info')?></a></li>
					</ul>
				</li>
<!--				<li><a href="tables.html"><i class="fa fa-list"></i> Activity</a></li>-->
			</ul>
		<?php } ?>



		<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i><?php echo __('Profile')?></a></li>
					<li><a href="<?php echo $this->params->webroot?>users/edit/<?php echo AuthComponent::user('id')?>"><i class="fa fa-gear"></i><?php echo __('Settings')?></a></li>
					<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> <?php echo __('Log Out')?></a></li>
					
				</ul>
				
			</li>
		</ul>
		<?php }?>
			<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"></i> <?php echo __('Languages')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="<?php echo $this->I18n->flagSwitcher(array(
                'class' => 'dropdown user-dropdown',
                'id' => 'language-switcher'
                ));?></li>
					<li class="divider"></li>
				</ul>
				
			</li>
		</ul>
		<?php }?>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php } ?>