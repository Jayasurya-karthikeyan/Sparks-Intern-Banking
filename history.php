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
    <title>Transfer history</title>
</head>
<style>
body{
    background-color:#262d2d;
    /* background:linear-gradient(0deg,#6CB1F7,#6C89F7 ); */
    /* ,#6CC2F7,#6CC2F7,#6CB1F7 ,#6C89F7 */
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
.title{
    padding-left: 35px ;
    font-family: 'Baloo Tammudu 2', cursive;
    padding-top:15px ;
    color:	#FFFF00; 
    font-size:35px ; 
    font-weight:bold;
}
.button{
    color:#ffff00;
    font-size:30px;
    padding: 15px;
    font-weight:bold;
    text-shadow: 0px 1px 30px black;
    border:6px solid #ffff00;
    box-shadow: -3px 1px 15px black;
    font-family: monospace;
    border-radius:20px;
}
.button:hover{
    color:#ffff00;
    background-color:#6C89F7;
    border:4px solid #6C89F7 ;
    font-size:29.5px ;
    margin:4px;
    transition :ease-in-out;

}
tr{
    color:white;
}
th{
    background-color:#565c5f;
}
tr:hover{
    background-color:#565c5f;
    color:white;
}
hr{
    width:15%;
    border: 1px solid #ffffff;
    border-radius:2px;
    background-color:white; 
    box-shadow: -3px 1px 5px black;

}
.containersss{
    margin:0% 5%;
}
a:hover{
    text-decoration:none;
}
</style>
<body>

<?php
include 'navbar.php' ?><br>
<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Transaction History </h1><hr style="hr"></center> <br><br>
<div class="containersss">
<table class="table ">
<tr>
    <th class="text-center" > S.No </th>
    <th class="text-center" > Sender Name </th>
    <th class="text-center" > Recepient Name </th>
    <th class="text-center" > Amount transferred </th>
    <th class="text-center" > Date and Time </th>
</tr>
<?php 
    include 'connection.php';
    $sql ="SELECT * from `transaction` ORDER BY timestamp DESC ";
    $query =mysqli_query($con, $sql);
    if($query === FALSE) { 
    die(mysqli_error());
}

    $no = 1;
    while($row=mysqli_fetch_assoc($query)){
        echo '
            <tr>
                <td class="text-center" >'.$no.'</td>
                <td class="text-center" >'.$row['sender'].'</td>	
                <td class="text-center" >'.$row['receiver'].'</td>
                <td class="text-center" >'.$row['amount'].'</td>
                <td class="text-center" >'.$row['timestamp'].'</td>
                </tr>' ;
                $no++;
    }

?>
</table>
</div>
</body><br><br>
<?php
include 'footer.php' ?>
</html>