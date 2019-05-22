<?php
$con = mysqli_connect("localhost", "root", "","doingsdone");
mysqli_set_charset($con, "utf8");

if ($con == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
