<?php 
$todos=file_get_contents('todo.json');
$todos=json_decode($todos,true);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   

    <title>TODO</title>
</head>
<body>
    <div class="container w-50 mt-5">
        <div class="card mt-10">
            <div class="card-header bg-light">
                <h3 class="text-center">TODO LIST</h3>
            </div>
            <div class="card-body form-group">
                <form action="newtodo.php" method="POST">
                    <input type="text" name="todo-name" placeholder="Enter your todo" style="width:85%; height:38px;margin-top:2px">
                    <button class="btn btn-secondary ">New Todo</button>
                </form>
        </div>
        <?php if($todos):?>
    
        <div class="card mt-10">
            <div class="card-body form-group">
                <?php foreach($todos as $name => $todo ):?>
                    <div class="container mt-2 d-flex justify-content-between">
                        <form action="change.php" method="POST">
                            <input type="hidden" name="todo-name" value="<?php echo $name?>">
                            <input type ="checkbox" <?php echo $todo['complete']?'checked':''?>>
                        </form>
                       
                        <p style ="display:inline">  <?php echo '<b>'.$name.'</b>'?> </p>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="todo-name" value="<?php echo $name?>">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                        
                    </div>
                <?php endforeach;?>

            </div>
        </div>

        <?php endif;?>
    </div>

  <script src="checkbox.js"></script>
</body>
</html>