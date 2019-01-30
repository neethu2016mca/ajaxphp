<?php
include 'dbconnect.php';
?>
<html>
    <head>
    
    </head>
    <body> 
        <form action="#" method="POST">
            <table>
                <tr>
			<td > COUNTRY NAME</td>
                        <td><input type="text"  name="cname" ></td>
		</tr>
                
                
                <tr>
                    <td></td>
			<td colspan=2>
		 <input type="submit" name="submit"  id="submit" value="submit" class="btnRegister"></td>
		</tr>
            </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['submit'])) {
   $cname=$_POST['cname'];  
   
   echo $cname;
   
$sql1 = "INSERT INTO `country`(`cname`) VALUES ('$cname')";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>


