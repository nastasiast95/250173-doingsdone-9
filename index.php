<?php
require_once('./helpers.php');
require_once('./functions.php');
require_once('./init.php');
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$user_id=2;
$categories = get_user_projects($user_id, $con);
$index = 0;
$num_count = count($categories);
$username = "Анастасия";
$task_list=get_user_tasks($user_id,$con);
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
    "title" => "Дела в порядке - Главная страница"
]);
print($layout_content);


