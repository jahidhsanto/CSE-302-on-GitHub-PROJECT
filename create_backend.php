<?php
$con=mysqli_connect("localhost","root","","Registration");
if(mysqli_connect_error())
{
    echo "Something went wrong";
}
else
{
    

    $b = $_POST['Name'];
    $c = $_POST['email'];
    $d = $_POST['pass'];
    $e = $_POST['check'];

    $sql = "insert into login (Name,email,Password,checkk) values ('$b','$c','$d','$e')";
    $run= mysqli_query($con,$sql);
   if($run==true){
    header("location:login.php");
    echo '<script type="text/javascript">
    alert("Sucessfully Registred");
</script>';

   } 
   else{
echo "faild to login";
   }
}

?>
