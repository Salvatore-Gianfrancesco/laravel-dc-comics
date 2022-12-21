@extends('layouts.app')

@section('content')
<div class="container pt-3 pb-4">
    <div class="row">
        <div class="col-3 text-center">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>

        <div class="col-9">
            <h3>{{$comic['title']}}</h3>
            <p>{{$comic['description']}}</p>
            <h5>$ {{$comic['price']}}</h5>
            <div>Series: {{$comic['series']}}</div>
            <div>Type: {{$comic['type']}}</div>
            <div>Sale date: {{$comic['sale_date']}}</div>
        </div>
    </div>
</div>
@endsection