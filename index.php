<?php
require_once('./helpers.php');
require_once('./functions.php');
require_once('./init.php');
require_once('./db_functions.php');
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$user_id=2;
$categories = get_user_projects($user_id, $con);
$index = 0;
$num_count = count($categories);
$username = "Анастасия";
$task_list=get_user_tasks($user_id,$con);
$active_category=null;

if (isset($_GET["project_id"])&&($_GET["project_id"]!=="")) {
    $active_category = $_GET["project_id"];
    $task_list=get_tasks_by_id($user_id,$active_category,$con);

    if(!$task_list){
        http_response_code(404);
        die();
    }
}


/*$task_list = [
    [
        "task" => "Собеседование в IT компании",
        "date" => "07.05.2019",
        "category" => "Работа",
        "status" => false
    ],
    [
        "task" => "Выполнить тестовое задание",
        "date" => "25.12.2018",
        "category" => "Работа",
        "status" => false
    ],
    [
        "task" => "Сделать задание первого раздела",
        "date" => "21.12.2018",
        "category" => "Учеба",
        "status" => true
    ],
    [
        "task" => "Встреча с другом",
        "date" => "22.12.2018",
        "category" => "Входящие",
        "status" => false
    ],
    [
        "task" => "Купить корм для кота",
        "date" => "",
        "category" => "Домашние дела",
        "status" => false
    ],
    [
        "task" => "Заказать пиццу",
        "date" => "",
        "category" => "Домашние дела",
        "status" => false
    ]
];*/



$page_content = include_template('index.php', ["show_complete_tasks" => $show_complete_tasks, "task_list" => $task_list]);
$layout_content = include_template('layout.php', [
    "content" => $page_content,
    "categories" => $categories,
    "num_count"=>$num_count,
    "task_list" => $task_list,
    "username" => $username,
    "title" => "Дела в порядке - Главная страница",
    "active_category"=>$active_category
]);
print($layout_content);



