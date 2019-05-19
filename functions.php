<?php
function count_projects($task_list, $categories) {
    $number = 0;
    foreach ($task_list as $value) {
        if ($value ["project_id"] === $categories) {
            $number++;
        }
    }
    return $number;
}

date_default_timezone_set('Europe/Moscow');

function diff_time($date) {
    if (empty($date)) {
        return false;
        }
    $daytask = strtotime($date);
    $deadline = strtotime('now');
    $diff = ($daytask - $deadline) / 3600;

    return $diff <= 24;
}

function get_user_projects($user_id, $con) {
    $sql_projects = 'SELECT * FROM projects WHERE user_id ='.$user_id;
    $result = mysqli_query($con,$sql_projects);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_user_tasks($user_id, $con) {
    $sql_tasks = 'SELECT * FROM tasks WHERE user_id ='.$user_id;
    $result = mysqli_query($con,$sql_tasks);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
