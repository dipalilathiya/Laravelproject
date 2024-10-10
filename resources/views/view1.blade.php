<form action="{{route('search')}}"  method="get" >
     <input type="text" name="search">
     <button type="submit">Search</button>
     <button><a href="{{route('back')}}">Back</a></button>
</form>
<table border="1">
     <tr>
     <td>Id</td>
     <td>Name</td>
     <td>Email</td>
     <td>Password</td>
     <td>Delete</td>
     <td>edit</td>
</tr>
     @foreach ($data as $value)
          <tr>
               <td>{{$value->id}}</td>
               <td>{{$value->name}}</td>
               <td>{{$value->email}}</td>
               <td>{{$value->password}}</td>
               <td>
                <button><a href="{{route('delete',$value->id)}}">DELETE</a></button>
            </td>
            <td> 
               <button><a href="{{route('edit' ,$value->id)}}">Edit</a></button>
            </td>
          </tr>         
     @endforeach
</table>