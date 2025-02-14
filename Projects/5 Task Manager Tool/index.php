<?php

//* Start session to store task
session_start();

//* 1) Function to add new task
function addTask($task)
{
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    //* Check if task is already present
    $taskExist = array_column($_SESSION['tasks'], 'task');
    if (in_array($task, $taskExist)) {
        echo "<p class='error_message'>Task is already added : $task</p>";
        return;
    }

    array_push($_SESSION['tasks'], [
        'task' => $task,
        'completed' => false
    ]);

    echo "<p class='message'>Task is added</p>";
}

//* 2) Function to display new task
function displayTask($completedFilter = "all", $sortFilter = "asc")
{
    if (empty($_SESSION['tasks'])) {
        echo "<p class='error_message'>No tasks found.</p>";
        return;
    }
    /* 
    echo "<pre>";
    print_r($_SESSION['tasks']);
    echo "</pre>"; */

    //* Filter task based on different conditions

    $filterTasks = array_filter($_SESSION['tasks'], function ($task) use ($completedFilter) {
        return ($completedFilter === 'all') || ($completedFilter === 'completed' && $task['completed']) || ($completedFilter === 'incomplete' && !$task['completed']);
    });

    /*  echo "<pre>";
    print_r($filterTasks);
    echo "</pre>"; */

    //* Sort Login - Ascending (default) and Descending Order
    usort($filterTasks, function ($a, $b) use ($sortFilter) {
        if ($sortFilter === "asc") {
            return strcmp($a['task'], $b['task']);
        } elseif ($sortFilter === "desc") {
            return strcmp($b['task'], $a['task']);
        }
        return 0;
    });

    echo "<ul>";
    foreach ($filterTasks as $index => $task) {
        /*  print_r($index);
        print_r($task); */
        $status = $task['completed'] ? 'Completed' : 'InComplete';
        echo "<li>[$index] {$task['task']} <span>($status)</span></li>";
    }
    echo "</ul>";
}

//* 3) Function to complete task
function completeTask($index)
{
    echo "<pre>";
    print_r($_SESSION['tasks']);
    echo "</pre>";

    echo "<pre>";
    print_r($_SESSION['tasks'][$index]);
    echo "</pre>";

    if (isset($_SESSION['tasks'][$index]) && !$_SESSION['tasks'][$index]['completed']) {
        $_SESSION['tasks'][$index]['completed'] = true;
        echo "<p class='message'> Task Completed : {$_SESSION['tasks'][$index]['task']} </p>";
    } else {
        echo "<p class='error_message'>Invalid task index or Task already Completed.</p>";
    }
}

//* 4) Function to remove task
function removeTask($index)
{
    echo "<pre>";
    print_r($_SESSION['tasks']);
    echo "</pre>";
    echo "<pre>";
    print_r($_SESSION['tasks'][$index]);
    echo "</pre>";

    if(isset($_SESSION['tasks'][$index]) && !$_SESSION['tasks'][$index]['completed']) {
        $removedTask = $_SESSION['tasks'][$index]['task'];
        // echo $removedTask;
        array_splice($_SESSION['tasks'], $index, 1);
        echo "<p class='message'>Task removed : $removedTask</p>";
    } else {
        echo "<p class='error_message'>Invalid task index or Task is already removed.</p>";
    }
}

//* 5) Function to clear task
function clearAllTask()
{
    $_SESSION['tasks'] = [];
    echo "<p class='message'>All tasks are cleared.</p>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addTask'])) {
        $task = $_POST['task'];
        addTask($task);
    } elseif (isset($_POST['completeTask'])) {
        $index = $_POST['completedTaskIndex'];
        completeTask($index);
    } elseif (isset($_POST['removeTask'])) {
        $index = $_POST['removeTaskIndex'];
        removeTask($index);
    } elseif (isset($_POST['clearAllTasks'])) {
        clearAllTask();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager App</title>
    <link rel="stylesheet" href="style.css?v1=b">
</head>

<body>
    <div class="main_task_container">
        <div class="container">
            <h2>Task Manager App</h2>

            <!-- Form to add a new task -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="task">Add Task:</label>
                <input type="text" id="task" name="task" required>
                <button type="submit" name="addTask">Add Task</button>
            </form>

            <!-- Form to select completed or incomplete tasks and Sorting and filtering -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!-- Label 1 -->
                <label for="completedFilter">Show:</label>
                <select id="completedFilter" name="completedFilter">
                    <option value="all">All</option>
                    <option value="completed">Completed</option>
                    <option value="incomplete">Incomplete</option>
                </select>

                <!-- Label 2 -->
                <label for="sortFilter">Sort:</label>
                <select id="sortFilter" name="sortFilter">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>

                <button type="submit">Filter and Sort</button>
            </form>

            <!-- Form to mark a task as completed -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="completedTaskIndex">Complete Task (Enter Task Index):</label>
                <input type="number" id="completedTaskIndex" name="completedTaskIndex" required>
                <button type="submit" name="completeTask">Complete</button>
            </form>

            <!-- Form to remove an incomplete task -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="removeTaskIndex">Remove Task (Enter Task Index):</label>
                <input type="number" id="removeTaskIndex" name="removeTaskIndex" required>
                <button type="submit" name="removeTask">Remove</button>
            </form>

            <?php
            if (isset($_POST['completedFilter']) && isset($_POST['sortFilter'])) {
                $completedFilter = $_POST['completedFilter'];
                $sortFilter = $_POST['sortFilter'];
                displayTask($completedFilter, $sortFilter);
            } else {
                displayTask();
            }
            ?>

            <!-- Form to clear all tasks -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <button type="submit" class="clear" name="clearAllTasks">Clear All Tasks</button>
            </form>
        </div>
    </div>
</body>

</html>