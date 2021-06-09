<?php
include 'connection.php';
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM customers WHERE id='$id'");
$row = mysqli_fetch_assoc($sql);
if(isset($_POST['edit']))
{
    
    $Name            = $_POST['Name'];
    $Name =str_replace("'", "\'", $Name);
    $Email          = $_POST['Email']; 
    $Email =str_replace("'", "\'", $Email);    
    $Mobile_No        = $_POST['Mobile_No'];    
    $sql = "    UPDATE `customers` SET Name='$Name',Email='$Email',Mobile_No='$Mobile_No' WHERE id=$id "; 



    $query=mysqli_query($con,$sql);

    if($query){
         echo "<script> alert('Customer Data edited Successful');
                         window.location='customers.php';
               </script>";
        
    }
    else{
        echo "<script> alert('Failed to edit Customer Data');
</script>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit Details</title>
</head>
<style>
html{
    font-weight: bold;
}
body{
    background-color:#262d2d;
    /* background:linear-gradient(45deg,#6C89F7,#6C89F7, #6CB1F7,#6CC2F7,#6CC2F7,#6CB1F7 ,#6C89F7,#6C89F7 ); */
    Background-size:100%;
}
label{
    color:white;
}
.size{
    padding : 10px ;
    margin : 10px 10px ; 
}
.color{
    background-color:	#5F9EA0;
    border-radius:15px;   
    width:100%;
}
.title{
    padding-left: 35px ;
    font-family: 'Baloo Tammudu 2', cursive;
    padding-top:15px ;
    color:	#FFFF00; 
    font-size:35px ; 
    font-weight:bold;
}
.button{
    text-decoration:none;
    color:#5F9EA0;
    background-color:#FFFF00;
    border:2px solid #5F9EA0;
    border-radius:5px;
    font-size:20px;
    font-family: 'Baloo Tammudu';
    padding: 15px;
}
.button:hover{
    background-color:#5F9EA0;
    border:4px solid #FFFF00 ;
}
hr{
    width:20%;
    border: 1px solid #ffffff;
    border-radius:2px;
    background-color:white; 
    box-shadow: -3px 1px 5px black;
}

a, a:hover{
    text-decoration:none;
}
</style>
<body>
<?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $row=mysqli_fetch_assoc($result);
            ?>
<?php
include 'navbar.php' ?><br>
<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Edit Details of <?php echo $row['Name'] ?><hr style="hr"></h1></center><br><br><center>
<form method="post" name="tcredit" class="tabletext" >
    <div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-3">
            <input type="text" name="Name" class="form-control" value="<?php echo $row ['Name']; ?>" placeholder="Name" required="required">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Email ID</label>
        <div class="col-sm-3">
            <input type="text" name="Email" class="form-control" value="<?php echo $row ['Email']; ?>" placeholder="Email ID" >
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Mobile Number</label>
        <div class="col-sm-3">
            <input type="number" name="Mobile_No" class="form-control" value="<?php echo $row ['Mobile_No']; ?>" placeholder="Mobile Number" >
        </div>
    </div>

    <form method="post" name="tcredit" class="tabletext" ><br>
    <button class="btn btn-sm btn-primary" name="edit" type="submit" id="mybtn">Save Data</button></a>
    <a href="customers.php" class="btn btn-sm btn-danger">Cancel</a></center>
<br><br>
</body><br><br>
<?php
include 'footer.php' ?>
</html>


