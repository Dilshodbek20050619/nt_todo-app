<?php
require 'views/companent/header.php';
?>
<div class="edit-container">
    <h2 class="edit-header">Edit Task</h2>
    <form method="POST" action="/todos/<?= $todo["id"] ?>/update">
        <input hidden="" type="text" name="_method" value="put">
        <div class="form-group">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" id="taskName" name="title" class="form-control" placeholder="Enter task name" value="<?= $todo['title'] ?>">
        </div>
        <div class="form-group">
            <label for="taskStatus" class="form-label">Status</label>
            <select id="taskStatus" class="form-select" name="status">
                <option value="pending" <?= $todo['status']=='pending' ? 'selected' : '' ?>>Pending</option>
                <option value="completed"<?= $todo['status']=='completed' ? 'selected' : ''?>>Comleted</option>
                <option value="in_progress"<?= $todo['status']=='in_progress' ? 'selected' : '' ?>>InProgress</option>
            </select>
        </div>
        <div class="form-group">
            <label for="taskDueDate" class="form-label">Due Date</label>
            <input type="datetime-local" id="taskDueDate" name="due_date" class="form-control" value="<?= $todo['due_date'] ?>">
        </div>
        <div class="btn-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="/todos" class="btn btn-secondary">Back to Todo list</a>
        </div>
    </form>
</div>
<?php
require 'views/companent/futter.php';
