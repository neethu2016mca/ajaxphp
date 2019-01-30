<?php

 
	include("dbconnect.php");


if (isset($_POST['signup'])) {
    
    $sname = $_POST['sname'];
    $cname = $_POST['cname'];


    
    
  
 $sql4=mysqli_query($con,"select * from state where sname='$sname'");
      $row8 = mysqli_fetch_array($sql4);
    if(count($row8)==0){
      
        $sql1=mysqli_query($con,"INSERT INTO `state`( `sname`,`c_id`,`status`) VALUES ('$sname',$cname,1)");
        
        //$res = mysqli_query($con, $sql1)or die(mysqli_error($con));
        $p = mysqli_query($con,"select max(s_id) as lgid from state");

        //$q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($p);
        $x = $row['lgid'];




       


        }


        
    }

?>

     

<!DOCTYPE HTML>
<html>
<head>
<title></title>
                 
</head> 
<body>
    
               
   
    <div>
        <center><font face="Comic Sans MS" size="5"><b>ADD STATE</b></font></center><br>
      

<form name="form1" method="post" action="" onSubmit="return">
   <div>
    <label> Country</label>  
            <div>
                 
                        <select name="cname" id="cname">
                        <option value="-1">select</option> 
                     <?php
            $q = mysqli_query($con, "SELECT c_id,cname FROM country where status=1");
            

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['c_id'] . '>' . $row['cname'] . '</option>';
            }
            ?></select>

            </div>
        </div>
               <div>
            <label for="name" style="color:black">State</label>  
            <div class="col-md-4">
                <input id="sname" name="sname" type="text" placeholder="Enter State Name">
<input type="submit" name="signup" value="ADD" >
            </div>
        </div>
       
</form>
                                            
         <center> <font face="Comic Sans MS" size="5"><b>ADDED STATES</b></font></center>
         <form >
                                                
                                                 <?php

      $qry="select * from state";
$result=mysqli_query($con,$qry);

?>
 <?php
while($row=mysqli_fetch_array($result)){
?>
                                                <table style="margin-left: 450px;margin-top:20px;" ><form action="#" method="post">
       <tr></tr>     <tr>
          <td></td>
          <td style="font-size: 20px;font-family:Georgia;"><?php echo $row['sname'];?></td>
     
        
      </tr>
      <?php
}
?>
    </table></form>
    </div>
        
     
  
</body>
</html>
