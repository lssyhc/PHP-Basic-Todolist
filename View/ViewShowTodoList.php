<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";

function viewShowTodoList(){    

    while(true){
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilihan");

        if($pilihan == "1"){
            viewAddTodoList();
        }else if($pilihan == "2"){
            viewRemoveTodoList();
        }else if($pilihan == "x"){
            break;
        }else{
            echo "Pilihan Anda tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi" . PHP_EOL;
}