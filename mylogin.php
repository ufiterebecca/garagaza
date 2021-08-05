<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
    
     $email = $_POST['email'];
   
     
     $sql = "INSERT INTO login (email)
     VALUES ('$email')";
     if (mysqli_query($conn, $sql)) {
        echo 'New record has been added successfully!';
        header("Location: index.php");

     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

if(isset($_GET['delete'])){
   $id=$_GET['delete'];

   $sql="SELECT email FROM login WHERE id=?";
   $stmt2=$conn->prepare($sql);
   $stmt2->bind_param("i",$id);
   $stmt2->execute();
   $result2=$stmt2->get_result();
   $row=$result2->fetch_assoc();


   $query="DELETE FROM login WHERE id=?";
   $stmt=$conn->prepare($query);
   $stmt->bind_param("i",$id);
   $stmt->execute();

   header('location:index.php');
   $_SESSION['response']="Successfully Deleted!";
   $_SESSION['res_type']="danger";
}
?>