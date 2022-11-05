<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    width: 100%;
    height: 99vh;
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
    width: auto;
    height: 600px;
    padding-top: 30px;
    display: flexbox;
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
.con1{
    display: flexbox;
    display: block;
}




</style>


</head>
<body>
    <div class="login">
<center>

<h2>UPLOAD MARKS </h2>
<br><br></br>
<form method="POST" action="\uploadmarksstore" class="fo">
    @csrf
    <table>
        <tr><td>
        &nbsp; &nbsp; &nbsp;&nbsp;<label class="pass">YEAR   :  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </label>   
            <select name="year" id="pass">
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
    
    </select> 
    </td><td>
    <label class="pass">SEMESTER    :     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
      
  
    <select name="semester" id="pass">
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
                <option value="4">IV</option>
                <option value="5">V</option>
                <option value="6">VI</option>
                <option value="7">VII</option>
                <option value="8">VIII</option>
    </select><br><br></td></tr>
    <tr><td>
    &nbsp; &nbsp; &nbsp;&nbsp;  <label class="user">JAVA :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </label>   
            <input type="text" placeholder=" " name="s1" class="user" required>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
           </td><td>
            <label class="pass">C     : &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </label>   
            <input type="text" placeholder="" name="s2" class="pass" required> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br><br>&nbsp; &nbsp;
           </td></tr>
           <tr><td>
           &nbsp; &nbsp; &nbsp;&nbsp;   <label class="pass"> DATA STRUCTURE   :  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </label>   
            <input type="text" placeholder="" name="s3" class="pass" required> 
            </td><td>
            <label class="pass">OPERATING SYTSEM  :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </label>   
            <input type="number" placeholder="" name="s4" class="pass" required>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br><br> &nbsp; &nbsp;  
            </td></tr>
            <tr><td>
            &nbsp; &nbsp; &nbsp;&nbsp;  <label class="pass">SOFTWARE TESTING:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </label>   
            <input type="text" placeholder=" " name="s5" class="pass" required>  
</td><td>
            <label class="pass">PYTHON : &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </label>   
            <input type="text" placeholder="" name="s6" class="pass" required> &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;   <br><br>   &nbsp; &nbsp;
    </td></tr>
        </table>
            <br><br><br>
            <input type="submit" value="ADD" class="log" ><br>
                          
    </center>   
</form>
    </div>
    

</body>
</html>
