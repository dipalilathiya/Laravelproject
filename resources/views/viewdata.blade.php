@extends('layout.header')
@section('demo')

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>DELETE</td>
        <td>EDIT</td>
    </tr>
    @foreach($data as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->password }}</td>
            <td>
                <button><a href="{{route('deleteData',$value->id)}}">DELETE</a></button>
            </td>
            <td>
                <button><a href="{{route('editData',$value->id)}}">EDIT</a></button>
            </td>
        </tr>
    @endforeach
</table>
@endsection



{{-- @extends('layout.footer') --}}