<?php
function count_projects($task_list, $categories) {
    $number = 0;
    foreach ($task_list as $value) {
        if ($value ["category"] === $categories) {
            $number++;
        }
    }
    return $number;
}

date_default_timezone_set('Europe/Moscow');

function diff_time($date1){
    if ($date1 === '') {
        return false;
        }
    $daytask = strtotime($date1);
    $deadline = strtotime('now');
    $diff = ($daytask - $deadline) / 3600;

    if ($diff <= 24) {
        return true;
    } else {
        return false;
    }
}