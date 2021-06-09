<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Customers</title>
</head>
<style>
body{
    background-color:#262d2d;
    /* background:linear-gradient(45deg,#6C89F7,#6C89F7, #6CB1F7,#6C89F7 ); */
    /* , #6CB1F7,#6CC2F7,#6CC2F7,#6CB1F7 ,#6C89F7 */
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
a, a:hover{
    text-decoration:none;
}
.containersss{
    margin:0% 5%;
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
</style>
<body>
<?php
include 'navbar.php' ?><br>

<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Customers List </h1><hr style="hr"></center> <br><br>
<div class="containersss">
<table class="table">
<tr>
    <th class="text-center" style="color:#ffffff"> S.No </th>
    <th class="text-center" style="color:#ffffff"> ID </th>
    <th class="text-center" style="color:#ffffff"> Name </th>
    <th class="text-center" style="color:#ffffff"> Account No. </th>
    <th class="text-center" style="color:#ffffff"> Email</th>
    <th class="text-center" style="color:#ffffff"> Mobile No. </th>
    <th class="text-center" style="color:#ffffff"> Current Balance</th>
    <th class="text-center" style="color:#ffffff"> Tools</th>

</tr>
<!-- font-family: Caveat, cursive;" -->
<?php 
$no = 1;
  include 'connection.php';
  $query = "SELECT * from customers ORDER BY id ASC";
  $result = mysqli_query($con,$query); 

while($row=mysqli_fetch_assoc($result)){

    echo'
        <tr >
            <td class="text-center" ">'.$no.'</td>
            <td class="text-center" ">'.$row['id'].'</td>
            <td class="text-center"><a style="text-decoration:underline;color:yellow ;" href="transfer.php?id= '.$row['id'].' " 
                class="link">'.$row['Name'].'</td>	
            <td class="text-center" ">'.$row['Account_No'].'</td>
            <td class="text-center" ">'.$row['Email'].'</td>
            <td class="text-center" ">'.$row['Mobile_No'].'</td>
            <td class="text-center" ">'.$row['Current_Balance'].'</td>
            <td class="text-center" "><a href="edit.php?id= '.$row['id'].' " title="Edit Data" 
                class="btn btn-primary btn-sm">Edit</span></a>
                <a href="customers.php?action=delete&id='.$row['id'].'" title="Delete Data" style="padding:5px"
            onclick="return confirm(\'Are you sure to delete '.$row['Name'].'?\')" 
            class="btn btn-danger btn-sm">Delete</span></a></td>

        </tr>' ;
        
        // <form method="post" name="tcredit" class="tabletext" >
        // <td class="text-center" style="color:#bdb3b3;"><button  class="btn btn-sm btn-danger" 
        //     name="action" >Delete</button></td>
            $no++;
}
if(isset($_GET['action']) == 'delete'){
    $id = $_GET['id'];
    $check = mysqli_query($con, "SELECT * FROM customers WHERE id='$id'");
    if(mysqli_num_rows($check) == 0){
        echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data not found.</div>';
    }else{
        $delete = mysqli_query($con, "DELETE FROM customers WHERE id='$id'");
        if($delete){
            echo "<script> alert('Data Deleted Successfully');
            window.location='customers.php';
    </script>";
        }else{
            echo "<script> alert('Error in Deleting Data');
            window.location='customers.php';
    </script>";
        }
    }
}

?>
</table></div>
</body>
<br><br>
<?php
include 'footer.php' ?>
</html>