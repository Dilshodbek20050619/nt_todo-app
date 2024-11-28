
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .todo-body {
            max-width: 700px;
            box-shadow: 0 0 5px 5px #ccc;
        }
        .todo-text {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="todo-body my-5 p-3 ">
                <h1 class="text-center todo-text">Todo App</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Doloribus ea quas quis sit voluptas! Aperiam
                    distinctio ducimus eaque error, et, expedita harum laboriosam molestias
                    mollitia nisi officia quidem repellat, repellendus?</p>
                <form action="add.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
                               aria-describedby="button-addon2" name="title">
                        <select name="status" id="" style="margin:0 20px">
                            <option value="pending">Pending</option>
                            <option value="in_progress">In Progress</option>
                            <option value="copmleted">Copmleted</option>

                        </select>
                        <button type="submit" class="btn btn-primary"  id="button-addon2">Add</button>
                    </div>
                </form>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        An item
                        <button class="btn btn-outline-success"> Done</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        An item
                        <button class="btn btn-outline-success"> Done</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        An item
                        <button class="btn btn-outline-success"> Done</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        An item
                        <button class="btn btn-outline-success"> Done</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>