<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $age = $_POST['age'];
     $clocation = $_POST['clocation'];
     $hlocation= $_POST['hlocation'];
     $image = $_POST['image'];
     
     $sql = "INSERT INTO landlord (name,email,age, clocation, hlocation, image)
     VALUES ('$name','$email','$age','$clocation','$hlocation', '$image')";
     if (mysqli_query($conn, $sql)) {
        echo 'New record has been added successfully!';
        header("Location: thanksProperty.html");

     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

if(isset($_GET['delete'])){
   $id=$_GET['delete'];

   $sql="SELECT name FROM landlord WHERE id=?";
   $stmt2=$conn->prepare($sql);
   $stmt2->bind_param("i",$id);
   $stmt2->execute();
   $result2=$stmt2->get_result();
   $row=$result2->fetch_assoc();


   $query="DELETE FROM landlord WHERE id=?";
   $stmt=$conn->prepare($query);
   $stmt->bind_param("i",$id);
   $stmt->execute();

   header('location:index.php');
   $_SESSION['response']="Successfully Deleted!";
   $_SESSION['res_type']="danger";
}
?>