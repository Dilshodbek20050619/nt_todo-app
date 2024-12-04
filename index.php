<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$todo = new Todo();
$router = new Router();
$router->get('/todos/{id}/edit', function ($todoId) use($todo){
    $getTodo = $todo->getTodo($todoId);
    view('edit', [
        'todo'=>$getTodo
    ]);
});
$router->get('/', function () {
    view('router');
});
$router->get('/edit', function () {
    view('edit');
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
        redirect('/todos');
    }
});

$router->get('/todos/{id}/complete', function ($todoId) use ($todo) {

    $todo->complete($todoId);
    redirect('/todos');
    exit();
});


$router->get('/todos/{id}/pending', function ($todoId) use ($todo) {

    $todo->pending($todoId);
    redirect('/todos');
    exit();
});


$router->get('/todos/{id}/in_progress', function ($todoId) use ($todo) {
    $todo->inProgress($todoId);
    redirect('/todos');
    exit();
});
$router->get('/todos/{id}/delete', function ($todoId) use ($todo) {
    $todo->delete($todoId);
    redirect('/todos');
    exit();
});

