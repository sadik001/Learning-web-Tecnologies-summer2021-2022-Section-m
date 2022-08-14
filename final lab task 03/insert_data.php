<?php
    include('connection.php');

    if(isset($_POST['cname']) && isset($_POST['contract']) && isset($_POST['address']))
    {
        $cname=$_POST['cname'];
        $contract=$_POST['contract'];
        $address=$_POST['address'];

        $sql="INSERT INTO signUp(Name,Contract,Address) VALUES('$cname','$contract','$address')";

        if(mysqli_query($conn,$sql))
        {
            echo 'Inserted Data Successfully';
        }
        else
        {
            echo 'Data Not Inserted';
        }
    }
    

?>
<form action="insert_data.php" method="POST">
<div align='center'>
    <p>Restaurant Arrangment System</p>
    Name: <input type="text" name="cname"><br><br>
    Contract: <input type="number" name="contract"><br><br>
    Address: <input type="text" name="address"><br><br>
    <input type= "submit" value="submit">
</div>
</form> 