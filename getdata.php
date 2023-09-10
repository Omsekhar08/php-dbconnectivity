<!DOCTYPE html>
<html>  
<head>
    <title>Student Database</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2> </h2>
<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>
    </thead>
    <tbody>
        <?php
$conn=mysqli_connect('localhost','root','root','userdetails');
$sql = "select * from user";
                $userdetails =mysqli_query($conn,$sql);
                // $conn->query($sql);
                if ($userdetails->num_rows > 0) {
                while ($row = $userdetails->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><a class="btn btn-info" href="updateuser.php?id=<?php echo $row['id']; ?>">Update</a>
                     <!-- &nbsp; -->
                     </td>
                    <td> <a class="btn btn-danger" href="deleteuser.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                    </tr>
                   
        <?php  
                }

            }
        ?>
        
    </tbody>
</table>
    </div>
</body>
</html>