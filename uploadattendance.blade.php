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
    height: 485px;
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
<h1>Welcome to M&M  Project</h1>
<h2>ATTENDANCE</h2>

<form method="POST" action="\uploadattendancestore">
    @csrf
    <table>
        <tr>
            <td><label class="user">Enrollment No. : </label> </td>  
            <td><input type="text" placeholder="" name="eno" class="user" required><br>  <br>  </td></tr>
        <tr> 
            <td><label class="user">Name : </label>   </td>
            <td><input type="text" placeholder="" name="name" class="user" required><br>  <br>  </td>
    </tr>
        <tr>
            <td><label class="pass">Branch : </label>   </td>
            <td>  <input type="text" placeholder=" " name="branch" class="pass" required> <br><br></td>
      </tr> 
            <tr>
                <td>  <label class="user">Date : </label>   </td>
                <td><input type="date" placeholder="" name="date" class="user" required><br>  <br>  </td>
        </tr>
            <tr>
                 <td>   <label class="user">Status : </label>   </td>
                 <td><input type="text" placeholder="" name="status" class="user" required><br>  <br> </td>
         </tr>
            <tr> 
                 <td>     <label class="user">Percentage : </label> </td>  
                 <td>    <input type="number" placeholder="" name="percentage" class="user" required><br><br>  </td> 
        </tr>
            <tr> 
                 <td>    <label class="pass">Year   : </label>  <br><br><br><br> </td> 
            <td>   <select name="year" id="pass">
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
                
             </select> <br><br><br><br></td>
        </tr> 
            
    </table>
    <input type="submit" value="submit" class="log" >
    </center>   
</form>
    </div>
    

</body>
</html>
