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
    echo '<a href="/todos">Todos</a>';
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
    }
});
$router->get('/complete', function () use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->complete($_GET['id']);
        header('Location: /todos');
        exit();
    }
});

$router->get('/pending', function () use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->pending($_GET['id']);
        header('Location: /todos');
        exit();
    }
});

$router->get('/in_progress', function () use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->inProgress($_GET['id']);
        header('Location: /todos');
        exit();
    }
});



