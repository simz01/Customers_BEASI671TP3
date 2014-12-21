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