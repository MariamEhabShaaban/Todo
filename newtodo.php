<?php
$todo_name=$_POST['todo-name']??'';

$todo_name=trim($todo_name);

if($todo_name){
   
    if(file_exists('todo.json')){
        $json=file_get_contents('todo.json');
        $json=json_decode($json,true);
    }
    else{
        $json=[];
    }
    echo '<pre>';
    var_dump($json);
    echo '</pre>';
    $json[$todo_name]=["complete"=>false];
    file_put_contents('todo.json',json_encode($json,JSON_PRETTY_PRINT));


}
header("location:index.php");
?>