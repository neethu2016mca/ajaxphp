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
			<td > DISTRICT NAME</td>
                        <td><input type="text"  name="dname" ></td>
		</tr>
                <div class="form-group">
                                <label for="state">STATE</label>
                                <div class="form-select">

                                    <select  name="sname" id="sname">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "phpapp");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select s_id, sname from state where status=1";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['s_id'] . '>' . $row['sname'] . '</option>';
            }
                                            echo "<option value =><------Select District------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $sname = $row['sname'];
                                                $s_id = $row['s_id'];
                                                echo "<option value='$sname'>$sname</option>";
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
   $dname=$_POST['dname']; 
   $sname=$_POST['sname']; 
   $sql2="Select s_id from state where sname='$sname' and  status=1";
   $result1 = mysqli_query($con, $sql2);
   while ($row = mysqli_fetch_array($result1)) {
        $s_id = $row['s_id'];
   }
   //echo $sname;
   $sql1=mysqli_query($con,"INSERT INTO `district`( `dname`,`s_id`,`status`) VALUES ('$dname','$s_id',1)");
                                        }
  //$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>




