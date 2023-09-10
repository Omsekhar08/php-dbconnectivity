<?php
$conn=mysqli_connect('localhost','root','root','userdetails');
if (isset($_POST['update'])) {
        $id=$_POST['id'];
        $name = $_POST["name"];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $sql =("update user set  id = $id , name= '$name', age = $age ,
        email = '$email' , phone = $phone  WHERE  id = '$id' ");
        // $result = $conn->query($sql);
        $result=mysqli_query($conn,$sql);
        if ($result == TRUE) {
            echo "updated successfully";
            header('location: getdata.php');
        }else{
            echo "Error:" . $sql . "<br>";
        }

    }

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    // $name = $_GET['name'];
    $sql = "select * from user WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $email = $row['email'];
            $phone=$row['phone'];
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
        <h2> update</h2>
        <form action="" method="post">
          <fieldset>
            <legend> details</legend>
            Name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            Age:<br>
            <input type="text" name="age" value="<?php echo $age; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            Phone:<br>
            <input type="number" name="phone" value="<?php echo $phone;?>" ><br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form>
        </body>
        </html>


    <?php
    } else{
        header('Location: getdata.php');
    }
}
?>