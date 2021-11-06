<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Cahyo Susilo");
addTodoList("Yunanda Wicaksono");
addTodoList("Andika Zacky Effendy");

ShowTodoList();

RemoveTodoList(3);

ShowTodoList();