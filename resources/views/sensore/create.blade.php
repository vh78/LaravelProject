@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                    <form method="post" action="{{url('sensore')}}" enctype="multipart/form-data">

                        <div class="form-group row">
                            {{csrf_field()}}
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            {{csrf_field()}}
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">params</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="params" name="params">
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