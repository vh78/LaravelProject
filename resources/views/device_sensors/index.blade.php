@extends('parent')

@section('main')
@extends('layouts.app')

@section('content')
<?php $device =  App\Device::get(); ?>
<?php $sensore =  App\Sensor::get(); ?>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Device</th>
  <th width="35%">Sensors</th>
  <th width="30%">Action</th>

 </tr>
 @foreach($data as $row)
  <tr>
   
   <td>{{ $row->dev_id }}</td>
   <td>{{ $row->sens_id }}</td>

   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}


@endsection
