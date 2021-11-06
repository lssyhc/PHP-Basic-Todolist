<?php

require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Cahyo Susilo");
AddTodoList("Yunanda Wicaksono");
AddTodoList("Andika Zacky Effendy");
AddTodoList("Dicky Hendriansyah");

showTodoList();

viewRemoveTodoList();

showTodoList();

viewRemoveTodoList();

showTodoList();