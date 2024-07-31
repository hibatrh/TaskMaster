<?php
    include('../connexion.php');
    if(isset($_POST['edit_task'])){
        $query = "update tasks set id = $_POST[id],description = '$_POST[description]', start_date = '$_POST[start_date]', end_date = '$_POST[end_date]' where tid = $_GET[id]";
        $query_run = mysqli_query($connexion,$query);
        if($query_run){  
            echo "<script type='text/javascript'>;
            alert('Task updated successfully ...');
            window.locattion.href = 'admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>;
            alert('Error...Please try again.');
            window.locattion.href = 'admin_dashboard.php';
            </script>
            ";
        }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task File </title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>




<body>
    <div class="row">
        <div class="col-md-12" id="header">
            <h3><i class="fa fa-solid fa-list" style="padding-right: 15px;"></i>Task Management System</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-auto" style="color:white;"> <br>
            <h3 style="color: white;">Edit the task</h3><br>
            <?php
                $query = "select * from tasks where tid = $_GET[id]";
                $query_run = mysqli_query($connexion,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?> 
                <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-group" value="" required>
                    </div>
                    <div class="form-goup">
                    <label for="">Select user: </label>
                    <select class="form-control" name="id">
                        <option >-Select-</option>
                        <?php
                            include('../connexion.php');
                            $query1= "select id, name from users";
                            $query_run1 = mysqli_query($connexion, $query1);
                            if (mysqli_num_rows($query_run1)){
                                while($row1 = mysqli_fetch_assoc($query_run1)){
                                    ?>
                                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?> </option>
                                    <?php 
                                }
                            
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3" cols="50" required><?php echo $row['description']; ?> </textarea>
                </div>
                <div class="form-group">
                    <label>Start date:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>" ><br>
                </div>
                <div class="form-group">
                    <label>End date:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>" ><br>
                </div>
                <input type="submit" class="btn btn-warning" name="edit_task" value="Update">
                </form>
                <?php
                }
            ?>
        </div>
    </div>
</body>
</html>