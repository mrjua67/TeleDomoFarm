<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <title>firebase CRUD</title>
</head>

<body class="bg-light">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h4">Add Task</h1>
                        <form id="task-form">
                            <label for="title">Title</label>
                            <input class="form-control mb-3" type="text" placeholder="Task title" id="task-title">

                            <label for="description">Descripcion</label>

                            <textarea class="form-control mb-3" id="task-description" rows="3" placeholder="Task Description"></textarea>

                            <button class="btn btn-primary" id="btn-task-save">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6" id="task-container"></div>
        </div>
    </div>

    <script type="module" src="./index.js"></script>
</body>

</html>