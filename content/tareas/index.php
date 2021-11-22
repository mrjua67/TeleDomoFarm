<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Javsascript Task App</title>
    <!-- BOOTSTRAP 4 BOOTSWATCH LUX THEME -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
  <body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">tareas</a>
      </div>
    </nav>

    <div class="container">
      <div class="row my-5">
        <div class="col-md-4">

          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form id="formTask">
                <div class="form-group">
                  <input type="text" id="title" placeholder="titulo de la tarea" class="form-control">
                </div>
                <div class="form-group">
                  <textarea id="description" cols="30" placeholder="contenido de la tarea" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">guardar tarea</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div id="tasks"></div>
        </div>
      </div>
    </div>
    <script src="./app.js"></script>
  </body>
</html>