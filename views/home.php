<?php
require 'views/companent/header.php';
?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3 ">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Doloribus ea quas quis sit voluptas! Aperiam
                distinctio ducimus eaque error, et, expedita harum laboriosam molestias
                mollitia nisi officia quidem repellat, repellendus?</p>
            <form action="/todos" method="POST">
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

                    echo '
                        <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    ' . $todo["title"] . '
                    <div>
                        <a href="/todos/' . $todo["id"] . '/edit' . '" class="btn btn-outline-warning">Edit</a>
                         
                        <a href="/todos/' . $todo["id"] . '/delete' . '" class="btn btn-outline-danger">Delite</a> 
                    </div>
                </li>
                    ';


                }

                ?>
            </ul>
        </div>
    </div>

</div>

<?php
require 'views/companent/futter.php';