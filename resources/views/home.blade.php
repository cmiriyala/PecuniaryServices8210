@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pecuniary Services</div>

                <div class="panel-body" align="center">
                   <h4> Pecuniary Services will help its customers in advising them by providing solutions for their financial hurdle!! </h4>
                   <h3> <a href="{{ url('/customers') }}">click here</a> to fill the customers monetary details..! </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
