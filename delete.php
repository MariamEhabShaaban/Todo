<?php

    $json=file_get_contents('todo.json');
    $json=json_decode($json,true);
    $todo=$_POST['todo-name'];
    unset($json[$todo]);
    file_put_contents('todo.json',json_encode($json,JSON_PRETTY_PRINT));
    header("location:index.php");
  
