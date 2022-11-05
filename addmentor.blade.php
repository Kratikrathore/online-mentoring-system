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
    height: 450px;
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
<h2>ADD MENTOR </h2>

<form method="POST" action="\mentorregister" class="fo">
    @csrf
    
           
            <label class="user">Mentor Name :   </label>   
            <input type="text" placeholder="Enter Mentor Name" name="mname" class="user" required><br>  <br>  
            <label class="pass">Password     : &nbsp; &nbsp;&nbsp;&nbsp; </label>   
            <input type="password" placeholder="Enter Password" name="password" class="pass" required> <br><br>
            <label class="pass"> EMAIL     :  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </label>   
            <input type="email" placeholder="Enter Email" name="email" class="pass" required> <br><br>   
            <label class="pass">MOBILE    :  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</label>   
            <input type="number" placeholder="Enter Mobile No." name="mphone" class="pass" required> <br><br>   
            <label class="pass">SEMESTER    :    &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
            <select name="semester" id="pass">
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
                <option value="4">IV</option>
                <option value="5">V</option>
                <option value="6">VI</option>
                <option value="7">VII</option>
                <option value="8">VIII</option>
    </select><br><br>   
            <label class="pass">YEAR   : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </label>   
            <select name="year" id="pass">
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
                
    </select> <br><br>      
            <br><input type="submit" value="ADD" class="log" ><br>
                          
    </center>   
</form>
    </div>
    

</body>
</html>
