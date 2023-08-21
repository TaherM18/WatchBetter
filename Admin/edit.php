<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id= $_GET['id'];
$sql = "SELECT * FROM fun7 where id='$id'";
@$result = mysqli_query(@$conn, @$sql);
//$total=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
<title></title>
</head>
<body align="center">


<form method="post" action="img_update.php" enctype="multipart/form-data">
  
  


    <php $counter=1; ?>
    <h2>Update Details <?php  ?></h2>
    <br/><br/>

    <label>Select image:</label>
    <input type="file" name="new_image"/>
    <input type="hidden" name="old_image" value="<?php echo $row['pic']; ?>"/>

    <br/><br/>

    <label>Enter Movie Name:</label>
    <input type="text" name="mname" value="<?php echo $row['mname']; ?>"/>

    <br/><br/>

    <label>Platinum seat Price:</label>
    <input type="text" name="ps" value="<?php echo $row['pseat']; ?>"/><br/><br/>

    <label>Golden seat Price:</label>
    <input type="text" name="gs" value="<?php echo $row['gseat']; ?>"/><br/><br/>

    <label>Silver seat Price:</label>
    <input type="text" name="ss" value="<?php echo $row['sseat']; ?>"/><br/><br/>


    <a href="img_update.php"><input type="submit" value="Update" name="update"/></a>
    </form>


    <?php
        if(isset($_POST['update']))
        {
            $con=new mysqli('localhost','root','','admin');
            $pic=$_FILES['new_image'];
            $name=$_POST['mname'];
            $ps=$_POST['pseat'];
            //$_SESSION['sesmobile']=$mobileno;
            $gs=$_POST['gseat'];
            $ss=$_POST['sseat'];
            
            $sql="INSERT INTO update(pic,mname,ps,gs,ss) VALUES('$pic','$name','$ps','$gs','$ss')";
            $result= mysqli_query($con, $sql);
            header("location: fun7_1.php");
        }

    ?>
</body>
</html>