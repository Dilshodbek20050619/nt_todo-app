<?php
require "DB.php";

class Todo
{
    public $pdo;

    public function __construct()
    {
        $db = new DB();
        $this->pdo = $db->conn;
    }

    public function store(string $title, string $dueDate)
    {
        var_dump($dueDate);
        $query = "INSERT INTO todos(title, status, due_date, created_at, updated_at) 
                VALUES (:title, 'pending', :due_date, NOW(), NOW())
        ";
        $this->pdo->prepare($query)->execute([
            ":title" => $title,
            ":due_date" => $dueDate
        ]);
    }

    public function getAllTodos()
    {
        $query = "SELECT * FROM todos";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }

    public function complete(int $id): bool
    {
        $query = "UPDATE todos set status='completed' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function inProgress(int $id): bool
    {
        $query = " UPDATE todos set status='in_progress',updated_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function pending(int $id): bool
    {
        $query = "UPDATE todos set status='pending' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function delete(int $id): bool
    {
        $query = "DELETE FROM todos where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function getTodo(int $id){
        $query="SELECT * FROM todos where id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ":id" => $id
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update(int $id,string $status, string $title, string $due_date){
        $due_date= new DateTime($due_date);
        $due_date = $due_date->format('Y-m-d H:i:s');
        $query = "UPDATE todos  set title=:title, status=:status,due_date=:due_date ,updated_at =NOW() where id=:id";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
            ":id" => $id,
            ":title" => $title,
            ":status" => $status,
            ":due_date" => $due_date
        ]);

    }
}