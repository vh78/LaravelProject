@extends('layouts.app')

@section('content')
<?php $device =  App\Device::get(); ?>
<?php $sensore =  App\Sensor::get(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                        <form method="post" action="{{url('middle')}}" enctype="multipart/form-data">

                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Device</label>
                                <div class="col-sm-10">
                                    <select name="id">
                                    @foreach($device as $device)
         <option value="{{ $device->name }}">
             {{ $device->name }}
             </option>
     @endforeach
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Sensore</label>
                                <div class="col-sm-10">
                                    <select name="id">
                                    @foreach($sensore as $sensore)
         <option value="{{ $sensore->name }}">
             {{ $sensore->name }}
             </option>
     @endforeach
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





