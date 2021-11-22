<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!--font-awesome-->
    <link
      rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	  <script src="https://kit.fontawesome.com/8a50c73cb7.js" crossorigin="anonymous"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>TeleDomoFarm</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">TeledomoFarm</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="siembras-cosechas.php">
					<i class='bx bx-spa'></i>
					<span class="text">Siembras y Cosechas</span>
				</a>
			</li>
			<li>
				<a href="estadisticas.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Estadisticas</span>
				</a>
			</li>
			<li>
				<a href="tareas.php">
					<i class='bx bx-paste'></i>
					<span class="text">Tareas</span>
				</a>
			</li>
			<li>
				<a href="inventario-ganadero.php">
					<i class='bx bxl-gitlab'></i>
					<span class="text">Inventario Ganadero</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Back</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categorias</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Buscar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bx-home-alt' ></i>
					<span class="text">
						<h3>600mX600m</h3>
						<p>Terreno</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>6</h3>
						<p>Encargados</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543 USD</h3>
						<p>Produccion</p>
					</span>
				</li>
			</ul>
			
			<div class="head-title">
				<div class="left">
					<h1>Sitemas de Control</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-webcam'></i>
					<span class="text1">
						<p>Seguridad</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-thermometer'></i>
					<span class="text1">
						<p>Humedad y temperatura</p>
					</span>
				</li>
				<li>
					<i class='bx bx-podcast'></i>
					<span class="text1">
						<p>Iluminacion</p>
					</span>
				</li>
			</ul>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=umbita&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google map iframe generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
	

	<script src="script.js"></script>
</body>
</html>