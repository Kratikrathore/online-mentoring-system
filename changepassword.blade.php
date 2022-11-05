<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
	background-color:gainsboro;
	color: gray;
   
}
h1{
    color: seashell;
    font-style: oblique;
  

}
h2{
    color: silver;
    font-weight: bold;
    font-size: 23px;
    padding-bottom:1px;
    padding-top: 1px;

}
.login{
    background-image: linear-gradient(indigo,violet);
    border: solid;
    border-radius: 3px;
    border-style: solid;
    border-color: black;
    width: 465px;
    height: 300px;
    padding-top: 65px;

}

.user{
    color: black;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
    
}

.pass{
    color: black;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
    
}
.log{
    
    background-image: linear-gradient(to top, blue, pink);
    color: white;
    font-weight: bold;
}





</style>


</head>
<body>
    <div class="login">
<center>

<br><br><br>

<form method="POST" action="\store">
    @csrf
    
           
            <label class="user">Current password : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            <input type="email" placeholder="Current Password" name="text" class="user" required><br>  <br>  <br>
            <label class="pass">New Password: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
   
            <input type="textarea" placeholder="New Password" name="report" class="pass" required> <br><br><br> <br>  
            <input type="submit" value="Save" class="log" ><br>
              
    </center>   
</form>
    </div>
    

</body>
</html>
