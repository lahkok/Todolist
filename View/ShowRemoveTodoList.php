<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function showRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batal)");
    if ($pilihan == "x") {
        echo "Batal" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Nomor $pilihan Berhasil Dihapus" . PHP_EOL;
        } else {
            echo "Nomor $pilihan Gagal Dihapus" . PHP_EOL;
        }
    }
}
