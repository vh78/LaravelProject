@extends('parent')

@section('main')
@extends('layouts.app')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">ID</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row -> id}}</td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td><a href="{{ route('crud.edit', $crud->id) }}" >Edit</a></td>
   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}

@endsection
