  <?php  
  
if (isset($_GET['id'])) {
    $conn=mysqli_connect('localhost','root','root','userdetails'); 
    $id = $_GET['id'];
    $sql = " delete FROM user WHERE id=$id";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        
        header('location: getdata.php');
    }else{
        echo "Error:" . $sql . "<br>" ;
    }
}
 
?> 