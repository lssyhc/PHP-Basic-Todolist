<?php

include "../Model/Todolist.php";
include "../BusinessLogic/AddTodoList.php";

addTodoList("Cahyo Susilo");
addTodoList("Yunanda Wicaksono");
addTodoList("Andika Zacky Effendy");

var_dump($todoList);