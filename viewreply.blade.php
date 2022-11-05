<html><body>
    
    <h1>REPLY FROM YOUR ISSUES</h1>
<table border="1px">  
<thead> 
     
<tr>   

<td>  REPLY  </td>

</tr>  
</thead>  
<tbody>  
@foreach($cruds as $cruds)  
        <tr border="none">  
            <td>{{$cruds->replyissue}}</td>  
            
  
         </tr>  
@endforeach  
</tbody>  
</table>
</body></html>
