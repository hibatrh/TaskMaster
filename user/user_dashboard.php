<?php
    session_start();
    include('../connexion.php');
        if(isset($_POST['create_task'])){
            $query = "insert into tasks values(null,'$_POST[id]','$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
            $query_run = mysqli_query($connexion,$query);
            if($query_run){
                echo "<script type='text/javascript'>;
                alert('Task created successfully ...');
                window.location.href = 'admin_dashboard.php';
                </script>
                ";
            }
            else{
                echo "<script type='text/javascript'>;
                alert('Error...Please try again.');
                window.location.href = 'admin_dashboard.php';
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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script type="text/javascript">
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_sidebar").load("create_task.php");
            });
        });

        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_sidebar").load("manage_task.php");
            });
        });

        $(document).ready(function(){
            $("#view_leave").click(function(){
                $("#right_sidebar").load("view_leave.php");
            });
        });
    </script>
</head>
<body>
    <!-- the header -->
    <div class="row" id="header">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <div class="col-md-4">
                <h3>Task Management System</h3>
            </div>
            <div class="col-md-6 text-right">
                <b>Email: </b> <?php echo $_SESSION['email']; ?>
                <span style="margin-left: 25px;"><b>Name: </b><?php echo $_SESSION['name']; ?></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table >
                <tr>
                    <td style="text-align: center;">
                        <a href="../user_dashboard.php" type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a  type="button" class="link" id="create_task">Create Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="manage_task">Manage Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="view_leave">Leave Applications</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="../logout.php" type="button" id="logout_link">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>Instructions for Employees</h4>
            <ul style="line-height: 3em; font-size: 1.2em; list-style-type: none;">
                <li>1. All the employees should mark their attendance daily.</li>
                <li>2. Everyone must complete the task assigned to them.</li>
                <li>3. Kindly maintain decorum of the office.</li>
                <li>4. Keep office and your area neat and clean.</li>
            </ul>
        </div>
    </div>
</body>
</html>
