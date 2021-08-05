<?php
include('includes/header.php');
include('includes/navbar.php');
?>

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL PROJECTS</div>
                                                <?php
                                            
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $db="garagaza";
                                           // include "conn.php"; 
                                           $myConnection= mysqli_connect("$servername","$username","$password", "garagaza") or die ("could not connect to mysql");
                                            $query ="SELECT id FROM landlord ORDER BY id";
                                            $query = mysqli_query($myConnection, $query) or die(mysqli_error($myConnection));
                                            $row = mysqli_num_rows($query);
                                            echo '<h4>' .$row.'</h4>';
                                           
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL USERS</div>
                                                <?php
                                            
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $db="garagaza";
                                           // include "conn.php"; 
                                           $myConnection= mysqli_connect("$servername","$username","$password", "garagaza") or die ("could not connect to mysql");
                                            $query ="SELECT id FROM login ORDER BY id";
                                            $query = mysqli_query($myConnection, $query) or die(mysqli_error($myConnection));
                                            $row = mysqli_num_rows($query);
                                            echo '<h4>' .$row.'</h4>';
                                           
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                      

                     

 <caption>List of Added properties and properties owner info</caption>
<table border="0.5" style=" display: flex; ">
   
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Age</td>
    <td>Current Location</td>
    <td>House Location</td>
    <td>Image</td>
    <td>Action</td>
  </tr>

 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="garagaza";
// include "conn.php"; 
$myConnection= mysqli_connect("$servername","$username","$password", "garagaza") or die ("could not connect to mysql");
$records = "SELECT * FROM landlord"; // fetch data from database
$query = mysqli_query($myConnection, $records) or die(mysqli_error($myConnection));

while($data = mysqli_fetch_array($query, MYSQLI_ASSOC))

{
    

?> 
   <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['age']; ?></td>
    <td><?php echo $data['clocation']; ?></td>
    <td><?php echo $data['hlocation']; ?></td>
    <td><?php echo $data['image']; ?></td>|
    
 	
  
 <td >
      <a href="index.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2"
     onclick="return confirm('Do you want delete this record?');">Delete</a>
    </td>|
    
</tr>
<?php
}
?>
</table>



<table border="0.5" style="  margin-top:30px ">


  <tr>
      
    <td>Email</td>
 
  </tr>

 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="garagaza";
// include "conn.php"; 
$myConnection= mysqli_connect("$servername","$username","$password", "garagaza") or die ("could not connect to mysql");
$records = "SELECT * FROM login"; // fetch data from database
$query = mysqli_query($myConnection, $records) or die(mysqli_error($myConnection));

while($data = mysqli_fetch_array($query, MYSQLI_ASSOC))

{
    

?> 
   <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['email']; ?></td>
  
    
 	
  
 <td > <a href="index.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2"
     onclick="return confirm('Do you want delete this record?');">Delete</a></td>|
    
</tr>
<?php
}
?>
</table>

                    

                        

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

 

    <?php
    include('includes/script.php');
    include('includes/footer.php');
    
    ?>

    
    

