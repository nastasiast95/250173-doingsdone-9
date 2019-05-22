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


