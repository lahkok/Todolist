<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Ahmad");
addTodoList("Irfan");
addTodoList("Masaid");
addTodoList("Pocong");
addTodoList("Kunti");
addTodoList("Tuyul");

showTodoList();

removeTodoList(4);

showTodoList();
