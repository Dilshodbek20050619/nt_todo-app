<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://www.udohjeremiah.com/_next/image?url=%2Fblog%2Fremix-todo-app%2Fhero.webp&w=3840&q=100");

        }

        .todo-body h1, p {
            color: #ffffff;
        }

        .todo-body {
            background-color: #cac7c7;
            max-width: 700px;
            box-shadow: 0 0 5px 5px yellow;
        }

        .todo-text {
            font-weight: bold;
        }

        .completed {
            text-decoration: line-through;
            color: green;
        }

        .in_progress {
            text-decoration: underline;
            color: orange;
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
            <form action="/store" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username"
                           aria-describedby="button-addon2" name="title">
                    <input type="datetime-local" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username"
                           aria-describedby="button-addon2" name="due_date">
                    <button type="submit" class="btn btn-primary" id="button-addon2">Add</button>
                </div>
            </form>
            <ul class="list-group">
                <?php
                /** @var TYPE_NAME $todos */
                foreach ($todos as $todo) {
                    if ($todo['status'] == 'completed') {
                        echo '
                        <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    ' . $todo["title"] . '
                    <div>
                        <a href="/in_progress?id=' . $todo["id"] . '" class="btn btn-outline-warning">In progress</a>
                         
                        <a href="/pending?id=' . $todo["id"] . '" class="btn btn-outline-primary">Pending</a> 
                    </div>
                </li>
                    ';
                    } elseif ($todo['status'] == 'pending') {
                        echo '
                        <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    ' . $todo["title"] . '
                    <div>
                        <a href="/in_progress?id=' . $todo["id"] . '" class="btn btn-outline-warning">In progress</a>
                         
                        <a href="/complete?id=' . $todo["id"] . '" class="btn btn-outline-success">Complete</a> 
                    </div>
                </li>
                    ';
                    } else {
                        echo '
                        <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    ' . $todo["title"] . '
                    <div>
                        <a href="/pending?id=' . $todo["id"] . '" class="btn btn-outline-primary">Pending</a>
                         
                        <a href="/complete?id=' . $todo["id"] . '" class="btn btn-outline-success">Complete</a> 
                    </div>
                </li>
                    ';
                    }

                }

                ?>
            </ul>
        </div>
    </div>

</div>

</body>
</html>
