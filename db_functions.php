<?php

function get_user_projects($user_id, $con) {
    $sql_projects = 'SELECT p.name AS name, p.id, COUNT(t.id) task_count FROM projects p LEFT JOIN tasks t ON t.project_id = p.id WHERE p.user_id ='.$user_id.' GROUP BY p.name, p.id ORDER BY task_count DESC';
    $result = mysqli_query($con,$sql_projects);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_user_tasks($user_id, $con) {
    $sql_tasks = 'SELECT  name, date_deadline, status, user_id, project_id FROM tasks WHERE user_id ='.$user_id;
    $result = mysqli_query($con,$sql_tasks);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function get_tasks_by_id($user_id,$project_id,$con){
    $sql_querry="SELECT * FROM `tasks` WHERE `user_id`=".$user_id." and `project_id`=".$project_id;
    $result = mysqli_query($con,$sql_querry);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

