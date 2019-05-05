<?php
require_once('./helpers.php');
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$categories = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$index = 0;
$num_count = count($categories);
$username = "Анастасия";
$task_list = [
    [
        "task" => "Собеседование в IT компании",
        "date" => "01.12.2019",
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
];
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

function dateDifference ($datetask, $format = '%h')
{
    $date = date_create($datetask);
    $curdate = date_create('now');
    $interval = date_diff($date, $curdate);
    return $interval->format($format);
}



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
?>

