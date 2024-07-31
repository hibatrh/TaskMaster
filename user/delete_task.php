<?php
    include('../connexion.php');
    $query = "delete from tasks where tid = $_GET[id]";
    $query_run = mysqli_query($connexion,$query);
    if($query_run){
        echo "<script type='text/javascript'>;
            alert('Task deleted successfully ...');
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
?>