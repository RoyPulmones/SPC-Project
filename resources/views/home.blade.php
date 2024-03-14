@extends('layouts.app')

@section('content')


<br><br>

<div class="container"><table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  @foreach($Newuserlist as $list)
  <tbody>
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td> 
      <td><a href="{{url('edit/'.$list->id) }}"  class="btn btn-success">Edit</a></td>
    </tr>
  </tbody>
  @endforeach
</table></div>

@endsection