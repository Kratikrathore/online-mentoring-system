<html><body>
    
    <h1>attendace yahin dikhegi teri  75% se upar hona</h1>
<table border="1px">  
<thead> 
     
<tr>   
<td>  
Enrollment No </td>  
<td>  
Name </td>  
<td>  
Branch </td>  
<td>  
Date </td> 
<td>  
Status </td> 
<td>  
Percentage </td>
<td>  
Year </td>  
</tr>  
</thead>  
<tbody>

@foreach($crud as $crud)  
        <tr border="none">  
            <td>{{$crud->eno}}</td>  
            <td>{{$crud->name}}</td>  
            <td>{{$crud->branch}}</td>  
            <td>{{$crud->date}}</td>  
            <td>{{$crud->status}}</td> 
            <td>{{$crud->percentage}}</td> 
            <td>{{$crud->year}}</td>  
 
  
         </tr>  
@endforeach  
</tbody>  
</table>
</body></html>
