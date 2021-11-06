<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../Helper/Input.php";

AddTodoList("Cahyo Susilo");
AddTodoList("Yunanda Wicaksono");
AddTodoList("Andika Zacky Effendy");

viewShowTodoList();