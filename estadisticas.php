<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/8a50c73cb7.js" crossorigin="anonymous"></script>

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!--font-awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>TeleDomoFarm</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-smile"></i>
        <span class="text">TeledomoFarm</span>
      </a>
      <ul class="side-menu top">
        <li>
          <a href="index.php">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="siembras-cosechas.php">
            <i class="bx bx-spa"></i>
            <span class="text">Siembras y Cosechas</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">Estadisticas</span>
          </a>
        </li>
        <li>
          <a href="tareas.php">
            <i class="bx bx-paste"></i>
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
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="../index.php" class="logout">
            <i class="bx bxs-log-out-circle"></i>
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
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Categorias</a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Buscar..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <a href="#" class="notification">
          <i class="bx bxs-bell"></i>
          <span class="num">8</span>
        </a>
        <a href="#" class="profile">
          <img src="img/people.png" />
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Estadisticas</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Home</a>
              </li>
            </ul>
          </div>
          <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a>
        </div>

        <div class="col-div-4-1">
          <div class="box">
            <p class="head-1">Ventas o ganancias</p>
            <p class="number">10.5K</p>
            <p class="percent">
              <i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674%
              <span>por ultimos meses</span>
            </p>
            <i class="fa fa-line-chart box-icon"></i>
          </div>
        </div>

        <div class="col-div-4-1">
            <div class="box">
              <p class="head-1">Compras</p>
              <p class="number">3.8K</p>
              <p class="percent" style="color: red !important">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i> 5.64%
                <span>por ultimos meses</span>
              </p>
              <i class="fa fa-circle-o-notch box-icon"></i>
            </div>
          </div>

          <div class="col-div-4-1">
            <div class="box">
              <p class="head-1">Inversion</p>
              <p class="number">6.1K</p>
              <p class="percent">
                <i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674%
                <span>por ultimos meses</span>
              </p>
              <i class="fa fa-shopping-bag box-icon"></i>
            </div>
          </div>

          <div class="clearfix"></div>
          <br />

          <div class="col-div-4-1">
            <div class="box-1">
              <div class="content-box-1">
                <p class="head-1">Historial</p>
                <br />
                <div class="m-box active1">
                  <p>Beneficio de la finca<br /><span class="no-1">mes pasado</span></p>
                  <span class="no">+3.1K</span>
                </div>
    
                <div class="m-box">
                  <p>Beneficio de la finca<br /><span class="no-1">mes pasado</span></p>
                  <span class="no">+2.5K</span>
                </div>
    
                <div class="m-box">
                  <p>Beneficio de la finca<br /><span class="no-1">mes pasado</span></p>
                  <span class="no">+3.5K</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-div-4-1">
            <div class="box-1">
              <div class="content-box-1">
                <p class="head-1">Total de produccion mes <span>ver</span></p>
    
                <div class="circle-wrap">
                  <div class="circle">
                    <div class="mask full">
                      <div class="fill"></div>
                    </div>
                    <div class="mask half">
                      <div class="fill"></div>
                    </div>
                    <div class="inside-circle">70%</div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="clearfix"></div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
  </body>
</html>
