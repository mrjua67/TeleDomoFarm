<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
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
        <li class="active">
          <a href="#">
            <i class="bx bx-spa"></i>
            <span class="text">Siembras y Cosechas</span>
          </a>
        </li>
        <li>
          <a href="estadisticas.php">
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
            <i class="bx bxl-gitlab"></i>
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
            <h1>Siembras y Cosechas</h1>
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

        <ul class="box-info">
          <li>
            <i class="bx bxl-spring-boot"></i>
            <span class="text">
              <h3>3</h3>
              <p>Siembras</p>
            </span>
          </li>
          <li>
            <i class="bx bx-spa"></i>
            <span class="text">
              <h3>2</h3>
              <p>Cosechas</p>
            </span>
          </li>
        </ul>
        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Cultivos</h3>
              <i class="bx bx-filter"></i>
              <p id="counter"></p>
            </div>
            <form action="javascript:void(0);"method="POST" onsubmit="app.Add()">
              <input type="text" id="semillacelda" placeholder="New semilla" />
			        <input type="text" id="cultivocelda" placeholder="New cultivo" />
			        <input type="text" id="tiempodesignadocelda" placeholder="New design time " />
			        <input type="text" id="diascomprovados" placeholder="New checked days " />
              <input type="submit" value="Add" />
            </form>

            <div id="spoiler" role="aria-hidden">
              <form action="javascript:void(0);" method="POST" id="saveEdit">
                <input type="text" id="edit-semilla" />
                <input type="submit" value="Edit" />
                <a onclick="CloseInput()" aria-label="Close">&#10006;</a>
              </form>
            </div>

            <p id="counter"></p>

            <table>
              <tr>
                <th>Semilla</th>
                <th>Cultivo</th>
                <th>Estado</th>
                <th>Tiempo designado</th>
                <th>Dias Comprovados</th>
              </tr>
              <tbody id="semillas"></tbody>
              <tbody id="cultivo"></tbody>
              <tbody id="estado"></tbody>
              <tbody id="tiempoDesignado"></tbody>
              <tbody id="diasComprovados"></tbody>
            </table>

            <script>
              var completed = false;
              var pending = false;
              var processing = false;
              var state1;
              var state2;
              var state3;
              var app = new (function () {
                this.el = document.getElementById("semillas");
                this.el = document.getElementById("cultivo");
                this.el = document.getElementById("tiempoDesignado");
                this.el = document.getElementById("diasComprovados");
                this.semillas = [
                  "Alverja",
                  "Mazorca",
                  "Papa",
                  "Calabaza",
                  "Uchuva",
                ];
                this.cultivo = [
                  "cosecha",
                  "siembra",
                  "cosecha",
                  "cosecha",
                  "cosecha",
                ];
                this.estado = [
                  "completado",
                  "pendiente",
                  "procesando",
                  "pendiente",
                  "completado",
                ];
                this.tiempoDesignado = ["92", "48", "45", "90", "45"];
                this.diasComprovados = ["92", "0", "15", "0", "45"];
                this.Count = function (data) {
                  var el = document.getElementById("counter");
                  var name = "country";
                  if (data) {
                    if (data > 1) {
                      name = "semillas";
                      name = "cultivo";
                      name = "estado";
                      name = "tiempoDesignado";
                      name = "diasComprovados";
                    }
                    el.innerHTML = data + " " + name;
                  } else {
                    el.innerHTML = "No " + name;
                  }
                };

                this.FetchAll = function () {
                  var data = "";
                  if (this.semillas.length > 0) {
                    for (i = 0; i < this.semillas.length; i++) {
                      data += "<tr>";
                      if (this.cultivo[i] == "siembra") {
                        data +='<td><i class="bx bxl-spring-boot"></i>' +this.semillas[i] +"</td>";
                      } else if (this.cultivo[i] == "cosecha") {
                        data +='<td><i class="bx bx-spa"></i>' +this.semillas[i] +"</td>";
                      }
                      data += "<td>" + this.cultivo[i] + "</td>";
                      if (this.tiempoDesignado[i] == this.diasComprovados[i]) {
                        completed = true;
                        pending = false;
                        processing = false;
                        estado = 'completado';
                        data +='<td><span class="status completed">' +this.estado[i] +"</span></td>";
                        state1 = this.estado[i];
                        console.log(state1);
                      } else if (this.tiempoDesignado[i] != this.diasComprovados[i] && this.diasComprovados[i] != "0") 
                      {
                        pending = "pendiente";
                        processing = false;
                        completed = false;
                        estado = 'procesando';
                        data +='<td><span class="status process">' + this.estado[i] +"</span></td>";
                        state2 = this.estado[i];
                        console.log(state2);
                      } else if (this.diasComprovados[i] == "0") {
                        processing = true;
                        completed = false;
                        pending = false;
                        estado = 'pendiente';
                        data +='<td><span class="status pending">' +this.estado[i] +"</span></td>";
                        state3 = this.estado[i];
                        console.log(state3);
                      }

                      data += "<td>" + this.tiempoDesignado[i] + " dias</td>";
                      data += "<td>" + this.diasComprovados[i] + " dias</td>";
                      data +='<td><button onclick="app.Edit(' + i + ')">Edit</button></td>';
                      data +='<td><button onclick="app.Delete(' + i + ')">Delete</button></td>'; data += "</tr>";
                    }
                  }
                  this.Count(this.semillas.length);
                  return (this.el.innerHTML = data);
                };
                this.Add = function () {
                  el = document.getElementById("semillacelda");
                  elc = document.getElementById("cultivocelda");
                  elt = document.getElementById("tiempodesignadocelda");
                  eld = document.getElementById("diascomprovados");
                  // Get the value
                  var country = el.value;
                  var cultive = elc.value;
                  var completed = "completado";
                  var processing = "procesando";
                  var pending1 ="pendiente";
                  var time = elt.value;
                  var days = eld.value;
                  if (country) {
                    // Add the new value
                    this.semillas.push(country.trim());
                    // Reset input value
                    el.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }

                  if(pending == pending1){
                    // Add the new value
                    this.estado.push(pending.trim());
                    // Reset input value
                    el.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }
                  else if(processing){
                    // Add the new value
                    this.estado.push(processing.trim());
                    // Reset input value
                    el.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }/*
                  else if(completed == true){
                    // Add the new value
                    this.estado.push(completado.trim());
                    // Reset input value
                    el.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }*/
                  if (cultive) {
                    // Add the new value
                    this.cultivo.push(cultive.trim());
                    // Reset input value
                    elc.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }
                  if (time) {
                    // Add the new value
                    this.tiempoDesignado.push(time.trim());
                    // Reset input value
                    elt.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }
                  if (days) {
                    // Add the new value
                    this.diasComprovados.push(days.trim());
                    // Reset input value
                    eld.value = "";
                    // Dislay the new list
                    this.FetchAll();
                  }
                };
                this.Edit = function (item) {
                  var el = document.getElementById("edit-semilla");
                  // Display value in the field
                  el.value = this.semillas[item];
                  // Display fields
                  document.getElementById("spoiler").style.display = "block";
                  self = this;
                  document.getElementById("saveEdit").onsubmit = function () {
                    // Get value
                    var country = el.value;
                    if (country) {
                      // Edit value
                      self.semillas.splice(item, 1, country.trim());
                      // Display the new list
                      self.FetchAll();
                      // Hide fields
                      CloseInput();
                    }
                  };
                };
                this.Delete = function (item) {
                  // Delete the current row
                  this.semillas.splice(item, 1);
                  // Display the new list
                  this.FetchAll();
                };
              })();
              app.FetchAll();
              function CloseInput() {
                document.getElementById("spoiler").style.display = 'none';
              }
            </script>
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
  </body>
</html>
