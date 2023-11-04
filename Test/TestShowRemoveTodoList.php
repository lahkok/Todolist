<?php

require_once "../Model/TodoList.php";
require_once "../View/ShowRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Pocong");
addTodoList("Kunti");
addTodoList("Tuyul");

showTodoList();

showRemoveTodoList();

showTodoList();
