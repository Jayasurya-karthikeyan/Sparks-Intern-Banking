<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
body{
    background-color:#262d2d;
    /* background:linear-gradient(45deg,#6C89F7,#6C89F7, #6C89F7,#6CB1F7,#6CC2F7,#6CC2F7,#6CB1F7,#6C89F7,#6C89F7,#6C89F7 ); */
    height:100vh;
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
    font-size:50px ; 
    font-weight:bold;
    letter-spacing: 2px;
    text-shadow: 0px 2px 1px black;
}
.title:hover{
    font-size:51px ; 
    transition :ease-in-out;
    color:#ffff00;
    margin-bottom:-1.5px ;    
}
.button{
    color:#ffffff;
    font-size:30px;
    padding: 15px;
    font-weight:bold;
    border:6px solid #ffffff;
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
hr{
    width:40%;
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


<br><br><br><br><br><br><br><br>
<center><h1 class="title"> Welcome to The Bank of Sparks !!</h1><hr style="hr"></center><br><br><br><br>
<center><div>
<a href="customers.php" class="button">Customers</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="history.php" class="button">Tansfer History</a>  
</div></center> 
<br><br><br><br><br> 
</body>
</html>



