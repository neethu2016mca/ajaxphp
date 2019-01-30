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
			<td > STATE NAME</td>
                        <td><input type="text"  name="sname" ></td>
		</tr>
                <div class="form-group">
                                <label for="country">COUNTRY</label>
                                <div class="form-select">

                                    <select  name="cname" id="cname">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "phpapp");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select c_id, cname from country where status=1";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['c_id'] . '>' . $row['cname'] . '</option>';
            }
                                            echo "<option value =><------Select Country------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $cname = $row['cname'];
                                                $c_id = $row['c_id'];
                                                echo "<option value='$cname'>$cname</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>



                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>



                
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
if (isset($_POST['submit']))
    {
    $con = mysqli_connect("localhost", "root", "", "phpapp");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
   // $c_id=$_POST['c_id'];
   $sname=$_POST['sname']; 
   $cname=$_POST['cname']; 
   $sql2="Select c_id from country where cname='$cname' and  status=1";
   $result1 = mysqli_query($con, $sql2);
   while ($row = mysqli_fetch_array($result1)) {
        $c_id = $row['c_id'];
   }
   //echo $sname;
   $sql1=mysqli_query($con,"INSERT INTO `state`( `sname`,`c_id`,`status`) VALUES ('$sname','$c_id',1)");
                                        }
  //$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>




