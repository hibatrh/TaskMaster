<?php
    include('../connexion.php');
?>
<html>

<body>
    <center><h3>All Leave Applications</h3></center>
    <table class="table" style="background-color:whitesmoke; width:75vw;">
        <tr>
            <th>S.No</th>
            <th>User</th>
            <th>Subject</th>
            <th style="width:40%;">Message</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $sno = 1; 
            $query = "select * from leaves";
            $query_run = mysqli_query($connexion, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <?php 
                        $query1 = "select name from users where id = {$row['id']}";
                        $query_run1 = mysqli_query($connexion, $query1);
                        $row1 = mysqli_fetch_assoc($query_run1);
                        ?>
                        <td><?php echo $row1['name']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a href="approve_leave.php?id=<?php echo $row['lid']; ?>">Approve</a> | 
                            <a href="reject_leave.php?id=<?php echo $row['lid']; ?>">Reject</a>
                        </td>
                </tr>
                <?php
                $sno++;
            }
        ?>
    </table>
</body>
</html>
