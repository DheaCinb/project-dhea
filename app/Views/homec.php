<!DOCTYPE html>
<html>

<head>
    <title>
        <?= $title ?>
    </title>
    <style>
    .todo-list {
        margin-top: 20px;
    }

    .todo-item {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <h1>
        <?= $title ?>
    </h1>
    <form action="/add" method="post">
        <input type="text" name="task" placeholder="Tambahkan tugas" required>
        <button type="submit">Tambah</button>
    </form>
    <div class="todo-list">
        <?php if (!empty($tasks)): ?>
        <?php foreach ($tasks as $task): ?>
        <div class="todo-item">
            <input type="checkbox" <?= $task['completed'] ? 'checked' : '' ?> disabled>
            <span>
                <?= $task['task'] ?>
            </span>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>Tidak ada tugas yang ditambahkan.</p>
        <?php endif; ?>
    </div>
</body>

</html>