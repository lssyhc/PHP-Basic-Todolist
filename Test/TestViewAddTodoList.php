<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Cahyo Susilo");
addTodoList("Yunanda Wicaksono");
addTodoList("Andika Zacky Effendy");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();