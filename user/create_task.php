<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tasks</title>
</head>
<body>
    <h3>Create a new Task</h3>
    <div class="col-md-6">
        <form action="" method="POST">
            <div class="form-goup">
                <label for="">Select user: </label>
                <select class="form-control" name="id">
                    <option >-Select-</option>
                    <?php
                        include('../connexion.php');
                        $query= "select id, name from users";
                        $query_run = mysqli_query($connexion, $query);
                        if (mysqli_num_rows($query_run)){
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                <?php 
                             }
                           
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" placeholder="Mention the task" class="form-control" rows="3" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label>Start date:</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="form-group">
                <label>End date:</label>
                <input type="date" class="form-control" name="end_date"><br>
            </div>
            <input type="submit" class="btn btn-warning" name="create_task" value="Create">
        </form>
    </div>
</body>
</html>