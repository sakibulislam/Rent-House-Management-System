@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">Welocme to dashboard, Things you can do!</div>

                <div class="panel-body">
                    <a href="{{route('galleryforuser')}}" class="btn btn-primary">View Gallery</a>
                    <a href="{{route('updatehouse')}}" class="btn btn-primary">Update House </a>
                    <a href="" class="btn btn-primary">Pay Utility Bill</a>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
