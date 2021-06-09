<?php
include 'connection.php';

if(isset($_POST['add']))
{

    $id              = $_POST['id'];
    $Name            = $_POST['Name'];
    $Name =str_replace("'", "\'", $Name);
    $Account_No          = $_POST['Account_No'];
    $Email          = $_POST['Email']; 
    $Email =str_replace("'", "\'", $Email);    
    $Mobile_No        = $_POST['Mobile_No'];    
    $Current_Balance       = $_POST['Current_Balance'];  
    
    $sql="SELECT * FROM customers";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($query)){
        if ($row['id']==$id){
            echo "<script> alert('The Entered ID already exists :(, Please Enter a different ID !');
                         window.location='add.php';
                         </script>";
            die();
        }
    }

    $sql = "    INSERT INTO `customers`(`id`, `Name`, `Account_No`, `Email`, `Mobile_No`, 
    `Current_Balance`)
    VALUES ('$id','$Name','$Account_No','$Email','$Mobile_No','$Current_Balance')";

    $query=mysqli_query($con,$sql);

    if($query){
         echo "<script> alert('Customer Data added Successful');
                         window.location='customers.php';
               </script>";
        
    }
    else{
        echo "<script> alert('Failed to Add Customer Data');
        window.location='customers.php';
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
    <title>Add Customer</title>
</head>
<style>
body{
    background-color:#262d2d;
    /* background:linear-gradient(45deg,#6C89F7,#6C89F7, #6CB1F7,#6CC2F7,#6CC2F7,#6CB1F7 ,#6C89F7,#6C89F7 ); */
    Background-size:100%;
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
label{
    color:white;
}
.title{
    padding-left: 35px ;
    font-family: 'Baloo Tammudu 2', cursive;
    padding-top:15px ;
    color:	#FFFF00; 
    font-size:35px ; 
    font-weight:bold;
}
hr{
    width:20%;
    border: 1px solid #ffffff;
    border-radius:2px;
    background-color:white; 
    box-shadow: -3px 1px 5px black;
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
a:hover{
    text-decoration:none;
}
</style>
<body>
<?php
include 'navbar.php' ?><br>
<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Add a Customer Account<hr style="hr"></h1></center><br><br><center>
<form method="post" name="tcredit" class="tabletext" >
    <div class="form-group">
        <label style="font-weight:bold;" class="col-sm-3 control-label">ID</label>
        <div class="col-sm-2">
            <input type="number" name="id" class="form-control" placeholder="ID" required="required">
        </div>
    </div>
    <div class="form-group">
        <label style="font-weight:bold;" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-4">
            <input type="text" name="Name" class="form-control" placeholder="Name" required="required">
        </div>
    </div>

    <div class="form-group">
        <label style="font-weight:bold;" class="col-sm-3 control-label">Account No.</label>
        <div class="col-sm-4">
            <input type="number" name="Account_No" class="form-control" placeholder="Account No." >
        </div>
    </div>

    <div class="form-group">
        <label style="font-weight:bold;" class="col-sm-3 control-label">Email ID</label>
        <div class="col-sm-3">
            <input type="text" name="Email" class="form-control" placeholder="Email ID" >
        </div>
    </div>
    
    <div class="form-group">
        <label style="font-weight:bold;" class="col-sm-3 control-label">Mobile Number</label>
        <div class="col-sm-3">
            <input type="number" name="Mobile_No" class="form-control" placeholder="Mobile Number" >
        </div>
    </div>
    <div class="form-group">
        <label style="font-weight:bold;" class="col-sm-3 control-label">Current Balance</label>
        <div class="col-sm-3">
            <input type="number" name="Current_Balance" class="form-control" placeholder="Current Balance" >
        </div>
    </div>
    <form method="post" name="tcredit" class="tabletext" ><br>
    <button class="btn btn-sm btn-primary" name="add" type="submit" id="mybtn" style="font-size:15px" >Add Data</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="font-size:15px" href="customers.php" class="btn btn-sm btn-danger">Cancel</a></center>
<br><br>
</body><br><br>
<?php
include 'footer.php' ?>
</html>


