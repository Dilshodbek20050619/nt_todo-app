
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$todo = new Todo();
$router = new Router();

$router->get('/', function () {
    view('router');
});

$router->get('/todos', function () use ($todo) {
    $todos = $todo->getAllTodos();
    view('home', [
        'todos' => $todos
    ]);
});
$router->post('/todos', function () use ($todo) {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /todos');
    }
});

$router->get('/complete/{id}', function ($todoId) use ($todo) {

        $todo->complete($todoId);
        header('Location: /todos');
        exit();
});


$router->get('/pending/{id}', function ($todoId) use ($todo) {

        $todo->pending($todoId);
        header('Location: /todos');
        exit();
});


$router->get('/in_progress/{id}', function ($todoId) use ($todo) {
        $todo->inProgress($todoId);
        header('Location: /todos');
        exit();
});

