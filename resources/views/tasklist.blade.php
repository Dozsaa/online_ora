<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>