<html><body>
    
    <h1>marks  yahin dikhegi tere</h1>
<table border="1px">  
  <tr>
    <th rowspan="2">Enrollment No</th>
    <th rowspan="2">Name</th>
    <th rowspan="2">Branch</th>
    <th rowspan="2">Semester</th>
    <th colspan="6">Marks</th>
    <th rowspan="2">Percentage</th>
  </tr>
  
    <tr>
    
    <td>JAVA</td>
    <td>C</td>
    <td>DATA STRUCTURE</td>
    <td>OPERATING SYSTEM</td>
    <td>SOFTWARE TESTING</td>
    <td>PYTHON</td></tr>

    
  
    
  
  
  

<tbody>
  
@foreach($cruds as $cruds)  
<tr border="none">  
    <td>{{$cruds->eno}}</td>  
    <td>{{$cruds->sname}}</td>  
    <td>{{$cruds->branch}}</td> 
@endforeach 
    @foreach($crud as $crud) 
    <td>{{$crud->semester}}</td>  
    <td>{{$crud->java}}</td>  
    <td>{{$crud->c}}</td>  
    <td>{{$crud->dsa}}</td> 
    <td>{{$crud->os}}</td> 
    <td>{{$crud->st}}</td>  
    <td>{{$crud->python}}</td>  
</tr>
@endforeach
 

</tbody>  
</table>

<a href="/studentmenu">Back</a>
</body>
</html>
