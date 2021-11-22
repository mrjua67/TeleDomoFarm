<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
			<li >
				<a href="index.php">
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
			<li class="active">
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
	</section>
    <!--other seccion -->
    <iframe class="tareas" src="tareas/index.php" frameborder="0"></iframe>
	<!-- CONTENT -->
	<script src="script.js"></script>
</body>
</html>