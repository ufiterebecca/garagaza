  <?php


include('dbconfig.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: dbconfig.php");
}

if(isset($_SESSION['username']))
{
    //header('Location: login.php');
}
?>
