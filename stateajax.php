
<?php
 $con = mysqli_connect("localhost", "root", "", "phpapp");

if(isset($_POST['status'])&&$_POST['status']=="1")
{
  $country = $_POST['country'];
  $query = "SELECT `sname` FROM `state` WHERE `cname` = '$cname' AND `status` = '1'";
  $result=mysqli_query($con,$query);
  echo "<option value = > </option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['sname']."'>".$row['sname']."</option>";
  }

}
?>

