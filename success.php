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
    <title>Transaction successful</title>
</head>
<style>
body{
    background-color:#262d2d;
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
    color:#ffffff;
    font-family: 'Prompt', sans-serif;
    padding:15px ; 
    margin:0px ;    
    font-size:45px ; 
    font-weight:bold;
    letter-spacing: 2px;
    text-shadow: 0px 2px 1px black;
    ;
}
.title:hover{
    font-size:46px ; 
    transition :ease-in-out;
    color:#ffff00;
    margin-bottom:-1.5px ;    
}

.title1{
    color:#ffffff;
    font-family: 'Prompt', sans-serif;
    margin:0px ;    
    font-size:25px ; 
    border:6px solid #ffff00;
    font-weight:bold;
    padding:15px 25px; 
    letter-spacing: 2px;
    text-shadow: 0px 2px 1px black;
    ;
}

.button{
    color:#ffffff;
    font-size:25px;
    padding: 5px 15px;
    font-weight:bold;
    border:5px solid #ffffff;
    box-shadow: -3px 1px 15px black;
    font-family: monospace;
    border-radius:10px;
}
.button:hover{
    color:#ffff00;
    background-color:#6C89F7;
    border:4px solid #6C89F7 ;
    font-size:24.5px ;
    margin:4px;
    transition :ease-in-out;

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



<br><br><br>
<center><h1 class="title"> Transaction Successful !!<hr ></h1>
<img src="tick.gif" style="border-radius:50%;width: 150px;height:150px;object-fit: cover;" ></center>
<br><br>
<?php
include 'connection.php';
$sql ="SELECT * from `transaction` ORDER BY timestamp DESC LIMIT 1";
$query =mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($query);
echo '<center><span class="title1"> From : '.$row['sender'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To : '.$row['receiver'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Amount : '.$row['amount'].' </span></center>';
?>
<center>
<br><br><br><br><a href="customers.php" class="button">BACK</a>
</center>
<br><br>
</body>
</html>


