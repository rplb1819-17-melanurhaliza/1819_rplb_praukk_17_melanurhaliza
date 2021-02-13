<!doctype html>
<html lang="en">

<head>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #82AFA5;">
			<div class="brand" style="background-color: #82AFA5;">
				<a href="dashboard_admin.php"><img src="assets/img/logo2.png" alt="LaMyeon Logo" class="img-responsive logo" style="width: 45%"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
				</div>
				<form class="navbar-form navbar-right">
					<div class="input-group">
						<input type="text" value="" class="form-control mr-2" placeholder="Search">
						<span class="input-group-btn"><button type="button" class="btn btn-success ">Go</button></span>
					</div>
				</form>
				
			</div>
		</nav>

		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="dashboard_admin.php" class="active"><i class="fa fa-home"></i><span>Dashboard</span></a>
						</li>
						<li>
							<a href="#data" data-toggle="collapse" class="collapsed"><i class="fa fa-table"></i> <span>Data Master</span> <i class="icon-submenu fa fa-caret-right"></i></a>
							<div id="data" class="collapse ">
								<ul class="nav">
									<li><a href="#" class="">Menu</a></li>
									<li><a href="#" class="">Login</a></li>
									<li><a href="#" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" class=""><i class="fa fa-shopping-cart"></i> <span>Entri Order</span></a>
						</li>
						<li>
							<a href="#" class=""><i class="fa fa-money"></i> <span>Entri Transaksi</span></a>
						</li>
						<li>
							<a href="#laporan" data-toggle="collapse" class="collapsed"><i class="fa fa-file-o"></i> <span>Laporan</span> <i class="icon-submenu fa fa-caret-right"></i></a>
							<div id="laporan" class="collapse ">
								<ul class="nav">
									<li><a href="#" class="">Laporan Order</a></li>
									<li><a href="#" class="">Laporan Transaksi</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="" class=""><i class="fa fa-sign-out"></i> <span>Logout</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard Admin</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3"><a href="tabelsiswa.html">
									<div class="metric">
										<span class="icon"><i class=
											"fa fa-cutlery"></i></span>
										<p>
											<span class="number">10</span>
											<span class="title">Menu</span>
										</p>
									</div></a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>		
		</div>
	
</body>

</html>
