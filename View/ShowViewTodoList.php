<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ShowViewTodoList.php";
require_once __DIR__ . "/../View/ShowAddTodoList.php";
require_once __DIR__ . "/../View/ShowRemoveTodoList.php";
require_once __DIR__ . "/../Helper/input.php";

function showViewTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah" . PHP_EOL;
        echo "2. Hapus" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            showAddTodoList();
        } elseif ($pilihan == "2") {
            showRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Masukan Pilihan Yang Benar" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa" . PHP_EOL;
}
