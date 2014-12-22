<div class="row">
	<div class="col-lg-12">
		<h1>Dashboard <small>Statistics Overview</small></h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
		</ol>
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Use this boxes to fill your dashboard. You can load number of users, activities, logs, etc...
		</div>
	</div>
</div><!-- /.row -->

<div class="row">
	<div class="col-lg-3">
		<div class="panel panel-info">
			<div class="panel-heading">
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
      Customers-Simon Beaudry.
    </textpath>
  </text>
</svg>

				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading"><?php echo $users_count?></p>
						<p class="announcement-text">Users</p>
					</div>
				</div>
			</div>
			<a href="<?php echo $this->params->webroot?>users">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							View users
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-check fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading">12</p>
						<p class="announcement-text">To-Do Items</p>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Complete Tasks
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading">18</p>
						<p class="announcement-text">Crawl Errors</p>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Fix Issues
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-comments fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading">56</p>
						<p class="announcement-text">New Orders!</p>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Complete Orders
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div><!-- /.row -->
