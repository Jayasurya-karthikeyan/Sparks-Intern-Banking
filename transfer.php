<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $send = $_GET['id'];
    $rec = $_POST['to'];
    $amount1 = $_POST['amount1'];
    $sql = "SELECT * from customers where id=$send";
    $query = mysqli_query($con,$sql);
    $row1 = mysqli_fetch_array($query); 
    $sql = "SELECT * from customers where id=$rec";
    $query = mysqli_query($con,$sql);
    $row2 = mysqli_fetch_array($query);

    if (($amount1)<0) 
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }
   else if(($amount1) > $row1['Current_Balance']) 
    {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
     else if($amount1 == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
    else {
        $newbalance = $row1['Current_Balance'] - $amount1;
        $sql = "UPDATE customers set Current_Balance=$newbalance where id=$send";
        mysqli_query($con,$sql);
        $newbalance = $row2['Current_Balance'] + $amount1;
        $sql = "UPDATE customers set Current_Balance=$newbalance where id=$rec";
        mysqli_query($con,$sql);
                
                $sender = $row1['Name'];
                $receiver = $row2['Name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount1')";
                $query=mysqli_query($con,$sql);                
                if($query){
                     echo "<script> 
                                     window.location='success.php';
                           </script>";
                }
                else{
                    echo "<script> alert('Transaction Failed :(');
                                     window.location='customers.php';
                           </script>";
                }

                $newbalance= 0;
                $amount1 =0;
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
    <title>Transfer</title>
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
.title{
    padding-left: 35px ;
    font-family: 'Baloo Tammudu 2', cursive;
    padding-top:15px ;
    color:	#FFFF00; 
    font-size:35px ; 
    font-weight:bold;
}
.button{
    color:#ffffff;
    font-size:20px;
    padding: 8px; 
    background-color:#262d2d;
    font-weight:bold;
    margin:0px 4px 0px 4px;
    text-shadow: 0px 1px 30px black;
    border:4px solid white;
    box-shadow: -3px 1px 15px black;
    font-family: monospace;
    border-radius:20px;
}
.button:hover{
    color:#ffff00;
    background-color:#6C89F7;
    border:4px solid #6C89F7 ;
    font-size:19.8px ;
    margin:0px 4px 0px 4px;
    transition :ease-in-out;

}
.containersss{
    margin:0% 5%;
}
.container{
    border-radius: 10%;
    border: 10px solid white;
    width: 40%;
    bottom: 10px;
    padding-bottom: 5%;
    padding-top: 5%;
}
.container:hover{
    box-shadow:0px 0px 15px white;
}
.tab{
    margin:0% 25%;
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
    width:30%;
    border: 1px solid #ffffff;
    border-radius:2px;
    background-color:white; 
    box-shadow: -3px 1px 5px black;
}

</style>
<body>

<?php
include 'navbar.php' ?><br>

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
<form method="post" name="tcredit" class="tabletext" ><br>
<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Personal Details -> <?php echo $row['Name'] ?>
    <hr style="hr"></h1></center> <br> <br>


<div class="tab">

<center>
<table class="table ">   
<tr>
    <th  > ID </th>
    <td ><?php echo $row['id'] ?></td>
</tr>
<tr>
    <th > Name </th>
    <td ><?php echo $row['Name'] ?></td>
</tr>
<tr>
    <th > Account No. </th>
    <td ><?php echo $row['Account_No'] ?></td>
</tr>
<tr>
    <th > Email</th>
    <td ><?php echo $row['Email'] ?></td>
</tr>
<tr>
    <th > Mobile No. </th>
    <td ><?php echo $row['Mobile_No'] ?></td>
</tr>
<tr>
    <th > Current Balance</th>
    <td ><?php echo $row['Current_Balance'] ?></td>
</tr>

                    


</table></center> 
</div> 
<br><br><br><center>
<div class="container">
<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Transfer Money <hr style="hr"></h1></center><br><br>
                <div class="form-group"><center>
        <label class="col-sm-2 control-label" style="color:#ffffff;font-weight:bold;font-size:20px;">Recepient</label></center>
        <div class="col-sm-7">
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option class="table" value="<?php echo $row['id'];?>" >
                
                <?php echo $row['Name'] ;?> (Balance: 
                <?php echo $row['Current_Balance'] ;?> ) 
           
            </option>
        <?php 
            } 
        ?>
      
        </select>
        </div>
        </div>
        <label class="col-sm-2 control-label"  style="color:#ffffff;font-weight:bold;padding-bottom:13px;font-size:20px;">Amount</label>
					<div class="col-sm-7" style=" margin-top:-15px;">
						<input type="number" name="amount1" class="form-control" placeholder="Enter the Amount" >
					</div>
                    <br><br>
  
    <button class="button" name="submit" type="submit" id="mybtn">Transfer</button></a>
  </div>
  </div> <br><br><br><br><br></center>

  <center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Sent Transactions -> <?php $send = $_GET['id']; 
    $row = mysqli_fetch_array(mysqli_query($con,"SELECT * from customers where id=$send")); $s=$row['Name']; echo $s; ?>
    <hr style="hr"></h1></center> <br> 
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
    $send = $_GET['id'];
    $sql = "SELECT * from customers where id=$send";
    $query = mysqli_query($con,$sql);
    $row1 = mysqli_fetch_array($query); 
    $s=$row1['Name'];
    $sql1 = "SELECT * from transaction where sender='$s' ORDER BY timestamp DESC";
    $query1 = mysqli_query($con,$sql1);
    $no = 1;
    while($row2 = mysqli_fetch_array($query1)){

        echo ' 
            <tr>
                <td class="text-center" >'.$no.'</td>
                <td class="text-center" >'.$row2['sender'].'</td>	
                <td class="text-center" >'.$row2['receiver'].'</td>
                <td class="text-center" >'.$row2['amount'].'</td>
                <td class="text-center" >'.$row2['timestamp'].'</td>
                </tr>' ;
                $no++;
    }

?>
</table>
</div><br><br>
<center><h1 style="color:#ffffff;text-shadow: -3px 1px 15px black;"> Received Transactions -> <?php $send = $_GET['id'];
    $row = mysqli_fetch_array(mysqli_query($con,"SELECT * from customers where id=$send")); $s=$row['Name']; echo $s; ?> 
    <hr style="hr"></h1></center> <br>
<div class="containersss">
<table class="table ">
<tr>
    <th class="text-center"  > S.No </th>
    <th class="text-center"  > Sender Name </th>
    <th class="text-center"  > Recepient Name </th>
    <th class="text-center"  > Amount transferred </th>
    <th class="text-center"  > Date and Time </th>
</tr>
<?php 
    include 'connection.php';
    $send = $_GET['id'];
    $sql = "SELECT * from customers where id=$send";
    $query = mysqli_query($con,$sql);
    $row1 = mysqli_fetch_array($query); 
    $s=$row1['Name'];
    $sql1 = "SELECT * FROM `transaction` where receiver='$s' ORDER BY timestamp DESC ;";
    $query1 = mysqli_query($con,$sql1);
    $no = 1;
    while($row2 = mysqli_fetch_array($query1)){

        echo ' 
            <tr>
                <td class="text-center"  >'.$no.'</td>
                <td class="text-center"  >'.$row2['sender'].'</td>	
                <td class="text-center" >'.$row2['receiver'].'</td>
                <td class="text-center" >'.$row2['amount'].'</td>
                <td class="text-center" >'.$row2['timestamp'].'</td>
                </tr>' ;
                $no++;
    }

?>
</table><br><br>
</div>

</body><br><br>
<?php
include 'footer.php' ?>
</html>