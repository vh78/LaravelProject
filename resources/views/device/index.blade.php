@extends('parent')

@section('main')
@extends('layouts.app')

@section('content')


<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Name</th>
  <th width="35%">Params</th>
  <th width="35%">Action</th>

 </tr>
 @foreach($data as $row)
  <tr>
   
   <td>{{ $row->name }}</td>
   <td>{{ $row->params }}</td>
  
                  

  </tr>
 @endforeach
</table>
{!! $data->links() !!}

@endsection

  