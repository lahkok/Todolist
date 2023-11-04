<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function showAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    $todo = input("Todo (x untuk batal)");
    if ($todo == "x") {
        echo "Batal" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
