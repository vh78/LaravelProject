@extends('parent')

@section('main')
@extends('layouts.app')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>@extends('parent')

@section('main')
@extends('layouts.app')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Name</th>
  <th width="35%">Params</th>
  <th width="30%">Action</th>

 </tr>
 @foreach($data as $row)
  <tr>
   
   <td>{{ $row->name }}</td>
   <td>{{ $row->params }}</td>

   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}

@endsection

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

   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}

@endsection
