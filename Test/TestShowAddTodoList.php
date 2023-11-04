<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ShowAddTodoList.php";

addTodoList("Pocong");
addTodoList("Kunti");
addTodoList("Tuyul");

showAddTodoList();

showTodoList();
