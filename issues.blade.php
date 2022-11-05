<html><body>
    
    <h1>ISSUES</h1>
<table border="1px">  
<thead> 
     
<tr>   
<td>  
SNO. </td>  
<td>  
PROBLEMS </td>  
<td>  REPLY  </td>

</tr>  
</thead>  
<tbody>  
@foreach($cruds as $cruds)  
        <tr border="none">  
            <td>{{$cruds->name}}</td>  
            <td>{{$cruds->issue}}</td>  
            <td><a href="/replyissues">Reply </td>
  
         </tr>  
@endforeach  
</tbody>  
</table>
</body></html>
