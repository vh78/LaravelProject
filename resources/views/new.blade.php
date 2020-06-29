@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                 <p>Hi</p>
                 <p>This is a info by all username</p>
                 @foreach ($users as $u)
    <h4>{{$u->name}}</h4>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
